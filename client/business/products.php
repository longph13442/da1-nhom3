<?php
require_once './dao/system_dao.php';
require_once './dao/produc.php';
require_once './dao/danhmuc.php';



function loadon_sp()
{
    if (isset($_POST['kyw']) && ($_POST['kyw'] > 0)) {
        $kyw = $_POST['kyw'];
    } else {
        $kyw = "";
    }
    if (isset($_GET['ma_sp']) && ($_GET['ma_sp'] > 0)) {
        $iddm = $_GET['ma_sp'];
    } else {
        $iddm = 0;
    }
    if (!isset($_GET['pg'])) {
        $pg = 1;
    } else {
        $pg = $_GET['pg'];
    }
    $keyw = isset($_GET['keyw']) ? $_GET['keyw'] : "";
    $pagesize = 10;
    $result  = (int)pdo_query_value("SELECT count(*) FROM sanpham");
    $tongpage = ceil($result / $pagesize);
    $offset = ($pg - 1) * $pagesize;
    $dssp = loadonsp($kyw, $iddm, $offset, $pagesize);
    $dmsp = loadall_dm();

    client_render('products/index.php', compact('dmsp', 'dssp', 'tongpage'));
}
function loadall_sp_timkiem()
{
    if (isset($_POST['kyw']) && ($_POST['kyw'] > 0)) {
        $kyw = $_POST['kyw'];
        $key = "Kết quả tìm kiếm";
    } else {
        $kyw = "";
    }
    if (isset($_GET['ma_sp']) && ($_GET['ma_sp'] > 0)) {
        $iddm = $_GET['ma_sp'];
    } else {
        $iddm = 0;
    }
    $keyw = isset($_GET['keyw']) ? $_GET['keyw'] : "";
    if (!isset($_GET['pg'])) {
        $pg = 1;
    } else {
        $pg = $_GET['pg'];
    }
    $pagesize = 10;
    $result  = (int)pdo_query_value("SELECT count(*) FROM sanpham");
    $tongpage = ceil($result / $pagesize);
    $offset = ($pg - 1) * $pagesize;
    $dssp = loadonsp($kyw, $iddm, $offset, $pagesize);
    $dmsp = loadall_dm();
    client_render('products/index.php', compact('dmsp', 'dssp', 'key'));
}
