<?php
if (isset($_POST["masp"]) ? $_POST["masp"] : "") {
    $id = $_POST['masp'];
}

$soluong = (isset($_POST["soluong"])) ? $_POST["soluong"] : 1;

if (isset($_POST["add"])) {
    $item = [

        'hinh' => $_POST['hinhanh'],
        'tensp' => $_POST['tensp'],
        'gia' => $_POST['giatien'],
        'masp' => $id,
        'soluong' => $soluong

    ];
    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['soluong'] += $soluong;
    } else {
        $_SESSION['cart'][$id] = $item;
    }
}
if (isset($_POST["update"])) {
    $id=$_POST["masp"];
    $_SESSION['cart'][$id]['soluong'] = $soluong;
}




function cart()
{
    client_Render("cart/index.php"); // 

}
