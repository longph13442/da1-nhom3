<?php
require_once './dao/produc.php';
require_once './dao/comments.php';
function san_pham_chi_tiet()
{
    if (isset($_GET['ma_sp']) && ($_GET['ma_sp'] > 0)) {
        $ma_sp = $_GET['ma_sp'];
        $info = san_pham_select_by_id($ma_sp);
        extract($info);
        $info2 = san_pham_select_by_loai_chitiet($ma_loai, $_GET['ma_sp']);
        $info3 = binh_luan_load($ma_sp);
        client_Render('product_details/index.php', compact('info', 'info2','info3'));
    }
}
function bl_deleted(){
    $ma_bl=$_GET['ma_bl'];
    binh_luan_delete($ma_bl);
    header("location: " . $_SERVER['HTTP_REFERER']);
}
function bl_insert(){
    $ma_sp = $_REQUEST['ma_sp'];
    if (isset($_POST['gui_bl']) && ($_POST['gui_bl'])) {
    $ma_sp = $_POST['ma_sp'];
    $noi_dung = $_POST['noi_dung'];
    $ma_tai_khoan = $_SESSION['check']['ma_tai_khoan'];
    $ngay_tao = date("h:i d/m/y");
    $danh_gia = $_POST['danh_gia'];
    binh_luan_insert($ma_sp, $ma_tai_khoan, $noi_dung, $ngay_tao,$danh_gia);
    header("location: " . $_SERVER['HTTP_REFERER']);
    }
}

?>