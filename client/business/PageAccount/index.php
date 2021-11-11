<?php
extract($_REQUEST);
if (array_key_exists('info', $_REQUEST)) {
    $VIEW = "infoaccount.php";
} else if (array_key_exists('address', $_REQUEST)) {
    $VIEW = "address.php";
} else if (array_key_exists('editaddress', $_REQUEST)) {
    $VIEW = "editaddress.php";
} else if (array_key_exists('resestpass', $_REQUEST)) {
    $VIEW = "resetpassword.php";
} else {
    $VIEW = "carted.php";
}
require "info.php";
