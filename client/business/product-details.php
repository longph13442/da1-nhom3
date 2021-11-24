<?php
require_once './dao/produc.php';

function san_pham_chi_tiet(){
    if (isset($_GET['ma_sp']) && ($_GET['ma_sp'] > 0)) {
    $ma_sp = $_GET['ma_sp'];
    $info =san_pham_select_by_id($ma_sp);
    extract($info);
    $info2 = san_pham_select_by_loai_chitiet($ma_loai, $_GET['ma_sp']);
    client_Render('product_details/index.php',compact('info','info2'));
    }
}
?>