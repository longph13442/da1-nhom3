<?php  

require_once './dao/system_dao.php';


function blog_tt(){

    $sql = "select * from blog where 1 order by ma_blog desc limit 0,3 ";   
     $sanpham = pdo_query($sql);
    return $sanpham;

}

function topbaiviet_moi()
{
    $sql = "select * from blog,khachhang where blog.ma_tai_khoan = khachhang.ma_tai_khoan order by ngay_tao desc limit 0,2 ";
    $blog = pdo_query($sql);
    return $blog;
}
function blog_dm()
{

  $sql = "select * from blog order by ma_blog ";
    $blogct = pdo_query($sql);
    return $blogct;

}
function blog_ct($ma_blog)
{

    $sql = "SELECT * FROM blog WHERE  ma_blog=?";
    return pdo_query_one($sql, $ma_blog);
}





?>