<?php
require_once './dao/blog.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
function blog(){
   $blog= topbaiviet_moi();
    $blogct = blog_ct();
    
    client_Render("blog/blog.php",compact('blog','blogct'));
}
function blogct(){
    $blogct=blog_ct();
      client_Render("baiviet/bai1.php",compact('blogct'));
}

function gopy()

{
    if (isset($_POST["submit"])) {
        $noidung = $_POST['noidung'];
        $hoten = $_POST['hoten'];
        $email = $_POST['email'];
        $sql = "INSERT INTO gopy(noidung,hoten,email) VALUES('$noidung','$hoten','$email')";
        pdo_execute($sql);
        $content = "Cám ơn quý khách đã gửi ý kiến đóng góp , chúng tôi sẽ liên hệ để tư vấn cho quý khách sớm nhất có thể , cám ơn quý khách đã sử dụng dịch vụ của chúng tôi";
        $receiver = isset($_POST['email']);
        $title = 'Thư gửi đóng góp ý kiến';
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->SMTPDebug = 0;
            $mail->CharSet = 'UTF-8';
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'sunflowernhom3@gmail.com';
            $mail->Password = '123456bi';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            //Recipients
            $mail->setFrom('sunflowernhom3@gmail.com', 'Sunflower');
            $arrEmail = explode(',', $receiver);
            foreach ($arrEmail as $em) {
                $mail->addAddress(trim($em));
            }
            $mail->addReplyTo('sunflowernhom3@gmail.com', 'Sunflower');
            //Content
            $mail->isHTML(true); //Set email format to HTML
            $mail->Subject = $title;
            $mail->Body = $content;
            $mail->AltBody = $content;
            $mail->send();

        }
        catch (Exception $e) {

        }

    
}
    $blog = topbaiviet_moi();
    $blogct = blog_ct();
    client_render('blog/blog.php',compact('blog', 'blogct'));






}


?>