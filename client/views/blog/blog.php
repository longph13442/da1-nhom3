<main class="container my-5">
    <div>
        <div id="carouselExampleSlidesOnly" class="carousel slide mb-5" data-bs-ride="carousel">
            <div class="carousel-inner">
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
    </div>

    <div class="row mb-2">
        <?php foreach ($blog as $b) : ?>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden d-flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-warning">Người đăng : <?= $b['ten_dang_nhap'] ?></strong>
                        <h3 class="mb-0"></h3>
                        <div class="mb-1 text-muted" style="font-size: 12px">Ngày tạo :<?= $b['ngay_tao'] ?></div>
                        <p class="card-text mb-auto fw-bold"><?= $b['tieu_de'] ?>
                        </p>
                        <span class="card-text mb-auto fw"><?= $b['noi_dung'] ?></span>
                        <a href="index.php?url=ctblog&ma_blog=<?= $b['ma_blog'] ?>" class="stretched-link text-warning">Xem thêm</a>
                    </div>
                    <div class="col-5 d-none d-lg-block">
                        <a href="index.php?url=ctblog&ma_blog=<?= $b['ma_blog'] ?>"><img src="<?= ADMIN_ASSET ?>image/<?= $b['anh_minh_hoa'] ?>" class="card-img-top" alt="..." height="350"></a>

                    </div>
                </div>
            </div>

        <?php endforeach ?>


        <!-- <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden d-flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-warning">Longtv</strong>
                    <h3 class="mb-0"></h3>
                    <div class="mb-1 text-muted">Ngày 27/11/2021</div>
                    <p class="card-text mb-auto fw-bold">CÁC SẢN PHẨM MAKEUP 2 TRONG 1 ĐA ZI NĂNG CHO NÀNG
                    </p>
                    <a href="#" class="stretched-link text-warning">Xem thêm</a>
                </div>
                <div class="col-5 d-none d-lg-block">
                    <img src="<?= ADMIN_ASSET ?>image/2.webp" alt="" width="100%" height="100%">

                </div>
            </div>

        </div> -->

        <div class="row g-5">
            <div class="col-md-9">
                <h3 class="pb-4 mb-4  border-bottom">
                    CÁC SẢN PHẨM MAKEUP 2 TRONG 1 ĐA ZI NĂNG CHO NÀNG
                </h3>

                <article class="blog-post">
                    <h2 class="blog-post-title">1. Kem Chống Nắng Và Lót Trang Điểm Vacosi Natural </h2>
                    <div class="text-center my-3">
                        <img src="<?= ADMIN_ASSET ?>image/3.webp" alt="">
                    </div>

                    <p class="blog-post-meta">Link mua hàng : <a href="https://sammishop.com/" class="text-warning">SunFlower.com</a></p>

                    <p>Những cô nàng của chúng mình ngoài yêu thích các style makeup đa dạng độc đáo thì những
                        sản phẩm hỗ trợ makeup cũng khiến các nàng quan tâm nhiều.

                        Tiện lợi và tích hợp, Sammi giới thiệu đến nàng các siêu phẩm 2 trong 1, cho việc makeup
                        trở nên dễ dàng hơn.

                        Có thể dễ dàng bỏ túi mang theo bên mình, nhiều công dụng trong 1 sản phẩm makeup, hãy
                        cùng nhà Sam điểm qua vài item nha.


                    </p>
                    <hr>
                    <p>Để có một cuộc sống hạnh phúc, tích cực và trọn vẹn, bạn cần nắm vững nghệ thuật yêu
                        thương bản thân.

                        Chúng ta thường tin rằng bản thân mình không đủ tốt và không xứng đáng với những điều
                        tốt đẹp. Chúng ta muốn được yêu thương nhưng lại không biết cách yêu thương bản thân, mà
                        bởi vì vậy nên cũng không thể cảm nhận một cách trọn vẹn tình yêu từ người khác. Học
                        cách yêu bản thân sẽ giúp mỗi người tạo nên một cuộc chuyển dịch lớn trong cách nhìn
                        cuộc sống – cuộc chuyển dịch khiến chúng ta biết trân quý và chấp nhận con người thật
                        của mình.</p>
                    <h2>SỰ CÂN BẰNG TRONG NHẬN THỨC</h2>
                    <p>Tình yêu là đại dương và trái tim bạn là một bình nước. Hãy làm đầy bình nước của mình
                        trước và tình yêu sẽ lan tỏa đến tất cả mọi người</p>
                    <blockquote class="blockquote">
                        <p>Lắng nghe tiếng gọi con tim</p>
                    </blockquote>

                </article>

                <article class="blog-post">
                    <h2 class="blog-post-title">HƯỚNG NỘI </h2>
                    <img src="<?= ADMIN_ASSET ?>image/4.webp" alt="">
                    <p>Mọi người thường nghĩ rằng chỉ những người thường xuyên tham gia vào các hoạt động xã
                        hội, nói chuyện nhiều và cực kì thân thiện mới là đối tượng có thể thành công trong việc
                        thay đổi thế giới xung quanh. Những nhà tuyển dụng cũng thường chú ý người hướng ngoại
                        hơn và kì vọng họ có thể thành công nhờ tính cách này.</p>

                    <p>Tuy nhiên, người hướng nội lại là những người giỏi về suy nghĩ hơn. Họ đôi lúc có thể nói
                        chuyện nhiều và hòa đồng không kém người hướng ngoại, nhưng họ cũng cần thời gian nghỉ
                        ngơi của riêng mình để nạp lại năng lượng. Những lúc đó, họ có thể suy nghĩ mà chẳng bị
                        ai phân tán và các ý tưởng có cơ hội được hình thành một cách thấu đáo hơn. Thế nên, các
                        nhà tuyển dụng thường sẽ hối hận với quyết định bỏ qua những người hướng nội. Những tấm
                        gương điển hình có thể kể tên là Einstein và Bill Gates, họ cũng là những người hướng
                        nội. </p>
                    <hr>
                    <p>Mọi người thường nghĩ rằng chỉ những người thường xuyên tham gia vào các hoạt động xã
                        hội, nói chuyện nhiều và cực kì thân thiện mới là đối tượng có thể thành công trong việc
                        thay đổi thế giới xung quanh. Những nhà tuyển dụng cũng thường chú ý người hướng ngoại
                        hơn và kì vọng họ có thể thành công nhờ tính cách này.</p>
                    <article class="blog-post">
                        <h2 class="blog-post-title">1. Kem Chống Nắng Và Lót Trang Điểm Vacosi Natural </h2>
                        <div class="text-center my-3">
                            <img src="<?= ADMIN_ASSET ?>image/5.webp" alt="">
                        </div>

                        <p class="blog-post-meta">Link mua hàng : <a href="https://sammishop.com/" class="text-warning">SunFlower.com</a></p>

                        <p>Những cô nàng của chúng mình ngoài yêu thích các style makeup đa dạng độc đáo thì
                            những sản phẩm hỗ trợ makeup cũng khiến các nàng quan tâm nhiều.

                            Tiện lợi và tích hợp, Sammi giới thiệu đến nàng các siêu phẩm 2 trong 1, cho việc
                            makeup trở nên dễ dàng hơn.

                            Có thể dễ dàng bỏ túi mang theo bên mình, nhiều công dụng trong 1 sản phẩm makeup,
                            hãy cùng nhà Sam điểm qua vài item nha.


                        </p>
                        <hr>
                        <p>Để có một cuộc sống hạnh phúc, tích cực và trọn vẹn, bạn cần nắm vững nghệ thuật yêu
                            thương bản thân.

                            Chúng ta thường tin rằng bản thân mình không đủ tốt và không xứng đáng với những
                            điều tốt đẹp. Chúng ta muốn được yêu thương nhưng lại không biết cách yêu thương bản
                            thân, mà bởi vì vậy nên cũng không thể cảm nhận một cách trọn vẹn tình yêu từ người
                            khác. Học cách yêu bản thân sẽ giúp mỗi người tạo nên một cuộc chuyển dịch lớn trong
                            cách nhìn cuộc sống – cuộc chuyển dịch khiến chúng ta biết trân quý và chấp nhận con
                            người thật của mình.</p>

                    </article>

                </article>
                <?php
                if (isset($_SESSION['ten_dang_nhap'])) {


                ?>


                    <div class="title mt-2 mt-xl-5">
                        <h3 class="text-center">Gửi ý kiến góp ý</h3>
                        <p class="text-center"> Chúng tôi rất mong nhận được những đóng góp từ bạn </p>
                    </div>
                    <form action="index.php?url=gop-y" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nội dung</label>
                            <input type="text" class="form-control py-5" id="exampleInputEmail1" name="noidung" required>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Họ tên</label>
                                    <input type="text" name="hoten" class="form-control" id="exampleInputPassword1" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputPassword1" required>
                                </div>
                            </div>
                        </div>
                        <div class="text-center my-3">
                            <button type="submit" class="btn btn-warning " name="submit">Gửi tới SunFlower</button>
                        </div>
                    </form>
                <?php

                } else {
                ?>

                    <div class="dangky">


                        <p>Mời ban đăng nhập để gửi ý kiến</p>

                    </div>
                <?php
                } ?>

            </div>

            <div class="col-md-3 ">
                <div class="position-sticky" style="top: 2rem;">
                    <div class="p-4 mb-3 bg-light rounded">
                        <h4 class="fst-italic">Chủ đề</h4>
                        <p class="mb-0">Những người thành công nhất là những người có tính tò mò và muốn tìm
                            hiểu mọi thứ. </p>
                    </div>

                    <div class="p-4">
                        <h4 class="fst-italic">Bài viết bạn quan tâm</h4>
                        <?php foreach ($blogct as $b) : ?>

                            <ol class="list-unstyled mb-0">
                                <li><a href="index.php?url=ctblog&ma_blog=<?= $b['ma_blog'] ?>" class="text-warning"><?= $b['tieu_de'] ?></a></li>

                            </ol>

                        <?php endforeach ?>

                    </div>

                    <div class="p-4">
                        <h4 class="fst-italic">Mạng xã hội</h4>
                        <ol class="list-unstyled">
                            <li><a href="#" class="text-warning">GitHub</a></li>
                            <li><a href="#" class="text-warning">Twitter</a></li>
                            <li><a href="#" class="text-warning">Facebook</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

</main>