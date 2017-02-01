<?php
session_start();
date_default_timezone_set('Etc/UTC');

require './PHPMailer-master/PHPMailerAutoload.php';
$var = $_SESSION['user_email_id'];
//echo '$var';
$mail = new PHPMailer;

$mail->isSMTP();

$mail->SMTPDebug = 2;

$mail->Debugoutput = 'html';

$mail->Host = 'smtp.gmail.com';

$mail->Port = 587;

$mail->SMTPSecure = 'tls';

$mail->SMTPAuth = true;

$mail->Username = "email_id";

$mail->Password = "your_password";

$mail->setFrom('email_from_where_mail_to_be_sent', 'Ghumo.com');

$mail->addAddress($_SESSION['user_email_id']);

$mail->Subject = 'Hi!!testing mail';

$mail->Body = 'Please click on this link to activate your account:
http://localhost/Ghumo.com/pages/verify_user.php?email='.$_SESSION['user_email_id'].'&hash='.$_SESSION['hash_value'].'&transactionId='.$_SESSION['transaction_id'].'';

if (!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
}
else 
{
    $redirect_page = 'successful_registration.php';
	$redirect = true;
	if($redirect == true)
	{
		header('Location: '.$redirect_page);
	}
}
