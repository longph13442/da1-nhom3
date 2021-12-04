<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <body class="bg-light">
        <div class="container">
            <main>
                <a class="btn btn-warning" href="<?= ADMIN_URL ?>user">Danh Sách Tài Khoản</a>
                <div class="row g-5">
                    <h3 class="text-center">Thêm Tài Khoản</h3>
                    <div class="col-md-7 col-lg-8 mx-auto">
                        <form class="" action="" method="POST" enctype="multipart/form-data" onsubmit="return checkregister()" novalidate="">
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="firstName" class="form-label">Họ và tên </label>
                                    <input type="text" class="form-control" name="ho_ten" id="name" placeholder="" value="" required="">
                                    <div class="text-danger error1" id="error1"></div>
                                </div>
                                <div class="col-12">
                                    <label for="username" class="form-label">Tên tài khoản</label>
                                    <div class="input-group has-validation">
                                        <span class="input-group-text">@</span>
                                        <input type="text" class="form-control" name="ten_dang_nhap" id="username" placeholder="Username" required="">
                                    </div>
                                    <?php if (isset($error['ten_dang_nhap'])) : ?>
                                        <span class="text-danger"> <?php echo $error['ten_dang_nhap']; ?></span>
                                    <?php endif; ?>
                                    <div class="text-danger error2" id="error2"></div>

                                </div>

                                <div class="col-12">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="Email" name="email" class="form-control" id="email" placeholder="..@gmail.com">
                                    <div class="text-danger error3" id="error3"></div>
                                    <?php if (isset($error['email'])) : ?>
                                        <span class="text-danger"> <?php echo $error['email']; ?></span>
                                    <?php endif; ?>
                                </div>

                                <div class="col-12">
                                    <label for="address" class="form-label">Địa chỉ</label>
                                    <input type="text" name="dia_chi" class="form-control" id="address" placeholder="1234 ABC" required="">
                                    <div class="text-danger error4" id="error4"></div>
                                </div>

                                <div class="col-12">
                                    <label for="address2" class="form-label">Số điện thoại<span class="text-muted"></span></label>
                                    <input type="text" name="sdt" class="form-control" id="phone" placeholder="">
                                    <div class="text-danger error5" id="error5"></div>
                                    <?php if (isset($error['sdt'])) : ?>
                                        <span class="text-danger"> <?php echo $error['sdt']; ?></span>
                                    <?php endif; ?>
                                </div>
                                <div class="col-12">
                                    <label for="address2" class="form-label">Hình Ảnh<span class="text-muted"></span></label>
                                    <input type="file" name="hinh_anh" class="form-control" placeholder="">
                                    <?php if (isset($error['hinh_anh'])) : ?>
                                        <span class="text-danger"><?php echo $error['hinh_anh']; ?></span>
                                    <?php endif; ?>
                                </div>
                                <div class="col-12">
                                    <label for="" class="form-label">Mật Khẩu</label>
                                    <input type="password" name="mat_khau" class="form-control" id="password">
                                    <div class="text-danger error6" id="error6"></div>
                                </div>
                                <div class="col-12">
                                    <label for="" class="form-label">Nhập Lại Mật Khẩu Mật Khẩu</label>
                                    <input type="password" name="mat_khau_2" class="form-control" id="password2">
                                    <div class="text-danger" id="error_mk"></div>
                                </div>
                                <div class="col-md-4">
                                    <label for="state" class="form-label">Giới tính</label>
                                    <select class="form-select" name="gioitinh" id="state" required="">
                                        <option value="">Choose...</option>
                                        <option value="1">Nam</option>
                                        <option value="2">Nữ</option>
                                        <option value="3">Khác..</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="zip" class="form-label">Ngày Sinh</label>
                                    <input type="date" name="ngay_sinh" class="form-control" id="date" placeholder="" required="">
                                    <div class="text-danger error7" id="error7"></div>
                                </div>
                                <div class="col-12">
                                    <label for="" class="form-label">Trạng Thái</label>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" checked name="trang_thai" id="" value="">
                                        <label class="form-check-label" for="inlineRadio1">Hoạt Động</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="trang_thai" id="inlineRadio2" value="">
                                        <label class="form-check-label" for="inlineRadio2">Ngưng Hoạt Động</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="" class="form-label">
                                        Vai trò
                                    </label>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="vai_tro" checked id="inlineRadio1" value="">
                                        <label class="form-check-label" for="inlineRadio1">Khách Hàng</label>
                                    </div>
                                    <?php if (isset($_SESSION['admin'])) : ?>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" name="vai_tro" id="inlineRadio2" value="3">
                                            <label class="form-check-label" for="inlineRadio2">Nhân Viên</label>

                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="vai_tro" id="inlineRadio2" value="1">
                                            <label class="form-check-label" for="inlineRadio2">Quản Trị viên</label>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <hr class="my-4">
                            <button class="w-100 btn btn-warning btn-lg" name="adduser" type="submit">Thêm Thành Viên</button>
                        </form>
                    </div>
                </div>
            </main>


        </div>
        <script src="<?= ADMIN_ASSET ?>dist/js/checkregister.js"></script>
    </body>
</body>

</html>