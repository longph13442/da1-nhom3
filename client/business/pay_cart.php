<?php

 function pay(){
   
   $pay = (isset($_SESSION["cart"])) ? $_SESSION["cart"] : [] ;
   client_Render("pay_cart/index.php", compact('pay'));
 }
?>