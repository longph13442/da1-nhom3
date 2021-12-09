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
        <div class="new_price fw-bold fs-3 text-danger"> <?php echo number_format($info['gianew'])  ?> đ</div>
        <?php if ($info['gianew'] != $info['giatien']) : ?>
          <div class="old_price mx-3">Giá thị trường :
            <span class=" fs-3 text-decoration-line-through ">
              <?php echo number_format($info['giatien'])  ?> đ
            </span>
          </div>
        <?php endif; ?>
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
      <?php foreach ($voucher as $vou) : ?>
        <!-- Số tiền nhỏ hơn 400k và lớn hơn 100k -->
        <?php if ($info['gianew'] >= 100000  && $info['gianew'] <= 400000) : ?>
          <!-- Voucher nhỏ hơn 50k -->
          <?php if ($vou['sotien'] <= 50000) : ?>
            <span class="btn-danger btn-sm"><?= $vou['tenvoucher'] ?></span>
          <?php endif; ?>
          <!-- Số tiền lớn hơn 400k và nhỏ hơn 1000k -->
        <?php elseif ($info['gianew'] >= 400000 && $info['gianew'] <= 1000000) : ?>
          <!-- Voucher lớn hơn 50k và nhỏ hơn 100k -->
          <?php if ($vou['sotien'] >= 0 && $vou['sotien'] <= 100000) : ?>
            <span class="btn-danger btn-sm"><?= $vou['tenvoucher'] ?></span>
          <?php endif; ?>
          <!-- Số tiền lớn hơn 1000k -->
        <?php elseif ($info['giatien'] > 1000000) : ?>
          <!-- voucher lớn hơn 100k và nhỏ hơn 300k -->
          <?php if ($vou['sotien'] >= 0 && $vou['sotien'] <= 350000) : ?>
            <span class="btn-danger btn-sm"><?= $vou['tenvoucher'] ?></span>
          <?php endif; ?>

        <?php endif; ?>

      <?php endforeach; ?>
      <p></p>
      <form action="cart" method="post">
        <div class="quantity mb-4 d-flex">
          <label for="" class="fw-bold">Số lượng :</label>
          <input type="button" onclick="decrementValue()" value="-" class="btn btn-dark mx-2" style="width:7%;" />
          <input type="text" name="soluong" value="1" id="number" class="form-control " style="width:40px;" />
          <input type="button" onclick="incrementValue()" value="+" class="btn btn-dark mx-2" style="width:7%;" />
        </div>
        <?php if ($info['soluong'] > 1) : ?>
          <button class="btn btn-warning btn-sm " name="add"> Mua ngay</button>
        <?php endif; ?>

        <?php if (isset($_SESSION['ten_dang_nhap']) && $_SESSION['ten_dang_nhap'] != null) : ?>
          <a href="<?= ROOT_URL . 'yeu-thich/?ma_sp=' . $info['ma_sp'] ?>"><button type="button" class="btn btn-danger btn-sm">Yêu thích</button></a>
        <?php endif ?>
        <input type="hidden" name="tensp" value="<?= $info['ten_sp'] ?>">
        <input type="hidden" name="hinhanh" value="<?= $info['anh_sp'] ?>">
        <?php if ($info['gianew'] != 0) : ?>
          <input type="hidden" name="gianew" value="<?= $info['gianew'] ?>">
        <?php else : ?>
          <input type="hidden" name="giatien" value="<?= $info['giatien'] ?>">
        <?php endif; ?>
        <input type="hidden" name="masp" value="<?= $info['ma_sp'] ?>">
      </form>


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
          <p class="mt-4"><?php echo $info['mota'] ?></p>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
          <div class="comment">
            <div class="row d-flex justify-content-center">

              <div class="col-md-12">
                <div class="headings d-flex justify-content-between align-items-center mb-3">
                  <p class="mt-3">Số bình luận (<?= $soluong ?>)</p>
                </div>
                <?php foreach ($info3 as $bl) : ?>

                  <div class="card p-3 mt-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="user d-flex flex-row align-items-center">
                        <?php if ($bl['hinh_anh'] < 0) : ?>
                          <img src="https://scr.vn/wp-content/uploads/2020/07/Avatar-Facebook-tr%E1%BA%AFng.jpg" alt="mdo" width="60" height="60" class="rounded-circle">
                        <?php else : ?>
                          <img class="rounded-circle px-2" src="<?= ROOT_URL . IMG ?><?= $bl['hinh_anh'] ?>" width="60" height="60">

                        <?php endif; ?>
                        <span><small class="font-weight-bold text-primary mx-2"><?php echo $bl['ho_ten'] ?> </small>
                          <small class="font-weight-bold"><?php echo $bl['noi_dung']; ?> </small>
                        </span>
                      </div>
                      <small></small>
                      <small class="d-flex">
                        <div class="mx-3">
                          <?php for ($i = 0; $i < $bl['danh_gia']; $i++) : ?>
                            <?php if ($i != '') : ?>
                              <i class="fas fa-star " style="color: red;"></i>
                            <?php endif; ?>
                          <?php endfor; ?>
                        </div>
                        <div class=""><?php echo $bl['ngay_tao']; ?></div>
                      </small>
                    </div>
                    <div class="action d-flex justify-content-between mt-2 align-items-center mx-3">
                      <div class="reply px-4">
                      </div>
                      <div class="icons align-items-center"> <i class="fa fa-check-circle-o check-icon text-primary"></i> </div>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>

            </div>
            <div class="col-md-12">
              <?php if (isset($_SESSION['ten_dang_nhap'])) { ?>

                <form action="" method="post">
                  <div class="bg-light rounded p-2 mt-4">
                    <label for="" class="mx-4">Đánh giá sản phẩm : </label>

                    <div class="ratings m-3 ms-2">
                      <input type="radio" name="danh_gia" value="5" id="start1"><label class="" for="start1">
                      </label>
                      <input type="radio" name="danh_gia" value="4" id="start2"><label for="start2">

                      </label>
                      <input type="radio" name="danh_gia" value="3" id="start3"><label for="start3">
                      </label>
                      <input type="radio" name="danh_gia" value="2" id="start4"><label for="start4">
                      </label>
                      <input type="radio" name="danh_gia" value="1" id="start5"><label for="start5">
                      </label>
                    </div>
                    <input type="hidden" name="ma_sp" value="<?php echo $info['ma_sp'] ?>">

                    <div class="d-flex flex-row align-items-start">
                      <?php if (avatar() < 0) : ?>
                        <img src="https://scr.vn/wp-content/uploads/2020/07/Avatar-Facebook-tr%E1%BA%AFng.jpg" alt="mdo" width="60" height="60" class="rounded-circle">
                      <?php else : ?>
                        <img class="rounded-circle px-2" src="<?= ROOT_URL . IMG ?><?= avatar(); ?>" width="60" height="60">
                      <?php endif; ?>
                      <textarea class="form-control ml-1 shadow-none textarea" name="noi_dung"></textarea>
                    </div>
                    <div class="mt-2 text-right ms-5 my-1">
                      <input type="submit" value="Gửi bình luận" name="gui_bl" class="btn btn-primary btn-sm shadow-none mx-2">
                      <!-- <button class="btn btn-primary btn-sm shadow-none mx-2" type="submit" name="gui_bl" >Gửi bình luận</button> -->
                      <button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="reset">Hủy</button>
                    </div>
                  </div>
                </form>
              <?php } else {
                echo "Đăng nhập để bình luận!";
              }    ?>
            </div>
          </div>
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
                  <a href="sanphamct&ma_sp=<?= $info['ma_sp'] ?>"><img src="<?= ADMIN_ASSET ?>/image/<?php echo $info['anh_sp'] ?>" alt="" width="70%"></a>
                </div>
                <div class="name_product">
                  <a href="sanphamct&ma_sp=<?= $info['ma_sp'] ?>" class="link-dark nav-link">
                    <p><?php echo $info['ten_sp'] ?></p>
                  </a>
                </div>
                <div class="price mt-2">
                  <div class="new_price fw-bold "><?php echo number_format($info['gianew'])  ?> đ</div>
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
                    <a href="sanphamct&ma_sp=<?= $item['ma_sp'] ?>"><img src="<?= ADMIN_ASSET ?>/image/<?php echo $item['anh_sp'] ?>" class="img-fluid" width="70%"></a>
                  </div>
                  <div class="name_product">
                    <a href="sanphamct&ma_sp=<?= $item['ma_sp'] ?>" class="link-dark nav-link">
                      <p><?php echo $item['ten_sp'] ?></p>
                    </a>

                  </div>
                  <div class="price mt-2 ">
                    <div class="new_price fw-bold "><?php echo number_format($item['giatien'])  ?> đ</div>
                    <div class="old_price text-secondary text-decoration-line-through"><?php echo number_format($item['gianew'])  ?> đ</div>
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