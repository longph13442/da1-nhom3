<?php
/**
 * Mở kết nối đến CSDL sử dụng PDO
 */
function pdo_get_connection(){
    $conn = new PDO("mysql:host=localhost;dbname=duan1-nhom3;charset=utf8", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
}
/**
 * Thực thi câu lệnh sql thao tác dữ liệu (INSERT, UPDATE, DELETE)
 * @param string $sql câu lệnh sql
 * @param array $args mảng giá trị cung cấp cho các tham số của $sql
 * @throws PDOException lỗi thực thi câu lệnh
 */
function pdo_execute($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}
/**
 * Thực thi câu lệnh sql truy vấn dữ liệu (SELECT)
 * @param string $sql câu lệnh sql
 * @param array $args mảng giá trị cung cấp cho các tham số của $sql
 * @return array mảng các bản ghi
 * @throws PDOException lỗi thực thi câu lệnh
 */
function pdo_query($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $rows = $stmt->fetchAll();
        return $rows;
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}
/**
 * Thực thi câu lệnh sql truy vấn một bản ghi
 * @param string $sql câu lệnh sql
 * @param array $args mảng giá trị cung cấp cho các tham số của $sql
 * @return array mảng chứa bản ghi
 * @throws PDOException lỗi thực thi câu lệnh
 */
function pdo_query_one($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}
/**
 * Thực thi câu lệnh sql truy vấn một giá trị
 * @param string $sql câu lệnh sql
 * @param array $args mảng giá trị cung cấp cho các tham số của $sql
 * @return giá trị
 * @throws PDOException lỗi thực thi câu lệnh
 */
function pdo_query_value($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return array_values($row)[0];
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}
// ----------------------------------------------------LOAI HANG---------------------------------------------//
function loai_insert($ten_loai)
{
    $sql = "INSERT INTO loaihang(ten_loai) VALUES(?)";
    pdo_execute($sql, $ten_loai);
}
//Cập nhật theo mã
function loai_update($ma_loai, $ten_loai)
{
    $sql = "UPDATE loaihang SET ten_loai=? WHERE ma_loai=?";
    pdo_execute($sql, $ten_loai, $ma_loai);
}
//Xóa theo mã 
function loai_delete($ma_loai)
{
    $sql = "DELETE FROM loaihang WHERE ma_loai=?";
    if (is_array($ma_loai)) {
        foreach ($ma_loai as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_loai);
    }
    
}
//Truy vấn tất cả
function loai_select_all()
{
    $sql = "SELECT * FROM loaihang order by ma_loai desc";
    return pdo_query($sql);
}
//Truy vấn theo mã
function loai_select_by_id($ma_loai)
{
    $sql = "SELECT * FROM loaihang WHERE ma_loai=?";
    return pdo_query_one($sql, $ma_loai);
}
//Đếm số lượng
function loai_exist($ma_loai)
{
    $sql = "SELECT count(*) FROM loaihang WHERE ma_loai=?";
    return pdo_query_value($sql, $ma_loai) > 0;
}
//--------------------------------------------------BÌNH LUẬN--------------------------------------



function binh_luan_insert($ma_kh, $ma_hh, $noi_dung, $ngay_bl){
    $sql = "INSERT INTO binhluan(ma_kh, ma_hh, noi_dung, ngay_bl) VALUES ('$ma_kh', '$ma_hh', '$noi_dung', '$ngay_bl')";
    pdo_execute($sql );
}
function binh_luan_update($ma_kh, $ma_hh, $noi_dung, $ngay_bl, $ma_bl){
    $sql = "UPDATE binhluan SET ma_kh=?, ma_hh=?, noi_dung=?, ngay_bl=? WHERE ma_bl=?";
    pdo_execute($sql, $ma_kh, $ma_hh, $noi_dung, $ngay_bl, $ma_bl);
}
function binh_luan_delete($ma_bl){
    $sql = " DELETE FROM binhluan WHERE ma_bl=?";
    if (is_array($ma_bl)) {
        foreach ($ma_bl as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_bl);
    }
}
function binh_luan_select_all(){
    $sql = " SELECT * FROM binhluan ";
    return pdo_query($sql);
}
function binh_luan_select_by_id($ma_bl){
    $sql = "SELECT * FROM binhluan WHERE ma_bl=?";
    return pdo_query_one($sql, $ma_bl);
}
function binh_luan_exist($ma_bl){
    $sql = "SELECT count(*) FROM binhluan WHERE ma_bl=?";
    return pdo_query_value($sql, $ma_bl) > 0;
}
function binh_luan_select_by_hang_hoa(){
    $sql = "SELECT b.*, h.ten_hh FROM binhluan b  JOIN hanghoa h ON h.ma_hh=b.ma_hh WHERE b.ma_hh=? ORDER BY ngay_bl DESC ";
    return pdo_query($sql);
}
// load binh luan 
function binh_luan_load($ma_sp){
    $sql = " SELECT * FROM binhluan WHERE ma_hh='".$ma_hh."' order by ma_bl desc";
    return pdo_query($sql);
}
// dem so binh luan
function binh_luan_dem(){
    $sql = "SELECT count(*) FROM binhluan ";
    return pdo_query_value($sql) > 0;
}
// -----------------------------------------------------SẢN PHẨM----------------------------------------------------------------
function san_pham_select_by_id($ma_sp){
    $sql = "SELECT * FROM sanpham WHERE  ma_sp=?";
    return pdo_query_one($sql,$ma_sp);
}
function san_pham_select_by_loai_chitiet($ma_loai,$ma_sp)
{
    $sql = "SELECT * FROM sanpham WHERE ma_loai=".$ma_loai." AND ma_sp <> ".$ma_sp;
    return pdo_query($sql);
}


// ----------------------------------------------------KHÁCH HÀNG---------------------------------------------------------------