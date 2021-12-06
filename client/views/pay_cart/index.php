<div class="container gx-5 ">
    <main>
        <div class="text-center my-5">
            <h1 class="h3 mb-3 fw-bold text-warning ">SUNFLOWER - gửi lời cảm ơn tới bạn !</h1>
        </div>

        <div class="row g-5">
            <div class="col-md-5 col-lg-5 order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-danger">Giỏ hàng của bạn</span>
                    <span class="badge bg-warning rounded-pill">3</span>
                </h4>
                <ul class="list-group mb-3">
                    <?php $sum = 0; ?>

                    <?php foreach ($pay as $key) : ?>
                        <?php $sum += (int)$key["price"]; ?>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div class="d-flex">
                                <img src="<?= ADMIN_ASSET ?>image/<?= $key["hinh"] ?>" alt="" width="40">
                                <h6 class="my-3 mx-3"><?= $key["tensp"] ?></h6>

                            </div>
                            <p class="my-3 mx-2"><?= $key["soluong"] ?></p>
                            <span class="text-danger py-3"><?= number_format($key["price"]) ?> VND</span>
                        </li>
                    <?php endforeach ?>

                </ul>
                <div class="d-flex justify-content-between px-3 fw-bold">
                    <p>Tổng tiền: </p>
                    <p class="text-danger "><?= number_format($sum) ?> VND</p>
                </div>
                <?php if (isset($voucher['sotien'])) : ?>
                    <div class="d-flex justify-content-between px-3 fw-bold">
                        <?php $vouchers = $voucher['sotien'];
                        $_SESSION['vouchers'] = $vouchers;
                        ?>
                        <?php $total = $sum - $vouchers ?>
                        <p>Mã giảm giá: </p>
                        <p><?= number_format($vouchers) ?></p>
                    </div>
                    <div class="d-flex justify-content-between px-3 fw-bold">
                        <p>Sau khi trừ giảm giá: </p>

                        <?php if ($total < 0) : ?>
                            <p class="text-danger ">0VND</p>
                        <?php else : ?>
                            <p class="text-danger "><?= number_format($total) ?> VND</p>

                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <?php if (!isset($voucher['sotien'])) : ?>
                    <form method="post" class="card p-2">
                        <div class="input-group">
                            <input type="text" name="tenvoucher" class="form-control" placeholder="mã giảm giá">
                            <button type="submit" name="apvoucher" class="btn btn-success">Áp dụng</button>
                        </div>

                    </form>
                <?php endif; ?>
                <?php if (isset($error['soluong'])) : ?>
                    <span class="text-danger"> <?php echo $error['soluong']; ?></span>
                <?php endif; ?>
            </div>
            <div class="col-md-5 col-lg-7">
                <h4 class="mb-3">Địa chỉ người nhận</h4>

                <form action="pay" class="needs-validation" novalidate="" method="POST">
                    <input type="hidden" name="total" value="<?= isset($_SESSION['vouchers']) ?>">
                    <div class="row g-3">
                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Họ Và Tên</label>
                            <input name="name" type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="you@example.com">
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="email" class="form-label">Số điện thoại<span class="text-muted">(Optional)</span></label>
                            <input name="phone" type="text" class="form-control" id="email" placeholder="+84">
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="address" class="form-label">Địa chỉ</label>
                            <input name="address" type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="address2" class="form-label">Ghi chú </label>
                            <input name="note" type="text" class="form-control py-5" id="address2" placeholder="">
                            <input type="hidden" name="status" id="" value="1">
                        </div>


                        <hr class="my-4">

                        <h4 class="mb-3">Payment</h4>

                        <div class="my-3">
                            <div class="form-check">
                                <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked="" value="0" required="">
                                <label class="form-check-label" for="credit">Thanh toán khi nhận hàng</label>
                            </div>
                            <div class="form-check mt-3">
                                <input id="debit" name="paymentMethod" type="radio" class="form-check-input" value="1" required="">
                                <label class="form-check-label" for="debit">Thanh toán bằng VNPAY</label>
                            </div>

                        </div>


                        <button class="w-50 btn btn-warning btn-lg mx-auto" type="submit" name="submitt">Đặt hàng</button>
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