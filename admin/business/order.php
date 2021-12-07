<?php
require_once 'dao/system_dao.php';
function order_get_all($keysearch)
{
    $sql = "SELECT * FROM hoadon_chitiet,hoadon,sanpham WHERE hoadon.name like ? and hoadon_chitiet.id = hoadon.id and sanpham.ma_sp = hoadon_chitiet.product_id ORDER BY hoadon.date DESC";
    return pdo_query($sql, '%' . $keysearch . '%');
}
function order_get_by_id($id)
{
    $sql = "SELECT * FROM hoadon,hoadon_chitiet,sanpham WHERE sanpham.ma_sp = hoadon_chitiet.product_id and hoadon.id = hoadon_chitiet.id and hoadon.id=?";
    return pdo_query($sql, $id);
}
function order_get_by_idkh($id)
{
    $sql = "SELECT * FROM hoadon,hoadon_chitiet,sanpham WHERE sanpham.ma_sp = hoadon_chitiet.product_id and hoadon.id = hoadon_chitiet.id and hoadon.id=?";
    return pdo_query_one($sql, $id);
}
function order_delete_by_id($id)
{
    $sql = "DELETE FROM hoadon WHERE hoadon.id =?";
    return pdo_execute($sql, $id);
}
function order_list()
{
    $keysearch = isset($_GET['keysearch']) ? $_GET['keysearch'] : '';

    $od = order_get_all($keysearch);

    admin_render('order/list.php', compact('od'));
}
function order_delete()
{
    if (!isset($_SESSION['admin']) == 1) {
        header("location: " . ROOT_URL . 'cpadmin');
        die;
    }
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
function order_updatecart()
{

    if (isset($_POST['updatecart'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $quantyti = $_POST['quantyti'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $note = $_POST['note'];
        $sql = "UPDATE hoadon,hoadon_chitiet SET quantyti = '$quantyti',  price ='$price',phone='$phone',name = '$name',address = '$address', note = '$note' WHERE hoadon_chitiet.id =hoadon.id and hoadon.id = '$id'";
        pdo_execute($sql);
    }
    $id = $_GET['id'];
    $info2 = order_get_by_id($id);
    $info = order_get_by_idkh($id);
    admin_render('order/update.php', compact('info', 'info2'));
}
