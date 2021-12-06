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
                <label for="exampleInputName1">Tên đơn hàng</label>
                <?php $sum = 0; ?>
                <?php foreach ($info2 as $in) : ?>
                    <?php $price = $in['price'] * $in['quantyti'] ?>
                    <?php $sum += $price; ?>
                    <div class="form-group mb-2">
                        <input type="text" name="ten_sp" class="form-control" id="" value="<?= $in['ten_sp'] ?>">
                        <input type="number" name="price" class="form-control" id="" placeholder="Nhập đơn giá..." disabled value="<?= $in['price'] ?>">
                        <input type="hidden" name="price" class="form-control" id="" placeholder="Nhập đơn giá..." value="<?= $in['giatien'] ?>">
                        <input type="number" name="quantyti" class="form-control" id="" placeholder="Nhập số lượng..." required value="<?php echo $in['quantyti'] ?>">
                    </div>
                <?php endforeach; ?>
                <div class="form-group mb-2">
                    <label for="exampleInputEmail3">Tổng tiền</label>
                    <input type="number" name="" class="form-control" disabled id="" placeholder="Nhập đơn giá..." required value="<?php echo $sum ?>">
                </div>
                <?php if ($info['total'] > 0) : ?>
                    <div class="form-group mb-2">
                        <label for="exampleInputEmail3">Áp dụng khuyến mãi</label>
                        <input type="number" name="" class="form-control" disabled id="" required value="<?php echo $info['total'] ?>">
                    </div>
                <?php endif; ?>
                <button type="submit" name="updatecart" class="btn btn-primary me-2 my-2">cập nhật mới</button>
                <button type="cancel" class="btn btn-light my-2">Hủy</button>
            </form>
        </div>
    </div>
</div>