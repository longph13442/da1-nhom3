<?php
require_once 'dao/system_dao.php';
function thong_ke_sp()
{
    $sql = "SELECT lo.ma_loai, lo.ten_loai,
    COUNT(*) soluong,
    MIN(sp.giatien) gia_min,
    MAX(sp.giatien) gia_max,
    AVG(sp.giatien) gia_avg
    FROM sanpham sp
    JOIN loaihang lo ON lo.ma_loai=sp.ma_loai
    GROUP BY lo.ma_loai, lo.ten_loai";
    return pdo_query($sql);
}
function thong_ke_bl()
{
    $sql = "SELECT sp.ma_sp, sp.ten_sp,
    COUNT(*) soluong,
    MIN(bl.ngay_tao) cu_nhat,
    MAX(bl.ngay_tao) moi_nhat
    FROM binhluan bl
    JOIN sanpham sp ON sp.ma_sp=bl.ma_sp
    GROUP BY sp.ma_sp, sp.ten_sp
    HAVING soluong > 0";
    return pdo_query($sql);
}
function statistica()
{
    $tk = thong_ke_sp();
    $bl = thong_ke_bl();
    $title = "Thống kê";
    admin_render('statistical/statistical.php', compact('tk', 'bl', 'title'));
}
function chart_sanpham()
{
    $info = thong_ke_sp();
    $title = "Biểu đồ sản phẩm";
    admin_render('statistical/chart.php', compact('info', 'title'));
}
function chart_binhluan()
{
    $info = thong_ke_bl();
    $title = "Biểu đồ bình luận";
    admin_render('statistical/comment.php', compact('info', 'title'));
}
