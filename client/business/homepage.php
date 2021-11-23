<?php
require_once './dao/system_dao.php';
require_once './dao/home.php';

function sp_trangchu()
{
    $sanpham = loadall_sp_tt();
    $sanpham2 = loadall_topsp_tt();
    client_render('homepage/index.php', compact('sanpham', 'sanpham2'));
}
