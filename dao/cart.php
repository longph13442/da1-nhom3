<?php
function cart_list($ten_dang_nhap, $offset, $pagesize)
{
    $sql = "SELECT * FROM hoadon,hoadon_chitiet,khachhang,sanpham WHERE 
    hoadon.id = hoadon_chitiet.id and khachhang.sdt = hoadon.phone and sanpham.ma_sp =
     hoadon_chitiet.product_id and khachhang.ten_dang_nhap = ? ORDER BY hoadon.id DESC LIMIT $offset,$pagesize";
    return pdo_query($sql, $ten_dang_nhap);
}
function cart_lists($ten_dang_nhap)
{
    $sql = "SELECT hoadon.id, hoadon.date,hoadon.status
     FROM hoadon,hoadon_chitiet,khachhang WHERE hoadon.phone = khachhang.sdt
      and hoadon.id = hoadon_chitiet.id and hoadon.phone = 0338898903 
      and khachhang.ten_dang_nhap = ? 
      GROUP BY hoadon.id,hoadon.date,hoadon.status ORDER BY hoadon.id DESC  ";
    return pdo_query($sql, $ten_dang_nhap);
}
function cart_list2($ten_dang_nhap)
{
    $sql = "SELECT *,hoadon.id as id_hoadon FROM hoadon,hoadon_chitiet,khachhang,sanpham WHERE 
    hoadon.id = hoadon_chitiet.id and khachhang.sdt = hoadon.phone and sanpham.ma_sp =
     hoadon_chitiet.product_id and khachhang.ten_dang_nhap = ? ";
    return pdo_query($sql, $ten_dang_nhap);
}
function cart_dts($id)
{
    $sql = "SELECT * FROM hoadon,hoadon_chitiet,khachhang,sanpham WHERE 
    hoadon.id = hoadon_chitiet.id and khachhang.sdt = hoadon.phone and sanpham.ma_sp =
     hoadon_chitiet.product_id and hoadon.id = ?";
    return pdo_query_one($sql, $id);
}
function cart_dts2($id)
{
    $sql = "SELECT * FROM hoadon,hoadon_chitiet,sanpham WHERE sanpham.ma_sp 
    = hoadon_chitiet.product_id and hoadon.id = hoadon_chitiet.id and hoadon.id=?";
    return pdo_query($sql, $id);
}
