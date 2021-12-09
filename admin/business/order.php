<?php
require_once 'dao/system_dao.php';
function order_get_all($keysearch)
{
    $sql = "SELECT *,hoadon.id,SUM(hoadon_chitiet.price * hoadon_chitiet.quantyti) as tongtien
    FROM hoadon,hoadon_chitiet,sanpham WHERE hoadon.name like ?
     and hoadon.id = hoadon_chitiet.id and sanpham.ma_sp = hoadon_chitiet.product_id GROUP BY hoadon.id ORDER BY hoadon.id DESC  ";
    return pdo_query($sql, '%' . $keysearch . '%');
}
function order_get_allsp()
{
    $sql = "SELECT *,hoadon.id,SUM(hoadon_chitiet.quantyti) as tong
    FROM hoadon,hoadon_chitiet,sanpham WHERE
      hoadon.id = hoadon_chitiet.id and sanpham.ma_sp = hoadon_chitiet.product_id ";
    return pdo_query($sql);
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
    return pdo_query_one($sql, $id);
}
function order_details_delete_by_id($id)
{
    $sql = "DELETE FROM hoadon_chitiet WHERE hoadon_chitiet.id =?";
    return pdo_query_one($sql, $id);
}
function order_list()
{
    $keysearch = isset($_GET['keysearch']) ? $_GET['keysearch'] : '';
    $odsp = order_get_allsp();
    $od = order_get_all($keysearch);
    $title = "Danh sách đơn hàng";
    admin_render('order/list.php', compact('od', 'title', 'odsp'));
}
function selectsp()
{
    $sql = "SELECT *,giatien*(100-giamgia)/100 as gianew  FROM sanpham";
    return pdo_query($sql);
}
function order_delete()
{
    if (!isset($_SESSION['admin']) == 1) {
        header("location: " . ROOT_URL . 'cpadmin');
        die;
    }
    $id = $_GET['id'];
    order_details_delete_by_id($id);
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

        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $note = $_POST['note'];

        $sql = "UPDATE hoadon,hoadon_chitiet SET phone='$phone',name = '$name',address = '$address', note = '$note' WHERE hoadon_chitiet.id =hoadon.id and hoadon.id = '$id'";
        pdo_execute($sql);
    }
    $id = $_GET['id'];
    $sp = selectsp();
    $info2 = order_get_by_id($id);
    $info = order_get_by_idkh($id);
    $title = "Cập nhật đơn hàng";
    admin_render('order/update.php', compact('info', 'info2', 'title', 'sp'));
}
function  order_add()
{
    $error = [
        'quantyti' => '',
        'product_id' => '',
        'checkpd' => ''
    ];
    if (isset($_POST['orderadd'])) {
        $id = $_POST['id'];
        $ma_sp = $_POST['ma_sp'];
        $quantyti = $_POST['quantyti'];
        $gianew = $_POST['gianew'];

        if ($quantyti == '') {
        }
        if ($ma_sp == 0) {
        }
        if (!array_filter($error)) {
            $sql = "INSERT INTO hoadon_chitiet(id,product_id,quantyti,price) VALUES('$id', '$ma_sp', '$quantyti','$gianew')";
            pdo_execute($sql);
            header("location: " . ROOT_URL . 'order/updatecart?id=' . $id);
        }
    }
}
function update_quantity()
{
    if (isset($_POST['upquantity'])) {
        $price = $_POST['price'];
        $quantyti = $_POST['quantyti'];
        $product_id = $_POST['product_id'];

        $id = $_POST['id'];
        $sql_product = "UPDATE hoadon_chitiet SET quantyti='$quantyti', price='$price' WHERE    hoadon_chitiet.product_id = '$product_id'";
        pdo_execute($sql_product);
    }
    $ship = $_SESSION['ship'];
    $sqlquantity = "UPDATE hoadon SET ship = '$ship' WHERE  hoadon.id = '$id'";
    pdo_execute($sqlquantity);
    header("location: " . ROOT_URL . 'order/updatecart?id=' . $id);
    unset($_SESSION['ship']);
}

function order_deletesp()
{


    $product_id = $_GET['product_id'];
    $sql = "DELETE FROM hoadon_chitiet WHERE  hoadon_chitiet.product_id = '$product_id'";
    pdo_query_one($sql);
    header("location: " . ROOT_URL . 'order');
}
