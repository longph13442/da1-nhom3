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
    if (isset($_GET['ma_loai']) && ($_GET['ma_loai'] > 0)) {
        $iddm = $_GET['ma_loai'];
    } else {
        $iddm = 0;
    }
    if (!isset($_GET['pg'])) {
        $pg = 1;
    } else {
        $pg = $_GET['pg'];
    }
    $tendm = danhmuc_byid($iddm);
    $keyw = isset($_GET['keyw']) ? $_GET['keyw'] : "";
    $pagesize = 10;
    if ($tendm) {
        $result = (int)danhmuc_id_count($iddm);
    } else {
        $result  = (int)pdo_query_value("SELECT count(*) FROM sanpham");
    }
    $tongpage = ceil($result / $pagesize);
    $offset = ($pg - 1) * $pagesize;
    $dssp = loadonsp($kyw, $iddm, $offset, $pagesize);
    $dmsp = loadall_dm();
   $dskm = loadall_spkm();
    client_render('products/index.php', compact('dmsp', 'dssp', 'tongpage', 'tendm','dskm'));
}
function loadall_sp_timkiem()
{
    $key = "Kết quả tìm kiếm";

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
    $keyw = isset($_GET['keyw']) ? $_GET['keyw'] : "";
    if (!isset($_GET['pg'])) {
        $pg = 1;
    } else {
        $pg = $_GET['pg'];
    }
    $pagesize = 1;
    $result  = (int)sanpham_count_seach($kyw);
    $tongpage = ceil($result / $pagesize);
    $offset = ($pg - 1) * $pagesize;
    $dssp = loadonsp($kyw, $iddm, $offset, $pagesize);
    $dmsp = loadall_dm();
    client_render('products/index.php', compact('dmsp', 'dssp', 'key', 'tongpage'));
}
