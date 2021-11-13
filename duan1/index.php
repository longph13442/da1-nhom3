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
        require_once "./client/business/about.php";
        about();
        break;
    case 'blog':
        require_once "./client/business/blog.php";
        blog();
        break;
    case 'dashboard':
        require_once "./admin/dashboard/dashboard.php";
        dashboard();
        break;
    default:
        # code...
        break;
}
