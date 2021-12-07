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
  $errorvoucher = [
    'soluong' => ''
  ];
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
      $date = date("Y-m-d H:i:s");
      $sql = "insert into hoadon(name,phone,email,address,note,date) values('$name','$phone','$email','$address','$note','$date')";
      $hoadon_id = InsertDataAndGetId($sql);
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
      }
      unset($_SESSION["cart"]);
      if ($_POST["paymentMethod"] == 1) {
        $pay_link = "";
      }
      header("location: success");
    }
  }

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
  client_Render("pay_cart/index.php", compact('pay', 'voucher', 'error', 'errorvoucher', 'name', 'email', 'phone', 'address', 'note'));
}
function pay_vnpay()
{
  client_Render('product_details/vnpay_php/index.php');
}
