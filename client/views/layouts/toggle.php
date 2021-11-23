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