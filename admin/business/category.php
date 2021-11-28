<?php
require_once 'dao/system_dao.php';

function category_list(){
    $sql = "SELECT * FROM loaihang ";
    $cate = pdo_query($sql);
    admin_render('category/list.php',compact($cate));
    admin_render('category')
}
include '';
?>