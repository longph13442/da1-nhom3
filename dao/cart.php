<?php
function cart_list($ten_dang_nhap, $offset, $pagesize)
{
    $sql = " LIMIT $offset,$pagesize";
    return pdo_query($sql, $ten_dang_nhap);
}
function cart_dts($id_hoadon)
{
    $sql = "";
    return pdo_query_one($sql, $id_hoadon);
}
