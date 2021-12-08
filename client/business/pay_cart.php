<?php
require_once './dao/pay_cart.php';
function pay()
{
  $error = [

    'name' => '',
    'email' => '',
    'phone' => '',
    'address' => '',
    'note' => ''
  ];

  $name = '';
  $email = '';
  $phone = '';
  $address = '';
  $note = '';
  if (isset($_POST["submitt"])) {
    extract($_POST);
    if ($name == '') {
      $error['name'] = "Bạn vui lòng nhập họ tên";
    }
    if ($email == '') {
      $error['email'] = "Bạn vui lòng nhập email";
    }
    if ($phone == '') {
      $error['phone'] = "Bạn vui lòng nhập số điện thoại";
    }
    if (!is_numeric($phone)) {
      $error['phone'] = "Bạn vui lòng nhập số ";
    }
    if ($address == '') {
      $error['address'] = "Bạn vui lòng nhập địa chỉ";
    }
    if (strlen($address) < 10) {
      $error['address'] = "Bạn vui lòng nhập địa chỉ hợp lệ";
    }
    if ($note == '') {
      $error['note'] = "Bạn vui lòng để lại lời nhắn";
    }

    if (!array_filter($error)) {
      if (!isset($_SESSION['ship'])) {
        $ship = 0;
      } else {
        $ship = $_SESSION['ship'];
      }
      $date = date("Y-m-d H:i:s");
      $sql = "insert into hoadon(name,phone,email,address,note,ship,date) values('$name','$phone','$email','$address','$note','$ship','$date')";
      $hoadon_id = InsertDataAndGetId($sql);
      unset($_SESSION['ship']);

      // thêm thông tin user vào hóa đơn

      //lặp giỏ hàng thêm vào chi tiết hóa đơn
      foreach ($_SESSION["cart"] as $key) {
        $product_id = $key["masp"];
        $quantyti = $key["soluong"];
        $price = $key["price"];

        if (!isset($_SESSION['vouchers'])) {
          $total = 0;
        } else {
          $total = $_SESSION['vouchers'];
        }
        GetId($hoadon_id, $product_id, $quantyti, $price, $total);
        unset($_SESSION['vouchers']);
        soluongsp($quantyti, $product_id);
        unset($_SESSION["cart"]);
      }
      if ($_POST["paymentMethod"] == 1) {
        $pay_link = "";
      }
      header("location: success");
    }
  }
  $errorvoucher = [
    'soluong' => ''
  ];
  $tenvoucher = '';
  $voucher = '';

  if (isset($_POST['apvoucher'])) {
    $tenvoucher = $_POST['tenvoucher'];
    $sql = "SELECT voucher.soluong FROM voucher WHERE soluong = 0 and tenvoucher = '$tenvoucher'";
    $soluong = pdo_query($sql);
    $voucher1 = "SELECT *FROM voucher WHERE tenvoucher = '$tenvoucher' and voucher.sotien <= 50000";
    $checkvoucher = execute_query($voucher1, false);
    $voucher2 = "SELECT *FROM voucher WHERE tenvoucher = '$tenvoucher' and voucher.sotien <= 100000";
    $checkvoucher2 = execute_query($voucher2, false);
    $voucher3 = "SELECT *FROM voucher WHERE tenvoucher = '$tenvoucher' and voucher.sotien <= 350000";
    $checkvoucher3 = execute_query($voucher3, false);

    $sum = 0;
    foreach ($_SESSION['cart'] as $key) {
      (float)$sum += (float)$key['price'];
    }
    if ($soluong) {
      $errorvoucher['soluong'] = "Voucher đã hết lượt sử dụng";
    }
    if ($sum < 99999) {
      if (!$checkvoucher < 1 || !$checkvoucher2  < 1 || !$checkvoucher3 < 1) {
        $errorvoucher['soluong'] = "Đơn hàng của bạn không đủ điều kiện";
      }
    }
    if ($sum >= 100000  && $sum <= 400000) {
      if (!$checkvoucher) {
        $errorvoucher['soluong'] = "Đơn hàng của bạn không đủ điều kiện";
      }
    }
    if ($sum  >= 400000 && $sum  <= 1000000) {
      if (!$checkvoucher2) {
        $errorvoucher['soluong'] = "Đơn hàng của bạn không đủ điều kiện";
      }
    }
    if ($sum > 1000000) {
      if (!$checkvoucher3) {
        $errorvoucher['soluong'] = "Đơn hàng của bạn không đủ điều kiện";
      }
    }


    if (!array_filter($errorvoucher)) {
      $sql = "SELECT *FROM voucher WHERE tenvoucher = '$tenvoucher'";
      $voucher = execute_query($sql, false);
      soluongvoucher($tenvoucher);
    }
  }

  $pay = (isset($_SESSION["cart"])) ? $_SESSION["cart"] : [];
  $title = "Thanh Toán";

  client_Render("pay_cart/index.php", compact('pay', 'voucher', 'error', 'errorvoucher', 'name', 'email', 'phone', 'address', 'note', 'title'));
}
function pay_vnpay()
{
  client_Render('product_details/vnpay_php/index.php');
}
