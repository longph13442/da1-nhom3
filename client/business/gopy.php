<?php
function gopy()
{
    if (isset($_POST["submit"])) {
        $noidung = $_POST['noidung'];
        $hoten = $_POST['hoten'];
        $email = $_POST['email'];
        $sql = "INSERT INTO gopy(noidung,hoten,email) VALUES('$noidung','$hoten','$email')";
        pdo_execute($sql);
        $title = "Góp ý";

        client_render('blog/blog.php', compact('title'));
    }
}
