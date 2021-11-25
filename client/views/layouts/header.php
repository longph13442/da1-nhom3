<header class="p-3 m-2 row ">
    <div class="container ">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                <img src="<?= ADMIN_ASSET ?>image/logo.png" alt="" height="60">
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="<?= ROOT_URL ?>" class="nav-link px-2 link-secondary">Trang chủ</a></li>
                <li><a href="index.php?url=danh-muc" class="nav-link px-2 link-dark">Sản Phẩm</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Giới thiệu</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Blog</a></li>
            </ul>

            <form class="col-12 col-xl-5 col-lg-5 col-md-4 mb-3 mb-lg-0 me-lg-5 " action='danh-muc' method="post">
                <input type="search" class="form-control" placeholder="Search..." aria-label="Search" name="kyw">
            </form>
            <div class="col-auto me-3  ">
                <span class="material-icons-outlined  my-2">
                    shopping_bag
                </span>
            </div>
            <?php
            if (isset($_SESSION['ten_dang_nhap'])) : ?>
                <div class="dropdown text-end">
                    <ul class="proflie-dropdown navbar-nav">
                        <li class="nav-item d-inline">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php if (avatar() == '') : ?>
                                    <img src="https://scr.vn/wp-content/uploads/2020/07/Avatar-Facebook-tr%E1%BA%AFng.jpg" alt="mdo" width="32" height="32" class="rounded-circle">
                                <?php else : ?>
                                    <img src="<?= ROOT_URL . IMG  ?><?= avatar(); ?>" alt="mdo" width="32" height="32" class="rounded-circle">
                                <?php endif; ?>
                            </a>
                            <div class=" dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="text-decoration-none text-dark" href="<?= ROOT_URL ?>profile">Profile</a>
                            </div>
                        </li>
                    </ul>
                </div>
            <?php else : ?>
                <button type="button" name="" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tài Khoản
                </button>
            <?php endif; ?>
        </div>
    </div>
</header>
<?php if (isset($_GET['msg'])) : ?>
    <div class="alert alert-warning alert-dismissible fade show mx-3" role="alert">
        <?php echo $_GET['msg']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>