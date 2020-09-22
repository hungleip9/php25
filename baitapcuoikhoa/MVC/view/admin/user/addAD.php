<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <?php 
                include 'PHPMailer/class.smtp.php';
                include 'PHPMailer/class.phpmailer.php'; 
                $nFrom = "Hệ thống quản lý công văn, văn bản";    //mail duoc gui tu dau, thuong de ten cong ty ban
                $mFrom = $user['email'];  //dia chi email cua ban 
                
                $nTo = 'Blog Phim'; //Ten nguoi nhan
                $mTo =  "$email";   //dia chi nhan mail
                $mail             = new PHPMailer();
                $body             = "Bạn đã đăng ký thành công tài khoản tại blog phim";   // Noi dung email
                $title = 'Đăng ký tài khoản';   //Tieu de gui mail
                $mail->IsSMTP();             
                $mail->CharSet  = "utf-8";
                $mail->SMTPDebug  = 0;   // enables SMTP debug information (for testing)
                $mail->SMTPAuth   = true;    // enable SMTP authentication
                $mail->SMTPSecure = "ssl";   // sets the prefix to the servier
                $mail->Host       = "smtp.gmail.com";    // sever gui mail.
                $mail->Port       = 465;         // cong gui mail de nguyen
                // xong phan cau hinh bat dau phan gui mail
                $mail->Username   = $mFrom;  // khai bao dia chi email
                
                $mail->SetFrom($mFrom, $nFrom);
                $mail->AddReplyTo('admin@quanlycongvankgu.tk', 'Admin'); //khi nguoi dung phan hoi se duoc gui den email nay
                $mail->Subject    = $title;// tieu de email 
                $mail->MsgHTML($body);// noi dung chinh cua mail se nam o day.
                $mail->AddAddress($mTo, $nTo);
                // thuc thi lenh gui mail 
                if(!$mail->Send()) {
                    echo '<p> Có lỗi trong quá trình gửi mail! Vui lòng thử lại!</p>';
                     
                } else {
                     
                    echo "<p>Mật khẩu mới của bạn đã được gửi qua email: $email .<br /> Vui lòng kiểm tra và đăng nhập lại hệ thống!</p> ";
                }
    ?>
</body>
</html>