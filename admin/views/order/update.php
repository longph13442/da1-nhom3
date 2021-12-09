<div class="col-12 grid-margin stretch-card mb-5 mt-3">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Cập nhật đơn hàng</h4>
            <br>
            <form class="forms-sample" action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $info['id'] ?>">
                <div class="form-group mb-2">
                    <label for="exampleInputName1">Tên Khách Hàng</label>
                    <input type="text" name="name" class="form-control" id="" value="<?= $info['name'] ?>">
                    <span class="text-danger text-uppercase mt-2"><?php if (isset($error['ten_sp']) && ($error['ten_sp'] != "")) echo $error['ten_sp'] ?></span>
                </div>
                <div class="form-group mb-2">
                    <label for="exampleInputName1">Số điện thoại</label>
                    <input type="text" name="phone" class="form-control" id="" value="<?= $info['phone'] ?>">
                    <span class="text-danger text-uppercase mt-2"><?php if (isset($error['ten_sp']) && ($error['ten_sp'] != "")) echo $error['ten_sp'] ?></span>
                </div>
                <div class="form-group mb-2">
                    <label for="exampleInputName1">Địa chỉ</label>
                    <input class="form-control" name="address" value="<?= $info['address'] ?>" id=""></input>
                    <span class="text-danger text-uppercase mt-2"><?php if (isset($error['ten_sp']) && ($error['ten_sp'] != "")) echo $error['ten_sp'] ?></span>
                </div>
                <div class="form-group mb-2">
                    <label for="exampleInputName1">Ghi chú</label>
                    <textarea name="note" class="form-control" id="" cols="30" rows="5"><?= $info['note'] ?></textarea>
                    <span class="text-danger text-uppercase mt-2"><?php if (isset($error['ten_sp']) && ($error['ten_sp'] != "")) echo $error['ten_sp'] ?></span>
                </div>
                <button type="submit" name="updatecart" class="btn btn-primary me-2 my-2">cập nhật mới</button>
            </form>
            <form action="<?= ROOT_URL ?>order/add" method="post">
                <input type="hidden" name="id" value="<?= $info['id'] ?>">
                <div class="mb-3">
                    <label for="">Thêm Sản Phẩm(Tùy chọn)</label>
                    <div class="input-group">
                        <select class="form-select col-5" name="ma_sp" id="">
                            <option value="0">Chọn</option>
                            <?php foreach ($sp as $s) : ?>
                                <option value="<?= $s['ma_sp'] ?>"><?= $s['ten_sp'] ?> <p> Giá </p><?= number_format($s['gianew']) ?>VNĐ</option>
                            <?php endforeach; ?>
                        </select>
                        <input type="hidden" name="gianew" value="<?= $s['gianew']  ?>">

                        <input class="form-control col-1" min="0" type="number" name="quantyti" id="">
                        <button name="orderadd" type="submit" class="btn btn-primary">Thêm</button>
                    </div>
                </div>
            </form>
            <label for="exampleInputName1">Tên đơn hàng</label>
            <?php $sum = 0; ?>
            <?php $total = 0 ?>
            <?php foreach ($info2 as $in) : ?>
                <?php $sum += (float)$in['price'] * (int)$in['quantyti'] ?>
                <?php if ($sum < 200000 && $sum > 0) {
                    $_SESSION['ship'] = 30000;
                } else if ($sum == 0) {
                    $_SESSION['ship'] = 0;
                } else {
                    $_SESSION['ship'] = 0;
                }
                ?>
                <form action="<?= ROOT_URL ?>order/upquantity" method="post">
                    <input type="hidden" name="ship" value="<?= $_SESSION['ship'] ?>">
                    <div class="form-group mb-2">
                        <input type="hidden" name="id" value="<?= $info['id'] ?>">
                        <div class="input-group">
                            <input type="text" name="ten_sp" class="form-control" id="" value="<?= $in['ten_sp'] ?>">
                            <a class="btn btn-primary" href="<?= ROOT_URL ?>order/deletesp?product_id=<?= $in['product_id'] ?>">Xóa</a>
                        </div>

                        <input type="number" name="price" class="form-control" id="" placeholder="Nhập đơn giá..." disabled value="<?= $in['price'] ?>">
                        <input type="hidden" name="price" class="form-control" id="" placeholder="Nhập đơn giá..." value="<?= $in['price'] ?>">
                        <input type="hidden" name="product_id" value="<?= $in['product_id'] ?>">
                        <div class="input-group">
                            <input type="number" min="0" name="quantyti" class="form-control" id="" placeholder="Nhập số lượng..." required value="<?php echo $in['quantyti'] ?>">
                            <button type="submit" class="btn btn-primary" name="upquantity">Cập nhật</button>
                        </div>
                    </div>

                </form>
            <?php endforeach; ?>
            <div class="form-group mb-2">
                <label for="">Phí Vận chuyển</label>
                <input type="text" class="form-control" value="<?= $_SESSION['ship'] ?>" id="">
            </div>
            <div class="form-group mb-2">
                <?php $tong = $sum + $_SESSION['ship'] ?>
                <label for="exampleInputEmail3">Tổng tiền</label>
                <input type="number" name="" class="form-control" disabled id="" placeholder="Nhập đơn giá..." required value="<?php echo $tong ?>">
            </div>
        </div>
        <?php if ($info['total'] > 0) : ?>

            <div class="form-group mb-2">
                <label for="exampleInputEmail3">Áp dụng khuyến mãi</label>
                <input type="number" name="" class="form-control" disabled id="" required value="<?php echo $info['total'] ?>">
            </div>
        <?php endif; ?>

    </div>
</div>
</div>