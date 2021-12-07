<?php
require_once 'dao/system_dao.php';
function blog_list()
{
    $sql = "SELECT * FROM blog ";
    $bl = pdo_query($sql);
    admin_render('blog/list.php', compact('bl'));
}
function blog_select_by_id($ma_blog)
{
    $sql = "SELECT * FROM blog WHERE ma_blog =?";
    return pdo_query_one($sql, $ma_blog);
}
function blog_add_form()
{

    admin_render('blog/add.php');
}
function blog_save_add()
{
    $sql = "INSERT INTO blog (tieu_de,noi_dung,anh_minh_hoa) VALUES (?)";
}
function blog_update_form()
{
    $ma_blog = $_GET["ma_blog"];
    $sql = "SELECT * FROM blog WHERE ma_blog = '$ma_blog' ";
    $info = pdo_query_one($sql);
    admin_render('blog/update.php', compact('info'));
}
function blog_save_update()
{
    $ma_blog = $_POST['ma_blog'];
    $tieu_de = $_POST['tieu_de'];
    $noi_dung = $_POST['noi_dung'];
    $info = blog_select_by_id($ma_blog);
    $file = $_FILES['anh_minh_hoa'];
    $anh_minh_hoa = empty($file['name']) ? $info['anh_minh_hoa'] : $file['name'];
    $sql = "UPDATE blog SET tieu_de = '$tieu_de',noi_dung='$noi_dung',anh_minh_hoa='$anh_minh_hoa' WHERE ma_blog = '$ma_blog'";
    pdo_execute($sql);
    header("location: " . ROOT_URL . 'admin-blog');
}
function blog_delete()
{
    $ma_blog = $_GET['ma_blog'];
    $sql = "DELETE FROM blog WHERE ma_blog = '$ma_blog'";
    pdo_execute($sql);
    header("location: " . ROOT_URL . 'admin-blog');
}
