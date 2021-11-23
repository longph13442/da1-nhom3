<div class="col-8">
    <div class="row">
        <div class=" form">
            <form class="form-signin col-9 mt-3 d-flex" onsubmit="return check_reset()" action="" method="post">
                <div class="col-10 mt-9">
                    <input type="hidden" name="ma_tai_khoan" value="<?= $khachhang['ma_tai_khoan'] ?>">
                    <input type="hidden" name="mat_khau" value="<?= $khachhang['mat_khau'] ?>">

                    <div class="form-group">
                        <label for="" class="form-label">Mật Khẩu cũ</label>
                        <input type="password" name="mat_khau_cu" value="" id="mat_khau_cu" class="form-control" placeholder="Mật khẩu cũ......">
                        <?php if (isset($error['mat_khau_cu'])) : ?>
                            <span class="text-danger"><?php echo $error['mat_khau_cu'] ?></span>
                        <?php endif; ?>
                        <div id="error1"></div>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Mật Khẩu Mới</label>
                        <input type="password" name="new_mat_khau" id="new_mat_khau" class="form-control" placeholder="Nhập Mật khẩu Mới......">
                        <div id="error2"></div>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Nhập Lại Mật Khẩu</label>
                        <input type="password" name="new_mat_khau_2" id="new_mat_khau_2" class="form-control" placeholder="Nhập Lại Mật khẩu......">
                        <div id="error3"></div>

                    </div>
                    <br>
                    <div class="form-group">
                        <button class="btn btn-warning" name="resetpass" type="submit">Thay Đổi Mật Khẩu</button>
                    </div>
                </div>

            </form>
        </div>
    </div>

</div>
<p class="mt-5 mb-3 text-muted text-center">© SunFlower - Store - nhom3</p>
<script src="<?= CLIENT_ASSET ?>dist/js/checkreset.js"></script>