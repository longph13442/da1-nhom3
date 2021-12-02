<?php
function cart_list($ten_dang_nhap, $offset, $pagesize)
{
    $sql = "SELECT *,donhang.ngay_tao as ngay_tao FROM hoadon,donhang,sanpham,khachhang
     WHERE hoadon.id_donhang = donhang.ma_don_hang 
     and hoadon.id_sanpham = sanpham.ma_sp and hoadon.id_khachhang = khachhang.ma_tai_khoan and khachhang.ten_dang_nhap = ? ORDER BY hoadon.id_hoadon DESC LIMIT $offset,$pagesize";
    return pdo_query($sql, $ten_dang_nhap);
}
function cart_dts($id_hoadon)
{
    $sql = "SELECT *, donhang.so_luong as soluong  FROM hoadon,donhang,sanpham,khachhang
     where hoadon.id_donhang = donhang.ma_don_hang 
     and hoadon.id_khachhang = khachhang.ma_tai_khoan
    and hoadon.id_khachhang = khachhang.ma_tai_khoan and hoadon.id_sanpham = sanpham.ma_sp 
     and hoadon.id_hoadon = ? ";
    return pdo_query_one($sql, $id_hoadon);
}
