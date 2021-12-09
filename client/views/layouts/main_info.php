<link rel="shortcut icon" type="image/png" href="<?= ROOT_URL . IMG ?>logo.png">

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="<?= CLIENT_ASSET ?>/dist/css/custom_upload.css">
<?php include_once './client/views/layouts/style.php'; ?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Marcellus&display=swap');

    .container {
        width: 100%;
    }

    .list-group-item:hover {
        background-color: rgb(245, 245, 245);
    }

    a {
        color: black;
    }
</style>
<title><?= $title ?></title>
</head>

<body>
    <?php
    require "./client/views/layouts/header.php";
    ?>
    <div class="container mt-3">
        <div class="row text-center mb-3">
            <div class="col-12 ">
                <img src="<?= ROOT_URL . IMG ?>logo.png" alt="" height="70">
            </div>
        </div>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-8">
                <h3>Hồ Sơ Của Tôi</h3>
                <hr class="mb-2">
            </div>
        </div>
        <div class="row">
            <?php
            include_once './client/views/layouts/nav_info.php';
            ?>
            <?php include_once $view_info; ?>
        </div>
    </div>
    </div>
    <?php
    require "./client/views/layouts/footer.php";
    ?>
    <?php include_once './client/views/layouts/script.php'; ?>

</body>