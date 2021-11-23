<form class="form-signin mx-auto" style=" width: 500px;" action="<?php Account  ?>  forgot" method="post">
    <div class="text-center my-4">
        <a href="<?= ROOT_URL ?>"><img class="mb-4" src="<?= ROOT_URL . IMG ?>logo.png" alt="" width="72" height="72"></a>
        <h1 class="h3 mb-3 font-weight-normal">BẠN QUÊN MẬT KHẨU ?</h1>

    </div>

    <div class="form-label-group">
        <label for="inputEmail mb-5">Nhập email của bạn</label>
        <input type="email" id="inputEmail" class="form-control my-2" placeholder="Nhập email" required="" autofocus="">

    </div>

    <button class="btn btn-lg btn-warning btn-block" name="change" type="submit">Send</button>
    <p class="mt-5 mb-3 text-muted text-center">© SunFlower - Store</p>
</form>