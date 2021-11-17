<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>

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

  <link rel="stylesheet" href="index.css">
    <style>
        .ct-hh {
            width: 85%;
            margin: auto;
        }

        .reply small {
            color: #b7b4b4
        }

        .reply small:hover {
            color: green;
            cursor: pointer
        }
    </style>
    <?php
    session_start();
    include "../dao/pdo.php";

    
    $ma_sp = $_REQUEST['ma_sp'];
    $info = binh_luan_load($ma_sp);


    if (isset($_POST['gui_bl']) && ($_POST['gui_bl'])) {
        $ma_sp = $_POST['ma_sp'];
        $noi_dung = $_POST['noi_dung'];
        $ma_tai_khoan = $_SESSION['check']['ma_tai_khoan'];
        $ngay_bl = date("h:i d/m/y");
        binh_luan_insert($ma_tai_khoan, $ma_sp, $noi_dung, $ngay_bl);
        header("location: " . $_SERVER['HTTP_REFERER']);
    }
    if(isset($_POST['xoa_bl'])){
        binh_luan_delete($_GET['ma_bl'] );
        header("location: " . $_SERVER['HTTP_REFERER']);
    }

    ?>
</head>

<body>
    <?php foreach ($info as $item) : ?>
        <div class="card p-3 mt-2">
            <div class="d-flex justify-content-between align-items-center">
                <div class="user d-flex flex-row align-items-center"> <img src="https://i.imgur.com/C4egmYM.jpg" width="30" class="user-img rounded-circle mr-2">
                    <span><small class="font-weight-bold text-primary mx-2"><?php  $ten=khach_hang_select_by_id($item['ma_tai_khoan']); echo $ten['ho_ten']; ?>: </small>
                        <small class="font-weight-bold"><?php echo $item['noi_dung']; ?> </small>
                    </span>
                </div>
                <small><?php echo $item['ngay_bl']; ?></small>
            </div>
            <div class="action d-flex justify-content-between mt-2 align-items-center mx-3">
         
                <div class="reply px-4"><form action="binhluan.php?ma_bl=<?php echo $item['ma_bl'] ?>" method="post"> <button type="submit" name="xoa_bl" onclick="return confirm('bạn có chắc muốn xóa không!')" style="border: none; background: none;"><small>Xóa</small></button> </form> </div>
                <div class="icons align-items-center"> <i class="fa fa-check-circle-o check-icon text-primary"></i> </div>
            </div>
        </div>
    <?php endforeach; ?>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="bg-light p-2 mt-4">
            <input type="hidden" name="ma_sp" value="<?php echo $ma_sp ?>">

            <div class="d-flex flex-row align-items-start"><img class="rounded-circle px-2" src="https://i.imgur.com/RpzrMR2.jpg" width="60"><textarea class="form-control ml-1 shadow-none textarea" name="noi_dung"></textarea></div>
            <div class="mt-2 text-right float-end">
                <input type="submit" value="Gửi bình luận" name="gui_bl" class="btn btn-primary btn-sm shadow-none mx-2">
                <!-- <button class="btn btn-primary btn-sm shadow-none mx-2" type="submit" name="gui_bl" >Gửi bình luận</button> -->
                <button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="reset">Hủy</button>
            </div>
        </div>

    </form>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {


            const cartButtons = document.querySelectorAll('.cart-button');

            cartButtons.forEach(button => {

                button.addEventListener('click', cartClick);

            });

            function cartClick() {
                let button = this;
                button.classList.add('clicked');
            }
        });
    </script>
    <!-- js link -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>