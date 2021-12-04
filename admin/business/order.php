<?php
require_once 'dao/system_dao.php';
function order_get_all(){
    $sql = "SELECT * FROM donhang";
    return pdo_query($sql);
}
function order_get_by_id($ma_don_hang){
    $sql = "SELECT * FROM donhang WHERE ma_don_hang=?";
    return pdo_query_one($sql,$ma_don_hang);
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
function order_update(){
    if(isset($_POST['submit'])){
        $tinh_trang = $_POST['tinh_trang'];
        $ma_don_hang = $_POST['ma_don_hang'];
        $sql = "UPDATE donhang SET tinh_trang = '$tinh_trang'  WHERE ma_don_hang = '$ma_don_hang'";
        pdo_execute($sql);
        header("location: " . ROOT_URL . 'order');
    }
    
}
?>