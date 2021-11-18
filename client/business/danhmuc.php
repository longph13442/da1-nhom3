<?php
require_once './dao/system_dao.php';
require_once './dao/danhmuc.php';
function loadall_dm_sp()
{
 $dmsp=  loadall_dm();
    client_render('products/index.php', compact('dmsp'));
}
?>