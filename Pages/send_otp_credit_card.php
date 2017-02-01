<?php
session_start();
if(isset($_POST['Generate_OTP']) || isset($_POST['Resend_OTP']))
{
	date_default_timezone_set('Etc/UTC');
	require './PHPMailer-master/PHPMailerAutoload.php';
	$var = $_SESSION['SESS_MEMBER_EMAIL_ID'];
	$otp = rand(10000,99999);
	$_SESSION['OTP_CREDIT_CARD_PAYMENT'] = $otp;
//echo '$var';
	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->SMTPDebug = 2;
	$mail->Debugoutput = 'html';
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;
	$mail->Username = "your_email_id";
	$mail->Password = "your_password";
	$mail->setFrom('email_from_where_mail_to_be_sent', 'Ghumo.com');
	$mail->addAddress($_SESSION['SESS_MEMBER_EMAIL_ID']);
	$mail->Subject = 'OTP';
	$mail->Body = 'OTP for online transaction is&nbsp'.$_SESSION['OTP_CREDIT_CARD_PAYMENT'];
	if (!$mail->send()) 
	{
		echo "Mailer Error: " . $mail->ErrorInfo;
	}
	else 
	{
		$redirect_page = 'payment_page.php#credit_card_validate_otp';
		$redirect = true;
		if($redirect == true)
		{
			header('Location: '.$redirect_page);
		}
	}
}

if(isset($_POST['Verify_OTP']))
{
	$get_otp = $_POST['get_otp'];
	if($get_otp == $_SESSION['OTP_CREDIT_CARD_PAYMENT'])
	{
		$redirect_page = 'payment_page.php#credit_card_payment_success';
		$redirect = true;
		if($redirect == true)
		{
			header('Location: '.$redirect_page);
		}
	}
	else
	{
		$_SESSION['ERROR_MESSAGE_FAILED_OTP'] = 'Entered OTP is not valid. Please enter correct OTP.';
		$redirect_page = 'payment_page.php#credit_card_validate_otp';
		$redirect = true;
		if($redirect == true)
		{
			header('Location: '.$redirect_page);
		}
	}
}
?>
