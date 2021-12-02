<?php
require_once './dao/system_dao.php';
require_once './dao/taikhoan.php';
require_once "./dao/cart.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

ob_start();
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
                    $_SESSION['admin'] = $login['vai_tro'];
                } elseif ($login['vai_tro'] == 3) {
                    $_SESSION['nhanvien'] = $login['vai_tro'];
                }
                if (password_verify($mat_khau, $login['mat_khau'])) {
                    unset($login['mat_khau']);
                    $_SESSION['ten_dang_nhap'] = $login['ten_dang_nhap'];
                    $msg = "Đăng nhập thành công";
                    header("location: " . ROOT_URL  . '?msg=' . $msg);
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
        'sdt' => '',
        'email' => ''
    ];
    $errorimg = [
        'hinh_anh' => ''
    ];
    $ext_img = ['jpg', 'jpeg', 'png', 'svg', 'Webp'];

    if (isset($_POST['profile'])) {

        extract($_POST);
        $file = $_FILES['hinh_anh'];
        if (isset($_GET['ma_tai_khoan'])) {
            $ma_tai_khoan = $_GET['ma_tai_khoan'];
        }
        if ($file['size'] > 0 && $file['size'] < 500000) {
            $hinh_anh = $file['name'];
            $ext = pathinfo($hinh_anh, PATHINFO_EXTENSION);
            if (!in_array($ext, $ext_img)) {
                $errorimg['hinh_anh'] = "Bạn vui lòng nhập file ảnh và nhỏ hơn 5Mb";
            }
        }
        $checkemail = taikhoan_checkmail($email);
        $checksdt = taikhoan_checksdt($sdt);
        if ($checkemail) {
            $error['email'] = "<span class = 'text-danger'>Email đã được sử dụng </span>";
        }
        if ($checksdt) {
            $error['sdt'] = "<span class= 'text-danger'>Số điện thoại đã được sử dụng</span>";
        }

        if (!array_filter($error)) {
            taikhoan_update_web($ho_ten, $sdt, $email, $ngay_sinh,  isset($hinh_anh), $ma_tai_khoan);
        }
        if (!array_filter($errorimg)) {
            if ($file['size'] > 0) {
                global $PATH_IMG;
                $hinh_anh = save_file('hinh_anh', $PATH_IMG);
            } else {
                $hinh_anh = $_POST['anhcu'];
            }
            taikhoan_update_web_img($hinh_anh, $ma_tai_khoan);
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
            $msg = "Thay đổi mật khẩu thành công";
            header("location: " . Account . "reset?msg=" . $msg);
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
}

function send_email()
{
    $error = [
        'email' => ''
    ];
    $kt = '';
    if (isset($_POST['submail'])) {
        $receiver = $_POST['receiver'];
        $checkemail = taikhoan_checkmail($receiver);
        if (!$checkemail > 0) {
            $error['email'] = "<span class='text-danger'>Email của bạn không có trên hệ thống của chúng tôi</span>";
        }
        if (array_filter($checkemail)) {
            $kt =  Account . 'notice';
        }
    }
    client_Render('account/get_password.php', compact('error', 'kt'));
}
function notice()
{
    // if (!isset($_SESSION['receiver'])) {
    //     header("location:   " . ROOT_URL);
    //     die();
    // }
    $token = uniqid();
    $_SESSION['token'] = $_GET['token'];
    $code = Account . 'forgot?token=' . $token;
    $content = "<h4>Link liên kết đổi mật khẩu của bạn là : <a href=`$code`>$code</a> tuyệt đối không chia sẻ với bật kì ai</h4>";
    $receiver = isset($_POST['receiver']);
    $title = 'Thiết lập lại mật khẩu đăng nhập Sunflower';
    $startTime = date("Y-m-d H:i:s");
    $cenverted = date('Y-m-d H:i:s', strtotime('+5 minute', strtotime($startTime)));
    $expire_time = $cenverted;
    if (isset($_POST['submail'])) {
        $receiver = $_POST['receiver'];
        taikhoan_forgot($receiver, $token, $expire_time);
    }
    $forgot = [
        'msg' => '',
        'checkmail' => ''
    ];
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = 0;
        $mail->CharSet = 'UTF-8';
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'sunflowernhom3@gmail.com';
        $mail->Password   = '123456bi';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;
        //Recipients
        $mail->setFrom('sunflowernhom3@gmail.com', 'Sunflower');
        $arrEmail = explode(',', $receiver);
        foreach ($arrEmail as $em) {
            $mail->addAddress(trim($em));
        }
        $mail->addReplyTo('sunflowernhom3@gmail.com', 'Sunflower');
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $title;
        $mail->Body    = $content;
        $mail->AltBody = $content;
        $mail->send();
        $forgot['msg'] = "Chúng tôi đã gửi liên kết về mail của bạn vui lòng kiểm tra email";
    } catch (Exception $e) {
        $forgot['msg'] = "Không hợp lệ bạn vui lòng quay về trang trước <br>" . "<button class='btn btn-warning' onclick='back()'>Quay lại trang trước</button>";
    }
    client_Render('account/notice.php', compact('forgot'));
}
function verify_mk()
{
    // if (!isset($_SESSION['token'])) {
    //     header("location:   " . Account . 'send');
    //     die();
    // }

    $notice = [
        'msg' => ''
    ];
    $forgot = [
        'newpass' => '',
        'confirmpass' => ''

    ];
    $token = isset($_GET['token']) ? $_GET['token'] : '';
    $now = date("Y-m-d H:i:s");
    $sql = "SELECT *  FROM forgot_pass where code ='" . $token . "'and expire_time >= '" . $now . "'";
    $result = execute_query($sql);
    if (!$result) {
        $notice['msg'] = "Đường dẫn của bạn không hợp lệ hoặc token đã hết hạn vui lòng kiểm tra lại !";
    }
    if (isset($_POST['verypass'])) {
        $newpass = $_POST['newpass'];
        $confirmpass = $_POST['confirmpass'];
        $email = $_POST['email'];
        if (!array_filter($forgot)) {
            $newpass = password_hash($newpass, PASSWORD_DEFAULT);
            taikhoan_reset_passcode($newpass, $email);
            $msg = "Thay đổi mật khẩu thành công";
            header("location: " . ROOT_URL . "?msg=" . $msg);
        }
    }
    $sql = "SELECT forgot_pass.email  FROM forgot_pass where code ='" . $token . "'";
    $email = execute_query($sql);
    client_Render('account/change_pw.php', compact('forgot', 'notice', 'result', 'email'));
}
function logout()
{
    session_destroy();
    header("location: " . ROOT_URL);
    die;
}
function listcart()
{
    if (!isset($_SESSION['ten_dang_nhap'])) {
        header("location:   " . ROOT_URL);

        die();
    }
    if (!isset($_GET['pg'])) {
        $pg = 1;
    } else {
        $pg = $_GET['pg'];
    }
    $keyw = isset($_GET['keyw']) ? $_GET['keyw'] : "";
    $pagesize = 10;
    $result  = (int)pdo_query_value("SELECT count(*) FROM hoadon");
    $tongpage = ceil($result / $pagesize);
    $offset = ($pg - 1) * $pagesize;
    $hoadon = cart_list($_SESSION['ten_dang_nhap'], $offset, $pagesize);
    info_render('account/list_cart.php', compact('hoadon', 'tongpage'));
}

function cart_detail()
{
    if (!isset($_SESSION['ten_dang_nhap'])) {
        header("location:   " . ROOT_URL);
        die();
    }
    $id_hoadon = $_GET['id_hoadon'];
    $hddt = cart_dts($id_hoadon);
    info_render('account/cart_dt.php', compact('hddt'));
}
function account_address()
{
    if (!isset($_SESSION['ten_dang_nhap'])) {
        header("location:   " . ROOT_URL);

        die();
    }
    $error = [
        'dia_chi' => ''
    ];
    if (isset($_POST['subdiachi'])) {
        extract($_REQUEST);
        if (isset($_GET['ma_tai_khoan'])) {
            $ma_tai_khoan = $_GET['ma_tai_khoan'];
        }
        if (strlen($dia_chi) < 10) {
            $error['dia_chi'] = "Địa chỉ không hợp lệ !";
        }
        if (strlen($dia_chi) > 100) {
            $error['dia_chi'] = "Bạn không được viết quá 100 kí tự";
        }
        if (!array_filter($error)) {
            taikhoan_upaddress($dia_chi, $ma_tai_khoan);
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
    info_render('account/address.php', compact('khachhang', 'error'));
}
