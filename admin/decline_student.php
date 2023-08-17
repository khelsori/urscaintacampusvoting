<?php
	require_once 'dbcon.php';
	$email=$_GET['email'];
	$conn->query("delete from voters where email='$email'") or die($conn->error);


	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require '../PHPMailer/src/Exception.php';
	require '../PHPMailer/src/PHPMailer.php';
	require '../PHPMailer/src/SMTP.php';

	$_SESSION['email'] = $email;            

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
	$mail->AddAddress($email, "User");
	$mail->SetFrom("ursc.test.acct@gmail.com", "Approval Status");
	$mail->Subject = "Approval Status";
	$content = "Sorry, your account has been declined.";

	$mail->MsgHTML($content); 
	$mail->Send();
	
	header('location:voters.php');

?>