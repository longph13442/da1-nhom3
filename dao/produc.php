<?php
require_once './dao/system_dao.php';
require_once './dao/danhmuc.php';

function loadonsp($kyw = "", $iddm = 0, $offset, $pagesize)
{
    $sql = "SELECT *, giatien*(100-giamgia)/100 as gianew FROM  sanpham where 1";
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
        $sql = "select *,giatien*(100-giamgia)/100 as gianew from loaihang where ma_loai =" . $iddm;
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
    $sql = "SELECT *,giatien*(100-giamgia)/100 as gianew FROM sanpham WHERE  ma_sp=?";
    return pdo_query_one($sql, $ma_sp);
}
function san_pham_select_by_loai_chitiet($ma_loai, $ma_sp)
{
    $sql = "SELECT *,giatien*(100-giamgia)/100 as gianew FROM sanpham WHERE ma_loai=" . $ma_loai . " AND ma_sp <> " . $ma_sp;
    return pdo_query($sql);
}
function hang_hoa_tang_so_luot_xem($ma_sp)
{
    $sql = "UPDATE sanpham SET luotxem = luotxem + 1 WHERE ma_sp='$ma_sp'";
    return pdo_query_one($sql);
}
function loc_gia_Sp($start, $end)
{
    $sql = "SELECT *,giatien*(100-giamgia)/100 as gianew FROM sanpham WHERE sanpham.giatien >= ?  and sanpham.giatien < ?";
    return pdo_query($sql, $start, $end);
}
function loadall_spkm()
{

    $sql = "select *,giatien*(100-giamgia)/100 as gianew from sanpham where 1 order by giamgia desc limit 0,8 ";
    $sanpham22 = pdo_query($sql);
    return $sanpham22;
}

function loadall_spyt($ten_dang_nhap)
{

    $sql = "SELECT *,giatien*(100-giamgia)/100 as gianew FROM favorite_products,khachhang,sanpham WHERE favorite_products.product_id = sanpham.ma_sp and khachhang.ma_tai_khoan = favorite_products.user_id and khachhang.ten_dang_nhap = ?";

    return pdo_query($sql, $ten_dang_nhap);
}
function spyt_delete($id)
{
    $sql = "DELETE FROM favorite_products WHERE id = ?";

    return pdo_execute($sql, $id);
}
