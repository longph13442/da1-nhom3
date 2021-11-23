<?php
require_once './dao/system_dao.php';

function loadall_dm()
{
    $sql = "select * from loaihang order by ma_loai ";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}




?>