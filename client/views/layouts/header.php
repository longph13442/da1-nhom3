<?php
$cart = (isset($_SESSION["cart"])) ? $_SESSION["cart"] : [];
if (isset($_SESSION["ten_dang_nhap"])) {
    if ($cart == []) {
        $link = 'danh-muc';
    } else {
        $link = 'pay';
    }
} else {
    $link = 'account/register';
}
?>
<header class=" row bg-white header">
    <div class="container border-bottom ">
        <div class="  d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="<?= ROOT_URL ?>" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                <img src="<?= ADMIN_ASSET ?>image/logo.png" alt="" height="60">
            </a>
            <!-- end logo -->
            <nav class=" stroke nav col-12 col-lg-auto me-lg-auto justify-content-center">
                <ul class=" mb-md-0 ">
                    <li><a href="<?= ROOT_URL ?>" class="nav-link px-2 link-secondary">Trang chủ</a></li>
                    <li><a href="<?= ROOT_URL ?>danh-muc" class="nav-link px-2 link-dark">Sản Phẩm</a></li>
                    <li><a href="<?= ROOT_URL ?>about" class="nav-link px-2 link-dark">Giới thiệu</a></li>
                    <li><a href="<?= ROOT_URL ?>blog" class="nav-link px-2 link-dark">Blog</a></li>
                </ul>
            </nav>
            <!-- end menu -->
            <form class="col-sm-12 col-xl-5 col-lg-5 col-md-12 mb-3 mb-lg-0  " action="<?= ROOT_URL ?>tim-kiem" method="post">
                <input type="search" class="form-control" placeholder="Search..." aria-label="Search" name="kyw">
            </form>
            <!-- end search -->
            <div class=" cart col-auto pt-4 me-2">
                <ul>
                    <li class="nav-link"><a href="cart"><span class="material-icons-outlined ">
                                shopping_bag
                            </span></a>
                        <ul class=" viewcart order-md-last mx-auto bg-success py-3 px-4">

                            <li class="d-flex justify-content-between align-items-center mb-3">
                                <span class="text-warning fw-bold">Giỏ hàng của bạn</span>
                            </li>
                            <ul class="list-group mb-3">
                                <?php $sum = 0; ?>
                                <?php foreach ($cart as $key) : ?>
                                    <?php $sum += (int)$key["price"];
                                    ?>
                                    <li class="list-group-item d-flex justify-content-between lh-sm">
                                        <div class="d-flex">
                                            <img src="<?= ADMIN_ASSET ?>image/<?= $key["hinh"] ?>" alt="" height="40">
                                            <h6 class="my-3 mx-3"><?= $key["tensp"] ?></h6>
                                        </div>
                                        <span class="my-3 mx-3"><?= $key["soluong"] ?></span>
                                        <span class="text-danger py-3"><?= $key["price"] ?></span>
                                    </li>
                                <?php endforeach ?>
                                <div class="d-flex py-3 justify-content-between ">
                                    <h6 class="text-warning ms-3 fw-bold">Tổng tiền : </h6>
                                    <span class="text-warning ms-3 fw-bold"><?= $sum ?></span>
                                </div>
                                <div class="card p-2">
                                    <div class="input-group ">
                                        <button type="submit" class="btn btn-success text-center mx-auto" style="width: 90%;"><a href="<?= ROOT_URL ?>cart" class="nav-link text-dark">Xem giỏ hàng</a></button>
                                    </div>
                                </div>
                                <div class="card p-2">
                                    <div class="input-group ">
                                        <button type="submit" class="btn btn-danger text-center mx-auto" style="width: 90%;"><a href="<?= $link ?>" class="nav-link text-dark">Thanh toán</a></button>
                                    </div>
                                </div>

                            </ul>

                        </ul>
                    </li>

                </ul>

            </div>
            <!-- end cart -->
            <div class="col-auto">
                <?php
                if (isset($_SESSION['ten_dang_nhap'])) : ?>
                    <div class="dropdown">
                        <ul class="proflie-dropdown navbar-nav">
                            <li class="nav-item d-inline">
                                <a class="text-decoration-none dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php if (avatar() < 0) : ?>
                                        <img src="https://scr.vn/wp-content/uploads/2020/07/Avatar-Facebook-tr%E1%BA%AFng.jpg" alt="mdo" width="32" height="32" class="rounded-circle">
                                    <?php else : ?>
                                        <img src="<?= ROOT_URL . IMG  ?><?= avatar(); ?>" alt="mdo" width="32" height="32" class="rounded-circle">
                                    <?php endif; ?>
                                </a>
                                <div style="transform: translate3d(-93px, 46px, 0px); right: 150px;" class=" dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="text-decoration-none dropdown-item " href="<?= ROOT_URL ?>profile">Thông tin</a>
                                    <?php if (!isset($_SESSION['admin']) != 1 || !isset($_SESSION['nhanvien']) != 1) : ?>
                                        <a class="text-decoration-none dropdown-item " onclick="javascript:openWindow(this.href);return false;" href="<?= rtrim(ADMIN_URL, '/')  ?>">Quản trị</a>
                                    <?php endif; ?>
                                    <a class="text-decoration-none dropdown-item" href="<?= ROOT_URL ?>sanpham-yt">Yêu thích</a>
                                    <a class="text-decoration-none dropdown-item" href="<?= ROOT_URL ?>account/logout">Đăng Xuất</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                <?php else : ?>
                    <a href="login" class=" btn btn-outline-warning" data-bs-toggle="modal" data-bs-target=" #exampleModal">
                        Tài Khoản
                    </a>
                <?php endif; ?>
            </div>
            <!-- end accout -->
        </div>
    </div>


</header>

<?php
login();
?>
<?php if (isset($_GET['msg'])) : ?>
    <div class="alert alert-warning alert-dismissible fade show mx-3" role="alert">
        <?php echo $_GET['msg']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>