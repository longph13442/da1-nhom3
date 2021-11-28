<?php
require_once 'dao/system_dao.php';
function category_search(){
    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
    $sql = "select * from loaihang where ten_loai like '%$keyword%'";
    $cate = pdo_query($sql);
    admin_render('category/list.php', compact('cate','keyword'));
}
function category_check($ten_loai)
{
    $sql = "SELECT * FROM loaihang where ten_loai = ?";
    return pdo_query($sql, $ten_loai);
}
function loaihang_select_by_id($ma_loai)
{
    $sql = "SELECT * FROM loaihang WHERE ma_loai=?";
    return pdo_query_one($sql, $ma_loai);
}
function loaihang_update($ma_loai, $ten_loai)
{
    $sql = "UPDATE loaihang SET ten_loai=? WHERE ma_loai=?";
    pdo_execute($sql, $ten_loai, $ma_loai);
}
function loaihang_delete($ma_loai)
{
    $sql = "DELETE FROM loaihang WHERE ma_loai=?";
    if (is_array($ma_loai)) {
        foreach ($ma_loai as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_loai);
    }
    
}
function category_list()
{
    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
    $sql = "select * from loaihang where ten_loai like '%$keyword%'";
    $cate = pdo_query($sql);
    admin_render('category/list.php', compact('cate','keyword'));

    // $sql = "SELECT * FROM loaihang ";
    // $cate = pdo_query($sql);
    // admin_render('category/list.php', compact('cate'));
}
function category_add_form()
{
    admin_render('category/add.php');
}
function category_save_add()
{

    if (isset($_POST['submit'])) {
        extract($_POST);
        $check = category_check($ten_loai);
        if ($check) {
            $error = "Loại hàng đã tồn tại";
            admin_render('category/add.php', compact('error'));
        } else {
            $ten_loai = $_POST['ten_loai'];
            $sql = "INSERT INTO loaihang(ten_loai) VALUES('$ten_loai')";
            pdo_execute($sql);
            header("location: " . ROOT_URL . 'category');
        }
    }
}
function category_delete()
{
    $ma_loai = $_GET['ma_loai'];
    loaihang_delete($ma_loai);
    header("location: " . ROOT_URL . 'category');
}
function category_edit_form()
{   
    $ma_loai = $_GET['ma_loai'];
    $info = loaihang_select_by_id($ma_loai);
    
    admin_render('category/edit.php',compact('info'));
}
function category_save_edit()
{
    if (isset($_POST['submit'])) {
        extract($_POST);
        $check = category_check($ten_loai);
        if ($check) {
            $error = "Loại hàng đã tồn tại";
            admin_render('category/edit.php', compact('error'));
        } else {
            $ten_loai = $_POST['ten_loai'];
            $ma_loai = $_GET['ma_loai'];
            loaihang_update($ma_loai, $ten_loai);
            header("location: " . ROOT_URL . 'category');
        }
    }
}
