<body class="bg-light">
    <div class="container">
        <main>
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="<?= ADMIN_ASSET ?>image/logo.png" alt="" height="100">
                <h2>ĐĂNG KÍ THÀNH VIÊN</h2>
                <p class="lead">Trở thành thành viên của SunFlower để nhận ưu đãi ngay lần mua hàng đầu tiền.</p>
            </div>

            <div class="row g-5">
                <div class="col-md-7 col-lg-8 mx-auto">
                    <h4 class="mb-3">Nhập thông tin của bạn.</h4>
                    <form class="" method="POST" onsubmit="return checkregister()" novalidate="">
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="firstName" class="form-label">Họ và tên </label>
                                <input type="text" class="form-control" name="ho_ten" id="name" placeholder="" value="" required="">
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                                <div class="text-danger error1" id="error1"></div>
                            </div>
                            <div class="col-12">
                                <label for="address" class="form-label">Địa chỉ</label>
                                <input type="text" name="dia_chi" class="form-control" id="address" placeholder="1234 ABC" required="">
                                <div class="invalid-feedback">
                                    Please enter your shipping address.
                                </div>
                                <div class="text-danger error4" id="error4"></div>

                            </div>
                            <div class="col-12">
                                <label for="address2" class="form-label">Số điện thoại<span class="text-muted"></span></label>
                                <input type="text" name="sdt" class="form-control" id="phone" placeholder="">
                                <div class="text-danger error5" id="error5"></div>
                                <?php if (isset($error['sdt'])) : ?>
                                    <span> <?php echo $error['sdt']; ?></span>
                                <?php endif; ?>
                            </div>

                            <div class="col-12">
                                <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="..@gmail.com">
                                <div class="invalid-feedback">
                                    Please enter a valid email address for shipping updates.
                                </div>
                                <?php if (isset($error['email'])) : ?>
                                    <span> <?php echo $error['email']; ?></span>
                                <?php endif; ?>
                                <div class="text-danger error3" id="error3"></div>

                            </div>
                            <div class="col-12">
                                <label for="username" class="form-label">Tên tài khoản</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text">@</span>
                                    <input type="text" class="form-control" name="ten_dang_nhap" id="username" placeholder="Username" required="">
                                </div>
                                <?php if (isset($error['ten_dang_nhap'])) : ?>
                                    <span> <?php echo $error['ten_dang_nhap']; ?></span>
                                <?php endif; ?>
                                <div class="text-danger error2" id="error2"></div>

                            </div>



                            <div class="col-12">
                                <label for="" class="form-label">Mật Khẩu</label>
                                <input type="password" name="mat_khau" class="form-control" id="password">
                                <div class="text-danger error6" id="error6"></div>
                            </div>
                            <div class="col-12">
                                <label for="" class="form-label">Nhập Lại Mật Khẩu Mật Khẩu</label>
                                <input type="password" name="mat_khau_2" class="form-control" id="password2">
                            </div>
                            <div class="text-danger error6" id="error_mk"></div>

                            <div class="col-md-4">
                                <label for="state" class="form-label">Giới tính</label>
                                <select class="form-select" name="gioitinh" id="state" required="">
                                    <option value="">Choose...</option>
                                    <option value="1">Nam</option>
                                    <option value="2">Nữ</option>
                                    <option value="3">Khác..</option>
                                </select>
                                <div class="invalid-feedback">
                                    Không được để trống
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="zip" class="form-label">Ngày Sinh</label>
                                <input type="date" name="ngay_sinh" class="form-control" id="date" placeholder="" required="">
                                <div class="text-danger error7" id="error7"></div>
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="checkdk" id="check">
                            <label class="form-check-label" for="same-address">Đồng ý với các điều khoản và chính sách của SunFlower</label>
                        </div>
                        <div id="text-danger error10"></div>
                        <hr class="my-4">

                        <button class="w-100 btn btn-warning btn-lg" name="register" type="submit">Đăng kí ngay</button>
                    </form>
                </div>
            </div>
        </main>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <ul class="list-inline">
                <li class="list-inline-item"><a class="text-decoration-none" href="/du1-NHOM3">Trang Chủ</a></li>
                <li class="list-inline-item"><a href="../../../../da1-nhom3/client/business/login/?change">Bạn Quên Mật Khẩu ?</a></li>
            </ul>
            <p class="mb-1">© 2021-2022 Sunflower store nhom3</p>

        </footer>
    </div>
    <script src="<?= CLIENT_ASSET ?>/dist/js/checkregister.js"></script>
</body>