<?php
require_once './dao/pay_cart.php';
function pay()
{
  if (isset($_POST["submitt"])) {
    // thêm thông tin user vào hóa đơn
    extract($_POST);
    $sql="insert into hoadon(name,phone,email,address,note) values('$name','$phone','$email','$address','$note')";
    $hoadon_id= InsertDataAndGetId($sql);
    //lặp giỏ hàng thêm vào chi tiết hóa đơn
    foreach($_SESSION["cart"] as $key){
      $product_id=$key["masp"];
      $quantyti=$key["soluong"];
      $price=$key["price"];
      GetId($hoadon_id,$product_id,$quantyti,$price);
    }
    unset($_SESSION["cart"]);
    if($_POST["paymentMethod"]==1){
      $pay_link="";
    }
    header("location: success");
  }

  $pay = (isset($_SESSION["cart"])) ? $_SESSION["cart"] : [];
  client_Render("pay_cart/index.php", compact('pay'));
}
?>
