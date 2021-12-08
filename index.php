<?php
session_start();
$session = isset($_SESSION['khachhang']) ? $_SESSION['khachhang'] : "";
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
        verify_mk();
        break;
    case 'account/notice':
        notice();
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
    case 'danh-muc/giatien':
        require_once './client/business/products.php';
        giatien();
    case 'tim-kiem':
        require_once './client/business/products.php';
        loadall_sp_timkiem();
        break;
    case 'sanphamct':
        require_once './client/business/product-details.php';
        san_pham_chi_tiet();
        break;
    case 'cpadmin':
        require_once './admin/business/dashboard.php';
        dashboard_index();
        break;
    case 'cpadmin/user':
        include_once "./admin/business/user.php";
        user_list();
        break;
    case 'cpadmin/user/add':
        include_once "./admin/business/user.php";
        adduser();
        break;
    case 'cpadmin/user/delete':
        include_once "./admin/business/user.php";
        user_delete();
        break;
    case 'cpadmin/user/lock':
        include_once "./admin/business/user.php";
        user_lock();
        break;
    case 'cpadmin/user/unlock':
        include_once "./admin/business/user.php";
        user_unlock();
        break;
    case 'cpadmin/user/edit':
        include_once "./admin/business/user.php";
        user_edit();
        break;
    case 'cpadmin/logout':
        include "./admin/business/user.php";
        user_logout();
        break;
    case 'voucher':
        include_once './admin/business/voucher.php';
        voucher_list();
        break;
    case 'voucher/add':
        include_once './admin/business/voucher.php';
        voucher_add();
        break;
    case 'voucher/update':
        include_once './admin/business/voucher.php';
        voucher_update();
        break;
    case 'voucher/delete':
        include_once './admin/business/voucher.php';
        voucher_delete();
        break;
    case 'about':
        require_once './client/business/about.php';
        about();
        break;
    case 'blog':
        require_once './client/business/blog.php';
        blog();
        break;
    case 'sanpham-yt':
        require_once './client/business/products.php';
        load_all_spyt();
        break;
    case 'xoayt':
        require_once './client/business/products.php';
        xoayt();
        break;
    case 'ctblog':
        require_once './client/business/blog.php';
        blogct();
        break;
    case 'yeu-thich/':
        require_once './client/business/product-details.php';
        favorite_product();
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

    case 'statistical':
        require_once './admin/business/statistical.php';
        statistica();
        break;
    case 'chart/sanpham':
        require_once './admin/business/statistical.php';
        chart_sanpham();
        break;
    case 'chart/binhluan':
        require_once './admin/business/statistical.php';
        chart_binhluan();
        break;
    case 'products':
        require_once './admin/business/products.php';
        products_list();
        break;
    case 'products/add':
        require_once './admin/business/products.php';
        products_add_form();
        break;
    case 'products/save-add':
        require_once './admin/business/products.php';
        products_save_add();
        break;
    case 'products/delete':
        require_once './admin/business/products.php';
        products_delete();
        break;
    case 'products/update':
        require_once './admin/business/products.php';
        products_update_form();
        break;
    case 'products/save-update':
        require_once './admin/business/products.php';
        products_save_upadte();
        break;
        // giỏ hàng
    case 'cart':
        require_once "./client/business/cart.php";
        cart();
        break;
    case 'delete_session';
        require_once "./client/business/delete_session.php";
        delete();
        break;
        // thanh toans
    case 'pay';
        require_once "./client/business/pay_cart.php";
        pay();
        break;
        // gop y kien
    case 'gop-y';
        require_once "./client/business/blog.php";
        gopy();
        break;
        //
    case 'slide':
        require_once './admin/business/slide.php';
        slide_list();
        break;
    case 'slide/add':
        require_once './admin/business/slide.php';
        slide_add();
        break;
    case 'slide/save-add':
        require_once './admin/business/slide.php';
        slide_save_add();
        break;
    case 'slide/delete':
        require_once './admin/business/slide.php';
        slide_delete();
        break;
    case 'slide/update':
        require_once './admin/business/slide.php';
        slide_update_form();
        break;
    case 'slide/save-update':
        require_once './admin/business/slide.php';
        slide_save_update();
        break;

    case 'order':
        require_once './admin/business/order.php';
        order_list();
        break;
    case 'order/delete':
        require_once './admin/business/order.php';
        order_delete();
        break;
    case 'order/update':
        require_once './admin/business/order.php';
        order_update();
        break;
    case 'order/updatecart':
        require_once './admin/business/order.php';
        order_updatecart();
        break;
    case 'order/upquantity':
        require_once './admin/business/order.php';
        update_quantity();
        break;
    case 'order/deletesp':
        require_once "./admin/business/order.php";
        order_deletesp();
        break;
    case 'success':
        require_once "./client/business/success.php";
        success();
        break;
    case 'admin-blog':
        require_once './admin/business/blog.php';
        blog_list();
        break;
    case 'admin-blog/add':
        require_once './admin/business/blog.php';
        blog_add_form();
        break;
    case 'admin-blog/save-add':
        require_once './admin/business/blog.php';
        blog_save_add();
        break;
    case 'admin-blog/update':
        require_once './admin/business/blog.php';
        blog_update_form();
        break;
    case 'admin-blog/save-update':
        require_once './admin/business/blog.php';
        blog_save_update();
        break;
    case 'admin-blog/delete':
        require_once './admin/business/blog.php';
        blog_delete();
        break;
    default:
        # code...
        break;
}
