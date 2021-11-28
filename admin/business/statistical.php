<?php 
require_once 'dao/system_dao.php';
function thong_ke_sp(){
    $sql = "SELECT lo.ma_loai, lo.ten_loai,
    COUNT(*) soluong,
    MIN(sp.giatien) gia_min,
    MAX(sp.giatien) gia_max,
    AVG(sp.giatien) gia_avg
    FROM sanpham sp
    JOIN loaihang lo ON lo.ma_loai=sp.ma_loai
    GROUP BY lo.ma_loai, lo.ten_loai";
    return pdo_query($sql);
}
function statistica(){
    $tk = thong_ke_sp();
    
    admin_render('statistical/statistical.php',compact('tk'));
}
?>