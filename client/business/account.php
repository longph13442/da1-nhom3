<?php
require_once './dao/system_dao.php';
require_once './dao/taikhoan.php';
function register()
{

    $error = [
        'ho_ten' => '',
        'dia_chi' => '',
        'sdt' => '',
        'email' => '',
        'ngay_sinh' => '',
        'ten_dang_nhap' => '',
        'mat_khau' => '',
        'checkdk' => ''

    ];
    $ext_img = ['jpg', 'jpeg', 'png', 'svg', 'Webp'];
    if (isset($_POST['register'])) {
        extract($_POST);
        $checkemail = taikhoan_checkmail($email);
        $checktdn = taikhoan_checktdn($ten_dang_nhap);
        $checksdt = taikhoan_checksdt($sdt);
        // check email already exists

        if ($checkemail) {
            $error['email'] = "Email đã được sử dụng";
        }
        if ($checksdt) {
            $error['sdt'] = "Số điện thoại đã được sử dụng";
        }
        if ($checktdn) {
            $error['ten_dang_nhap'] = "Tên đăng nhập đã được sử dụng";
        }
        if (!array_filter($error)) {
            $mat_khau = password_hash($mat_khau, PASSWORD_DEFAULT);
            taikhoan_kh_web($ho_ten, $dia_chi, $sdt, $email,  $ngay_sinh, $ten_dang_nhap, $mat_khau, $gioitinh);
            header("location: " . ROOT_URL, '');
            die;
        }
    }

    client_Render('account/register.php', compact('error'));
}
function login()
{
    $error  = [
        'ten_dang_nhap' => '',
        'mat_khau' => '',
    ];
    if (isset($_POST['signin'])) {
        extract($_POST);
        if (isset($_POST['remember'])) {
            // set cookie
            setcookie('ten_dang_nhap', $ten_dang_nhap);
            setcookie('mat_khau', $mat_khau);
        }
        if (isset($_POST['ten_dang_nhap']) == '' || $_POST['mat_khau'] == '') {
            $error['mat_khau'] = "<span style='color:red' >Bạn vui lòng nhập tài khoản và mật khẩu</span>";
        } else {
            $login = taikhoan_login($ten_dang_nhap);
            $sql = "SELECT khachhang.trang_thai as trang_thai FROM khachhang where ten_dang_nhap = '" . $_POST['ten_dang_nhap'] . "' ";
            $trangthai = execute_query($sql, false);
            $sql = "SELECT khachhang.vai_tro as vai_tro from khachhang where  ten_dang_nhap ='" . $_POST['ten_dang_nhap'] . "'";
            $vaitro = execute_query($sql);
            if ($login) {
                // Sử dụng Vai trò để phân quyền admin và user
                if ($login['vai_tro'] == 1) {
                    $_SESSION['vai_tro'] = $login['vai_tro'];
                }
                if (password_verify($mat_khau, $login['mat_khau'])) {
                    unset($login['mat_khau']);
                    $_SESSION['ten_dang_nhap'] = $login['ten_dang_nhap'];
                    $msg = "Đăng nhập thành công";
                    header("location: " . ROOT_URL . '?msg=' . $msg);
                    die;
                } else {
                    $error['mat_khau'] = "<span style='color:red'>Mật khẩu không đúng</span>";
                }
            } else {
                if ($trangthai) {
                    $error['ten_dang_nhap'] = "<span style='color:red'>Tài Khoản Bạn đã bị khóa do vi phạm tiêu chuẩn cộng đồng của chúng tôi</span>";
                } else {
                    $error['ten_dang_nhap'] = "<span style='color:red'>Tài khoản không tồn tại </span>";
                }
            }
        }
    }
    // Sử dụng để lưu cookie làm chức năng nhớ mật khẩu và tên đăng nhập.
    $ten_dang_nhap = "";
    $mat_khau = "";
    $check = false;
    if (isset($_COOKIE['ten_dang_nhap']) && isset($_COOKIE['mat_khau'])) {
        $ten_dang_nhap = $_COOKIE['ten_dang_nhap'];
        $mat_khau =  $_COOKIE['mat_khau'];
        $check = true;
    }
    login_render('account/formlogin.php', compact('error', 'check', 'ten_dang_nhap', 'mat_khau'));
}
function profile()
{
    if (!isset($_SESSION['ten_dang_nhap'])) {
        header("location:   " . ROOT_URL);

        die();
    }
    $error = [
        'hinh_anh' => '',
        'sdt' => '',
        'email' => ''
    ];
    $ext_img = ['jpg', 'jpeg', 'png', 'svg', 'Webp'];

    if (isset($_POST['profile'])) {

        extract($_POST);
        $file = $_FILES['hinh_anh'];
        if (isset($_GET['ma_tai_khoan'])) {
            $ma_tai_khoan = $_GET['ma_tai_khoan'];
        }
        $checkemail = taikhoan_checkmail($email);
        $checksdt = taikhoan_checksdt($sdt);
        if (isset($hinh_anh) > 0) {
            global $PATH_IMG;
            $hinh_anh = save_file('hinh_anh', $PATH_IMG);
        } else {
            $hinh_anh = $_POST['anhcu'];
        }
        if ($checkemail) {
            $error['email'] = "<span class = 'text-danger'>Email đã được sử dụng </span>";
        }
        if ($checksdt) {
            $error['sdt'] = "<span class= 'text-danger'>Số điện thoại đã được sử dụng</span>";
        }
        if ($file['size'] > 0 && $file['size'] < 500000) {
            $hinh_anh = $file['name'];
            $ext = pathinfo($hinh_anh, PATHINFO_EXTENSION);
            if (!in_array($ext, $ext_img)) {
                $error['hinh_anh'] = "Bạn vui lòng nhập file ảnh và nhỏ hơn 5Mb";
            }
        }

        if (!array_filter($error)) {

            taikhoan_update_web($ho_ten, $sdt, $email, $ngay_sinh,  $hinh_anh, $ma_tai_khoan);
        }
    }

    $sql = "SELECT * FROM khachhang where ten_dang_nhap = '" . $_SESSION['ten_dang_nhap'] . "'";
    $khachhang = execute_query($sql);
    $ma_tai_khoan = $khachhang['ma_tai_khoan'];
    if ($khachhang['trang_thai'] == 1) {
        session_destroy();
        header("location: " . ROOT_URL);
        die;
    }

    info_render('account/profile.php', compact('khachhang', 'error'));
    info_render('layouts/nav_info.php', compact('khachhang', 'error'));
}
function account_reset()
{
    if (!isset($_SESSION['ten_dang_nhap'])) {
        header("location:   " . ROOT_URL);
        die();
    }
    $error = [
        'mat_khau_cu' => '',
        'new_mat_khau' => '',
        'new_mat_khau_2' => '',
    ];
    if (isset($_POST['resetpass'])) {
        extract($_POST);
        if (isset($_GET['ma_tai_khoan'])) {
            $ma_tai_khoan = $_GET['ma_tai_khoan'];
        }
        if (isset($_GET['mat_khau'])) {
            $mat_khau = $_GET['mat_khau'];
        }
        if (!password_verify($mat_khau_cu, $mat_khau)) {
            $error['mat_khau_cu']  = "Sai Mật Khẩu";
        }
        if (!array_filter($error)) {
            $new_mat_khau = password_hash($new_mat_khau, PASSWORD_DEFAULT);
            taikhoan_reset_password($new_mat_khau, $ma_tai_khoan);
            // $msg = "Thay đổi mật khẩu thành công";
            header("location: " . Account . "reset");
            die;
        }
    }
    $sql = "SELECT * FROM khachhang where ten_dang_nhap = '" . $_SESSION['ten_dang_nhap'] . "'";
    $khachhang = execute_query($sql);
    $ma_tai_khoan = $khachhang['ma_tai_khoan'];
    if ($khachhang['trang_thai'] == 1) {
        session_destroy();
        header("location: " . ROOT_URL);
        die;
    }
    info_render('account/resetpass.php', compact('khachhang', 'error'));
    info_render('layout/nav_info.php', compact('khachhang', 'error'));
}
function send_email()
{

    client_Render('account/get_password.php');
}
function forgot()
{
    client_Render('account/change_pw.php');
}
function logout()
{
    session_destroy();
    header("location: " . ROOT_URL);
    die;
}
