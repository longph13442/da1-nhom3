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
    $sql = "SELECT count(*) FROM hoadon";
    $sldh = pdo_query_value($sql);
    $sql = "SELECT * FROM hoadon_chitiet,hoadon,sanpham WHERE hoadon_chitiet.id = hoadon.id
     and sanpham.ma_sp = hoadon_chitiet.product_id ORDER BY hoadon.id DESC LIMIT 0,8";
    $dh = pdo_query($sql);
    admin_render('dashboard/index.php', compact('slkh', 'slhh', 'member', 'sldh', 'membernew', 'dh'));
}
