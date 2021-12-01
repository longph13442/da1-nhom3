<?php  
require_once './dao/system_dao.php';

function blog_tt(){

    $sql = "select * from blog where 1 order by ma_blog desc limit 0,3 ";   
     $sanpham = pdo_query($sql);
    return $sanpham;

}



?>