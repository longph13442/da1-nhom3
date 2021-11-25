<?php
require_once './dao/system_dao.php';
require_once './dao/danhmuc.php';

function loadonsp($kyw = "", $iddm = 0)
{
    $sql = "select * from sanpham where 1";
    if ($kyw != "") {
        $sql .= " and ten_sp like '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and ma_loai ='" . $iddm . "'";
    }
    $sql .= " order by ma_sp ";

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
    }
    else {
        return "";
    }
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
?>
