<div class="col-8">
    <div class="row">
        <div class="" style="height: 80%;">
            <form class="form-signin col-9 mt-3 d-flex" method="post" onsubmit="return check_profile()" enctype="multipart/form-data" style="width: 100%;">
                <div class="col-9 mt-9">
                    <input type="hidden" name="ma_tai_khoan" value="<?= $khachhang['ma_tai_khoan'] ?>">
                    <div class="form-label-group">
                        <label for="inputEmail mb-5">Họ Và Tên</label>
                        <input type="text" id="inputEmail" name="ho_ten" value="<?= $khachhang['ho_ten'] ?>" class="form-control my-2 bg-light" placeholder="" autofocus="">
                    </div>
                    <div class="form-label-group">
                        <label for="inputPassword ">Tên Đăng Nhập</label>
                        <input type="text" name="ten_dang_nhap" value="<?= $khachhang['ten_dang_nhap'] ?>" class="form-control my-2 bg-light" placeholder="" disabled>
                    </div>
                    <div class="form-label-group">
                        <label for="inputPassword ">Email</label>
                        <input type="email" name="email" value="<?= $khachhang['email'] ?>" id="Email" class="form-control my-2 bg-light" placeholder="">
                        <div id="error1"></div>
                        <?php if (isset($error['email'])) : ?>
                            <span><?php echo $error['email'] ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="form-label-group">
                        <label for="inputPassword ">Số Điện Thoại</label>
                        <input type="text" id="" name="sdt" value="<?= $khachhang['sdt'] ?>" id="sdt" class="form-control my-2 bg-light" placeholder="">
                        <div id="error2"></div>
                        <?php if (isset($error['sdt'])) : ?>
                            <span><?php echo $error['sdt'] ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="form-label-group">
                        <label for="inputPassword ">Ngày Sinh</label>
                        <input type="date" name="ngay_sinh" value="<?= $khachhang['ngay_sinh'] ?>" class="form-control my-2 bg-light" placeholder="">
                    </div>
                    <button class="btn  btn-warning btn-md my-4" type="submit" name="profile">Lưu Thay Đổi</button>
                    <p class="mt-5 mb-3 text-muted text-center">© SunFlower - Store - nhom3</p>
                </div>
                <div class="col-2 text-center mt-3 ms-5 ">
                    <input type="hidden" name="anhcu" value="<?= $khachhang['hinh_anh'] ?>">
                    <?php if ($khachhang['hinh_anh'] < 0) : ?>
                        <img src="https://scr.vn/wp-content/uploads/2020/07/Avatar-Facebook-tr%E1%BA%AFng.jpg" alt="mdo" width="100" height="100" class="rounded-circle">
                    <?php else : ?>
                        <img src="<?= ROOT_URL . IMG ?><?= $khachhang['hinh_anh'] ?>" class="boder rounded-circle" alt="..." height="100" width="100">
                    <?php endif; ?>
                    <br>
                    <?php if (isset($errorimg['hinh_anh'])) : ?>
                        <span><?php echo $errorimg['hinh_anh'] ?></span>
                    <?php endif; ?>
                    <div class="upload-btn-wrapper">
                        <button class="custombtn">Chọn ảnh</button>
                        <input type="file" name="hinh_anh" id="" class="btn btn-warning btn-sm mt-3 " style="width: 95%;">
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
<script src="<?= CLIENT_ASSET ?>/dist/js/checkprofile.js"></script>