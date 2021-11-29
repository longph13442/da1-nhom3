<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- boostrap -->
    <!-- font-icon -->
    <!-- https://material.io/resources/icons/?style=baseline -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

    <!-- https://material.io/resources/icons/?style=outline -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- https://material.io/resources/icons/?style=round -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Round" rel="stylesheet">

    <!-- https://material.io/resources/icons/?style=sharp -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Sharp" rel="stylesheet">

    <!-- https://material.io/resources/icons/?style=twotone -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Two+Tone" rel="stylesheet">
    <!-- icon -->
    <link rel="stylesheet" href="index.css">
</head>

<body>
    
    <div class="text-center my-4">
        <img class="mb-4" src="../../../public/admin-asesst/Image/logo.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">SUNFLOWER - gửi lời cảm ơn tới bạn !</h1>
    </div>
    
    <table class="table mx-auto mt-5" style="width: 1000px;">
        <thead>
            <tr class="py-5">
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Giá</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Thao tác</th>
            </tr>
        </thead>
        <tbody>


                         <?php foreach ($hienthi as $ht) : ?>




                   <tr class="">

                <td> <img src="<?= ADMIN_ASSET ?>image//<?= $ht['anh_sp'] ?>" style="width: 7%;" alt=""><?= $ht['ten_sp'] ?></td>
                <td><?= $ht['giatien'] ?></td>
                <td>
                    <input type="number" value="<?= $ht['so_luong'] ?>" maxlength="2" size="1"  id="number" class="form-control "
                        style="width:70px;" />
                </td>
               <td> <a href="index.php?url=xoadh&ma_don_hang=<?= $ht['ma_don_hang'] ?>"><button>Xóa</button></a></td>
            </tr>


                    <?php endforeach ?>



      
            <!-- <tr>

                <td> <img src="../../../public/admin-asesst/Image/img2.jpg" style="width: 7%;" alt="">Kem dưỡng ẩm</td>
                <td>270.000 vnd</td>
                <td>
                    <input type="number" value="1" maxlength="2" size="1" id="number" class="form-control "
                        style="width:70px;" />
                </td>
                <td>Xóa</td>
            </tr> -->
            <!-- <tr>

                <td> <img src="../../../public/admin-asesst/Image/img3.jpg" style="width: 7%;" alt="">Kem dưỡng ẩm</td>
                <td>270.000 vnd</td>
                <td>
                    <input type="number" value="1" maxlength="2" size="1" id="number" class="form-control "
                        style="width:70px;" />
                </td>
                <td>Xóa</td>
            </tr> -->
            <tr>
                <th colspan="2" class="border-0"><button class="btn btn-warning mt-5"> Quay lại Shop </button></th>
                <td class="border-0 ">
                    <p class="mt-3 fw-bold">Tổng tiền : 810.000 vnd</h5>
                    </p>
                <th class="border-0"><button class="btn btn-danger mt-5"> Thanh toán </button></th>

            </tr>

        </tbody>
    </table>


</body>

</html>