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
            'soluong' => $soluong,
            'price' => '',
            'sum' => '',
            'ship' => ''
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
    if (array_key_exists('delete', $_REQUEST)) {
        $id = $_GET["delete"];
        unset($_SESSION["cart"][$id]);
        header("location: " . ROOT_URL . 'cart');
    }
    $cart = (isset($_SESSION["cart"])) ? $_SESSION["cart"] : [];
    $link = '';
    if (isset($_SESSION["ten_dang_nhap"])) {
        if ($cart == []) {
            $link = 'danh-muc';
        } else {
            $link = 'pay';
        }
    } else {
        $link = 'account/register';
    }

    $title = "Giỏ Hàng";
    client_Render("cart/index.php", compact('cart', 'link', 'title')); // 

}
