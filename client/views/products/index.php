   <main>
       <div class="container ">
           <div class="row">
               <div class="col-3 bg-light py-5" style="height: 90%;">
                   <div class="list-group ">

                       <h5 class="text-center my-3">Danh mục sản phẩm</h5>

                       <?php
                        foreach ($dmsp as $d) {
                            extract($d);
                            $linkdm = "index.php?url=danh-muc&ma_sp=" . $ma_loai;
                            echo ' 
           <a href="' . $linkdm . '" class="list-group-item list-group-item-action  border border-0 text-center py-3 bg-light">' . $ten_loai . '</a>';
                        }
                        ?>

                       <!-- <a href="#" class="list-group-item list-group-item-action  border border-0 text-center py-3 bg-light">Trang điểm</a>
                        <a href="#" class="list-group-item list-group-item-action  border border-0  text-center py-3 bg-light">Dưỡng mặt</a>
                        <a href="#" class="list-group-item list-group-item-action  border border-0  text-center py-3 bg-light"> Dưỡng body</a> -->

                   </div>

                   <div class="price text-center">
                       <label for="customRange1" class="form-label  pw-bold py-3">Giá</label>
                       <input type="range" class="form-range" id="customRange1">
                       <p class="text-center py-3">Giá 10$-200$</p>
                   </div>

                   <div class="list-group pt-3 text-center">

                       <button type="button" class="list-group-item list-group-item-action border border-0 bg-light" aria-current="true">
                           DUNG TÍCH
                       </button>
                       <button type="button" class="list-group-item  border border-0 bg-light">30
                           mL</button>
                       <button type="button" class="list-group-item  border border-0 bg-light">40
                           mL</button>
                       <button type="button" class="list-group-item  border border-0 bg-light">50
                           mL</button>

                   </div>
               </div>
               <div class="col-9">

                   <h4 class="mx-3 my-3">Tất cả các sản phẩm </h4>

                   <div class="row ">

                       <?php foreach ($dssp as $p) : ?>

                           <div class="col-12 col-sm-12 col-lg-4 col-xl-4 text-center  ">
                               <a href="index.php?url=sanphamct&ma_sp=<?= $p['ma_sp'] ?>"><img src="<?= ADMIN_ASSET ?>image/<?= $p['anh_sp'] ?>  " alt="" class="img-fluid" height="50"></a>
                               <p class=" display-8 text-center fw-bold text-secondary mt-4"> <?= $p['giatien'] ?> </p>
                               <p class="text-center"> <?= $p['ten_sp'] ?> </p>
                               <div class="star mb-md-4">
                                   <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                               </div>
                           </div>

                       <?php endforeach ?>
                   </div>

                   <div class="pagi d-flex justify-content-center">
                       <nav class="text-center" aria-label="Page navigation example">
                           <ul class="pagination ">
                               <li class="page-item">
                                   <a class="page-link text-dark" href="#" aria-label="Previous">
                                       <span aria-hidden="true">&laquo;</span>
                                   </a>
                               </li>
                               <li class="page-item "><a class="page-link text-dark" href="#">1</a></li>
                               <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
                               <li class="page-item "><a class="page-link text-dark" href="#">3</a></li>
                               <li class="page-item ">
                                   <a class="page-link text-dark" href="#" aria-label="Next">
                                       <span aria-hidden="true">&raquo;</span>
                                   </a>
                               </li>
                           </ul>
                       </nav>
                   </div>
               </div>

           </div>
           <!-- end row -->
           <h4 class="text-center my-5">NHỮNG ƯU ĐÃI DÀNH RIÊNG CHO BẠN</h4>
           <div class="row mx-5">
               <div class="col-4 text-center">
                   <img src="<?= homepase_ASSET ?>image/pr1.png" alt="" height="400" width="100%">
               </div>
               <div class="col-4 text-center">
                   <img src="<?= homepase_ASSET ?>image/pr2.png" alt="" height="400" width="100%">

               </div>
               <div class="col-4 text-center">
                   <img src="<?= homepase_ASSET ?>image/pr1.png" alt="" height="400" width="100%">
               </div>
           </div>
           <!-- end row -->
           <h4 class="my-5">NHỮNG SẢN PHẨM ƯU ĐÃI</h4>
           <div class="row">

               <div class="col-6 col-sm-6 col-lg-3 col-xl-3 text-center  ">
                   <img src="<?= homepase_ASSET ?>image/img13.jpg" alt="" class="img-fluid" height="50">

                   <p class="text-center">Nước hoa pháp <br> Mer Accord.</p>
                   <p class=" display-8 text-center fw-bold text-secondary mt-4">350.000 VND - 400.00 VND</p>
                   <div class="star mb-md-4">
                       <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                   </div>
               </div>
               <div class="col-6 col-sm-6 col-lg-3 col-xl-3 text-center  ">
                   <img src="<?= homepase_ASSET ?>image/img14.jpg" alt="" class="img-fluid" height="50">
                   <p class="text-center">Bộ trang điểm hoàn hảo <br> cho da mặt.</p>
                   <p class=" display-8 text-center fw-bold text-secondary mt-4">350.000 VND - 400.00 VND</p>
                   <div class="star mb-md-4">
                       <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                   </div>
               </div>

               <div class="col-6 col-sm-6 col-lg-4 col-xl-3 text-center  ">
                   <img src="<?= homepase_ASSET ?>image/img15.jpg" alt="" class="img-fluid" height="50">
                   <p class="text-center">Bộ trang điểm hoàn hảo <br> cho da mặt.</p>
                   <p class=" display-8 text-center fw-bold text-secondary mt-4">350.000 VND - 400.00 VND</p>
                   <div class="star mb-md-4">
                       <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                   </div>
               </div>
               <div class="col-6 col-sm-6 col-lg-4 col-xl-3 text-center  ">
                   <img src="<?= homepase_ASSET ?>image/img12.jpg" alt="" class="img-fluid" height="50">
                   <p class="text-center">Bộ trang điểm hoàn hảo <br> cho da mặt.</p>
                   <p class=" display-8 text-center fw-bold text-secondary mt-4">350.000 VND - 400.00 VND</p>
                   <div class="star mb-md-4">
                       <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                   </div>
               </div>
           </div>
           <!-- end row -->
           <div class="row">

               <div class="col-6 col-sm-6 col-lg-3 col-xl-3 text-center  ">
                   <img src="<?= homepase_ASSET ?>image/img1.jpg" alt="" class="img-fluid" height="50">

                   <p class="text-center">Nước hoa pháp <br> Mer Accord.</p>
                   <p class=" display-8 text-center fw-bold text-secondary mt-4">350.000 VND - 400.00 VND</p>
                   <div class="star mb-md-4">
                       <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                   </div>
               </div>
               <div class="col-6 col-sm-6 col-lg-3 col-xl-3 text-center  ">
                   <img src="<?= homepase_ASSET ?>image/img2.jpg" alt="" class="img-fluid" height="50">
                   <p class="text-center">Bộ trang điểm hoàn hảo <br> cho da mặt.</p>
                   <p class=" display-8 text-center fw-bold text-secondary mt-4">350.000 VND - 400.00 VND</p>
                   <div class="star mb-md-4">
                       <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                   </div>
               </div>

               <div class="col-6 col-sm-6 col-lg-4 col-xl-3 text-center  ">
                   <img src="<?= homepase_ASSET ?>image/img3.jpg" alt="" class="img-fluid" height="50">
                   <p class="text-center">Bộ trang điểm hoàn hảo <br> cho da mặt.</p>
                   <p class=" display-8 text-center fw-bold text-secondary mt-4">350.000 VND - 400.00 VND</p>
                   <div class="star mb-md-4">
                       <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                   </div>
               </div>
               <div class="col-6 col-sm-6 col-lg-4 col-xl-3 text-center  ">
                   <img src="<?= homepase_ASSET ?>image/img4.jpg" alt="" class="img-fluid" height="50">
                   <p class="text-center">Bộ trang điểm hoàn hảo <br> cho da mặt.</p>
                   <p class=" display-8 text-center fw-bold text-secondary mt-4">350.000 VND - 400.00 VND</p>
                   <div class="star mb-md-4">
                       <i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                   </div>
               </div>
           </div>
           <!-- end row -->
       </div>
   </main>