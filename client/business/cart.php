<?php


function cart()
{
    if (isset($_POST["masp"]) ? $_POST["masp"] : "") {
        $id = $_POST['masp'];
    }

    $soluong = (isset($_POST["soluong"])) ? $_POST["soluong"] : 1;

    if (isset($_POST["add"])) {

        $item = [
            'hinh' => $_POST['hinhanh'],
            'tensp' => $_POST['tensp'],
            'gia' => $_POST['gianew'],
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
        $id = $_POST["id"];
        $_SESSION['cart'][$id]['soluong'] = $soluong;
    }
    if (isset($_POST["delete"])) {
        $id = $_POST["id"];
        unset($_SESSION["cart"][$id]);
    }
    $cart = (isset($_SESSION["cart"])) ? $_SESSION["cart"] : [];
    if (isset($_SESSION["ten_dang_nhap"])) {
        $link = 'pay';
    } else {
        $link = 'account/register';
    }

    client_Render("cart/index.php", compact('cart', 'link')); // 

}
