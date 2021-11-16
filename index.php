<?php
session_start();
$url = isset($_GET["url"]) ? $_GET["url"] : "/";
include "./dao/pdo.php";
switch ($url) {
    case '/':
        include "./client/business/homepage.php";
        break;
    case 'product':
        include "./client/business/product.php";
        break;
    
    case 'about':
        include "./client/business/about.php";
        
        break;
    case 'blog':
        include "./client/business/blog.php";        
        break;
    case 'dashboard':
        include "./client/dashboard/product.php";
        break;
    case 'product_detail':
        if (isset($_GET['ma_sp']) && ($_GET['ma_sp'] > 0)) {
            $info = san_pham_select_by_id($_GET['ma_sp']);
            extract($info);
            $info2 = san_pham_select_by_loai_chitiet($ma_loai, $_GET['ma_sp']);
            include "./client/business/product_details.php";
        } 
        // include "./client/business/product_details.php";
        break;
    default:
        # code...
        break;
}
