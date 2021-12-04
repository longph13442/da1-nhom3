<?php 
require_once 'dao/system_dao.php';


function binh_luan_delete($ma_bl){
    $sql = " DELETE FROM binhluan WHERE ma_binh_luan=?";
    if (is_array($ma_bl)) {
        foreach ($ma_bl as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_bl);
    }
}
function comments_list(){
    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
    $sql = "SELECT * FROM binhluan where ma_sp like '%$keyword%'";
    $bl = pdo_query($sql);
    admin_render('comments/list.php', compact('bl','keyword'));
}
function comments_delete(){
    $ma_bl=$_GET["ma_binh_luan"];
    binh_luan_delete($ma_bl);
    header("location: " . ROOT_URL . 'comments');
}
