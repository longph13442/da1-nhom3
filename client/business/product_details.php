<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>head</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  <!-- https://material.io/resources/icons/?style=baseline -->
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

  <!-- https://material.io/resources/icons/?style=outline -->
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">

  <!-- https://material.io/resources/icons/?style=round -->
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Round" rel="stylesheet">

  <!-- https://material.io/resources/icons/?style=sharp -->
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Sharp" rel="stylesheet">

  <!-- https://material.io/resources/icons/?style=twotone -->
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Two+Tone" rel="stylesheet">

  <!-- <link rel="stylesheet" href="index.css"> -->
  <style>
    @media (max-width: 767px) {
      .carousel-inner .carousel-item>div {
        display: none;
      }

      .carousel-inner .carousel-item>div:first-child {
        display: block;
      }
    }

    .carousel-inner .carousel-item.active,
    .carousel-inner .carousel-item-next,
    .carousel-inner .carousel-item-prev {
      display: flex;
    }

    /* medium and up screens */
    @media (min-width: 768px) {

      .carousel-inner .carousel-item-end.active,
      .carousel-inner .carousel-item-next {
        transform: translateX(25%);
      }

      .carousel-inner .carousel-item-start.active,
      .carousel-inner .carousel-item-prev {
        transform: translateX(-25%);
      }
    }

    .carousel-inner .carousel-item-end,
    .carousel-inner .carousel-item-start {
      transform: translateX(0);
    }
  </style>

</head>

<body>
  <div class="container mt-5">

    <div class="top row">
      <!-- hiển thị chi tiết sản phẩm -->
      <div class="left col">

        <div class="main-image text-center" style=""><img src="./image/<?php echo $info['anh_sp'] ?>" alt="ảnh chính" width="50%"></div>
        <div class="album"></div>

      </div>
      <div class="right col">
        <div class="name_product">
          <h2><?php echo $info['ten_sp'] ?></h2>
        </div>
        <div class="product_code mt-2">Mã sp:<?php echo $info['ma_sp'] ?></div>
        <div class="rate mt-2">
          <span class="material-icons">star_rate</span>
          <span class="material-icons">star_rate</span>
          <span class="material-icons">star_rate</span>
        </div>
        <div class="price mt-2 d-flex">
          <div class="new_price fw-bold fs-3 text-danger"> <?php echo number_format($info['giamgia'])  ?> đ</div>
          <div class="old_price mx-3">Giá thị trường : <span class=" fs-3 text-decoration-line-through "><?php echo number_format($info['giatien'])  ?> đ</span></div>
        </div>
        <div class="status mt-2"> <span class="fw-bold">Tình trạng :</span>
          <span class="text-danger fw-bold"> <?php if ($info['soluong'] > 1) {
                                                echo 'Còn hàng';
                                              } else {
                                                echo 'Hết hàng';
                                              } ?></span>
        </div>
        <div class="short_description mt-2 mb-2">
          <p><?php echo $info['mota'] ?></p>
        </div>


        <div class="quantity mb-4">Số lượng :

        </div>

        <button type="submit" class="btn btn-dark bg-dark border-0 px-5 py-3 d-inline-block "> <span class="material-icons text-light p-1 ">add_shopping_cart</span> <span class="fw-bold text-light text-uppercase p-1 ">Thêm vào giỏ hàng</span> </button>



      </div>
    </div>

    <div class="bot mt-5">
      <!-- mô tả ngắn -->
      <div class="descrription">

      </div>
      <!-- mô tả dài -->
      <div class="">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Mô tả</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link " id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Giới thiệu</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Nhận xét sản phẩm</button>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <p class="mt-4"><?php echo $info['mota_dai'] ?></p>
          </div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div class="comment">
              <div class="row d-flex justify-content-center">

                <div class="col-md-12">
                  <div class="headings d-flex justify-content-between align-items-center mb-3">
                    <p class="mt-3">Số bình luận (1)</p>
                  </div>
                  <div class="card p-3 mt-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="user d-flex flex-row align-items-center"> <img src="https://i.imgur.com/C4egmYM.jpg" width="30" class="user-img rounded-circle mr-2"> <span><small class="font-weight-bold text-primary">olan_sams</small> <small class="font-weight-bold">Loving your work and profile! </small></span> </div> <small> <span class="material-icons">star_rate</span> 3 ngày trước</small>
                    </div>
                    <div class="action d-flex justify-content-between mt-2 align-items-center">
                      <div class="reply px-4"> <small>Xóa</small> <span class="dots"></span> <small>Trả lời</small>
                        <span class="dots"></span>
                      </div>
                      <div class="icons align-items-center"> <i class="fa fa-check-circle-o check-icon text-primary"></i> </div>
                    </div>
                  </div>
                  .
                </div>
                <div class="col-md-12">

                </div>
              </div>

              <!-- <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                  <div class="headings d-flex justify-content-between align-items-center mb-3">
                    <p class="mt-3">Số bình luận (1)</p>
                  </div>
                  <iframe src="http://localhost/da1-nhom3/client/business/comments.php?ma_sp=<?php echo $info4['ma_sp'] ?>" frameborder="0" width="100%" height="700px"></iframe>
                  <?php if (isset($_SESSION['check'])) { ?>
                    <iframe src="http://localhost/da1-nhom3/client/business/comments.php?ma_sp=<?php echo $info4['ma_sp'] ?>" frameborder="0" width="100%" height="700px"></iframe>
                  <?php } else {
                    echo "Đăng nhập để bình luận!";
                  }    ?>
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </div>

      <!-- sản phẩm liên quan -->
      <div class="related_products mt-5 container text-center my-3">
        <h4 class='my-3'> SẢN PHẨM LIÊN QUAN </h4>
        <div class="row mx-auto my-auto justify-content-center">
          <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
              <?php foreach ($info2 as $item) : ?>
                <div class="carousel-item ">
                  <div class="col-md-3">
                    <div class="card-img">
                      <img src="./image/<?php echo $item['anh_sp'] ?>" class="">
                    </div>
                    <div class="price mt-2">
                      <div class="new_price"><?php echo $item['giamgia'] ?></div>
                      <div class="old_price"><?php echo $item['giatien'] ?></div>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
            <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<script>
  let items = document.querySelectorAll('.carousel .carousel-item')

  items.forEach((el) => {
    const minPerSlide = 4
    let next = el.nextElementSibling
    for (var i = 1; i < minPerSlide; i++) {
      if (!next) {
        // wrap carousel by using first child
        next = items[0]
      }
      let cloneChild = next.cloneNode(true)
      el.appendChild(cloneChild.children[0])
      next = next.nextElementSibling
    }
  })
</script>

</html>