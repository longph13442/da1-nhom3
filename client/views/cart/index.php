<div class="cart my-5 ">

    <div class="text-center py-4">
        <h1 class="h3 mb-3 fw-bold text-warning">SUNFLOWER - gửi lời cảm ơn tới bạn !</h1>
    </div>

    <table class=" table mx-auto pt-5" style="width: 1000px;">
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
                    $_SESSION["cart"][ $key['masp']]['price']=$price;
                    
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

                        <input type="hidden" name="id" id="" value="<?= $key['masp'] ?>">
                        <td> <button class="my-4 btn btn-sm btn-success " name="update" type="submit">Cập nhật</button> <button class="my-4 btn btn-sm btn-danger " name="delete">Xóa</button></td>

                    </tr>

                <?php endforeach ?>

            </tbody>
        </form>

        <tfoot>
            <tr>
                <td class="border-0" colspan="2"><a href="danh-muc"><button class="btn btn-warning mt-4"> Quay lại Shop </button></a></th>
                <td class="border-0 " colspan="3">
                    <p class="mt-5 fw-bold text-center text-danger float-end">Tổng tiền : <?= $sum ?> VND</h5>
                    </p>
                <td class="border-0 text-center" colspan=""><button class="btn btn-success btn-sm mt-4 text-center float-end"><a href="<?= $link ?>" class="text-dark nav-link">Thanh Toán</a> </button></th>
            </tr>
        </tfoot>
    </table>

</div>