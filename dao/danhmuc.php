<?php
require_once './dao/system_dao.php';

function loadall_dm()
{
    $sql = "select * from loaihang order by ma_loai ";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
function danhmuc_byid($ma_loai)
{
    $sql = "SELECT loaihang.ten_loai as ten_loai FROM loaihang where ma_loai = ?";
    return pdo_query_one($sql, $ma_loai);
}
function danhmuc_id_count($ma_loai)
{
    $sql = "SELECT count(*) FROM loaihang where ma_loai = ?";
    return pdo_query($sql, $ma_loai);
}
