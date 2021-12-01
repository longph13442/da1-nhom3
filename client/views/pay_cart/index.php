<?php $pay = (isset($_SESSION["cart"])) ? $_SESSION["cart"] : [] ?>
<div class="container gx-5 ">
    <main>
        <div class="text-center my-5">
            <h1 class="h3 mb-3 fw-bold text-warning ">SUNFLOWER - gửi lời cảm ơn tới bạn !</h1>
        </div>

        <div class="row g-5">
            <div class="col-md-5 col-lg-4 order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-danger">Giỏ hàng của bạn</span>
                    <span class="badge bg-warning rounded-pill">3</span>
                </h4>
                <ul class="list-group mb-3">
                    <?php $sum=0; ?>
                    <?php foreach ($pay as $key) : ?>
                        <?php $sum+=$key["gia"];?>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-3"><?= $key["tensp"] ?></h6>

                            </div>
                            <span class="text-danger py-3"><?= $key["gia"] ?> VND</span>
                        </li>
                    <?php endforeach ?>

                    <div class="d-flex py-3 ">
                        <h6 class="text-dark ms-3 fw-bold">Tổng tiền : </h6>
                        <h6 class=" text-danger fw-bold ms-3"><?=$sum?> VND</h6>
                    </div>

                </ul>

                <form class="card p-2">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="mã giảm giá">
                        <button type="submit" class="btn btn-success">Áp dụng</button>
                    </div>
                </form>
            </div>
            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">Địa chỉ người nhận</h4>
                <form class="needs-validation" novalidate="" method="POST" action="pay">
                    <div class="row g-3">
                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Họ Và Tên</label>
                            <input type="text" class="form-control" name="name" id="firstName" placeholder="" value="" required="">
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com">
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="email" class="form-label">Số điện thoại<span class="text-muted">(Optional)</span></label>
                            <input type="text" class="form-control" name="call"  placeholder="+84">
                            
                        </div>
                        <div class="col-12">
                            <label for="address" class="form-label">Địa chỉ</label>
                            <input type="text" class="form-control" name="ar" id="address" placeholder="1234 Main St" required="">
                            
                        </div>

                        <div class="col-12">
                            <label for="address2" class="form-label">Ghi chú </label>
                            <input type="text" class="form-control py-5" name="note" id="address2" placeholder="">
                        </div>


                        <hr class="my-4">

                        <h4 class="mb-3">Payment</h4>

                        <div class="my-3">
                            <div class="form-check">
                                <input id="credit" name="paymentMethod" type="radio" name="paybox" class="form-check-input" checked="" required="">
                                <label class="form-check-label"  for="credit">Thanh toán khi nhận hàng</label>
                            </div>
                            <div class="form-check">
                                <input id="debit" name="paymentMethod"  name="paybox" type="radio" class="form-check-input" required="">
                                <label class="form-check-label" for="debit">Chuyển khoản</label>
                            </div>
                            <div class="form-check">
                                <input id="paypal" name="paymentMethod"  name="paybox" type="radio" class="form-check-input" required="">
                                <label class="form-check-label" for="paypal">PayPal</label>
                            </div>
                        </div>


                        <button class="w-50 btn btn-warning btn-lg mx-auto" type="submit" name="pay">Đặt hàng</button>
                </form>
            </div>
        </div>
    </main>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2021-2022 Company Name</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Trang chủ</a></li>
            <li class="list-inline-item"><a href="#">Giỏ hàng</a></li>
            <li class="list-inline-item"><a href="#">Trợ giúp</a></li>
        </ul>
    </footer>
</div>


<script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="form-validation.js"></script>