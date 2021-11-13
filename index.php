<?php
$url = isset($_GET["url"]) ? $_GET["url"] : "/";

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
    default:
        # code...
        break;
}
