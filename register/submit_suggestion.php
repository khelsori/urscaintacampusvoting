<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    try {
    
        $message = $_POST['suggestion'];

        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Mailer = "smtp";

        $mail->SMTPDebug  = 0;  
        $mail->SMTPAuth   = TRUE;
        $mail->SMTPSecure = "tls";
        $mail->Port       = 587;
        $mail->Host       = "tls://smtp.gmail.com";
        $mail->Username   = "ursc.test.acct@gmail.com";
        $mail->Password   = "testaccount2021";

        $mail->IsHTML(true);

        $mail->AddAddress("ursc.osds@gmail.com", "User");
        $mail->SetFrom("ursc.test.acct@gmail.com", "Comment/Suggestion");
        $mail->Subject = "Comment/Suggestion";
        $mail->IsHTML(true);
        $mail->Body = $message; 
    
        $mail->Send();

        echo "Comment/Suggestion sent!";
    } catch (\Throwable $th) {
        echo "Something went wrong";
    }
    

?> 