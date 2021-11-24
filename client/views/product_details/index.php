<div class="container my-5 ">

  <div class="top row">
    <!-- hiển thị chi tiết sản phẩm -->
    <div class="left col">

      <div class="main-image text-center" style=""><img src="<?= ADMIN_ASSET ?>/image/<?php echo $info['anh_sp'] ?>" alt="ảnh chính" width="50%"></div>
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


      <div class="quantity mb-4 d-flex">
        <label for="" class="fw-bold">Số lượng :</label>
        <input type="button" onclick="decrementValue()" value="-" class="btn btn-dark mx-2" style="width:7%;" />
        <input type="text" name="quantity" value="1" maxlength="2" size="1" id="number" class="form-control " style="width:40px;" />
        <input type="button" onclick="incrementValue()" value="+" class="btn btn-dark mx-2" style="width:7%;" />
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
    <div class="related_products mt-5 container text-center my-3 ">
      <h4 class='my-3'> SẢN PHẨM LIÊN QUAN </h4>

      <div class="row mx-auto my-auto justify-content-center">
        <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active border-0">
              <div class="col-md-3 border-0">
                <div class="card border-0">
                  <div class="card-img">
                    <img src="<?= ADMIN_ASSET ?>/image/<?php echo $info['anh_sp'] ?>" alt="" width="70%">
                  </div>
                  <div class="name_product">
                    <p><?php echo $info['ten_sp'] ?></p>
                  </div>
                  <div class="price mt-2">
                    <div class="new_price fw-bold "><?php echo number_format($info['giamgia'])  ?> đ</div>
                    <div class="old_price text-secondary text-decoration-line-through"><?php echo number_format($info['giatien'])  ?> đ</div>
                  </div>
                </div>
              </div>
            </div>
            <?php foreach ($info2 as $item) : ?>
              <div class="carousel-item border-0">
                <div class="col-md-3 border-0">
                  <div class="card border-0">
                    <div class="card-img">
                      <img src="<?= ADMIN_ASSET ?>/image/<?php echo $item['anh_sp'] ?>" class="img-fluid" width="70%">
                    </div>
                    <div class="name_product">
                      <p><?php echo $item['ten_sp'] ?></p>
                    </div>
                    <div class="price mt-2 ">
                      <div class="new_price fw-bold "><?php echo number_format($item['giamgia'])  ?> đ</div>
                      <div class="old_price text-secondary text-decoration-line-through"><?php echo number_format($item['giatien'])  ?> đ</div>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
          <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-dark rounded" aria-hidden="true"></span>
          </a>
          <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-dark rounded" aria-hidden="true"></span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>