<?php

require_once './dao/dathang.php';

function dat_hang_tt()
{
    if (!isset($_SESSION['dathang'])) {
        $_SESSION['dathang'] = [];
    }
    if (isset($_POST['addcart'])) {
        $hinh = $_POST['hinhanh'];
        $tensp = $_POST['tensp'];
        $gia = $_POST['giatien'];
        $soluong = $_POST['soluong'];
        $masp = $_POST['masp'];

        $ngay_tao = date("h:i:sa d/m/Y");
        $ma_tai_khoan = khachhang_select_id($_SESSION['ten_dang_nhap']);
        $taikhoan = $ma_tai_khoan['ma_tai_khoan'];

        $dathang = dathang($masp, $taikhoan, $soluong, $ngay_tao, $tensp, $hinh, $gia);
    }
    $hienthi = hienthi_sp($_SESSION['ten_dang_nhap']);

    client_render('cart/index.php', compact('hienthi'));


}
function xoa_gio_hang()
{
    if (isset($_GET['ma_don_hang']) && ($_GET['ma_don_hang'] > 0)) {

        xoa_gh();
    }
    $hienthi = hienthi_sp($_SESSION['ten_dang_nhap']);
    client_render('cart/index.php', compact('hienthi'));



}
?>