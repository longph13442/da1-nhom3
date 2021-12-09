<header class="navbar navbar-dark sticky-top bg-warning flex-md-nowrap p-0 shadow ">
    <a href="<?= ROOT_URL ?>"><img src="<?= ADMIN_ASSET ?>image/logo.png" alt="" height="50" class="ms-5"></a>
    <input class="form-control form-control-dark w-50" type="text" placeholder="Search" aria-label="Search">
    <div class="col-auto ms-5">
        <span class="material-icons-outlined  ">
            fingerprint
        </span>
    </div>
    <div class="title">
        <h5><?php if (isset($_SESSION['ten_dang_nhap'])) {
                echo 'Xin chào: ' . $_SESSION['ten_dang_nhap'];
            }   ?></h5>
    </div>
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a class="nav-link text-dark px-3 text-dark" href="<?= ROOT_URL ?>cpadmin/logout"> <i class="fx-10 fal fa-sign-out"></i></a>
        </div>
    </div>
</header>