<?php $cart = (isset($_SESSION["cart"])) ? $_SESSION["cart"] : []; ?>
<div class="cart">

    <div class="text-center my-5">
        <h1 class="h3 mb-3 fw-bold text-warning">SUNFLOWER - gửi lời cảm ơn tới bạn !</h1>
    </div>

    <table class="table mx-auto my-5" style="width: 1000px;">
        <thead>
            <tr class="py-5 text-center">
                <th>Ảnh</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Đơn Giá</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Thành tiền</th>
                <th scope="col">Thao tác</th>
            </tr>
        </thead>
        <form action="cart" method="POST">
            <tbody>
                <?php $sum = 0;
                ?>
                <?php foreach ($cart as $key) : ?>
                    <?php $price = $key['soluong'] * $key['gia'];
                    $sum += $price;
                    ?>
                    <tr class="text-center">
                        <td style="width: 100px;"><img src="<?= ADMIN_ASSET ?>image/<?= $key['hinh'] ?>" style="width: 70%;" alt=""></td>
                        <td>
                            <p class="my-4"><?= $key['tensp'] ?></p>
                        </td>
                        <td>
                            <p class="my-4"><?= $key['gia'] ?></p>
                        </td>

                        <td>
                            <input type="number" name="soluong" value="<?= $key['soluong'] ?>" maxlength="2" size="1" id="number" class=" my-4  " style="width:70px;" />
                        </td>
                        <td>
                            <p class="my-4"><?= $price ?></p>
                        </td>

                        <input type="hidden" name="masp" id="" value="<?= $key["masp"] ?>">
                        <td> <button class="my-4 btn btn-sm btn-success " name="update">Cập nhật</button> <button class="my-4 btn btn-sm btn-danger ">Xóa</button></td>

                    </tr>

                <?php endforeach ?>

            </tbody>
        </form>

        <tfoot>
            <tr>
                <td class="border-0" colspan="2"><a href="danhmuc"><button class="btn btn-warning mt-4"> Quay lại Shop </button></a></th>
                <td class="border-0 " colspan="3">
                    <p class="mt-5 fw-bold text-center text-danger float-end">Tổng tiền : <?= $sum ?> VND</h5>
                    </p>
                <td class="border-0 text-center" colspan=""><button class="btn btn-success mt-4 text-center float-end"> Thanh toán </button></th>
            </tr>
        </tfoot>
    </table>

</div>