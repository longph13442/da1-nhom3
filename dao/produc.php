<?php
require_once './dao/system_dao.php';
require_once './dao/danhmuc.php';

function loadonsp($kyw = "", $iddm = 0, $offset, $pagesize)
{
    $sql = "select * from sanpham where 1";
    if ($kyw != "") {
        $sql .= " and ten_sp like '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and ma_loai ='" . $iddm . "'";
    }
    $sql .= " order by ma_sp DESC LIMIT $offset,$pagesize";

    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function load_ten_dm($iddm)
{
    if ($iddm > 0) {
        $sql = "select * from loaihang where ma_loai =" . $iddm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $ten_loai;
    } else {
        return "";
    }
}
function sanpham_count_seach($kyw)
{
    $sql = "SELECT* FROM sanpham,loaihang WHERE sanpham.ma_loai = loaihang.ma_loai
     and sanpham.ten_sp LIKE ? or loaihang.ten_loai LIKE ?";
    return pdo_query($sql, '%' . $kyw . '%', '%' . $kyw . '%');
}
function san_pham_select_by_id($ma_sp)
{
    $sql = "SELECT * FROM sanpham WHERE  ma_sp=?";
    return pdo_query_one($sql, $ma_sp);
}
function san_pham_select_by_loai_chitiet($ma_loai, $ma_sp)
{
    $sql = "SELECT * FROM sanpham WHERE ma_loai=" . $ma_loai . " AND ma_sp <> " . $ma_sp;
    return pdo_query($sql);
}
function hang_hoa_tang_so_luot_xem($ma_sp)
{
    $sql = "UPDATE sanpham SET luotxem = luotxem + 1 WHERE ma_sp='$ma_sp'";
    return pdo_query_one($sql);
}
