<body class="bg-light">
    <div class="container">
        <main>

            <a class="btn btn-warning" href="<?= ROOT_URL ?>admin/user">Danh Sách Tài Khoản</a>
            <div class="row g-5">
                <h3 class="text-center">Sửa Tài Khoản</h3>
                <div class="col-md-7 col-lg-8 mx-auto">
                    <form class="needs-validation" action="" method="POST" enctype="multipart/form-data" onsubmit="return checkregister()" novalidate="">
                        <div class="row g-3">
                            <div class="col-12">
                                <input type="hidden" name="ma_tai_khoan" value="<?= $ma_tai_khoan ?>">
                                <label for="firstName" class="form-label">Họ và tên </label>
                                <input type="text" class="form-control" name="ho_ten" value="<?= $user['ho_ten'] ?>" id="name" placeholder="" value="" required="">
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                                <div class="error1" id="error1"></div>
                            </div>

                            <div class="col-12">
                                <label for="username" class="form-label">Tên tài khoản</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text">@</span>
                                    <input type="text" class="form-control" value="<?= $user['ten_dang_nhap']; ?>" name="ten_dang_nhap" id="username" placeholder="Username" required="">
                                </div>
                                <div class="error2" id="error2"></div>
                            </div>
                            <div class="col-12">
                                <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                                <input type="email" name="email" value="<?= $user['email'] ?>" class="form-control" id="email" placeholder="..@gmail.com">
                                <div class="invalid-feedback">
                                    Please enter a valid email address for shipping updates.
                                </div>
                                <div class="error3" id="error3"></div>

                            </div>

                            <div class="col-12">
                                <label for="address" class="form-label">Địa chỉ</label>
                                <input type="text" name="dia_chi" value="<?= $user['dia_chi'] ?>" class="form-control" id="address" placeholder="1234 ABC" required="">
                                <div class="invalid-feedback">
                                    Please enter your shipping address.
                                </div>
                                <div class="error4" id="error4"></div>

                            </div>

                            <div class="col-12">
                                <label for="address2" class="form-label">Số điện thoại<span class="text-muted"></span></label>
                                <input type="text" name="sdt" value="<?= $user['sdt'] ?>" class="form-control" id="phone" placeholder="">
                                <div class="error5" id="error5"></div>
                            </div>
                            <div class="col-12">
                                <input type="hidden" name="thumhinh" value="<?= $user['hinh_anh'] ?>">
                                <label for="address2" class="form-label">Hình Ảnh<span class="text-muted"></span></label>
                                <input type="file" name="hinh_anh" class="form-control" id="phone" placeholder="">
                                <?php if (isset($error['hinh_anh'])) : ?>
                                    <span><?php echo $error['hinh_anh']; ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="col-12">
                                <img src="<?= ROOT_URL . IMG  ?><?= $user['hinh_anh'] ?>" width="150" alt="">
                            </div>

                            <div class="error6" id="error_mk"></div>
                            <div class="col-md-4">
                                <label for="state" class="form-label">Giới tính</label>
                                <select class="form-select" name="gioitinh" id="state" required="">
                                    <option value="" <?= $user['gioitinh'] == 0 ? 'selected' : ''; ?>>Choose...</option>
                                    <option value="1" <?= $user['gioitinh'] == 1 ? 'selected' : '' ?>>Nam</option>
                                    <option value="2" <?= $user['gioitinh'] == 2 ? 'selected' : '' ?>>Nữ</option>
                                    <option value="3" <?= $user['gioitinh'] == 3 ? 'selected' : '' ?>>Khác..</option>
                                </select>
                                <div class="invalid-feedback">
                                    Không được để trống
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="zip" class="form-label">Ngày Sinh</label>
                                <input type="date" name="ngay_sinh" value="<?= $user['ngay_sinh'] ?>" class="form-control" id="date" placeholder="" required="">
                                <div class="error7" id="error7"></div>
                            </div>
                            <div class="col-12">
                                <label for="" class="form-label">Trạng Thái</label>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="" <?= $user['trang_thai'] == 0 ? 'checked' : '' ?> name="trang_thai" id="inlineRadio1">
                                    <label class="form-check-label" for="inlineRadio1">Hoạt Động</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" value="1" <?= $user['trang_thai'] ? 'checked' : '' ?> type="radio" name="trang_thai" id="inlineRadio2">
                                    <label class="form-check-label" for="inlineRadio2">Ngưng Hoạt Động</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="" class="form-label">
                                    Vai trò
                                </label>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" <?= $user['vai_tro'] == 0 ? 'checked' : '' ?> value="" name="vai_tro" id="inlineRadio1">
                                    <label class="form-check-label" for="inlineRadio1">Khách Hàng</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" value="1" <?= $user['vai_tro'] ? 'checked' : '' ?> type="radio" name="vai_tro" id="inlineRadio2">
                                    <label class="form-check-label" for="inlineRadio2">Nhân Viên</label>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4">
                        <button class="w-100 btn btn-warning btn-lg" name="edit" type="submit">Sửa Thành Viên</button>
                    </form>
                </div>
            </div>
        </main>


    </div>
    <script src="<?= ADMIN_ASSET ?>/js/checkregister.js"></script>
</body>