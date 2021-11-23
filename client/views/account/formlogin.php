<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="width: 600px;">
            <div class="modal-header">
                <button type="button" class="btn-close" name="" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form-signin mx-auto" method="POST" action="" style=" width: 500px;">
                    <div class="text-center my-4">
                        <img class="mb-4" src="<?= ADMIN_ASSET ?>image/logo.png" alt="" width="72" height="72">
                        <h1 class="h3 mb-3 font-weight-normal">ĐĂNG NHẬP TÀI KHOẢN</h1>
                    </div>
                    <div class="form-label-group">
                        <label for="inputEmail mb-5">Tên Đăng Nhập</label>
                        <input type="text" name="ten_dang_nhap" value="<?php if (isset($ten_dang_nhap)) {
                                                                            echo $ten_dang_nhap;
                                                                        } ?>" id="inputEmail" value="" class="form-control my-2" placeholder="Nhập Tên Đăng Nhập">
                    </div>
                    <div class="form-label-group">
                        <label for="inputPassword ">Password</label>
                        <input type="password" value="<?php if (isset($mat_khau)) {
                                                            echo $mat_khau;
                                                        } ?>" name="mat_khau" id="inputPassword" class="form-control my-2" placeholder="Nhập mật khẩu...">
                    </div>
                    <div class=" row checkbox mb-3 my-4">
                        <label class="col-4">
                            <input type="checkbox" <?php echo isset($check) ? "checked" : ""  ?> name="remember" value="1"> Remember me
                        </label>
                        <label class="col-4">
                            <a class="text-decoration-none" href="<?= Account ?>send">Quên mật khẩu ?</a>
                        </label>
                        <label class="col-4">
                            <a class="text-decoration-none" href="<?= Account ?>register">Chưa có tài khoản ?</a>
                        </label>
                    </div>
                    <button onclick="" class="btn btn-lg btn-warning btn-block" name="signin" type="submit">Sign in</button>
                    <p class="mt-5 mb-3 text-muted text-center">© SunFlower - Store</p>
                </form>
            </div>
        </div>
    </div>
</div>
<?php if (isset($_GET['msg'])) : ?>
    <div class="alert alert-warning alert-dismissible fade show mx-3" role="alert">
        <?php echo $_GET['msg']; ?>
        <button type="button" onclick="notice_login()" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>
<?php if (isset($error['ten_dang_nhap'])) : ?>
    <?php echo $error['ten_dang_nhap']; ?>
<?php endif; ?>
<?php if (isset($error['mat_khau'])) : ?>
    <?php echo $error['mat_khau']; ?>
<?php endif; ?>
<!-- end form -->