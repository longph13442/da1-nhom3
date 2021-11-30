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
    $dssp = loadonsp($kyw, $iddm);



    $dmsp = loadall_dm();

    client_render('products/index.php', compact('dmsp', 'dssp'));
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
    $dssp = loadonsp($kyw, $iddm);
    $dmsp = loadall_dm();
    client_render('products/index.php', compact('dmsp', 'dssp', 'key'));
}
