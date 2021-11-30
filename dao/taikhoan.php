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
function taikhoan_update_web($ho_ten, $sdt, $email, $ngay_sinh,   $ma_tai_khoan)
{
    $sql = "UPDATE khachhang SET ho_ten= ?,sdt=?, email=?,ngay_sinh=? WHERE ma_tai_khoan = ?";
    pdo_execute($sql, $ho_ten, $sdt, $email, $ngay_sinh,   $ma_tai_khoan);
}
function taikhoan_update_web_img($hinh_anh,  $ma_tai_khoan)
{
    $sql = "UPDATE khachhang SET hinh_anh=? WHERE ma_tai_khoan = ?";
    pdo_execute($sql, $hinh_anh,  $ma_tai_khoan);
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
function taikhoan_reset_passcode($newpass, $email)
{
    $sql = "UPDATE khachhang SET mat_khau = ? WHERE email = ?";
    pdo_execute($sql, $newpass, $email);
}
// Check Tồn Tại
function taikhoan_checkmail($email)
{
    $sql = "SELECT khachhang.email FROM khachhang where email =?";
    return pdo_query($sql, $email);
}
function taikhoan_checksdt($sdt)
{
    $sql = "SELECT khachhang.sdt FROM khachhang where sdt =?";
    return pdo_query($sql, $sdt);
}
function taikhoan_checktdn($ten_dang_nhap)
{
    $sql = "SELECT khachhang.ten_dang_nhap FROM khachhang where ten_dang_nhap =?";
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
function taikhoan_upaddress($dia_chi, $ma_tai_khoan)
{
    $sql = "UPDATE khachhang set dia_chi = ? where ma_tai_khoan = ?";
    pdo_execute($sql, $dia_chi, $ma_tai_khoan);
}
function taikhoan_forgot($email, $code, $expire_time)
{
    $sql = "INSERT INTO forgot_pass(email,code,expire_time) VALUES(?,?,?)";
    pdo_execute($sql, $email, $code, $expire_time);
}
function taikhoan_checkcode($email)
{
    $sql = "SELECT * FROM forgot_pass where email = ?";
    return pdo_query_one($sql, $email);
}
function taikhoan_checkmk($email)
{
    $sql = "SELECT * FROM khachhang where email = ?";
    return pdo_query_one($sql, $email);
}
