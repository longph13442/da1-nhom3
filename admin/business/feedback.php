<?php
function feedback_get_all(){
    $sql = "SELECT * FROM gopy";
    $fb = pdo_query($sql);
    $title = "Quản lý góp ý";
    admin_render('feedback/list.php',compact('fb','title') );
}
function feedback_delete(){
    $id = $_GET['id'];
    $sql = "DELETE FROM gopy WHERE id = '$id'";
    pdo_execute($sql);
    
    header("location: " . ROOT_URL . 'feedback');
}