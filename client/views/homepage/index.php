<div class="row py-3">
    <ul class="nav col-12  justify-content-center my-0">
        <li><a href="" class=" px-2 link-dark mx-2">Dưỡng ẩm</a></li>
        <li><a href="" class=" px-2 link-dark mx-2">Dưỡng body</a></li>
        <li><a href="#" class=" px-2 link-dark mx-2">Kẻ mắt</a></li>
        <li><a href="#" class=" px-2 link-dark mx-2">Son môi</a></li>
        <li><a href="" class=" px-2 link-dark mx-2">Dưỡng ẩm</a></li>
        <li><a href="" class=" px-2 link-dark mx-2">Dưỡng body</a></li>
        <li><a href="#" class=" px-2 link-dark mx-2">Kẻ mắt</a></li>
        <li><a href="#" class=" px-2 link-dark mx-2">Son môi</a></li>
    </ul>
</div>
<!-- danh-muc -->
<!-- <div class="row">
    <div class="col-9 " >
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= ADMIN_ASSET ?>image/baner5.jpg" class="d-block w-100 " alt="...">
                   
                </div>
                <div class="carousel-item">
                    <img src="<?= ADMIN_ASSET ?>image/baner4.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?= ADMIN_ASSET ?>image/baner4.jpg" class="d-block w-100" alt="...">

                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden ">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        
    </div>
    <div class="col-3">
        <img src="<?= ADMIN_ASSET ?>image/right.jpg" alt="" width="100%" class="mb-2">
        <img src="<?= ADMIN_ASSET ?>image/right2.jpg" alt="" width="100%" class="mt-3 mb-0">
    </div>
</div> -->
<!-- end banner -->
<video style="width: 100%; height: 650px; left: 0px; top: 0px;" src="<?= ADMIN_ASSET ?>image/video.mp4" autoplay loop preload></video>
<!-- <div class="display-4  mt-5 mt-lg-5 mt-md-5  ">
        <h3 class="fw-bold text-center">TOP PRODUCTS SALE</h3>
    </div> -->



<div class="box">
    <div class="box-bigb row m-auto  my-5">
        <div class="col-lg-4 text-center">
            <img src="<?= ADMIN_ASSET ?>image/a4.jpg" alt="" class="bd-placeholder-img rounded-circle" height="160" width="160">

            <h2 class="my-3">Dưỡng mặt</h2>
            <p> Những sản phẩm đến từ các thương hiệu hàng đầu nước pháp, chúng tôi tin rằng sẽ mang đến cho bạn những niềm hạnh phúc cho bản thân bạn !</p>
            <p><a class="btn btn-outline-warning" href="#">Xem tất cả »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 text-center">
            <img src="<?= ADMIN_ASSET ?>image/a6.jpg" alt="" class="bd-placeholder-img rounded-circle" height="160" width="160">


            <h2 class="my-3">Dưỡng body</h2>
            <p> Những sản phẩm đến từ các thương hiệu hàng đầu nước pháp, chúng tôi tin rằng sẽ mang đến cho bạn những niềm hạnh phúc cho bản thân bạn !</p>
            <p><a class="btn btn-outline-warning" href="#">Xem tất cả »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 text-center">
            <img src="<?= ADMIN_ASSET ?>image/a4.jpg" alt="" class="bd-placeholder-img rounded-circle" height="160" width="160">


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
                    <a href="index.php?url=sanphamct&ma_sp=<?= $p['ma_sp'] ?>"><img src="<?= ADMIN_ASSET ?>image/<?= $p['anh_sp'] ?>  " alt="" class="img-fluid" height="50"></a>
                    <p class=" display-8 text-center fw-bold text-secondary mt-2"> <?= $p['giatien'] ?> </p>
                    <a href="index.php?url=sanphamct&ma_sp=<?= $p['ma_sp'] ?>">   <p class="text-center"> <?= $p['ten_sp'] ?> </p></a>
                    <div class="star mb-md-2">
                        <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                </div>

            <?php endforeach ?>
        </div>
        <!-- end product-center -->
        <div class="row">
            <div class="col-12 text-center ">
              <a href="index.php?url=danh-muc">  <button class=" btn btn-outline-warning btn-md mx-auto" type="button">Xem tất cả <i class="fas fa-angle-right"></i></button></a>
            </div>
        </div>
        <!-- end box-bog -->
        <div class="">
            <h3 class="text-center  fw-bold mt-5 mt-lg-5 mt-md-5">More to Discover and products</h3>
            <div class="row double">
                <div class="col-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4 baner2 mt-md-4  text-center ">
                    <img src="<?= ADMIN_ASSET ?>image/baner7.jpg" alt="" width="100%">
                </div>
                <div class="col-12  col-md-12 col-lg-4 col-xl-4 col-xxl-4 mt-md-4 mt-4 text-center">
                    <img src="<?= ADMIN_ASSET ?>image/baner8.jpg" alt="" width="100%">
                </div>
                <div class="col-12  col-md-12 col-lg-4 col-xl-4 col-xl-4 mt-md-4 mt-4 text-center">
                    <img src="<?= ADMIN_ASSET ?>image/baner9.jpg" alt="" width="100%">
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
            <div class="row product-fist mb-lg-5 mt-3">
                <ul class="slider">
                    <?php foreach ($sanpham2 as $item) : ?>
                        <li>
                            <div class=" ">
                                 <a href="index.php?url=sanphamct&ma_sp=<?= $p['ma_sp'] ?>"><img src="<?= ADMIN_ASSET ?>image/<?= $item['anh_sp'] ?>" alt="" class="img-fluid" height="50" width="90%"></a>

