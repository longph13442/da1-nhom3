
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="./css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="./index.css">

    <script src="https://kit.fontawesome.com/5873c71494.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="navbar navbar-expand-lg navbar-light bg-light sticky-top ">
        <div class="container-fluid ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item active"><a href="" class="active nav-link ">Trang Chủ</a></li>
                    <li class="nav-item "><a href="" class=" nav-link text-dark ">Sản Phẩm</a></li>
                    <li class="nav-item "><a href="" class=" nav-link text-dark">Giới thiệu</a></li>
                    <li class="nav-item"><a href="" class="  nav-link text-dark">Blogs</a></li>
                </ul>
            </div>
            <div class="navbar-branch">
                <img src="./image/logo.png" alt="" height="80">
            </div>
            <div class="col-4 col-lg-6">
                <i class="fas fa-user-circle"></i>
                <i class="fas fa-shopping-cart"></i>
                <i class="fas fa-search"></i>
            </div>
        </div>

        <!-- end navbar-branch -->

    </div>
    <!-- end nav -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./image/banner.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h1 class="display-4 text-dark">Cửa Hàng mỹ phẩm</h1>
                    <h3 class="text-dark">Chuyên cung cấp mỹ phẩm chính hãng</h3>
                    <button type="button" class="btn btn-outline-light btn-lg ">Mua Ngay</button>
                    <button type="button" class="btn btn-warning btn-lg">Đăng Kí</button>

                </div>
            </div>
            <div class="carousel-item">
                <img src="./image/banner2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./image/banner.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h1 class="display-4 text-dark">Cửa Hàng mỹ phẩm</h1>
                    <h3 class="text-dark">Chuyên cung cấp mỹ phẩm chính hãng</h3>
                    <button type="button" class="btn btn-outline-light btn-lg ">Mua Ngay</button>
                    <button type="button" class="btn btn-warning btn-lg">Đăng Kí</button>

                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- end banner -->
    <div class="display-4  title  ">
        <h3 class="fw-bold">SunFlower sales</h3>
    </div>
    <hr width="90%" class="m-auto  ">

    <div class="row">
        <div class=" col-12 col-sm-12 col-lg-6 col-xl-3 ">
            <img src="./image2/img1.jpg" alt="" class="img-fluid" height="50">
            <p class=" display-8 text-center fw-bold text-secondary">350.000 VND - 400.00 VND</p>
            <p class="text-center">Kem Dưỡng ẩm</p>
            <div class="star">
                <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                    class="fas fa-star"></i>
            </div>

        </div>
        <div class="col-12 col-sm-12 col-lg-6 col-xl-3">
            <img src="./image2/img2.jpg" alt="" class="img-fluid" height="50">
            <p class=" display-8 text-center fw-bold text-secondary">350.000 VND - 400.00 VND</p>
            <p class="text-center">Kem Dưỡng ẩm</p>
            <div class="star">
                <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                    class="fas fa-star"></i>
            </div>

        </div>
        <div class="col-12 col-sm-12 col-lg-6 col-xl-3">
            <img src="./image2/img3.jpg" alt="" class="img-fluid" height="50">
            <p class=" display-8 text-center fw-bold text-secondary">350.000 VND - 400.00 VND</p>
            <p class="text-center">Kem Dưỡng ẩm</p>
            <div class="star">
                <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                    class="fas fa-star"></i>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-lg-6 col-xl-3">
            <img src="./image2/img4.jpg" alt="" class="img-fluid" height="50">
            <p class=" display-8 text-center fw-bold text-secondary">350.000 VND - 400.00 VND</p>
            <p class="text-center">Kem Dưỡng ẩm</p>
            <div class="star">
                <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                    class="fas fa-star"></i>
            </div>
        </div>
    </div>
    <!-- end row -->
    <button class=" btn btn-outline-warning btn-lg view-all col-xl-12" type="button">Xem tất cả</button>
    <div class="row double">
        <div class="col-12 col-sm-12 col-xl-6 baner2 ">
            <img src="./image2/img7.png" alt="" width="90%">
        </div>
        <div class="col-12 col-sm-12 col-xl-6 baner2">
            <img src="./image2/img8.png" alt="" width="90%">
        </div>
    </div>
    <!-- end row -->
    <div class="display-4 title">
        <h4 class="fw-bold">SẢN PHẨM BÁN CHẠY</h4>
    </div>
    <hr width="90%" class="m-auto  hr ">
    <div class="row">
        <div class="col-12 col-sm-12 col-lg-6 col-xl-3">
            <img src="./image2/img7.jpg" alt="" class="img-fluid" height="50">
            <p class=" display-8 text-center fw-bold text-secondary">350.000 VND - 400.00 VND</p>
            <p class="text-center">Kem Dưỡng ẩm</p>
            <div class="star">
                <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                    class="fas fa-star"></i>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-lg-6 col-xl-3">
            <img src="./image2/img2.jpg" alt="" class="img-fluid" height="50">
            <p class=" display-8 text-center fw-bold text-secondary">350.000 VND - 400.00 VND</p>
            <p class="text-center">Kem Dưỡng ẩm</p>
            <div class="star">
                <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                    class="fas fa-star"></i>
            </div>

        </div>
        <div class="col-12 col-sm-12 col-lg-6 col-xl-3">
            <img src="./image2/img6.jpg" alt="" class="img-fluid" height="50">
            <p class=" display-8 text-center fw-bold text-secondary">350.000 VND - 400.00 VND</p>
            <p class="text-center">Kem Dưỡng ẩm</p>
            <div class="star">
                <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                    class="fas fa-star"></i>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-lg-6 col-xl-3">
            <img src="./image2/img4.jpg" alt="" class="img-fluid" height="50">
            <p class=" display-8 text-center fw-bold text-secondary">350.000 VND - 400.00 VND</p>
            <p class="text-center">Kem Dưỡng ẩm</p>
            <div class="star">
                <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                    class="fas fa-star"></i>
            </div>
        </div>
    </div>
    <!-- end row -->
    <div class="row">
        <div class="col-12 col-sm-12 col-lg-6 col-xl-3">
            <img src="./image2/img10.jpg" alt="" class="img-fluid" height="50">
            <p class=" display-8 text-center fw-bold text-secondary">350.000 VND - 400.00 VND</p>
            <p class="text-center">Kem Dưỡng ẩm</p>
            <div class="star">
                <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                    class="fas fa-star"></i>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-lg-6 col-xl-3">
            <img src="./image2/img4.jpg" alt="" class="img-fluid" height="50">
            <p class=" display-8 text-center fw-bold text-secondary">350.000 VND - 400.00 VND</p>
            <p class="text-center">Kem Dưỡng ẩm</p>
            <div class="star">
                <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                    class="fas fa-star"></i>
            </div>

        </div>
        <div class="col-12 col-sm-12 col-lg-6 col-xl-3">
            <img src="./image2/img8.jpg" alt="" class="img-fluid" height="50">
            <p class=" display-8 text-center fw-bold text-secondary">350.000 VND - 400.00 VND</p>
            <p class="text-center">Kem Dưỡng ẩm</p>
            <div class="star">
                <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                    class="fas fa-star"></i>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-lg-6 col-xl-3">
            <img src="./image2/img9.jpg" alt="" class="img-fluid" height="50">
            <p class=" display-8 text-center fw-bold text-secondary">350.000 VND - 400.00 VND</p>
            <p class="text-center">Kem Dưỡng ẩm</p>
            <div class="star">
                <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                    class="fas fa-star"></i>
            </div>
        </div>
    </div>
    <!-- end row -->
    <button class=" btn btn-outline-warning btn-lg view-all2 " type="button">Xem tất cả <i
            class="fas fa-angle-right"></i></button>

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner slides">
            <div class="carousel-item active">
                <img src="./image-/slide.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h1 class="display-4 text-dark">Cửa Hàng mỹ phẩm</h1>
                    <h3 class="text-dark">Chuyên cung cấp mỹ phẩm chính hãng</h3>
                    <button type="button" class="btn btn-outline-light btn-lg ">Mua Ngay</button>
                    <button type="button" class="btn btn-warning btn-lg">Đăng Kí</button>

                </div>
            </div>
            <div class="carousel-item">
                <img src="./image-/slide.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h1 class="display-4 text-dark">Cửa Hàng mỹ phẩm</h1>
                    <h3 class="text-dark">Chuyên cung cấp mỹ phẩm chính hãng</h3>
                    <button type="button" class="btn btn-outline-light btn-lg ">Mua Ngay</button>
                    <button type="button" class="btn btn-warning btn-lg">Đăng Kí</button>

                </div>
            </div>
            <div class="carousel-item">
                <img src="./image-/slide.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h1 class="display-4 text-dark">Cửa Hàng mỹ phẩm</h1>
                    <h3 class="text-dark">Chuyên cung cấp mỹ phẩm chính hãng</h3>
                    <button type="button" class="btn btn-outline-light btn-lg ">Mua Ngay</button>
                    <button type="button" class="btn btn-warning btn-lg">Đăng Kí</button>

                </div>
            </div>
        </div>
    </div>
    <!-- end banner2 -->
    <h4 class="title3 text-center fw-bold"> NHỮNG BÀI VIẾT ĐANG ĐƯỢC QUAN TÂM</h4>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-80">
                <img src="./image-/bl1.jpg" class="card-img-top" alt="..." height="350">
                <div class="card-body">
                    <h5 class="card-title">Những người yêu cái đẹp</h5>
                    <p class="card-text">Vua Hàng Hiệu tạo cơ hội kinh doanh bán các nhà sản xuất nội địa mở rộng
                        thị
                        trường, có được một môi trường phát triển lành mạnh.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-80">
                <img src="./image-/bl2.jpg" class="card-img-top" alt="..." height="350">
                <div class="card-body">
                    <h5 class="card-title ">Làn da của thiên thần</h5>
                    <p class="card-text">Vua Hàng Hiệu tạo cơ hội kinh doanh bán các nhà sản xuất nội địa mở rộng
                        thị
                        trường, có được một môi trường phát triển lành mạnh.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-80">
                <img src="./image-/bl3.jpg" class="card-img-top" alt="..." height="350">
                <div class="card-body">
                    <h5 class="card-title">Không gì là không thể</h5>
                    <p class="card-text">Vua Hàng Hiệu tạo cơ hội kinh doanh bán các nhà sản xuất nội địa mở rộng
                        thị
                        trường, có được một môi trường phát triển lành mạnh.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <button class=" btn btn-outline-warning btn-lg view-all2 " type="button">Xem tất cả <i
            class="fas fa-angle-right"></i></button>
    <div class="row comment ">
        <div class="col-6 col-sm-6 col-xl-3 ">
            <i class="far fa-comment-alt fa-4x cmt"></i>
            <h3 class="text-center">ĐÁNH GIÁ CỦA KHÁCH HÀNG</h3>
        </div>

        <div class="col-6 col-sm-6 col-xl-3 ">
            <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                <div class="card-header">Thế Tâm <div class="star">
                        <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-warning">Son dưỡng môi</h5>
                    <p class="card-text">Sản phẩm ngừa mụn sáng da tốt lắm ạ. Giao hàng nhanh, tư vấn nhiệt tình ạ.
                    </p>
                </div>
            </div>
        </div>
        <!-- 1 -->
        <div class="col-6 col-sm-6 col-xl-3 ">
            <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                <div class="card-header">Huy Trung <div class="star">
                        <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i>
                    </div>
                </div>
                <div class="card-body ">
                    <h5 class="card-title text-warning">Kem dưỡng ẩm</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the
                        card's content.</p>
                </div>
            </div>
        </div>
        <!-- 2 -->
        <div class="col-6 col-sm-6 col-xl-3 ">
            <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                <div class="card-header">Huy <div class="star">
                        <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-warning">Sửa rửa mặt</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the
                        card's content.</p>
                </div>
            </div>
        </div>
        <!-- 3 -->
    </div>
    <!-- end instagram -->
</body>

</html>
>>>>>>> 639c0e431a13d69f0134f9805d2ced0c04940326
