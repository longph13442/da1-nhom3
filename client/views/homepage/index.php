<!-- end form -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?= ADMIN_ASSET ?>image/banner.jpg" class="d-block w-100 " alt="...">
            <div class="carousel-caption">
                <h1 class="display-4 text-dark">Cửa Hàng mỹ phẩm</h1>
                <h3 class="text-dark">Chuyên cung cấp mỹ phẩm chính hãng</h3>
                <button type="button" class="btn btn-outline-light btn-md  mx-2">Mua Ngay</button>
                <button type="button" class="btn btn-warning btn-md">Đăng Kí</button>

            </div>
        </div>
        <div class="carousel-item">
            <img src="<?= ADMIN_ASSET ?>image/banner2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?= ADMIN_ASSET ?>image/banner3.png" class="d-block w-100" alt="...">

        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- end banner -->

<!-- <div class="display-4  mt-5 mt-lg-5 mt-md-5  ">
        <h3 class="fw-bold text-center">TOP PRODUCTS SALE</h3>
    </div> -->

<!-- end title -->

<div class="box">
    <div class="box-bigb row m-auto  my-5">
        <div class="col-lg-4 text-center">
            <img src="<?= ADMIN_ASSET ?>image/a1.jpg" alt="" class="bd-placeholder-img rounded-circle" height="160" width="160">

            <h2 class="my-3">Dưỡng mặt</h2>
            <p> Những sản phẩm đến từ các thương hiệu hàng đầu nước pháp, chúng tôi tin rằng sẽ mang đến cho bạn những niềm hạnh phúc cho bản thân bạn !</p>
            <p><a class="btn btn-outline-warning" href="#">Xem tất cả »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 text-center">
            <img src="<?= ADMIN_ASSET ?>image/a2.jpg" alt="" class="bd-placeholder-img rounded-circle" height="160" width="160">


            <h2 class="my-3">Dưỡng body</h2>
            <p> Những sản phẩm đến từ các thương hiệu hàng đầu nước pháp, chúng tôi tin rằng sẽ mang đến cho bạn những niềm hạnh phúc cho bản thân bạn !</p>
            <p><a class="btn btn-outline-warning" href="#">Xem tất cả »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 text-center">
            <img src="<?= ADMIN_ASSET ?>image/a3.jpg" alt="" class="bd-placeholder-img rounded-circle" height="160" width="160">


            <h2 class="my-3">Trang điểm</h2>
            <p> Những sản phẩm đến từ các thương hiệu hàng đầu nước pháp, chúng tôi tin rằng sẽ mang đến cho bạn những niềm hạnh phúc cho bản thân bạn !</p>
            <p><a class="btn btn-outline-warning" href="#">Xem tất cả »</a></p>
        </div><!-- /.col-lg-4 -->
    </div>

    <div class="row">

    </div>
    <!-- end button -->

    <div class="display-4  ">
        <h4 class="fw-bold mx-5 mt-3">SẢN PHẨM BÁN CHẠY</h4>
    </div>
    <div class="box-big">
        <div class="row ">
            <?php foreach ($sanpham as $p) : ?>
                <div class="col-12 col-sm-12 col-lg-3 col-xl-3 text-center  ">
                    <a href="index.php?url=sanphamct&ma_hh=<?= $p['ma_sp'] ?>"><img src="<?= ADMIN_ASSET ?>image/<?= $p['anh_sp'] ?>  " alt="" class="img-fluid" height="50"></a>
                    <p class=" display-8 text-center fw-bold text-secondary mt-4"> <?= $p['giatien'] ?> </p>
                    <p class="text-center"> <?= $p['ten_sp'] ?> </p>
                    <div class="star mb-md-4">
                        <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                </div>

            <?php endforeach ?>
        </div>
        <!-- end product-center -->
        <div class="row">
            <div class="col-12 text-center ">
                <button class=" btn btn-outline-warning btn-md mx-auto" type="button">Xem tất cả <i class="fas fa-angle-right"></i></button>
            </div>
        </div>
        <!-- end box-bog -->
        <div class="box-big">
            <h3 class="text-center  fw-bold">More to Discover and products</h3>
            <div class="row double">
                <div class="col-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4 baner2 mt-md-4  text-center ">
                    <img src="<?= ADMIN_ASSET ?>image/baner7.png" alt="" width="90%">
                </div>
                <div class="col-12  col-md-12 col-lg-4 col-xl-4 col-xxl-4 mt-md-4 mt-4 text-center">
                    <img src="<?= ADMIN_ASSET ?>image/baner8.png" alt="" width="90%">
                </div>
                <div class="col-12  col-md-12 col-lg-4 col-xl-4 col-xl-4 mt-md-4 mt-4 text-center">
                    <img src="<?= ADMIN_ASSET ?>image/baner9.png" alt="" width="90%">
                </div>
            </div>
            <!-- end banner double -->
        </div>
        <!-- end box-big -->
        <div class="display-4  mt-5 mt-lg-5 mt-md-5  ">
            <h3 class="fw-bold text-center">TOP PRODUCTS SALE</h3>
        </div>

        <!-- end title -->


        <div class="box">
            <div class="row product-fist mb-lg-5">
                <ul class="slider">
                    <?php foreach ($sanpham2 as $item) : ?>
                        <li>
                            <div class=" ">
                                <img src="<?= ADMIN_ASSET ?>image/<?= $item['anh_sp'] ?>" alt="" class="img-fluid" height="50">
                                <p class=" display-8 text-center fw-bold text-secondary my-2"><?= $item['giatien'] ?></p>
                                <p class="text-center"><?= $item['ten_sp'] ?></p>
                                <div class="star">
                                    <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                </div>

                            </div>
                        </li>

                    <?php endforeach ?>


                </ul>
            </div>
            <!-- end product-fist -->
            <div id="carouselExampleSlidesOnly" class="carousel slide banner2" data-bs-ride="carousel">
                <div class="carousel-inner slides">
                    <div class="carousel-item active">
                        <img src="<?= ADMIN_ASSET ?>image/slide.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <h1 class="display-4 text-dark">Cửa Hàng mỹ phẩm</h1>
                            <h3 class="text-dark">Chuyên cung cấp mỹ phẩm chính hãng</h3>
                            <button type="button" class="btn btn-outline-light btn-md  mx-2">Mua Ngay</button>
                            <button type="button" class="btn btn-warning btn-md">Đăng Kí</button>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?= ADMIN_ASSET ?>image/slide.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <h1 class="display-4 text-dark">Cửa Hàng mỹ phẩm</h1>
                            <h3 class="text-dark">Chuyên cung cấp mỹ phẩm chính hãng</h3>
                            <button type="button" class="btn btn-outline-light btn-md  mx-2">Mua Ngay</button>
                            <button type="button" class="btn btn-warning btn-md">Đăng Kí</button>


                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?= ADMIN_ASSET ?>image/slide.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <h1 class="display-4 text-dark">Cửa Hàng mỹ phẩm</h1>
                            <h3 class="text-dark">Chuyên cung cấp mỹ phẩm chính hãng</h3>
                            <button type="button" class="btn btn-outline-light btn-md  mx-2">Mua Ngay</button>
                            <button type="button" class="btn btn-warning btn-md">Đăng Kí</button>


                        </div>
                    </div>
                </div>
            </div>
            <!-- end banner2 -->
            <div class=" row box-bigb">
                <div class="col-12 col-sm-12 col-lg-6 col-xl-6 text-center">
                    <img src="<?= ADMIN_ASSET ?>image/img11.jpg" alt="" width="90%">
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
            <div class="box-big">
                <h4 class="title3 text-center fw-bold"> NHỮNG BÀI VIẾT ĐANG ĐƯỢC QUAN TÂM</h4>
                <div class="row row-cols-1 row-cols-md-3 g-3  ">
                    <div class="col col-md-12 col-lg-4 col-xl-4">
                        <div class="card h-100">
                            <img src="<?= ADMIN_ASSET ?>image/blog7.png" class="card-img-top" alt="..." height="350">
                            <div class="card-body">
                                <h5 class="card-title">Những người yêu cái đẹp</h5>
                                <p class="card-text">Vua Hàng Hiệu tạo cơ hội kinh doanh bán các nhà sản xuất nội địa mở
                                    rộng
                                    thị
                                    trường, có được một môi trường phát triển lành mạnh.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-dark">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-12 col-lg-4 col-xl-4">
                        <div class="card h-100">
                            <img src="<?= ADMIN_ASSET ?>image/blog6.png" class="card-img-top" alt="..." height="350">
                            <div class="card-body">
                                <h5 class="card-title ">Làn da của thiên thần</h5>
                                <p class="card-text">Vua Hàng Hiệu tạo cơ hội kinh doanh bán các nhà sản xuất nội địa mở
                                    rộng
                                    thị
                                    trường, có được một môi trường phát triển lành mạnh.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-dark">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-12 col-lg-4 col-xl-4">
                        <div class="card h-100">
                            <img src="<?= ADMIN_ASSET ?>image/blog8.png" class="card-img-top" alt="..." height="350">
                            <div class="card-body">
                                <h5 class="card-title">Không gì là không thể</h5>
                                <p class="card-text">Vua Hàng Hiệu tạo cơ hội kinh doanh bán các nhà sản xuất nội địa mở
                                    rộng
                                    thị
                                    trường, có được một môi trường phát triển lành mạnh.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-dark">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end blog -->
                <div class="row">
                    <div class="col-12 text-center ">
                        <button class=" btn btn-outline-warning btn-md mx-auto" type="button">Xem tất cả <i class="fas fa-angle-right"></i></button>
                    </div>
                </div>
                <!-- end button -->
                <hr class="my-5">
                <div class="row comment py-5">
                    <div class="col-6 col-sm-6 col-lg-3 col-xl-3 ">
                        <i class="far fa-comment-alt fa-4x cmt"></i>
                        <h3 class="text-center">ĐÁNH GIÁ CỦA KHÁCH HÀNG</h3>
                    </div>

                    <div class="col-6 col-sm-6 col-lg-3 col-xl-3 ">
                        <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                            <div class="card-header">Thế Tâm <div class="star">
                                    <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-warning">Son dưỡng môi</h5>
                                <p class="card-text">Sản phẩm ngừa mụn sáng da tốt lắm ạ. Giao hàng nhanh, tư vấn nhiệt
                                    tình
                                    ạ.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- 1 -->
                    <div class="col-6 col-sm-6 col-lg-3 col-xl-3 ">
                        <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                            <div class="card-header">Huy Trung <div class="star">
                                    <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                </div>
                            </div>
                            <div class="card-body ">
                                <h5 class="card-title text-warning">Kem dưỡng ẩm</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of
                                    the
                                    card's content.</p>
                            </div>
                        </div>
                    </div>
                    <!-- 2 -->
                    <div class="col-6 col-sm-6 col-lg-3 col-xl-3 ">
                        <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                            <div class="card-header">Huy <div class="star">
                                    <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-warning">Sửa rửa mặt</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of
                                    the
                                    card's content.</p>
                            </div>
                        </div>
                    </div>
                    <!-- 3 -->
                </div>
                <!-- end instagram -->
            </div>
        </div>