<<<<<<< HEAD
                                <p class=" display-8 text-center fw-bold text-secondary my-2"><?= $item['giatien'] ?></p>
                                <a href="index.php?url=sanphamct&ma_sp=<?= $p['ma_sp'] ?>">   <p class="text-center"> <?= $p['ten_sp'] ?> </p></a>
=======
                                <p class=" display-8 text-center fw-bold text-secondary "><?= $item['giatien'] ?></p>
                                <p class="text-center"><?= $item['ten_sp'] ?></p>
>>>>>>> main
                                <div class="star">
                                    <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                </div>

                            </div>
                        </li>

                    <?php endforeach ?>


                </ul>
            </div>
            <!-- end product-fist -->
            <div class="display-4  mt-5 mt-lg-5 mt-md-5 ms-3 ">
                <h3 class="fw-bold "> PRODUCTS COMBO</h3>
            </div>

            <!-- end title -->
            <div class="combo">
                <div class="row my-5">
                    <div class="col-12 col-sm-12 col-lg-3 col-xl-3 text-center ">
                        <img src="<?= ADMIN_ASSET ?>image/cm1.jpg" alt="" width="100%">
                        <p class="  text-center fw-bold text-dark mt-2"> Combo dưỡng ẩm</p>
                        <div class="d-flex text-center">
                            <p class=" mx-2 ">650.000 VND </p>
                            <p class="text-decoration-line-through text-secondary">740.000 VND</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-lg-3 col-xl-3 text-center">
                        <img src="<?= ADMIN_ASSET ?>image/cm2.jpg" alt="" width="100%">
                        <p class="  text-center fw-bold text-dark mt-2"> Combo dưỡng ẩm</p>
                        <div class="d-flex text-center">
                            <p class=" mx-2 ">650.000 VND </p>
                            <p class="text-decoration-line-through text-secondary">740.000 VND</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-lg-3 col-xl-3 text-center">
                        <img src="<?= ADMIN_ASSET ?>image/cm3.jpg" alt="" width="100%">
                        <p class="  text-center fw-bold text-dark mt-2"> Combo dưỡng ẩm</p>
                        <div class="d-flex text-center">
                            <p class=" mx-2">650.000 VND </p>
                            <p class="text-decoration-line-through text-secondary">740.000 VND</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-lg-3 col-xl-3 text-center">
                        <img src="<?= ADMIN_ASSET ?>image/cm4.jpg" alt="" width="100%">
                        <p class="  text-center fw-bold text-dark mt-2"> Combo dưỡng ẩm</p>
                        <div class="d-flex text-center">
                            <p class=" mx-2 ">650.000 VND </p>
                            <p class="text-decoration-line-through text-secondary">740.000 VND</p>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end combo -->
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









                    <!-- <div class="col col-md-12 col-lg-4 col-xl-4">
                        <div class="card h-100">
                            <img src="<?= ADMIN_ASSET ?>image/bl1.jpg" class="card-img-top" alt="..." height="350">
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
                            <img src="<?= ADMIN_ASSET ?>image/bl2.jpg" class="card-img-top" alt="..." height="350">
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
                            <img src="<?= ADMIN_ASSET ?>image/bl3.jpg" class="card-img-top" alt="..." height="350">
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
                    </div> -->

                </div>
                <!-- end blog -->
                <div class="row my-5">
                    <div class="col-12 text-center ">
                       <a href="<?phpROOT_URL?>danh-muc"> <button class=" btn btn-outline-warning btn-md mx-auto" type="button">Xem tất cả <i class="fas fa-angle-right"></i></button></a>
                    </div>
                </div>
                <!-- end button -->
                <hr class="my-5">
                <h2 class="text-center fw-bold">NHẬT KÍ SUNFLOWE</h2>
                <!-- <i class="far fa-comment-alt fa-4x cmt"></i> -->
                <h4 class="text-center my-4 ">Chia sẽ những khoảnh khắc tỏa sáng của bạn</h4>

                <div class="row comment py-2">
                    <div class="col-6 col-sm-6 col-lg-2 col-xl-2 ">
                        <img src="<?= ADMIN_ASSET ?>image/1.jpg" alt="" width="100%">
                    </div>

                    <div class="col-6 col-sm-6 col-lg-2 col-xl-2 ">
                        <img src="<?= ADMIN_ASSET ?>image/2.jpg" alt="" width="100%">

                    </div>
                    <!-- 1 -->
                    <div class="col-6 col-sm-6 col-lg-2 col-xl-2 ">
                        <img src="<?= ADMIN_ASSET ?>image/3.jpg" alt="" width="100%">

                    </div>
                    <!-- 2 -->
                    <div class="col-6 col-sm-6 col-lg-2 col-xl-2 ">
                        <img src="<?= ADMIN_ASSET ?>image/2.jpg" alt="" width="100%">
                    </div>
                    <!-- 3 -->
                    <div class="col-6 col-sm-6 col-lg-2 col-xl-2 ">
                        <img src="<?= ADMIN_ASSET ?>image/3.jpg" alt="" width="100%">
                    </div>
                    <!-- 4 -->
                    <div class="col-6 col-sm-6 col-lg-2 col-xl-2 ">
                        <img src="<?= ADMIN_ASSET ?>image/1.jpg" alt="" width="100%">
                    </div>
                    <!-- 4 -->

                </div>
                <!-- end instagram -->
            </div>
        </div>