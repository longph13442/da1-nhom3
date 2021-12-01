<?php
require_once 'dao/system_dao.php';
function order_get_all(){
    $sql = "SELECT * FROM donhang";
    return pdo_query($sql);
}
function order_delete_by_id($ma_don_hang){
    $sql = "DELETE FROM donhang WHERE ma_don_hang=?";
    return pdo_execute($sql,$ma_don_hang);
}
function order_list(){
    $od = order_get_all();
    admin_render('order/list.php',compact('od'));
}
function order_delete(){
    $ma_don_hang = $_GET['ma_don_hang'];

    order_delete_by_id($ma_don_hang);
    header("location: " . ROOT_URL . 'order');
}
?>