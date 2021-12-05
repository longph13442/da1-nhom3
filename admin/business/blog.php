<?php 
require_once 'dao/system_dao.php';
function blog_list(){
    $sql = "SELECT * FROM blog ";
    $bl = pdo_query($sql);
    admin_render('blog/list.php', compact('bl'));
}
function blog_add_form(){

}
function blog_save_add(){

}
function blog_update_form(){

}
function blog_save_update(){

}
function blog_delete(){}
?>