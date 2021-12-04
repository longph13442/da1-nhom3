<?php
require_once 'dao/system_dao.php';
require_once 'dao/taikhoan.php';
function dashboard_index()
{
    $sql = "SELECT count(*) FROM khachhang where khachhang.vai_tro = 0";
    $slkh = pdo_query_value($sql);
    $sql = "SELECT * FROM khachhang where khachhang.vai_tro = 0 ORDER BY khachhang.ma_tai_khoan DESC LIMIT 0,8";
    $membernew = pdo_query($sql);
    $sql = "SELECT SUM(sanpham.soluong) FROM sanpham";
    $slhh = pdo_query_value($sql);
    $sql = "SELECT * FROM khachhang WHERE khachhang.vai_tro = 1 or khachhang.vai_tro = 3 ";
    $member = pdo_query($sql);
    $sql = "SELECT count(*) FROM donhang";
    $sldh = pdo_query_value($sql);
    $sql = "SELECT * FROM donhang ORDER BY donhang.ma_don_hang DESC LIMIT 0,8";
    $dh = pdo_query($sql);
    admin_render('dashboard/index.php', compact('slkh', 'slhh', 'member', 'sldh', 'membernew', 'dh'));
}
