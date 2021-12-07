    <div class="display-4 bg-success py-2  my-sm-0 my-md-4">
        <h4 class="fw-bold mx-5 my-2">Sản phẩm mà bạn yêu thích</h4>
    </div>
    <div class="box-big">
        <div class="row ">
            <?php foreach ($spyt as $p) : ?>
                <div class="col-6 col-sm-6 col-lg-3 col-xl-3 text-center py-3 py-lg-0 ">
                    <a href="index.php?url=sanphamct&ma_sp=<?= $p['ma_sp'] ?>"><img src="<?= ADMIN_ASSET ?>image/<?= $p['anh_sp'] ?>  " alt="" class="img-fluid" height="50"></a>

                    <a href="index.php?url=sanphamct&ma_sp=<?= $p['ma_sp'] ?>" class="nav-link text-success">
                        <span class="text-center"> <?= $p['ten_sp'] ?> </span>
                    </a>
                    <div class="d-flex justify-content-between px-5 ">
                        <p class=" display-8 text-center fw-bold text-secondary mt-2"> <a class="text-decoration-none text-secondary" href="<?= ROOT_URL ?>sanphamct&ma_sp=<?= $p['ma_sp'] ?>"><?= number_format($p['gianew']) ?>đ</a> </p>
                        <?php if ($p['gianew'] != $p['giatien']) : ?>
                            <p class=" display-8 text-center fw-bold text-secondary mt-2 mx-lg-3 mx-0">
                                <a class="text-secondary text-decoration-line-through" href="<?= ROOT_URL ?>sanphamct&ma_sp=<?= $p['ma_sp'] ?>">
                                    <?= number_format($p['giatien']) ?>đ</a>
                            </p>
                        <?php endif; ?>
                    </div>
                    <a href="index.php?url=xoayt&id=<?= $p['id'] ?>"> <button type="button" class="btn btn-outline-warning">Bỏ yêu thích</button></a>

                    <div class="star mb-md-2">
                        <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                </div>

            <?php endforeach ?>
        </div>
        <!-- end product-center -->

        <!-- end box-bog -->
    </div>