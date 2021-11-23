<?php
session_start();
$url = isset($_GET['url']) ? $_GET['url'] : "/";

require_once './commons/utils.php';

switch ($url) {
    case '/':
        require_once './client/business/homepage.php';
      sp_trangchu();
       
        break;
    case 'trang-chu':
        require_once './client/business/homepage.php';

            sp_trangchu();
        
  
 
        break;
        

    case 'danh-muc':
        require_once './client/business/products.php';
            loadon_sp();
          

        break;

    case 'sanphamct':
    
     


        break;

    case 'cp-admin':
        require_once './admin/business/dashboard.php';
        dashboard_index();
        break;

    default:
        # code...
        break;
}

?>