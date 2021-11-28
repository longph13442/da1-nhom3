<div class="col-8">
    <div class="title">
        <h4>Chi Tiết Đơn Hàng</h4>
    </div>
    <div class="row">
        <div class="">
            <input type="hidden" name="id_hoadon" value="<?= $hddt['id_hoadon'] ?>">
            <table class="table border" style="width: 100%">
                <tr class="">
                    <th>Sản Phẩm</th>
                    <th></th>
                </tr>
                <tr>
                    <td>
                        <p class="text-product">
                            <?= $hddt['ten_sp']; ?> x <span class="text-danger"><?= $hddt['soluong'] ?></span>
                        </p>
                    </td>
                    <td>
                        <b><?= $hddt['giatien'] ?></b>
                    </td>
                </tr>
                <tr>
                    <td>Tổng Cộng</td>
                    <td><b><?= $hddt['tongtien'] ?></b></td>
                </tr>
                <tr>
                    <td>Phí vận chuyển</td>
                    <td><b><?= $hddt['phivanchuyen'] ?> qua giao hàng</b></td>
                </tr>
                <tr>
                    <td>Phương thức thanh toán</td>
                    <td><b><?php if ($hddt['ppthanhtoan'] == 0) {
                                echo "Thanh toán khi nhận hàng";
                            } else {
                                echo "Thanh toán online";
                            } ?></b></td>
                </tr>
                <tr>
                    <td>Tổng Tiền</td>
                    <td><b><?= $hddt['tongtien'] ?></b></td>
                </tr>
                <tr>
                    <th>Chi Tiết Khách Hàng</th>
                    <th></th>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?= $hddt['email'] ?></td>
                </tr>
                <tr>
                    <td>Số điện thoại</td>
                    <td><?= $hddt['sdt'] ?></td>
                </tr>
            </table>
            <table class="table border">
                <tr>
                    <th class="col-4">Địa chỉ nhận hàng</th>
                    <th></th>
                </tr>
                <tr>
                    <td>Họ Tên</td>
                    <td><?= $hddt['ho_ten'] ?></td>
                </tr>
                <tr>
                    <td>Địa chỉ cụ thể</td>
                    <td><?= $hddt['dia_chi'] ?></td>
                </tr>

            </table>

        </div>
    </div>

</div>