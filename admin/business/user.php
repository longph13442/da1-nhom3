<?php
require_once 'dao/system_dao.php';
require_once 'dao/taikhoan.php';

if (!isset($_SESSION['nhanvien']) == 3 && !isset($_SESSION['admin']) == 1) {
    header("location: " . ROOT_URL);
    die;
}
function user_list()
{
    if (!isset($_GET['pg'])) {
        $pg = 1;
    } else {
        $pg = $_GET['pg'];
    }
    $keyw = isset($_GET['keyw']) ? $_GET['keyw'] : "";
    $pagesize = 10;
    $result  = (int)pdo_query_value("SELECT count(*) FROM khachhang");
    $tongpage = ceil($result / $pagesize);
    $offset = ($pg - 1) * $pagesize;
    $user = taikhoan_sellectAll($keyw, $offset, $pagesize);
    $title = "Danh sách tài khoản";
    admin_render('User/listuser.php', compact('title', 'user', 'tongpage', 'keyw'));
}
function adduser()
{
    $error = [
        'email' => '',
        'sdt' => '',
        'ten_dang_nhap' => '',
        'hinh_anh' => ''
    ];
    if (isset($_POST['adduser'])) {
        extract($_POST);
        require "checkuser.php";
        $file = $_FILES['hinh_anh'];
        $checkemail = taikhoan_checkmail($email);
        $checktdn = taikhoan_checktdn($ten_dang_nhap);
        $checksdt = taikhoan_checksdt($sdt);
        if ($checkemail) {
            $error['email'] = "Email đã được sử dụng";
        }
        if ($checksdt) {
            $error['sdt'] = "Số điện thoại đã được sử dụng";
        }
        if ($checktdn) {
            $error['ten_dang_nhap'] = "Tên đăng nhập đã được sử dụng";
        }
        if ($file['size'] > 0 && $file['size'] < 500000) {
            $hinh_anh = $file['name'];
            $ext = pathinfo($hinh_anh, PATHINFO_EXTENSION);
            if (!in_array($ext, $ext_img)) {
                $error['hinh_anh'] = "Bạn vui lòng nhập file ảnh và nhỏ hơn 5Mb";
            }
        }

        if (!array_filter($error)) {
            if ($hinh_anh = '') {
                global $PATH_IMG;
                $hinh_anh = save_file('hinh_anh', $PATH_IMG);
            }
            $mat_khau = password_hash($mat_khau, PASSWORD_DEFAULT);
            taikhoan_insert($ho_ten, $dia_chi, $sdt, $email, $ngay_sinh, $hinh_anh, $ten_dang_nhap, $gioitinh, $mat_khau, $trang_thai, $vai_tro);
            $msg = "Thêm tài khoản thành công !";
            header("location: " . ADMIN_URL . "user" . "?msg=" . $msg);
            die;
        }
    }
    $title = "Thêm tài khoản";

    admin_render('User/adduser.php', compact('title', 'error'));
}
function user_edit()
{
    if (!isset($_SESSION['admin']) == 1) {
        header("location: " . ADMIN_URL . 'user');
        die;
    }
    $error = [
        'email' => '',
        'sdt' => '',
        'ten_dang_nhap' => '',
        'hinh_anh' => ''
    ];
    if (isset($_POST['edit'])) {
        extract($_REQUEST);
        $file = $_FILES['hinh_anh'];
        require "checkuser.php";
        if ($file['size'] > 0 && $file['size'] < 500000) {
            $hinh_anh = $file['name'];
            $ext = pathinfo($hinh_anh, PATHINFO_EXTENSION);
            if (!in_array($ext, $ext_img)) {
                $error['hinh_anh'] = "Bạn vui lòng nhập file ảnh và nhỏ hơn 5Mb";
            }
        }
        $ma_tai_khoan = $_GET['ma_tai_khoan'];

        $checkemail = taikhoan_checkmail($email);
        $checktdn = taikhoan_checktdn($ten_dang_nhap);
        $checksdt = taikhoan_checksdt($sdt);
        if ($checkemail == $email) {
            $error['email'] = "Email đã được sử dụng";
        }
        if ($checksdt == $sdt) {
            $error['sdt'] = "Số điện thoại đã được sử dụng";
        }
        if ($checktdn == $ten_dang_nhap) {
            $error['ten_dang_nhap'] = "Tên đăng nhập đã được sử dụng";
        }
        if (!array_filter($error)) {
            global $PATH_IMG;
            if (isset($hinh_anh) > 0) {
                $hinh_anh = save_file('hinh_anh', $PATH_IMG);
            } else {
                $hinh_anh = $_POST['thumhinh'];
            }
            taikhoan_update($ho_ten, $dia_chi, $sdt, $email, $ngay_sinh, $hinh_anh, $ten_dang_nhap, $gioitinh,  $trang_thai, $vai_tro, $ma_tai_khoan);
            $msg = "Sửa tài khoản thành công !";
            header("location: " . ADMIN_URL . "user" . "?msg=" . $msg);
            die;
        }
    }
    if (isset($_GET['ma_tai_khoan'])) {
        $ma_tai_khoan = $_GET['ma_tai_khoan'];
    }
    $title = "Cập nhật tài khoản";

    $user = taikhoan_selectbyid($ma_tai_khoan);
    admin_render('User/edituser.php', compact('title', 'user', 'error'));
}

function user_delete()
{
    if (!isset($_SESSION['admin']) == 1) {
        header("location: " . ROOT_URL . 'cpadmin/user');
        die;
    }
    if (isset($_GET['ma_tai_khoan'])) {
        taikhoan_delete($_GET['ma_tai_khoan']);
        header("location: " . ROOT_URL  . "cpadmin/user");
        die;
    }
    admin_render('User/listuser.php');
}
function user_lock()
{
    // if (!isset($_SESSION['admin']) == 1) {
    //     header("location: " . ROOT_URL . 'admin/user');
    //     die;
    // }
    if (isset($_GET['ma_tai_khoan'])) {
        taikhoan_lock($_GET['ma_tai_khoan']);
        header("location: " . ADMIN_URL  . "user");
        die;
    }
    admin_render('User/listuser.php');
}
function user_unlock()
{
    if (isset($_GET['ma_tai_khoan'])) {
        taikhoan_unlock($_GET['ma_tai_khoan']);
        header("location: " . ADMIN_URL  . "user");
        die;
    }
    admin_render('User/listuser.php');
}
function user_logout()
{
    session_destroy();
    unset($_SESSION['nhanvien']);
    unset($_SESSION['admin']);
    header("location: " . ROOT_URL);
    die;
}
