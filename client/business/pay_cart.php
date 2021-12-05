<?php
require_once './dao/pay_cart.php';
function pay()
{
  if (isset($_POST["submitt"])) {
    // thêm thông tin user vào hóa đơn
    extract($_POST);
    $date = date("Y-m-d H:i:s");
    $sql = "insert into hoadon(name,phone,email,address,note,date) values('$name','$phone','$email','$address','$note',$date)";
    $hoadon_id = InsertDataAndGetId($sql);
    //lặp giỏ hàng thêm vào chi tiết hóa đơn
    foreach ($_SESSION["cart"] as $key) {
      $product_id = $key["masp"];
      $quantyti = $key["soluong"];
      $price = $key["price"];
      GetId($hoadon_id, $product_id, $quantyti, $price);
    }
    unset($_SESSION["cart"]);
    if ($_POST["paymentMethod"] == 1) {
      $pay_link = "";
    }
    header("location: success");
  }

  $pay = (isset($_SESSION["cart"])) ? $_SESSION["cart"] : [];
  client_Render("pay_cart/index.php", compact('pay'));
}
function pay_vnpay()
{
  client_Render('product_details/vnpay_php/index.php');
}
