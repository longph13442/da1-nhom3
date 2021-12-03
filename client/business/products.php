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
    client_render('products/index.php', compact('dmsp', 'dssp', 'tongpage', 'tendm'));
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
    $pagesize = 10;
    $result  = (int)sanpham_count_seach($kyw);
    $tongpage = ceil($result / $pagesize);
    $offset = ($pg - 1) * $pagesize;
    $dssp = loadonsp($kyw, $iddm, $offset, $pagesize);
    $dmsp = loadall_dm();
    client_render('products/index.php', compact('dmsp', 'dssp', 'key', 'tongpage'));
}
function giatien()
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
    $start = [
        100000,
        1000000,
        2000000,
        3000000
    ];
    $end = [
        1000000,
        1999999,
        3000000,
        99999999999
    ];

    if (array_key_exists('sanphamden1trieu', $_REQUEST)) {
        $dssp = loc_gia_Sp($start[0], $end[0]);
        $keylg = "Sản Phẩm Dưới 1 Triệu";
    } else if (array_key_exists('sanphamden2trieu', $_REQUEST)) {
        $dssp = loc_gia_Sp($start[1], $end[1]);
        $keylg = "Sản Phẩm Dưới 2 Triệu";
    } else if (array_key_exists('sanphamden3trieu', $_REQUEST)) {
        $dssp = loc_gia_Sp($start[2], $end[2]);
        $keylg = "Sản Phẩm Dưới 3 Triệu";
    } else if (array_key_exists('sanpham3trieudolen', $_REQUEST)) {
        $dssp = loc_gia_Sp($start[3], $end[3]);
        $keylg = "Sản Phẩm  3 Triệu Trở Lên";
    }
    if (!isset($_GET['pg'])) {
        $pg = 1;
    } else {
        $pg = $_GET['pg'];
    }
    // $pagesize = 10;
    // $result  = (int)loc_gia_Sp_phantrang($start, $end);
    // $tongpage = ceil($result / $pagesize);
    // $offset = ($pg - 1) * $pagesize;
    // $dssp = loadonsp($kyw, $iddm, $offset, $pagesize);
    $dmsp = loadall_dm();
    client_Render('products/index.php', compact('dmsp', 'dssp', 'keylg'));
}
