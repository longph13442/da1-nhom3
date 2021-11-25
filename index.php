<?php
session_start();

$url = isset($_GET['url']) ? $_GET['url'] : "/";
require_once './commons/utils.php';
require_once './client/business/account.php';
login();
switch ($url) {
    case '/':
        require_once './client/business/homepage.php';
        sp_trangchu();
        break;
    case 'account':
        profile();
        break;
    case 'account/register':
        register();
        break;
    case 'account/send':
        send_email();
        break;
    case 'account/forgot':
        forgot();
        break;
    case 'account/logout':
        logout();
        break;
    case 'account/reset':
        account_reset();
        break;
    case 'profile':
        profile();
        break;
    case 'danh-muc':
        require_once './client/business/products.php';
        loadon_sp();
        break;
    case 'sanphamct':
        require_once './client/business/product-details.php';
        san_pham_chi_tiet();
        break;
    case 'admin':
        require_once './admin/business/dashboard.php';
        dashboard_index();
        break;
    case 'admin/user':
        include_once "./admin/business/user.php";
        user_list();
        break;
    case 'admin/user/add':
        include_once "./admin/business/user.php";
        adduser();
        break;
    case 'admin/user/delete':
        include_once "./admin/business/user.php";
        user_delete();
        break;
    case 'admin/user/lock':
        include_once "./admin/business/user.php";
        user_lock();
        break;
    case 'admin/user/unlock':
        include_once "./admin/business/user.php";
        user_unlock();
        break;
    case 'admin/user/edit':
        include_once "./admin/business/user.php";
        user_edit();
        break;
    case 'admin/logout':
        include "./admin/business/user.php";
        user_logout();
    default:
        # code...
        break;
}
