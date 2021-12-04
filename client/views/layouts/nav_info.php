<div class="col-3">
    <ul class="list-group">

        <li class="list-group-item p-3 bg-light text-dark "> <i class="fas fa-user p-3"></i><a class="text-decoration-none" href="<?= ROOT_URL ?>profile">Tài Khoản</a></li>
        <li class="list-group-item p-3"><i class="fas fa-map-marker-alt p-3"></i><a class="text-decoration-none" href="<?= Account ?>address">Địa chỉ</a></li>
        <li class="list-group-item p-3"><i class="fas fa-file-invoice p-3"></i><a class="text-decoration-none" href="<?= ROOT_URL ?>account/cart">Hóa Đơn</a></li>
        <li class="list-group-item p-3"><i class="fas fa-unlock-alt p-3"></i><a class="text-decoration-none" href="<?= Account ?>reset">Mật Khẩu</a></li>
        <?php if ((!isset($_SESSION['admin']) != 1 || !isset($_SESSION['nhanvien']) != 1)) : ?>
            <li class="list-group-item p-3"><i class="fas fa-user p-3"></i><a onclick="javascript:openWindow(this.href);return false;" href="<?= rtrim(ADMIN_URL, '/')  ?>" class="text-decoration-none">Quản trị</a></li>
        <?php endif; ?>
        <li class="list-group-item p-3"><i class="fas fa-sign-out-alt p-3"></i><a class="text-decoration-none" href="<?= Account ?>/logout">Đăng Xuất</a></li>
    </ul>
</div>