<?php
require_once 'dao/system_dao.php';
require_once 'dao/taikhoan.php';
if (!isset($_SESSION['vai_tro'])) {
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
    admin_render('User/listuser.php', compact('user', 'tongpage', 'keyw'));
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
            header("location: " . ROOT_URL  . "admin/user" . "?msg=" . $msg);
            die;
        }
    }
    admin_render('User/adduser.php', compact('error'));
}
function user_edit()
{
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
            header("location: " . ROOT_URL  . "admin/user");
            die;
        }
    }
    if (isset($_GET['ma_tai_khoan'])) {
        $ma_tai_khoan = $_GET['ma_tai_khoan'];
    }

    $user = taikhoan_selectbyid($ma_tai_khoan);
    admin_render('User/edituser.php', compact('user', 'error'));
}

function user_delete()
{
    if (isset($_GET['ma_tai_khoan'])) {
        taikhoan_delete($_GET['ma_tai_khoan']);
        header("location: " . ROOT_URL  . "admin/user");
        die;
    }
    admin_render('User/listuser.php');
}
function user_lock()
{
    if (isset($_GET['ma_tai_khoan'])) {
        taikhoan_lock($_GET['ma_tai_khoan']);
        header("location: " . ROOT_URL  . "admin/user");
        die;
    }
    admin_render('User/listuser.php');
}
function user_unlock()
{
    if (isset($_GET['ma_tai_khoan'])) {
        taikhoan_unlock($_GET['ma_tai_khoan']);
        header("location: " . ROOT_URL  . "admin/user");
        die;
    }
    admin_render('User/listuser.php');
}
function user_logout()
{
    session_unset();
    header("location: " . ROOT_URL);
    die;
}
