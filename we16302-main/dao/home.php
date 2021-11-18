<?php
require_once './dao/system_dao.php';

function  loadall_sp_tt(){
    $sql = "select * from sanpham where 1 order by ma_sp desc limit 0,9 ";   
     $sanpham = pdo_query($sql);
    return $sanpham;
}
function loadall_topsp_tt(){
    $sql = "select * from sanpham where 1 order by luotxem desc limit 0,10 ";   
     $sanpham2 = pdo_query($sql);
    return $sanpham2;
}






?>