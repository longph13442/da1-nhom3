<?php
function taikhoan_insert($ho_ten, $dia_chi, $sdt, $email, $ngay_sinh, $hinh_anh, $ten_dang_nhap, $gioitinh, $mat_khau, $trang_thai, $vai_tro)
{
    $sql = "INSERT INTO khachhang SET ho_ten= ?, dia_chi=?,sdt=?, email=?,ngay_sinh=?,hinh_anh=?,ten_dang_nhap=?,gioitinh=?,mat_khau=?,trang_thai= ?,vai_tro= ?";
    pdo_execute($sql, $ho_ten, $dia_chi, $sdt, $email, $ngay_sinh, $hinh_anh, $ten_dang_nhap, $gioitinh, $mat_khau, $trang_thai, $vai_tro);
}
function taikhoan_kh_web($ho_ten, $dia_chi, $sdt, $email,  $ngay_sinh, $ten_dang_nhap, $mat_khau, $gioitinh)
{
    $sql = "INSERT INTO khachhang SET ho_ten=?,dia_chi=?,sdt=? ,email=?,ngay_sinh=?,ten_dang_nhap=?,mat_khau=?, gioitinh =?";

    pdo_execute($sql, $ho_ten, $dia_chi, $sdt, $email,  $ngay_sinh, $ten_dang_nhap, $mat_khau, $gioitinh);
}
function taikhoan_update($ho_ten, $dia_chi, $sdt, $email, $ngay_sinh, $hinh_anh, $ten_dang_nhap, $gioitinh,  $trang_thai, $vai_tro, $ma_tai_khoan)
{
    $sql = "UPDATE khachhang SET ho_ten= ?, dia_chi=?,sdt=?, email=?,ngay_sinh=?,hinh_anh=?,ten_dang_nhap=?,gioitinh=?,trang_thai=?,vai_tro= ? WHERE ma_tai_khoan = ?";
    pdo_execute($sql, $ho_ten, $dia_chi, $sdt, $email, $ngay_sinh, $hinh_anh, $ten_dang_nhap, $gioitinh,  $trang_thai, $vai_tro, $ma_tai_khoan);
}
function taikhoan_update_web($ho_ten, $sdt, $email, $ngay_sinh,  $hinh_anh,  $ma_tai_khoan)
{
    $sql = "UPDATE khachhang SET ho_ten= ?,sdt=?, email=?,ngay_sinh=?,hinh_anh=? WHERE ma_tai_khoan = ?";
    pdo_execute($sql, $ho_ten, $sdt, $email, $ngay_sinh,  $hinh_anh,  $ma_tai_khoan);
}
function taikhoan_delete($ma_tai_khoan)
{
    $sql = "DELETE FROM khachhang where ma_tai_khoan = ?";
    return pdo_query_one($sql, $ma_tai_khoan);
}
function taikhoan_sellectAll($keyw, $offset, $pagesize)
{
    $sql = "SELECT * FROM khachhang where ho_ten like ? or  sdt like ? ORDER BY khachhang.ma_tai_khoan DESC LIMIT $offset,$pagesize";
    return pdo_query($sql, '%' . $keyw . '%', '%' . $keyw . '%');
}
function taikhoan_selectbyid($ma_tai_khoan)
{
    $sql = "SELECT * FROM khachhang where ma_tai_khoan = ?";
    return pdo_query_one($sql, $ma_tai_khoan);
}
function taikhoan_selectbyaccount($ten_dang_nhap)
{
    $sql = "SELECT * FROM khachhang where ten_dang_nhap = ?";
    return pdo_query_one($sql, $ten_dang_nhap);
}
// Đăng Nhập phần khách hàng và admin
function taikhoan_login($ten_dang_nhap)
{
    $sql = "SELECT * FROM khachhang where trang_thai = 0 and ten_dang_nhap= ?";
    return pdo_query_one($sql, $ten_dang_nhap);
}

function taikhoan_matk($ma_tai_khoan)
{
    $sql = "SELECT * FROM khachhang where ma_tai_khoan = ?";
    return pdo_query($sql, $ma_tai_khoan);
}
function taikhoan_reset_password($new_mat_khau, $ma_tai_khoan)
{
    $sql = "UPDATE khachhang SET mat_khau = ? WHERE ma_tai_khoan = ?";
    pdo_execute($sql, $new_mat_khau, $ma_tai_khoan);
}
// Check Tồn Tại
function taikhoan_checkmail($email)
{
    $sql = "SELECT kh.email FROM khachhang kh where email =?";
    return pdo_query($sql, $email);
}
function taikhoan_checksdt($sdt)
{
    $sql = "SELECT kh.sdt FROM khachhang kh where sdt =?";
    return pdo_query($sql, $sdt);
}
function taikhoan_checktdn($ten_dang_nhap)
{
    $sql = "SELECT kh.ten_dang_nhap FROM khachhang kh where ten_dang_nhap =?";
    return pdo_query($sql, $ten_dang_nhap);
}
function taikhoan_lock($ma_tai_khoan)
{
    $sql = "UPDATE khachhang set trang_thai = 1 where ma_tai_khoan = ?";
    pdo_execute($sql, $ma_tai_khoan);
}
function taikhoan_unlock($ma_tai_khoan)
{
    $sql = "UPDATE khachhang set trang_thai = 0 where ma_tai_khoan = ?";
    pdo_execute($sql, $ma_tai_khoan);
}
