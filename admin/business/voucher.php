<?php
function voucher_add()
{
    $error = [
        'tenvoucher' => '',
        'sotien' => '',
        'soluong' => ''
    ];
    $tenvoucher = '';
    $sotien = '';
    $soluong = '';
    if (isset($_POST['voucheradd'])) {
        extract($_POST);

        if ($tenvoucher == '') {
            $error['tenvoucher'] = "Bạn vui lòng nhập tên voucher";
        }


        $sql = "SELECT * FROM voucher WHERE tenvoucher = '$tenvoucher'";
        $checkvoucher = pdo_query($sql);
        if ($checkvoucher) {
            $error['tenvoucher'] = "Voucher đã tồn tại";
        }
        if (empty($sotien)) {
            $error['sotien'] = "Bạn vui lòng nhập số tiền";
        }
        if (empty($soluong)) {
            $error['soluong'] = "Bạn vui lòng nhập số lượng";
        }


        if (!array_filter($error)) {
            $date = date("Y-m-d H:i:s");
            $date = date("Y-m-d H:i:s");
            $sql = "INSERT INTO voucher(tenvoucher,sotien,soluong,date) VALUES('$tenvoucher','$sotien','$soluong','$date')";
            pdo_execute($sql);
            header("location: " . ROOT_URL . 'voucher');
            die;
        }
    }
    $title = "Thêm voucher";
    admin_render('Voucher/add.php', compact('title', 'error', 'tenvoucher', 'sotien', 'soluong'));
}
function voucher_update()
{
    if (isset($_POST['voucherupdate'])) {
        extract($_POST);
        $sql = "UPDATE voucher SET tenvoucher = '$tenvoucher', sotien = '$sotien', soluong ='$soluong' WHERE id = '$id'";
        pdo_execute($sql);
        header("location: " . ROOT_URL . 'voucher');
        die;
    }
    $id = $_GET['id'];
    $sql = "SELECT * FROM voucher WHERE id = '$id'";
    $vc = pdo_query_one($sql);
    $title = "Cập nhật voucher";
    admin_render('Voucher/update.php', compact('title', 'vc'));
}
function voucher_list()
{
    $sql = "SELECT * FROM voucher";
    $voucher = pdo_query($sql);
    $title = "Danh sách voucher";
    admin_render('Voucher/list.php', compact('title', 'voucher'));
}
function voucher_delete()
{
    $id = $_GET['id'];
    $sql = "DELETE FROM voucher where id = '$id'";
    pdo_query_one($sql);
    header("location: " . ROOT_URL . 'voucher');
    die;
}
