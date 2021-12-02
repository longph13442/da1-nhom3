<?php
require_once 'dao/system_dao.php';
function category_select_all()
{
    $sql = "SELECT * FROM loaihang ";
    return pdo_query($sql);
}
function category_select_by_id($ma_loai)
{
    $sql = "SELECT * FROM loaihang where ma_loai= ?";
    return pdo_query_one($sql, $ma_loai);
}
function product_select_by_id($ma_sp)
{
    $sql = "SELECT * FROM sanpham WHERE ma_sp = ?";
    return pdo_query_one($sql, $ma_sp);
}
function product_delete($ma_sp)
{
    $sql = "DELETE FROM sanpham WHERE ma_sp = ?";
    return pdo_execute($sql, $ma_sp);
}
function product_tensp_check($ten_sp)
{
    $sql = "SELECT * FROM sanpham WHERE ten_sp = ?";
    return pdo_query($sql, $ten_sp);
}
function products_insert($ten_sp, $giatien, $giamgia, $anh_sp, $ma_loai, $luotxem, $ngaytao, $mota, $soluong, $mota_dai, $dacbiet)
{
    $sql = "INSERT INTO sanpham(ten_sp, giatien, giamgia, anh_sp, ma_loai,  
    luotxem, ngaytao, mota,soluong,mota_dai,dacbiet) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql, $ten_sp, $giatien, $giamgia, $anh_sp, $ma_loai, $luotxem, $ngaytao, $mota, $soluong, $mota_dai, $dacbiet);
}
function products_update($ten_sp, $giatien, $giamgia, $anh_sp, $ma_loai, $luotxem, $ngaytao, $mota, $soluong, $mota_dai, $dacbiet,$ma_sp)
{
    $sql = "UPDATE sanpham SET ten_sp=?,giatien=?, giamgia=?, anh_sp=?, ma_loai=?,  luotxem=?, ngaytao=?, mota=?, soluong=?,mota_dai=?,dacbiet=? WHERE ma_sp=?";
    pdo_execute($sql, $ten_sp, $giatien, $giamgia, $anh_sp, $ma_loai, $luotxem, $ngaytao, $mota, $soluong, $mota_dai, $dacbiet,$ma_sp);
}
function products_list()
{
    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
    $sql = "SELECT * FROM sanpham WHERE ten_sp like '%$keyword%'";
    $info = pdo_query($sql);
    admin_render('products/list.php', compact('info', 'keyword'));
}
function products_add_form()
{

    $ct = category_select_all();
    admin_render('products/add.php', compact('ct'));
}
function products_save_add()
{
    $error = [
        'ten_sp' => '',
        'giatien' => '',
        'giamgia' => '',
        'soluong' => '',
        'mota' => '',
        'mota_dai' => '',
        'anh_sp' => '',

    ];
    if (isset($_POST['submit'])) {
        extract($_POST);

        $ten_sp_check = product_tensp_check($ten_sp);
        if ($ten_sp_check) {
            $error['ten_sp'] = 'sản phẩm đã tồn tại !';
        }
        if ($giatien < 0) {
            $error['giatien'] = 'phải là số dương !';
        }
        if ($giamgia < 0) {
            $error['giamgia'] = 'phải là số dương !';
        }
        if ($soluong < 0) {
            $error['soluong'] = 'phải là số dương !';
        }
        if (strlen($mota) > 100) {
            $error['mota'] = 'tối đa 100 kí tự !';
        }
        if (strlen($mota_dai) > 1000) {
            $error['mota_dai'] = 'tối đa 1000 kí tự !';
        }
        if ($giamgia != '' ){
            $giatien = ($giatien * $giamgia)/100;
        }
        //----------------------------------------------------------------------
        if (isset($_FILES['anh_sp'])) {

            if ($_FILES['anh_sp']['error'] > 0) {
                $error['anh_sp'] = "Không được để trống ảnh";
                // echo " <span style='color: red;'> Không được để trống ảnh </span>";
            } else {
                $arr = array('jpg', 'png', 'jpeg');
                $file_name = $_FILES['anh_sp']['name'];
                $file_size = $_FILES['anh_sp']['size'];
                $file_tmp_name = $_FILES['anh_sp']['tmp_name'];
                $file_check = pathinfo($file_name, PATHINFO_EXTENSION);

                if ($file_size > 2000000) {
                    $error['anh_sp'] = "Không up ảnh size quá 2Mb";
                    // echo " <span style='color: red;'> Không up ảnh quá Size<=2Mb </span>";
                } elseif (!in_array($file_check, $arr)) {
                    $error['anh_sp'] = "Chỉ đc up ảnh dạng jpg,jpeg và png ";
                    // echo " <span style='color: red;'> Chỉ đc up ảnh dạng jpg và png </span>";
                } else {
                    move_uploaded_file($file_tmp_name, IMG . $file_name);
                }
            }
        }
        //----------------------------------------------------------------------
        if (!array_filter($error)) {
            $anh_sp = $file_name;
            $ngaytao = date("y/m/d");
            $luotxem = 0;

            products_insert($ten_sp, $giatien, $giamgia, $anh_sp, $ma_loai, $luotxem, $ngaytao, $mota, $soluong, $mota_dai, $dacbiet);
            header("location: " . ROOT_URL . 'products');
        }
    }

    admin_render('products/add.php', compact('error', 'ten_sp', 'giatien', 'giamgia', 'soluong', 'mota', 'mota_dai'));
}
function products_delete()
{
    $ma_sp = $_GET['ma_sp'];
    product_delete($ma_sp);
    header("location: " . ROOT_URL . 'products');
}
function products_update_form()
{
    $ct = category_select_all();
    $ma_sp = $_GET['ma_sp'];
    $info = product_select_by_id($ma_sp);
    admin_render('products/update.php', compact('info', 'ct'));
}
function products_save_upadte()
{
    if (isset($_POST['submit'])) {
        extract($_POST);

      
        $ma_sp = $_POST['ma_sp'];
        $info = product_select_by_id($ma_sp);
        $file = $_FILES['anh_sp'];
        $anh_sp = empty($file['name']) ? $info['anh_sp'] : $file['name'];
        $ngaytao = $_POST['ngaytao'];
        products_update($ten_sp, $giatien, $giamgia, $anh_sp, $ma_loai, $luotxem, $ngaytao, $mota, $soluong, $mota_dai, $dacbiet,$ma_sp);
        header("location: " . ROOT_URL . 'products');
    }
}
