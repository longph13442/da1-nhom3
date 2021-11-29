<?php

require_once './dao/system_dao.php';
function dathang($masp, $ma_tai_khoan, $soluong, $ngay_tao, $tensp, $hinh, $gia)
{
        $sql = "insert into donhang(ma_sp,ma_tai_khoan,so_luong,ngay_tao,ten_sp,anh_sp,giatien) values(?,?,?,?,?,?,?)";
        pdo_execute($sql, $masp, $ma_tai_khoan, $soluong, $ngay_tao, $tensp, $hinh, $gia);
}
function khachhang_select_id($ten_dang_nhap)
{
        $sql = "select khachhang.ma_tai_khoan from khachhang where ten_dang_nhap =?";
        return pdo_query_one($sql, $ten_dang_nhap);

}
function hienthi_sp($ten_dang_nhap)
{
        $sql = "SELECT * FROM donhang,sanpham,khachhang WHERE donhang.ma_sp = sanpham.ma_sp 
        and donhang.ma_tai_khoan = khachhang.ma_tai_khoan and khachhang.ten_dang_nhap = ? ORDER BY donhang.ma_don_hang DESC";
        return pdo_query($sql, $ten_dang_nhap);
}
function xoa_gh()
{

        $sql = "delete from donhang where ma_don_hang=" . $_GET['ma_don_hang'];
        pdo_execute($sql);
}



?>