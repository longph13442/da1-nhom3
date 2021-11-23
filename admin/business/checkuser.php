<?php
$error = [
    'ho_ten' => '',
    'dia_chi' => '',
    'sdt' => '',
    'email' => '',
    'ngay_sinh' => '',
    'ten_dang_nhap' => '',
    'hinh_anh' => '',

];
$ext_img = ['jpg', 'jpeg', 'png', 'svg', 'Webp'];
if ($ho_ten == '') {
    $error['ho_ten'] = "Bạn vui lòng nhập họ tên";
    return false;
}
if ($dia_chi == '') {
    $error['dia_chi'] = "Bạn vui lòng nhập địa chỉ";
    return false;
}
if ($sdt == '') {
    $error['sdt'] = "Bạn vui lòng nhập số điện thoại";
    return false;
}
if (!is_numeric($sdt)) {
    $error['sdt'] = "Bạn vui lòng nhập số ";
    return false;
}
if ($email == '') {
    $error['email'] = "bạn vui lòng nhập email";
    return false;
}

if ($ten_dang_nhap == '') {
    $error['ten_dang_nhap'] = "Bạn vui lòng nhập tên đăng nhập";
    return false;
}
if (empty($ngay_sinh)) {
    $error['ngay_sinh'] = "bạn vui lòng nhập ngày sinh";
    return false;
}
