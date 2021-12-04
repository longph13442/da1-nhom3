<?php
require_once 'dao/system_dao.php';
function slide_select_by_id($id)
{
    $sql = "SELECT * FROM slide WHERE id = ?";
    return pdo_query_one($sql, $id);
}
function sl_delete($id)
{
    $sql = " DELETE FROM slide WHERE id=?";
    if (is_array($id)) {
        foreach ($id as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $id);
    }
}
function slide_update($img, $id)
{
    $sql = "UPDATE slide SET img=? where id = ?";
    return pdo_execute($sql, $img, $id);
}
function slide_list()
{
    $sql = "SELECT * FROM slide";
    $sl = pdo_query($sql);
    admin_render('slide/list.php', compact('sl'));
}
function slide_delete()
{
    $id = $_GET['id'];
    sl_delete($id);
    header("location: " . ROOT_URL . 'slide');
}
function slide_add()
{
    admin_render('slide/add.php');
}
function slide_insert($img)
{
    $sql = "INSERT INTO slide (img) VALUES (?)";
    pdo_execute($sql, $img);
}
function slide_save_add()
{
    if (isset($_POST['submit'])) {
        extract($_POST);
        $slide = $_FILES['slide']['name'];
        slide_insert($slide);
        header("location: " . ROOT_URL . 'slide');
    }
}
function slide_update_form()
{
    $id = $_GET['id'];
    $info = slide_select_by_id($id);
    admin_render('slide/edit.php', compact('info'));
}
function slide_save_update()
{
    if (isset($_POST['submit'])) {
        extract($_POST);
        $id = $_POST['id'];
        $info = slide_select_by_id($id);
        $img = empty($_FILES['img']['name']) ? $info['img'] : $_FILES['img']['name'];;
        slide_update($img, $id);


        header("location: " . ROOT_URL . 'slide');
    }
}
