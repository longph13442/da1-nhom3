<?php
require_once './dao/system_dao.php';
require_once './dao/home.php';
require_once './dao/blog.php';
require_once './dao/danhmuc.php';

function sp_trangchu()
{
    $sanpham = loadall_sp_tt();
    $sanpham2 = loadall_topsp_tt();
    $blog_tt = blog_tt();
    $dmsp = loadall_dm();
    $sql = "SELECT * FROM slide LIMIT 0,3";
    $slide = pdo_query($sql);
    client_render('homepage/index.php', compact('sanpham', 'sanpham2', 'blog_tt', 'dmsp', 'slide'));
}
