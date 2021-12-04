<?php 
require_once './dao/system_dao.php';
function pay_cart($name,$phone ,$email , $address, $note)
{
        $sql = "insert into hoadon(name,phone,email,address,note) values(?,?,?,?,?)";
        InsertDataAndGetId($sql, $name,$phone ,$email , $address, $note);
}
function GetId($hoadon_id,$product_id,$quantyti,$price){
        $sql="insert into hoadon_chitiet(id,product_id,quantyti,price) values(?,?,?,?)";
        pdo_execute($sql,$hoadon_id,$product_id,$quantyti,$price);
}
?>