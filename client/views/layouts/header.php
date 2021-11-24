<header class="p-3 m-2 row ">
    <div class="container ">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                <img src="<?= ADMIN_ASSET ?>image/logo.png" alt="" height="60">
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="<?= ROOT_URL?>" class="nav-link px-2 link-secondary">Trang chủ</a></li>
                <li><a href="index.php?url=danh-muc" class="nav-link px-2 link-dark">Sản Phẩm</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Giới thiệu</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Blog</a></li>
            </ul>

            <form class="col-12 col-xl-5 col-lg-5 col-md-4 mb-3 mb-lg-0 me-lg-5 " action='danh-muc' method="post" >
                <input type="search" class="form-control" placeholder="Search..." aria-label="Search" name="kyw">
            </form>
            <div class="col-auto me-3  ">
                <span class="material-icons-outlined  my-2">
                    shopping_bag
                </span>
            </div>
            <?php
            include "./client/views/layouts/toggle.php";
            ?>
        </div>
    </div>
</header>

<!-- Form -->
<?php login(); ?>
<!-- End Form -->