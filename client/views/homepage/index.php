<!-- danh-muc -->
<div class="row mx-3">
    <div class="col-12 col-lg-3 mb-3 mb-lg-0">
        <ul class="list-group">
            <li class="list-group-item py-3  py-xl-3 py-lg-2  bg-success " aria-current="true">Danh mục sản phẩm</li>
            <a href="<?= ROOT_URL ?>danh-muc" class="list-group-item py-3 d-flex">Tất cả sản phẩm</a>
            <?php
            foreach ($dmsp as $d) {
                extract($d);
                $linkdm = ROOT_URL . "danh-muc&ma_loai=" . $ma_loai;
                echo '   
           <a href="' . $linkdm . '" class="text-decoration-none">       <li class="list-group-item py-3 d-flex  "> <span class="material-icons-outlined">
                  
                </span>
                <p class="mx-3 fs-6 ">' . $ten_loai . '</p>
            </li></a>';
            }
            ?>

        </ul>

    </div>
    <!-- end list-group -->
    <div class="col-12 col-lg-9 mb-3 mb-lg-0 ">
        <div id="carouselExampleIndicators" class="carousel slide ms-3" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <?php foreach ($slide as $item) : ?>
                    <div class="carousel-item ">
                        <img src="<?= ADMIN_ASSET ?>Image/<?= $item['img'] ?>  " style="height:400px" alt="" class="d-block w-100 img-fluid">
                    </div>
                <?php endforeach ?>
                <div class="carousel-item active">
                    <img src="<?= ADMIN_ASSET ?>Image/baner6.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>
    <!-- end banner -->
</div>

