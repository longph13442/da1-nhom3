<?php
require_once './dao/pay_cart.php';
function pay()
{
  if (isset($_POST["submitt"])) {
    // thêm thông tin user vào hóa đơn
    extract($_POST);
    $date = date("Y-m-d H:i:s");
    $sql = "insert into hoadon(name,phone,email,address,note,date) values('$name','$phone','$email','$address','$note','$date')";
    $hoadon_id = InsertDataAndGetId($sql);
    //lặp giỏ hàng thêm vào chi tiết hóa đơn
    foreach ($_SESSION["cart"] as $key) {
      $product_id = $key["masp"];
      $quantyti = $key["soluong"];
      $price = $key["price"];
      $total = $_POST['total'];
      GetId($hoadon_id, $product_id, $quantyti, $price, $total);
      soluongsp($quantyti, $product_id);
    }

    // if (array_key_exists('voucher', $_REQUEST)) {

    // }

    unset($_SESSION["cart"]);
    if ($_POST["paymentMethod"] == 1) {
      $pay_link = "";
    }
    header("location: success");
  }
  $error = [
    'soluong' => ''
  ];
  $tenvoucher = '';
  if (isset($_POST['apvoucher'])) {
    $tenvoucher = $_POST['tenvoucher'];
    $sql = "SELECT voucher.soluong FROM voucher WHERE soluong = 0 and tenvoucher = '$tenvoucher'";
    $soluong = pdo_query($sql);
    if ($soluong) {
      $error['soluong'] = "Voucher đã hết lượt sử dụng";
    }
    if (!array_filter($error)) {
      $sql = "SELECT *FROM voucher WHERE tenvoucher = '$tenvoucher'";
      $voucher = execute_query($sql, false);
      soluongvoucher($tenvoucher);
    }
  }
  $sql = "SELECT * FROM voucher WHERE soluong > 0 and tenvoucher = '$tenvoucher'";
  $voucher = execute_query($sql, false);
  $pay = (isset($_SESSION["cart"])) ? $_SESSION["cart"] : [];
  client_Render("pay_cart/index.php", compact('pay', 'voucher', 'error'));
}
function pay_vnpay()
{
  client_Render('product_details/vnpay_php/index.php');
}
