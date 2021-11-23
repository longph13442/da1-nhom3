<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include_once "./client/views/layouts/style.php" ?>
</head>

<body>
    <!-- Header -->
    <?php include_once "./client/views/layouts/header.php" ?>
    <!-- End Header -->

    <!-- Main -->
    <main>
        <?php include_once $view; ?>
    </main>
    <!-- End Main -->
    <!-- Footer -->
    <?php include_once "./client/views/layouts/footer.php" ?>
    <!-- End Footer -->
    <?php include_once "./client/views/layouts/script.php" ?>
</body>

</html>