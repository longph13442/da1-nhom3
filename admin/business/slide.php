<?php
require_once 'dao/system_dao.php';
function sl_delete($id){
    $sql = " DELETE FROM slide WHERE id=?";
    if (is_array($id)) {
        foreach ($id as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $id);
    }
}
function slide_list(){
    $sql = "SELECT * FROM slide";
    $sl=pdo_query($sql);
    admin_render('slide/list.php',compact('sl'));
}
function slide_delete(){
    $id = $_GET['id'];
    sl_delete($id);
    header("location: " . ROOT_URL . 'slide');
}
function slide_update_form(){
    $id = $_GET['id'];
    $info = loaihang_select_by_id($id);
    admin_render('slide/edit.php',compact('info'));
}
function slide_save_update(){
    
}
?>