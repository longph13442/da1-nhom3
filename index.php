<?php
session_start();

$url = isset($_GET['url']) ? $_GET['url'] : "/";
require_once './commons/utils.php';
require_once './vendor/phpmailer/phpmailer/src/Exception.php';
require_once './vendor/phpmailer/phpmailer/src/PHPMailer.php';
require_once './vendor/phpmailer/phpmailer/src/SMTP.php';
require_once './client/business/account.php';

switch ($url) {
    case '/':
        require_once './client/business/homepage.php';
        sp_trangchu();
        break;
    case 'login':
        login();
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
    case 'account/cart':
        listcart();
        break;
    case 'account/cart/details':
        cart_detail();
        break;
    case 'account/address':
        account_address();
        break;
    case 'profile':
        profile();
        break;

    case 'danh-muc':
        require_once './client/business/products.php';
        loadon_sp();
        break;
    case 'tim-kiem':
        require_once './client/business/products.php';
     loadall_sp_timkiem();
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
        break;
    case 'about':
        require_once './client/business/about.php';
        about();
        break;
    case 'blog':
        require_once './client/business/blog.php';
        blog();
        break;
    case 'category':
        require_once './admin/business/category.php';
        category_list();
        break;
    case 'category/add':
        require_once './admin/business/category.php';
        category_add_form();
        break;
    case 'category/save-add';
        require_once './admin/business/category.php';
        category_save_add();
    case 'category/delete':
        require_once './admin/business/category.php';
        category_delete();
        break;
    case 'category/edit':
        require_once './admin/business/category.php';
        category_edit_form();
        break;
    case 'category/save-edit':
        require_once './admin/business/category.php';
        category_save_edit();
        break;
 
    case 'comments':
        require_once './admin/business/comments.php';
        comments_list();
        break;
    case 'comments/delete':
        require_once './admin/business/comments.php';
        comments_delete();
        break;
    case 'slide':
        require_once './admin/business/slide.php';
        slide_list();
        break;
    case 'slide/delete':
        require_once './admin/business/slide.php';
        slide_delete();
        break;
    case 'slide/update':
        require_once './admin/business/slide.php';
        slide_update_form();
        break;
    case 'statistical':
        require_once './admin/business/statistical.php';
        statistica();
        break;
    case 'dathang':
        require_once './client/business/dathang.php';
        dat_hang_tt();
        break;

    case 'xoadh':
        require_once './client/business/dathang.php';
        xoa_gio_hang();
        break;
    case 'cart' :
        require_once "./client/business/cart.php";
        cart();
    default:
        # code...
        break;
}
