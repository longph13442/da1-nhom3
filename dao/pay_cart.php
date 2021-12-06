<?php
require_once './dao/system_dao.php';
function pay_cart($name,$phone ,$email , $address, $note,$date)
{
        $sql = "insert into hoadon(name,phone,email,address,note,date) values(?,?,?,?,?,?)";
        InsertDataAndGetId($sql, $name,$phone ,$email , $address, $note,$date);
}
function GetId($hoadon_id, $product_id, $quantyti, $price, $total)
{
        $sql = "insert into hoadon_chitiet(id,product_id,quantyti,price,total) values(?,?,?,?,?)";
        pdo_execute($sql, $hoadon_id, $product_id, $quantyti, $price, $total);
}
function soluongsp($quatyti, $ma_sp)
{
        $sql = "UPDATE sanpham SET soluong = soluong - ? WHERE ma_sp = ?";
        return pdo_execute($sql, $quatyti, $ma_sp);
}
function soluongvoucher($tenvoucher)
{
        $sql = "UPDATE voucher SET soluong = soluong-1 WHERE soluong > 0 and tenvoucher = ?";
        return pdo_execute($sql, $tenvoucher);
}
