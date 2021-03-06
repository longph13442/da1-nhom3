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
    $title = "Danh sách slide";
    admin_render('slide/list.php', compact('sl', 'title'));
}
function slide_delete()
{
    $id = $_GET['id'];
    sl_delete($id);
    header("location: " . ROOT_URL . 'slide');
}
function slide_add()
{
    $title = "Thêm Slide";
    admin_render('slide/add.php', compact('title'));
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
        $slide = $_FILES['img']['name'];
        slide_insert($slide);
        global $PATH_IMG;
        $slide =  save_file('slide', $PATH_IMG);
        header("location: " . ROOT_URL . 'slide');
    }
}
function slide_update_form()
{
    $id = $_GET['id'];
    $info = slide_select_by_id($id);
    $title = "Cập nhật slide";
    admin_render('slide/edit.php', compact('info', 'title'));
}
function slide_save_update()
{
    if (isset($_POST['submit'])) {
        extract($_POST);
        $id = $_POST['id'];
        $info = slide_select_by_id($id);
        $img = $_FILES['img'];
        $slide = $img['name'];
        if ($img['size'] > 0) {
            global $PATH_IMG;
            $slide = save_file('img', $PATH_IMG);
        } else {
            $slide = $_POST['hinhcu'];
        }
        slide_update($slide, $id);

        header("location: " . ROOT_URL . 'slide');
    }
}
