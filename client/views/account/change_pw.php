<form class="form-signin mx-auto" action="<?= Account ?>forgot" method="post" style=" width: 500px;">

    <div class="text-center my-4">
        <a href="<?= ROOT_URL ?>"><img class="mb-4" src="<?= ROOT_URL . IMG ?>logo.png" alt="" width="72" height="72"></a>
        <h1 class="h3 mb-3 font-weight-normal">XÁC NHẬN TÀI KHOẢN</h1>
    </div>

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <p> <?php if (isset($msg)) {
                echo $msg;
            } ?></p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="form-label-group">
        <label for="inputPassword ">Nhập mã xác nhận</label>
        <input type="text" id="" name="code" class="form-control my-2" placeholder="Nhập mã xác..." required="">
        <?php if (isset($errormail)) : ?>
            <?php echo $errormail; ?>
        <?php endif; ?>
    </div>
    <div class="form-label-group">
        <label for="inputPassword ">Mật khẩu mới</label>
        <input type="password" id="inputPassword" name="newpass" class="form-control my-2" placeholder="Nhập mật khẩu..." required="">
    </div>
    <div class="form-label-group">
        <label for="inputPassword ">Xác nhận mật khẩu</label>
        <input type="password" id="inputPassword" name="confirmpass" class="form-control my-2" placeholder="Nhập mật khẩu..." required="">
    </div>

    <button class="btn btn-lg btn-warning btn-block" name="verypass" type="submit">Xác nhận</button>
    <p class="mt-5 mb-3 text-muted text-center">© SunFlower - Store</p>
</form>