<div class="box">

    <div class="display-4 bg-success py-2  my-sm-0 my-md-4">
        <h4 class="fw-bold mx-5 my-2">SẢN PHẨM BÁN CHẠY</h4>
    </div>
    <div class="box-big">
        <div class="row ">
            <?php foreach ($sanpham as $p) : ?>
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
                    <div class="star mb-md-2">
                        <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                </div>

            <?php endforeach ?>
        </div>
        <!-- end product-center -->
        <div class="row">
            <div class="col-12 text-center ">
                <a href="index.php?url=danh-muc"> <button class=" btn btn-outline-warning btn-md mx-auto" type="button">Xem tất cả <i class="fas fa-angle-right"></i></button></a>
            </div>
        </div>
        <!-- end box-bog -->
    </div>
    <!-- end box-bog -->
    <div class="">
        <div class="display-4 bg-light py-2  my-sm-0 my-md-4">
            <h4 class="fw-bold mx-5 my-2">ƯU ĐÃI THÁNG 12</h4>
        </div>
        <div class="box-big">
            <div class="row double">
                <div class="col-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4 baner2   text-center ">
                    <img src="<?= ADMIN_ASSET ?>image/baner7.jpg" alt="" width="100%">
                </div>
                <div class="col-12  col-md-12 col-lg-4 col-xl-4 col-xxl-4  text-center">
                    <img src="<?= ADMIN_ASSET ?>image/baner8.jpg" alt="" width="100%">
                </div>
                <div class="col-12  col-md-12 col-lg-4 col-xl-4 col-xl-4  text-center">
                    <img src="<?= ADMIN_ASSET ?>image/baner9.jpg" alt="" width="100%">
                </div>
            </div>
            <!-- end banner double -->
        </div>
        <!-- end box-big -->
    </div>

    <div class="display-4 bg-light py-2  my-sm-0 my-md-4">
        <h4 class="fw-bold mx-5 my-2">SẢN PHẨM YÊU THÍCH</h4>
    </div>

    <!-- end title -->


    <div class="box">
        <div class="row product-fist mb-lg-5">
            <ul class="slider">
                <?php foreach ($sanpham2 as $item) : ?>
                    <li>
                        <div class=" ">
                            <a href="<?= ROOT_URL ?>sanphamct&ma_sp=<?= $item['ma_sp'] ?>"><img src="<?= ADMIN_ASSET ?>Image/<?= $item['anh_sp'] ?>  " alt="" class="img-fluid" height="50" width="95%"></a>

                            <a href="<?= ROOT_URL ?>sanphamct&ma_sp=<?= $item['ma_sp'] ?>" class="nav-link text-success text-center">
                                <span class=""> <?= $item['ten_sp'] ?> </span>
                            </a>
                            <div class="d-flex justify-content-between px-5 ">
                                <p class=" display-8 text-center fw-bold text-secondary "><a class="text-decoration-none text-dark" href="<?= ROOT_URL ?>sanphamct&ma_sp=<?= $item['ma_sp'] ?>"><?= number_format($item['gianew']) ?>đ </a> </p>
                                <?php if ($item['gianew'] != $item['giatien']) : ?>
                                    <p class=" display-8 text-center fw-bold text-secondary "> <a class="text-decoration-line-through text-dark" href="<?= ROOT_URL ?>sanphamct&ma_sp=<?= $item['ma_sp'] ?>"><?= number_format($item['giatien']) ?>đ</a>
                                    </p>
                                <?php endif; ?>
                            </div>
                            <div class="star">
                                <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>

                        </div>
                    </li>

                <?php endforeach ?>


            </ul>
        </div>
        <!-- end product-fist -->
        <div class="display-4 bg-light py-2  my-sm-0 my-md-4">
            <h4 class="fw-bold mx-5 my-2">SẢN PHẨM ĐANG SALE</h4>
        </div>

        <!-- end title -->
        <div class="combo">
            <div class="box-big">
                <div class="row my-2">
                  
                     <?php foreach ($dskm as $p) : ?>
               
                   <div class="col-6 col-sm-6 col-lg-3 col-xl-3 text-center  ">
                       <a href="<?= ROOT_URL ?>sanphamct&ma_sp=<?= $p['ma_sp'] ?>"> <img src="<?= homepase_ASSET ?>image/<?= $p['anh_sp'] ?> " alt="" class="img-fluid" height="50"></a>

                       <a href="index.php?url=sanphamct&ma_sp=<?= $p['ma_sp'] ?>" class="nav-link text-success">
                           <p class="text-center"> <?= $p['ten_sp'] ?> </p>
                       </a>
                       <p class=" display-8 text-center fw-bold text-secondary mt-4">
                           <a class="text-decoration-none text-dark" href="<?= ROOT_URL ?>sanphamct&ma_sp=<?= $p['ma_sp'] ?>"> <?= number_format($p['gianew']) ?>đ</a>
                           <?php if ($p['gianew'] != $p['giatien']) : ?>
                               - <a class="text-dark text-decoration-line-through" href="<?= ROOT_URL ?>sanphamct&ma_sp=<?= $p['ma_sp'] ?>"> <?= number_format($p['giatien']) ?></a> đ
                       </p>
                   <?php endif; ?>
                   <div class="star mb-md-4">
                       <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                   </div>
                   </div>




               <?php endforeach ?>
                </div>
            </div>
            <!-- end box-big -->

        </div>
        <!-- end combo -->
        <div class="box-big">
            <div id="carouselExampleSlidesOnly" class="carousel slide banner2 my-5" data-bs-ride="carousel">
                <div class="carousel-inner slides">
                    <div class="carousel-item active">
                        <img src="<?= ADMIN_ASSET ?>image/slide2.jpg" class="d-block w-100" alt="...">

                    </div>
                    <div class="carousel-item">
                        <img src="<?= ADMIN_ASSET ?>image/slide.jpg" class="d-block w-100" alt="...">

                    </div>
                    <div class="carousel-item">
                        <img src="<?= ADMIN_ASSET ?>image/slide3.jpg" class="d-block w-100" alt="...">

                    </div>
                </div>
            </div>
            <!-- end banner2 -->
            <div class=" row ">
                <div class="col-12 col-sm-12 col-lg-6 col-xl-6 text-center">
                    <img src="<?= ADMIN_ASSET ?>image/bl2.jpg" alt="" width="90%">
                </div>
                <div class="col-12 col-sm-12 col-lg-6 col-xl-6">
                    <h3 class="text-center mt-5 mt-lg-0 mt-xl-5 mb-2 ">BẠN XỨNG ĐÁNG ĐƯỢC ĐỐI XỬ TỐT HƠN</h3>
                    <P>Chúng ta thường tin rằng bản thân mình không đủ tốt và không xứng đáng với những điều tốt đẹp.
                        Chúng
                        ta muốn được yêu thương nhưng lại không biết cách yêu thương bản thân, mà bởi vì vậy nên cũng
                        không
                        thể cảm nhận một cách trọn vẹn tình yêu từ người khác. Học cách yêu bản thân sẽ giúp mỗi người
                        tạo
                        nên một cuộc chuyển dịch lớn trong cách nhìn cuộc sống – cuộc chuyển dịch khiến chúng ta biết
                        trân
                        quý và chấp nhận con người thật của mình.</P>
                    <br>
                    <p>“Yêu bản thân” nghe có vẻ dễ dàng, nhưng nếu chẳng may bị đối xử tệ bạc, liệu bạn có chọn đả kích
                        ngược lại những người mà bạn nghĩ đã làm tổn thương mình không? Khi lựa chọn hành động như vậy,
                        đồng
                        nghĩa rằng bạn đang sợ hãi và cảm thấy không được yêu thương.</p>
                </div>
            </div>
            <!-- end box-big -->
            <div class="">
                <h4 class="title3 text-center fw-bold my-5"> NHỮNG BÀI VIẾT ĐANG ĐƯỢC QUAN TÂM</h4>
                <div class="row row-cols-1 row-cols-md-3 g-3  ">


                    <?php foreach ($blog_tt as $blog) : ?>


                        <div class="col col-md-12 col-lg-4 col-xl-4">
                            <div class="card h-100">
                                <a href="index.php?url=ctblog&ma_blog=<?= $blog['ma_blog'] ?>"><img src="<?= ADMIN_ASSET ?>image/<?= $blog['anh_minh_hoa'] ?>" class="card-img-top" alt="..." height="350"></a>
                                <div class="card-body">
                                    <a href="index.php?url=ctblog&ma_blog=<?= $blog['ma_blog'] ?>" class="nav-link text-success">
                                        <h5 class="card-title"><?= $blog['tieu_de'] ?></h5>
                                    </a>
                                    <p class="card-text"><?= $blog['noi_dung'] ?></p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-dark"><?= $blog['ngay_tao'] ?></small>
                                </div>
                            </div>
                        </div>

                    <?php endforeach ?>
                </div>
                <!-- end blog -->
                <div class="row my-5">
                    <div class="col-12 text-center ">
                        <a href="<?= ROOT_URL ?>blog"> <button class=" btn btn-outline-warning btn-md mx-auto" type="button">Xem tất cả <i class="fas fa-angle-right"></i></button></a>
                    </div>
                </div>
                <!-- end button -->
                <hr class="my-5">
                <h2 class="text-center fw-bold text-success text-decoration-underline">Video</h2>
                <!-- <i class="far fa-comment-alt fa-4x cmt"></i> -->
                <h4 class="text-center my-3">Chia sẽ những khoảnh khắc tỏa sáng của bạn</h4>

                <div class="row comment ">
                    <div class="col-12 col-sm-12 col-lg-3 col-xl-3 ">
                        <iframe width="100%" height="288" src="https://www.youtube.com/embed/YTrQ4jn6ivQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>

                    <div class="col-12 col-sm-12 col-lg-3 col-xl-3 ">
                        <iframe width="100%" height="288" src="https://www.youtube.com/embed/AfwR2y8UHcQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <!-- 1 -->
                    <div class="col-12 col-sm-12 col-lg-3 col-xl-3 ">
                        <iframe width="100%" height="288" src="https://www.youtube.com/embed/61W1TxeyQ1E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <!-- 2 -->
                    <div class="col-12 col-sm-12 col-lg-3 col-xl-3 ">
                        <iframe width="100%" height="288" src="https://www.youtube.com/embed/OuNQjCKyHKg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <!-- 3 -->


                </div>
                <!-- end instagram -->
            </div>
        </div>
        <!-- end box-big -->
    </div>
    <!-- end box -->

</div>