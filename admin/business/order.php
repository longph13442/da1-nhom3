<?php
require_once 'dao/system_dao.php';
function order_get_all()
{
    $sql = "SELECT * FROM hoadon_chitiet,hoadon,sanpham WHERE hoadon_chitiet.id = hoadon.id and sanpham.ma_sp = hoadon_chitiet.product_id";
    return pdo_query($sql);
}
function order_get_by_id($id)
{
    $sql = "SELECT * FROM hoadon,hoadon_chitiet WHERE hoadon_chitiet.id = hoadon.id and hoadon.id=?";
    return pdo_query_one($sql, $id);
}
function order_delete_by_id($id)
{
    $sql = "DELETE FROM hoadon WHERE hoadon.id =?";
    return pdo_execute($sql, $id);
}
function order_list()
{
    $od = order_get_all();

    admin_render('order/list.php', compact('od'));
}
function order_delete()
{
    $id = $_GET['id'];

    order_delete_by_id($id);
    header("location: " . ROOT_URL . 'order');
}
function order_update()
{
    if (isset($_POST['submit'])) {
        $status = $_POST['status'];
        $id = $_POST['id'];
        $sql = "UPDATE hoadon,hoadon_chitiet SET status = '$status'  WHERE hoadon_chitiet.id =hoadon.id and hoadon.id = '$id'";
        pdo_execute($sql);
        header("location: " . ROOT_URL . 'order');
    }
}
