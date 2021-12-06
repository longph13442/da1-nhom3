<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if (isset($title)) {
                echo $title;
            } ?></title>
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
    <?php include_once "./client/views/layouts/backtop.php" ?>
    <!-- Footer -->
    <?php include_once "./client/views/layouts/footer.php" ?>
    <!-- End Footer -->
    <?php include_once "./client/views/layouts/script.php" ?>
    <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>
    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "100210565851255");
        chatbox.setAttribute("attribution", "biz_inbox");

        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v12.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
</body>

</html>