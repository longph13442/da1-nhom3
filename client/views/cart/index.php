<div class="cart">
    
<div class="text-center my-5">
    <h1 class="h3 mb-3 fw-bold">SUNFLOWER - gửi lời cảm ơn tới bạn !</h1>
</div>

<table class="table mx-auto my-5" style="width: 1000px;">
    <thead>
        <tr class="py-5">
            <th scope="col">Tên sản phẩm</th>
            <th scope="col">Giá</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Thao tác</th>
        </tr>
    </thead>
    <tbody>


        <!-- <?php foreach ($hienthi as $ht) : ?>




            <tr class="">

                <td> <img src="<?= ADMIN_ASSET ?>image//<?= $ht['anh_sp'] ?>" style="width: 7%;" alt=""><?= $ht['ten_sp'] ?></td>
                <td><?= $ht['giatien'] ?></td>
                <td>
                    <input type="number" value="<?= $ht['so_luong'] ?>" maxlength="2" size="1" id="number" class="form-control " style="width:70px;" />
                </td>
                <td> <a href="index.php?url=xoadh&ma_don_hang=<?= $ht['ma_don_hang'] ?>"><button>Xóa</button></a></td>
            </tr>


        <?php endforeach ?> -->




        <tr>

            <td> <img src="../../../public/admin-asesst/Image/img2.jpg" style="width: 7%;" alt="">Kem dưỡng ẩm</td>
            <td>270.000 vnd</td>
            <td>
                <input type="number" value="1" maxlength="2" size="1" id="number" class="form-control " style="width:70px;" />
            </td>
            <td>Xóa</td>
        </tr>
        <tr>

            <td> <img src="../../../public/admin-asesst/Image/img3.jpg" style="width: 7%;" alt="">Kem dưỡng ẩm</td>
            <td>270.000 vnd</td>
            <td>
                <input type="number" value="1" maxlength="2" size="1" id="number" class="form-control " style="width:70px;" />
            </td>
            <td>Xóa</td>
        </tr>
        <tr>
            <th colspan="2" class="border-0"><button class="btn btn-warning mt-5"> Quay lại Shop </button></th>
            <td class="border-0 ">
                <p class="mt-3 fw-bold">Tổng tiền : 810.000 vnd</h5>
                </p>
            <th class="border-0"><button class="btn btn-danger mt-5"> Thanh toán </button></th>

        </tr>

    </tbody>
</table>
</div>