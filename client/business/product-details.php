<?php
require_once './dao/produc.php';
require_once './dao/comments.php';
require_once './dao/taikhoan.php';

function bl_delete()
{

    $ma_bl = $_GET['ma_bl'];
    binh_luan_delete($ma_bl);
}
function bl_insert()
{
    // $ma_sp = $_GET['ma_sp'];
    if (isset($_POST['gui_bl'])) {
        $ma_sp = $_POST['ma_sp'];
        $noi_dung = $_POST['noi_dung'];
        $ma_tk = get_ma_tai_khoan($_SESSION['ten_dang_nhap']);
        $ma_tai_khoan = $ma_tk['ma_tai_khoan'];
        $ngay_tao = date("y/m/d");

        $danh_gia = isset($_POST['danh_gia']) ? $_POST['danh_gia'] : "0";
        binh_luan_insert($ma_sp, $ma_tai_khoan, $noi_dung, $ngay_tao, $danh_gia);
    }
}

function san_pham_chi_tiet()
{
    if (isset($_GET['ma_sp']) && ($_GET['ma_sp'] > 0)) {
        $ma_sp = $_GET['ma_sp'];
        $info = san_pham_select_by_id($ma_sp);
        extract($info);
        $info2 = san_pham_select_by_loai_chitiet($ma_loai, $_GET['ma_sp']);
        $info3 = binh_luan_load($ma_sp);
        $ten_dang_nhap = isset($_SESSION['ten_dang_nhap']) ? $_SESSION['ten_dang_nhap'] : "";
        $ma_tk = get_ma_tai_khoan($ten_dang_nhap);
        hang_hoa_tang_so_luot_xem($ma_sp);
        if (isset($_POST['gui_bl'])) {
            bl_insert();
            header("location: " . $_SERVER['HTTP_REFERER']);
        }
        if (isset($_POST['xoa_bl'])) {
            bl_delete();
            header("location: " . $_SERVER['HTTP_REFERER']);
        } else {
            client_Render('product_details/index.php', compact('info', 'info2', 'info3'));
        }
    }
}
function favorite_product()
{

    $id = $_GET['ma_sp'];

    // ktra xem đã được yêu thích sản phẩm này hay chưa 
    $tendn = $_SESSION['ten_dang_nhap'];
    $sql="SELECT * from khachhang where ten_dang_nhap = '$tendn'";
    $ten = pdo_query_one($sql);
    $userId = $ten['ma_tai_khoan'];

    $checkFavoriteProduct = "select * from favorite_products where product_id = $id and user_id = $userId";
    $favorite = pdo_query($checkFavoriteProduct);
 
    // nếu chưa có thì lưu vào db
    if (!$favorite) {
        $currentTime = date("Y-m-d h:i:s");
        $addFavoriteQuery = "insert into favorite_products 
                                (user_id, product_id, created_at)
                            values 
                                ($userId, $id, '$currentTime')";
        pdo_execute($addFavoriteQuery);
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>