<div class="col-8 mb-5 mt-3">
    <div class="title">
        <h4>Chi Tiết Đơn Hàng</h4>
    </div>
    <div class="row ">
        <div class="">
            <input type="hidden" name="id" value="<?= $hddt['id'] ?>">
            <table class="table border" style="width: 100%">
                <tr class="">
                    <th>Sản Phẩm</th>
                    <th></th>
                </tr>
                <tr>
                    <td>
                        <?php foreach ($hddts as $in) : ?>
                            <p class="text-product">
                                <?= $in['ten_sp']; ?> x <span class="text-danger"><?= $in['quantyti'] ?></span>
                            </p>
                        <?php endforeach; ?>

                    </td>
                    <td>
                        <?php $sum = 0 ?>
                        <?php foreach ($hddts as $in) : ?>
                            <?php
                            $sumpro = $in['price'] * $in['quantyti'] ?>
                            <?php $sum += $sumpro ?>
                            <b> <?= number_format($sumpro) ?>đ</b>
                            <p></p>
                        <?php endforeach; ?>

                    </td>
                </tr>
                <tr>
                    <td>Tổng Cộng</td>
                    <td><b><?= number_format($sum) ?>đ</b></td>
                </tr>
                <?php if ($hddt['total'] > 0) : ?>

                    <tr>
                        <td>Mã giảm giá:</td>
                        <td>
                            <b>-<?php echo number_format($hddt['total']) ?>đ</b>
                            <?php $after = $sum - $hddt['total'] ?>

                        </td>
                    </tr>
                    <tr>
                    </tr>

                <?php endif; ?>

                <tr>
                    <td>Phí vận chuyển</td>
                    <td><b><?php
                            echo $hddt['ship'] . ' đ qua giao hàng';
                            ?>

                        </b></td>
                </tr>
                <tr>
                    <td>Phương thức thanh toán</td>
                    <td><b><?php if (isset($hddt['ppthanhtoan']) == 0) {
                                echo "Thanh toán khi nhận hàng";
                            } else {
                                echo "Thanh toán online";
                            } ?></b></td>
                </tr>

                <tr>
                    <?php if ($hddt['total'] > 0) : ?>
                        <?php $after + $hddt['ship'] ?>
                        <td>Tổng tiền:</td>
                        <td><b><?= number_format($after) ?></b></td>
                    <?php else : ?>
                        <?php $sum += $hddt['ship'] ?>
                        <td>Tổng Tiền</td>
                        <td><b><?= number_format($sum) ?></b></td>
                    <?php endif; ?>

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
                    <td><?= $hddt['phone'] ?></td>
                </tr>
            </table>
            <table class="table border">
                <tr>
                    <th class="col-4">Địa chỉ nhận hàng</th>
                    <th></th>
                </tr>
                <tr>
                    <td>Họ Tên</td>
                    <td><?= $hddt['name'] ?></td>
                </tr>
                <tr>
                    <td>Địa chỉ cụ thể</td>
                    <td>
                        <textarea disabled style="border:none" name="" id="" cols="50" rows="5"> <?= $hddt['address'] ?></textarea>
                    </td>
                </tr>

            </table>

        </div>
    </div>

</div>