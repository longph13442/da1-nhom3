<?php
require_once 'dao/system_dao.php';
function category_select_all()
{
    $sql = "SELECT * FROM loaihang ORDER BY loaihang.ma_loai DESC";
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
function products_update($ten_sp, $giatien, $giamgia, $anh_sp, $ma_loai, $luotxem, $ngaytao, $mota, $soluong, $mota_dai, $dacbiet, $ma_sp)
{
    $sql = "UPDATE sanpham SET ten_sp=?,giatien=?, giamgia=?, anh_sp=?, ma_loai=?,  luotxem=?, ngaytao=?, mota=?, soluong=?,mota_dai=?,dacbiet=? WHERE ma_sp=?";
    pdo_execute($sql, $ten_sp, $giatien, $giamgia, $anh_sp, $ma_loai, $luotxem, $ngaytao, $mota, $soluong, $mota_dai, $dacbiet, $ma_sp);
}
function products_list()
{
    if (!isset($_GET['pg'])) {
        $pg = 1;
    } else {
        $pg = $_GET['pg'];
    }
    $pagesize = 15;
    $result  = (int)pdo_query_value("SELECT count(*) FROM sanpham");
    $tongpage = ceil($result / $pagesize);
    $offset = ($pg - 1) * $pagesize;
    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
    $sql = "SELECT * FROM sanpham WHERE ten_sp like '%$keyword%' ORDER BY sanpham.ma_loai DESC LIMIT $offset,$pagesize";
    $info = pdo_query($sql);
    $title = "Danh s??ch s???n ph???m";
    admin_render('products/list.php', compact('info', 'keyword', 'tongpage', 'title'));
}
function products_add_form()
{

    $ct = category_select_all();
    $title = "Th??m s???n ph???m";

    admin_render('products/add.php', compact('ct', 'title'));
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
            $error['ten_sp'] = 's???n ph???m ???? t???n t???i !';
        }
        if ($giatien < 0) {
            $error['giatien'] = 'ph???i l?? s??? d????ng !';
        }
        if ($giamgia < 0) {
            $error['giamgia'] = 'ph???i l?? s??? d????ng !';
        }
        if ($soluong < 0) {
            $error['soluong'] = 'ph???i l?? s??? d????ng !';
        }
        if (strlen($mota) > 100) {
            $error['mota'] = 't???i ??a 100 k?? t??? !';
        }
        if (strlen($mota_dai) > 1000) {
            $error['mota_dai'] = 't???i ??a 1000 k?? t??? !';
        }
        // if ($giamgia > 0 ){
        //     $giatien -= ($giatien * $giamgia)/100;
        // }
        //----------------------------------------------------------------------
        if (isset($_FILES['anh_sp'])) {

            if ($_FILES['anh_sp']['error'] > 0) {
                $error['anh_sp'] = "Kh??ng ???????c ????? tr???ng ???nh";
                // echo " <span style='color: red;'> Kh??ng ???????c ????? tr???ng ???nh </span>";
            } else {
                $arr = array('jpg', 'png', 'jpeg');
                $file_name = $_FILES['anh_sp']['name'];
                $file_size = $_FILES['anh_sp']['size'];
                $file_tmp_name = $_FILES['anh_sp']['tmp_name'];
                $file_check = pathinfo($file_name, PATHINFO_EXTENSION);

                if ($file_size > 2000000) {
                    $error['anh_sp'] = "Kh??ng up ???nh size qu?? 2Mb";
                    // echo " <span style='color: red;'> Kh??ng up ???nh qu?? Size<=2Mb </span>";
                } elseif (!in_array($file_check, $arr)) {
                    $error['anh_sp'] = "Ch??? ??c up ???nh d???ng jpg,jpeg v?? png ";
                    // echo " <span style='color: red;'> Ch??? ??c up ???nh d???ng jpg v?? png </span>";
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
    $ct = category_select_all();
    $title = "Th??m S???n Ph???m";
    admin_render('products/add.php', compact('title', 'error', 'ten_sp', 'giatien', 'giamgia', 'soluong', 'mota', 'mota_dai', 'ct'));
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

    $title = "C???p nh???t s???n ph???m";

    admin_render('products/update.php', compact('info', 'ct', 'title'));
}
function products_save_upadte()
{
    if (isset($_POST['submit'])) {
        extract($_POST);
        $ma_sp = $_POST['ma_sp'];
        $info = product_select_by_id($ma_sp);
        $file = $_FILES['anh_sp'];
        $anh_sp = $file['name'];
        $ngaytao = $_POST['ngaytao'];
        global $PATH_IMG;
        if ($anh_sp > 0) {
            $anh_sp = save_file('anh_sp', $PATH_IMG);
        } else {
            $anh_sp = $_POST['thumhinh'];
        }
        // $giamgia = empty($giamgia)? $giamgia : '';
        products_update($ten_sp, $giatien, $giamgia, $anh_sp, $ma_loai, $luotxem, $ngaytao, $mota, $soluong, $mota_dai, $dacbiet, $ma_sp);
        header("location: " . ROOT_URL . 'products');
    }
}
