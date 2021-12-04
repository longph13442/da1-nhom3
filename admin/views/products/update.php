<div class="col-12 grid-margin stretch-card mb-5 mt-3">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Cập nhật sản phẩm</h4>

            <form class="forms-sample" action="save-update" method="post" enctype="multipart/form-data">
                <div class="form-group mb-2">
                    <label for="exampleInputName1">Tên sản phẩm</label>
                    <input type="text" name="ten_sp" class="form-control" id="" placeholder="Nhập tên sản phẩm..." required value="<?php echo $info['ten_sp'] ?>">
                    <span class="text-danger text-uppercase mt-2"><?php if (isset($error['ten_sp']) && ($error['ten_sp'] != "")) echo $error['ten_sp'] ?></span>
                </div>
                <div class="form-group mb-2">
                    <label for="exampleInputEmail3">Đơn giá</label>
                    <input type="number" name="giatien" class="form-control" id="" placeholder="Nhập đơn giá..." required value="<?php echo $info['giatien'] ?>">
                    <span class="text-danger text-uppercase mt-2"><?php if (isset($error['giatien']) && ($error['giatien'] != "")) echo $error['giatien'] ?></span>
                </div>
                <div class="form-group mb-2">
                    <label for="exampleInputPassword4">Giảm giá(Giảm theo %)</label>
                    <input type="number" name="giamgia" class="form-control" id="" placeholder="Nhập giảm giá...0-> 100%" value="<?php echo $info['giamgia'] ?>">
                    <span class="text-danger text-uppercase mt-2"><?php if (isset($error['giamgia']) && ($error['giamgia'] != "")) echo $error['giamgia'] ?></span>
                </div>
                <div class="form-group mb-2">
                    <label for="exampleSelectGender">Loại hàng</label>

                    <select class="form-control" name="ma_loai" id="exampleSelectGender">
                        <option value="<?php echo $info['ma_loai'] ?>" selected> </option>
                        <?php foreach ($ct as $item) : ?>
                            <?php extract($item);  ?>
                            <option value="<?php echo $ma_loai ?>"><?php echo $ten_loai ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label for="exampleSelectGender">Đặc biệt</label>
                    <select class="form-control" name="dacbiet" id="exampleSelectGender">
                        <option value="<?php echo $info['dacbiet'] ?>" selected> <?php if ($info['dacbiet'] >= 1) {
                                                                                        echo "có";
                                                                                    } else {
                                                                                        echo "không";
                                                                                    }  ?> </option>
                        <option value="1">Có</option>
                        <option value="0">Không</option>
                    </select>
                </div>

                <div class="form-group mb-2">
                    <label>Ảnh sản phẩm</label>
                    <input type="file" name="anh_sp" class="form-control" />
                    <div class=""><img src="<?= IMG . $info['anh_sp'] ?>" alt="" width="100%"> </div>
                    <span class="text-danger text-uppercase mt-2"><?php if (isset($error['anh_sp']) && ($error['anh_sp'] != "")) echo $error['anh_sp'] ?></span>
                </div>
                <div class="form-group mb-2">
                    <label for="exampleInputCity1">Số lượng</label>
                    <input type="number" name="soluong" class="form-control" id="" placeholder="Nhập số lượng..." required value="<?php echo $info['soluong'] ?>">
                    <span class="text-danger text-uppercase mt-2"><?php if (isset($error['soluong']) && ($error['soluong'] != "")) echo $error['soluong'] ?></span>
                </div>
                <div class="form-group mb-2">
                    <label for="exampleTextarea1">Mô tả ngắn</label>
                    <textarea class="form-control" name="mota" rows="2" required> <?php echo $info['mota'] ?></textarea>
                    <span class="text-danger text-uppercase mt-2"><?php if (isset($error['mota']) && ($error['mota'] != "")) echo $error['mota'] ?></span>
                </div>
                <div class="form-group mb-2">
                    <label for="exampleTextarea1">Mô tả dài</label>
                    <textarea class="form-control" name="mota_dai" id="exampleTextarea1" rows="4" required><?php echo $info['mota_dai'] ?></textarea>
                    <span class="text-danger text-uppercase mt-2"><?php if (isset($error['mota_dai']) && ($error['mota_dai'] != "")) echo $error['mota_dai'] ?></span>
                </div>
                <input type="hidden" name="ma_sp" value="<?php echo $info['ma_sp'] ?>">
                <input type="hidden" name="luotxem" value="<?php echo $info['luotxem'] ?>">
                <input type="hidden" name="ngaytao" value="<?php echo $info['ngaytao'] ?>">
                <button type="submit" name="submit" class="btn btn-primary me-2 my-2">cập nhật mới</button>
                <button type="cancel" class="btn btn-light my-2">Hủy</button>
            </form>
        </div>
    </div>
</div>