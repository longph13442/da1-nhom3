<?php

 function pay(){
    if(isset($_POST["pay"])){
       $error=[
          'name' => '',
          'email' =>'',
          'call' => '',
          'ar'=>'',
          'note'=>'',
          'paybox' => ''
       ];
    }
    if($_POST["name"]=""){
       $error["name"]="Không được để trống";
    }
    if($_POST["email"]=""){
      $error["email"]="Không được để trống";
   }
   if($_POST["call"]=""){
      $error["call"]="Không được để trống";
   }
   if($_POST["ar"]=""){
      $error["ar"]="Không được để trống";
   }
   if($_POST["note"]=""){
      $error["note"]="Không được để trống";
   }
   if($_POST["paybox"]=""){
      $error["paybox"]="Không được để trống";
   }
   // if(array_filter($error)){

   // }
    client_Render("pay_cart/index.php");
 }
?>