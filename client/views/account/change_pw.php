<?php if ($result == null) : ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <?php if (isset($notice['msg'])) : ?>
            <?php echo $notice['msg']; ?>
        <?php endif; ?>
    </div>
<?php else : ?>
    <form class="form-signin mx-auto" action="" onsubmit="return checkchangepw();" method="post" style=" width: 500px;">
        <div class="text-center my-4">
            <a href="<?= ROOT_URL ?>"><img class="mb-4" src="<?= ROOT_URL . IMG ?>logo.png" alt="" width="72" height="72"></a>
            <h1 class="h3 mb-3 font-weight-normal">XÁC NHẬN TÀI KHOẢN</h1>
        </div>
        <input type="hidden" name="email" value="<?= $email['email'] ?>">
        <div class="form-label-group">
            <label for="inputPassword ">Mật khẩu mới</label>
            <input type="password" id="idpass1" name="newpass" class="form-control my-2" placeholder="Nhập mật khẩu...">
            <div class="text-danger" id="errornewpass"></div>
        </div>
        <div class="form-label-group">
            <label for="inputPassword ">Xác nhận mật khẩu</label>
            <input type="password" id="idpass2" name="confirmpass" class="form-control my-2" placeholder="Nhập mật khẩu...">
            <div class="text-danger" id="errornewpass2"></div>
        </div>
        <button class="btn btn-lg btn-warning btn-block" name="verypass" type="submit">Xác nhận</button>
        <p class="mt-5 mb-3 text-muted text-center">© SunFlower - Store</p>
    </form>
<?php endif; ?>