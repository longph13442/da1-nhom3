   <main>
       <div class="container my-5">
           <div class="row">
               <div class="col-3 bg-light py-5" style="height: 90%;">
                   <div class="list-group ">
                       <h5 class="text-center my-3">Danh mục sản phẩm</h5>
                       <a href="<?= ROOT_URL ?>danh-muc" class="list-group-item list-group-item-action  border border-0 text-center py-3 bg-light">Tất cả sản phẩm</a>
                       <?php
                        foreach ($dmsp as $d) {
                            extract($d);
                            $linkdm = ROOT_URL . "danh-muc&ma_loai=" . $ma_loai;
                            echo '<a href="' . $linkdm . '" class="list-group-item list-group-item-action  border border-0 text-center py-3 bg-light">' . $ten_loai . '</a>';
                        }
                        ?>
                   </div>
                   <div class="price text-center">
                       <label for="customRange1" class="form-label  pw-bold py-3">Chọn giá</label>
                       <p class="text-center py-3"><a class="text-dark text-decoration-none" href="<?= ROOT_URL ?>danh-muc/giatien?sanphamden1trieu"> 100,000-1,000,000 VNĐ</a>
                       </p>
                       <p class="text-center py-3"><a class="text-dark text-decoration-none" href="<?= ROOT_URL ?>danh-muc/giatien?sanphamden2trieu"> 1,000,000-2,000,000 VNĐ</a>
                       </p>
                       <p class="text-center py-3"><a class="text-dark text-decoration-none" href="<?= ROOT_URL ?>danh-muc/giatien?sanphamden3trieu"> 2,000,000-3,000,000 VNĐ</a>
                       </p>
                       <p class="text-center py-3"><a class="text-dark text-decoration-none" href="<?= ROOT_URL ?>danh-muc/giatien?sanpham3trieudolen">3,000,000 VNĐ Trở lên</a>
                       </p>
                   </div>
                   <!--  <div class="list-group pt-3 text-center">
                       <button type="button" class="list-group-item list-group-item-action border border-0 bg-light" aria-current="true">
                           DUNG TÍCH
                       </button>
                       <button type="button" class="list-group-item  border border-0 bg-light">30
                           mL</button>
                       <button type="button" class="list-group-item  border border-0 bg-light">40
                           mL</button>
                       <button type="button" class="list-group-item  border border-0 bg-light">50
                           mL</button>

                   </div> -->
               </div>
               <div class="col-9">

                   <h3 class="mx-3 my-3">
                       <?php if (isset($keysear)) : ?>
                           <?php echo $keysear; ?>
                       <?php elseif (isset($keylg)) : ?>
                           <?php echo $keylg; ?>
                       <?php elseif (isset($tendm['ten_loai'])) : ?>
                           <?php echo $tendm['ten_loai']; ?>
                       <?php else : ?>
                           Tất cả các sản phẩm
                       <?php endif; ?></h3>

                   <div class="row ">

                       <?php foreach ($dssp as $p) : ?>

                           <div class="col-12 col-sm-12 col-lg-4 col-xl-4 text-center  ">
                               <a href="<?= ROOT_URL ?>sanphamct&ma_sp=<?= $p['ma_sp'] ?>"><img src="<?= ADMIN_ASSET ?>image/<?= $p['anh_sp'] ?>  " alt="" class="img-fluid" height="50"></a>
                               <a href="index.php?url=sanphamct&ma_sp=<?= $p['ma_sp'] ?>" class="nav-link text-success">
                                   <p class="text-center"> <?= $p['ten_sp'] ?> </p>
                               </a>
                               <p class=" display-8 text-center fw-bold text-secondary mt-4"><a class="text-decoration-none text-dark" href="<?= ROOT_URL ?>sanphamct&ma_sp=<?= $p['ma_sp'] ?>"><?= number_format($p['giatien'], 0) ?>VNĐ</a> </p>

                               <div class="star mb-md-4">
                                   <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                               </div>
                           </div>

                       <?php endforeach ?>
                   </div>

                   <div class="pagi d-flex justify-content-center">
                       <nav class="text-center" aria-label="Page navigation example">
                           <ul class="pagination ">

                               <?php if (isset($key)) : ?>
                                   <?php for ($i = 1; $i <= $tongpage; $i++) : ?>
                                       <li class="page-item ">
                                           <a class="page-link" href="tim-kiem?pg=<?= $i ?>"><?= $i ?></a>
                                       </li>
                                   <?php endfor; ?>
                               <?php elseif (isset($tendm['ten_loai'])) : ?>
                                   <?php for ($i = 1; $i <= $tongpage; $i++) : ?>
                                       <li class="page-item ">
                                           <a class="page-link" href="danh-muc&ma_loai=<?= $_GET['ma_loai'] ?>?pg=<?= $i ?>"><?= $i ?></a>
                                       </li>
                                   <?php endfor; ?>
                               <?php elseif (isset($keylg)) : ?>
                                   <?php echo ''; ?>
                               <?php else : ?>
                                   <?php for ($i = 1; $i <= $tongpage; $i++) : ?>
                                       <li class="page-item ">
                                           <a class="page-link" href="danh-muc?pg=<?= $i ?>"><?= $i ?></a>
                                       </li>
                                   <?php endfor; ?>
                               <?php endif; ?>

                           </ul>
                       </nav>
                   </div>
               </div>

           </div>
           <!-- end row -->
           <h4 class="text-center my-5">NHỮNG ƯU ĐÃI DÀNH RIÊNG CHO BẠN</h4>
           <div class="row mx-5">
               <div class="col-4 text-center">
                   <img src="<?= homepase_ASSET ?>Image/baner7.jpg" alt="" height="400" width="100%">
               </div>
               <div class="col-4 text-center">
                   <img src="<?= homepase_ASSET ?>Image/baner8.jpg" alt="" height="400" width="100%">

               </div>
               <div class="col-4 text-center">
                   <img src="<?= homepase_ASSET ?>Image/baner9.jpg" alt="" height="400" width="100%">
               </div>
           </div>
           <!-- end row -->
           <h4 class="my-5">NHỮNG SẢN PHẨM ƯU ĐÃI</h4>

           <div class="row">
               <?php foreach ($dskm as $p) : ?>
                   <!-- 
                  <div class="row">
               <div class="col-12 col-sm-12 col-lg-4 col-xl-4 text-center  ">
                               <a href="<?= ROOT_URL ?>sanphamct&ma_sp=<?= $p['ma_sp'] ?>"><img src="<?= ADMIN_ASSET ?>image/ " alt="" class="img-fluid" height="50"></a>

                               <a class="text-warning text-decoration-none" href="<?= ROOT_URL ?>sanphamct&ma_sp=<?= $p['ma_sp'] ?>">
                                   <p class="text-center"> </p>
                               </a>
                               <p class=" display-8 text-center fw-bold text-secondary mt-4">    </p>

                               <div class="star mb-md-4">
                                   <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                               </div>
                           </div>
             


           </div> -->


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


           <!-- end row -->

           <!-- end row -->
       </div>




   </main>