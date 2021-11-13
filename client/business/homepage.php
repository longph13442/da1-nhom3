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
    <!-- boostrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <!-- slider -->
    <script src="https://kit.fontawesome.com/5873c71494.js" crossorigin="anonymous"></script>
    <!-- font-icon -->
</head>

<body>

    <header class="p-3 m-2 row ">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                    <img src="./image/logo.png" alt="" height="50">
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 link-secondary">Trang chủ</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">Sản Phẩm</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">Giới thiệu</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">Blog</a></li>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                    <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                  </form>

                <div class="dropdown text-end">
                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!-- end head -->

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./image/banner.jpg" class="d-block w-100 " alt="...">
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
                <img src="./image/banner3.png" class="d-block w-100" alt="...">
               
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

    <div class="display-4  mt-5 mt-lg-5 mt-md-5  ">
        <h3 class="fw-bold text-center">TOP PRODUCTS SALE</h3>
    </div>

    <!-- end title -->

    <div class="box">
        <div class="row product-fist ">
            <ul class="slider">
                <li>
                    <div class=" ">
                        <img src="./image/img1.jpg" alt="" class="img-fluid" height="50">
                        <p class=" display-8 text-center fw-bold text-secondary my-2">350.000 VND - 400.00 VND</p>
                        <p class="text-center">Kem Dưỡng ẩm</p>
                        <div class="star">
                            <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i>
                        </div>

                    </div>
                </li>
                <li>
                    <div class=" ">
                        <img src="./image/img2.jpg" alt="" class="img-fluid" height="50">
                        <p class=" display-8 text-center fw-bold text-secondary my-2">350.000 VND - 400.00 VND</p>
                        <p class="text-center">Kem Dưỡng ẩm</p>
                        <div class="star">
                            <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i>
                        </div>

                    </div>
                </li>
                <li>
                    <div class="  ">
                        <img src="./image/img3.jpg" alt="" class="img-fluid" height="50">
                        <p class=" display-8 text-center fw-bold text-secondary my-2">350.000 VND - 400.00 VND</p>
                        <p class="text-center">Kem Dưỡng ẩm</p>
                        <div class="star">
                            <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i>
                        </div>

                    </div>
                </li>

                <li>
                    <div class="  ">
                        <img src="./image/img4.jpg" alt="" class="img-fluid" height="50">
                        <p class=" display-8 text-center fw-bold text-secondary my-2">350.000 VND - 400.00 VND</p>
                        <p class="text-center">Kem Dưỡng ẩm</p>
                        <div class="star">
                            <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i>
                        </div>

                    </div>
                </li>

                <li>
                    <div class=" ">
                        <img src="./image/img5.jpg" alt="" class="img-fluid" height="50">
                        <p class=" display-8 text-center fw-bold text-secondary my-2">350.000 VND - 400.00 VND</p>
                        <p class="text-center">Kem Dưỡng ẩm</p>
                        <div class="star">
                            <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i>
                        </div>

                    </div>
                </li>
                <li>
                    <div class=" ">
                        <img src="./image/img6.jpg" alt="" class="img-fluid" height="50">
                        <p class=" display-8 text-center fw-bold text-secondary my-2">350.000 VND - 400.00 VND</p>
                        <p class="text-center">Kem Dưỡng ẩm</p>
                        <div class="star">
                            <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i>
                        </div>

                    </div>
                </li>
                <li>
                    <div class="  ">
                        <img src="./image/img7.jpg" alt="" class="img-fluid" height="50">
                        <p class=" display-8 text-center fw-bold text-secondary my-2">350.000 VND - 400.00 VND</p>
                        <p class="text-center">Kem Dưỡng ẩm</p>
                        <div class="star">
                            <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i>
                        </div>

                    </div>
                </li>

                <li>
                    <div class="  ">
                        <img src="./image/img3.jpg" alt="" class="img-fluid" height="50">
                        <p class=" display-8 text-center fw-bold text-secondary my-2">350.000 VND - 400.00 VND</p>
                        <p class="text-center">Kem Dưỡng ẩm</p>
                        <div class="star">
                            <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i>
                        </div>

                    </div>
                </li>
            </ul>
        </div>
        <!-- end product-fist -->

        <div class="row">
            
            <div class="col-12 text-center ">
                <button class=" btn btn-outline-warning btn-lg mx-auto" type="button">Xem tất cả <i
                    class="fas fa-angle-right"></i></button>
            </div>
           
        </div>
        <!-- end button -->
        <div class="box-big">
            <h3 class="text-center  fw-bold">More to Discover and products</h3>
            <div class="row double">
                <div class="col-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4 baner2 mt-md-4  text-center ">
                    <img src="./image/baner7.png" alt="" width="90%">
                </div>
                <div class="col-12  col-md-12 col-lg-4 col-xl-4 col-xxl-4 mt-md-4 mt-4 text-center">
                    <img src="./image/baner8.jpg" alt="" width="90%">
                </div>
                <div class="col-12  col-md-12 col-lg-4 col-xl-4 col-xl-4 mt-md-4 mt-4 text-center">
                    <img src="./image/baner9.png" alt="" width="90%">
                </div>
            </div>
            <!-- end banner double -->
        </div>
        <!-- end box-big -->
        <div class="display-4  ">
            <h4 class="fw-bold mx-5 mt-5">SẢN PHẨM BÁN CHẠY</h4>
        </div>
        <div class="box-big">
            <div class="row ">
                <div class="col-12 col-sm-12 col-lg-3 col-xl-3 text-center  ">
                    <img src="./image/img7.jpg" alt="" class="img-fluid" height="50">
                    <p class=" display-8 text-center fw-bold text-secondary mt-4">350.000 VND - 400.00 VND</p>
                    <p class="text-center">Kem Dưỡng ẩm</p>
                    <div class="star mb-md-4">
                        <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-lg-3 col-xl-3 text-center  ">
                    <img src="./image/img2.jpg" alt="" class="img-fluid" height="50">
                    <p class=" display-8 text-center fw-bold text-secondary mt-4">350.000 VND - 400.00 VND</p>
                    <p class="text-center">Kem Dưỡng ẩm</p>
                    <div class="star mb-md-4">
                        <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i>
                    </div>

                </div>
                <div class="col-12 col-sm-12 col-lg-3 col-xl-3 text-center  ">
                    <img src="./image/img6.jpg" alt="" class="img-fluid" height="50">
                    <p class=" display-8 text-center fw-bold text-secondary mt-4">350.000 VND - 400.00 VND</p>
                    <p class="text-center">Kem Dưỡng ẩm</p>
                    <div class="star mb-md-4">
                        <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-lg-3 col-xl-3 text-center  ">
                    <img src="./image/img4.jpg" alt="" class="img-fluid" height="50">
                    <p class=" display-8 text-center fw-bold text-secondary mt-4">350.000 VND - 400.00 VND</p>
                    <p class="text-center">Kem Dưỡng ẩm</p>
                    <div class="star mb-md-4">
                        <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-3 col-xl-3 text-center">
                    <img src="./image/img15.jpg" alt="" class="img-fluid" height="50">
                    <p class=" display-8 text-center fw-bold text-secondary mt-4">350.000 VND - 400.00 VND</p>
                    <p class="text-center">Kem Dưỡng ẩm</p>
                    <div class="star mb-md-4">
                        <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-lg-3 col-xl-3 text-center ">
                    <img src="./image/img14.jpg" alt="" class="img-fluid" height="50">
                    <p class=" display-8 text-center fw-bold text-secondary mt-4">350.000 VND - 400.00 VND</p>
                    <p class="text-center">Kem Dưỡng ẩm</p>
                    <div class="star mb-md-4">
                        <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i>
                    </div>

                </div>
                <div class="col-12 col-sm-12 col-lg-3 col-xl-3 text-center  ">
                    <img src="./image/img13.jpg" alt="" class="img-fluid" height="50">
                    <p class=" display-8 text-center fw-bold text-secondary mt-4">350.000 VND - 400.00 VND</p>
                    <p class="text-center">Kem Dưỡng ẩm</p>
                    <div class="star mb-md-4">
                        <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-lg-3 col-xl-3 text-center  ">
                    <img src="./image/img12.jpg" alt="" class="img-fluid" height="50">
                    <p class=" display-8 text-center fw-bold text-secondary mt-4">350.000 VND - 400.00 VND</p>
                    <p class="text-center">Kem Dưỡng ẩm</p>
                    <div class="star mb-md-4">
                        <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i>
                    </div>
                </div>
            </div>
            <!-- end product-center -->
            <div class="row">
                <div class="col-12 text-center ">
                <button class=" btn btn-outline-warning btn-lg mx-auto" type="button">Xem tất cả <i
                    class="fas fa-angle-right"></i></button>
            </div>
            </div>
           <!-- end button -->
        </div>
        <!-- end box-bog -->
        <div id="carouselExampleSlidesOnly" class="carousel slide banner2" data-bs-ride="carousel">
            <div class="carousel-inner slides">
                <div class="carousel-item active">
                    <img src="./image/slide.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <h1 class="display-4 text-dark">Cửa Hàng mỹ phẩm</h1>
                        <h3 class="text-dark">Chuyên cung cấp mỹ phẩm chính hãng</h3>
                        <button type="button" class="btn btn-outline-light btn-lg ">Mua Ngay</button>
                        <button type="button" class="btn btn-warning btn-lg">Đăng Kí</button>

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./image/slide.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <h1 class="display-4 text-dark">Cửa Hàng mỹ phẩm</h1>
                        <h3 class="text-dark">Chuyên cung cấp mỹ phẩm chính hãng</h3>
                        <button type="button" class="btn btn-outline-light btn-lg ">Mua Ngay</button>
                        <button type="button" class="btn btn-warning btn-lg">Đăng Kí</button>

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./image/slide.jpg" class="d-block w-100" alt="...">
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
        <div class=" row box-bigb">
            <div class="col-12 col-sm-12 col-lg-6 col-xl-6 text-center">
                <img src="./image/img11.jpg" alt="" width="90%">
            </div>
            <div class="col-12 col-sm-12 col-lg-6 col-xl-6">
                <h3 class="text-center mt-5 mt-lg-0 mt-xl-5 mb-2 ">BẠN XỨNG ĐÁNG ĐƯỢC ĐỐI XỬ TỐT HƠN</h3>
                <P>Chúng ta thường tin rằng bản thân mình không đủ tốt và không xứng đáng với những điều tốt đẹp. Chúng ta muốn được yêu thương nhưng lại không biết cách yêu thương bản thân, mà bởi vì vậy nên cũng không thể cảm nhận một cách trọn vẹn tình yêu từ người khác. Học cách yêu bản thân sẽ giúp mỗi người tạo nên một cuộc chuyển dịch lớn trong cách nhìn cuộc sống – cuộc chuyển dịch khiến chúng ta biết trân quý và chấp nhận con người thật của mình.</P>
                <br>
                <p>“Yêu bản thân” nghe có vẻ dễ dàng, nhưng nếu chẳng may bị đối xử tệ bạc, liệu bạn có chọn đả kích ngược lại những người mà bạn nghĩ đã làm tổn thương mình không? Khi lựa chọn hành động như vậy, đồng nghĩa rằng bạn đang sợ hãi và cảm thấy không được yêu thương.</p>
            </div>
        </div>
        <!-- end box-big -->
        <div class="box-big">
            <h4 class="title3 text-center fw-bold"> NHỮNG BÀI VIẾT ĐANG ĐƯỢC QUAN TÂM</h4>
            <div class="row row-cols-1 row-cols-md-3 g-3  ">
                <div class="col col-md-12 col-lg-4 col-xl-4">
                    <div class="card h-100">
                        <img src="./image/blog4.jpg" class="card-img-top" alt="..." height="350">
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
                        <img src="./image/blog5.jpg" class="card-img-top" alt="..." height="350">
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
                        <img src="./image/blog6.jpg" class="card-img-top" alt="..." height="350">
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
                <button class=" btn btn-outline-warning btn-lg mx-auto" type="button">Xem tất cả <i
                    class="fas fa-angle-right"></i></button>
            </div>
            </div>
           <!-- end button -->
                    <hr>
            <div class="row comment ">
                <div class="col-6 col-sm-6 col-lg-3 col-xl-3 ">
                    <i class="far fa-comment-alt fa-4x cmt"></i>
                    <h3 class="text-center">ĐÁNH GIÁ CỦA KHÁCH HÀNG</h3>
                </div>

                <div class="col-6 col-sm-6 col-lg-3 col-xl-3 ">
                    <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                        <div class="card-header">Thế Tâm <div class="star">
                                <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-warning">Son dưỡng môi</h5>
                            <p class="card-text">Sản phẩm ngừa mụn sáng da tốt lắm ạ. Giao hàng nhanh, tư vấn nhiệt tình
                                ạ.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- 1 -->
                <div class="col-6 col-sm-6 col-lg-3 col-xl-3 ">
                    <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                        <div class="card-header">Huy Trung <div class="star">
                                <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="card-body ">
                            <h5 class="card-title text-warning">Kem dưỡng ẩm</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
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
                                <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-warning">Sửa rửa mặt</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
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
    <footer class="py-5 bg-secondary">
        <div class="row">
            <div class="col-2">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">About</a></li>
                </ul>
            </div>

            <div class="col-2">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">About</a></li>
                </ul>
            </div>

            <div class="col-2">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">About</a></li>
                </ul>
            </div>

            <div class="col-4 offset-1">
                <form>
                    <h5>Subscribe to our newsletter</h5>
                    <p>Monthly digest of whats new and exciting from us.</p>
                    <div class="d-flex w-100 gap-2">
                        <label for="newsletter1" class="visually-hidden">Email address</label>
                        <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                        <button class="btn btn-dark" type="button">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="d-flex justify-content-between py-4 my-4 border-top">
            <p>© 2021 Company, Inc. All rights reserved.</p>
            <ul class="list-unstyled d-flex">
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#twitter"></use>
                        </svg></a></li>
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#instagram"></use>
                        </svg></a></li>
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#facebook"></use>
                        </svg></a></li>
            </ul>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>

        $('.slider').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1000,
        });
        
    </script>
</body>

</html>