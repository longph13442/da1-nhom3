<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Dashboard Template · Bootstrap v5.1</title>
    <!-- Style-->
    <?php include_once "style.php"; ?>
    <!--End style-->
</head>
<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
</style>


<!-- Custom styles for this template -->
<link href="dashboard.css" rel="stylesheet">
<style type="text/css">
    /* Chart.js */
    @keyframes chartjs-render-animation {
        from {
            opacity: .99
        }

        to {
            opacity: 1
        }
    }

    .chartjs-render-monitor {
        animation: chartjs-render-animation 1ms
    }

    .chartjs-size-monitor,
    .chartjs-size-monitor-expand,
    .chartjs-size-monitor-shrink {
        position: absolute;
        direction: ltr;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        overflow: hidden;
        pointer-events: none;
        visibility: hidden;
        z-index: -1
    }

    .chartjs-size-monitor-expand>div {
        position: absolute;
        width: 1000000px;
        height: 1000000px;
        left: 0;
        top: 0
    }

    .chartjs-size-monitor-shrink>div {
        position: absolute;
        width: 200%;
        height: 200%;
        left: 0;
        top: 0
    }

    .nav-item:hover {
        background-color: rgb(255, 255, 255);
    }
</style>
</head>

<body>
    <?php
    include_once "head.php";
    ?>
    <div class="container-fluid">
        <div class="row">
            <!--Nav Bar-->
            <?php include_once "navbar.php" ?>
            <!--End Bar-->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <!--Task Bar-->
                <?php include_once "taskbar.php" ?>
                <!--End Task-->
                <!-- Content--->
                <?php include_once $view; ?>
                <!-- EndContent--->
            </main>

        </div>
    </div>
    <!-- Script-->
    <?php require "script.php"; ?>
    <!--End Script-->
</body>

</html>