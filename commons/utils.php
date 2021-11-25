<?php
const ROOT_URL = "http://localhost/da1-nhom3/";
const ADMIN_ASSET = ROOT_URL . 'public/admin-asesst/';
const CLIENT_ASSET = ROOT_URL . 'public/client_asesst/';
const homepase_ASSET = ROOT_URL . 'public/admin-asesst/';
const ADMIN_URL = ROOT_URL . 'admin/';
const Account = ROOT_URL . 'account/';
const IMG = 'public/admin-asesst/Image/';
const css = ROOT_URL . 'client/views/layouts/';

// Đường dẫn thư mục
$IMAGE_URL =  "/da1-nhom3/public/admin-asesst/image/";
$PATH_IMG = $_SERVER['DOCUMENT_ROOT'] . $IMAGE_URL;
function save_file($file, $dir_path)
{
    $file_upload = $_FILES[$file];
    $file_name = $file_upload['name'];
    $dir_file_path = $dir_path . $file_name;
    move_uploaded_file($file_upload['tmp_name'], $dir_file_path);
    return $file_name;
}
function client_Render($view, $data = [])
{
    extract($data);
    $view = './client/views/' . $view;
    include_once "./client/views/layouts/main.php";
}
function login_render($viewlogin, $data = [])
{
    extract($data);
    $viewlogin = './client/views/' . $viewlogin;
    include_once "./client/views/layouts/login.php";
}
function info_render($view_info, $data = [])
{
    extract($data);

    $view_info = './client/views/' . $view_info;
    include_once "./client/views/layouts/main_info.php";
}
function admin_render($view, $data = [], $tongpage = [])
{
    extract($data);
    $tongpage;
    $view = './admin/views/' . $view;
    include_once "./admin/views/layouts/main.php";
}
// avatar 
function avatar()
{

    $sql = "SELECT khachhang.hinh_anh as hinh_anh FROM khachhang where ten_dang_nhap='" . $_SESSION['ten_dang_nhap'] . "'";
    $anh = execute_query($sql);
    return $anh['hinh_anh'];
}
