<?php
	error_reporting(E_ERROR);
	session_start();
	define('DB_HOST', 'localhost:3306'); 
	define('DB_NAME', 'travel_transport'); 
	define('DB_USER','root'); 
	define('DB_PASSWORD',''); 
	$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
	$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
	if(isset($_POST['login_bank_net']))
	{
		$bank_user_id = $_POST['customer_id'];
		$bank_login_password = $_POST['login_password'];
		$check_query = "SELECT *from net_banking where user_id = '$bank_user_id' AND login_password = '$bank_login_password'";
		$res_check_query = mysql_query($check_query) or die(mysql_error());
		if(mysql_num_rows($res_check_query) > 0)
		{
			date_default_timezone_set('Etc/UTC');
			require './PHPMailer-master/PHPMailerAutoload.php';
			$var = $_SESSION['SESS_MEMBER_EMAIL_ID'];
			$otp = rand(10000,99999);
			$_SESSION['OTP_NET_BANKING_PAYMENT'] = $otp;
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
			$mail->setFrom('email_id_from_where_mail_to_be_sent', 'Ghumo.com');
			$mail->addAddress($_SESSION['SESS_MEMBER_EMAIL_ID']);
			$mail->Subject = 'OTP';
			$mail->Body = 'OTP for online transaction is '.$_SESSION['OTP_NET_BANKING_PAYMENT'];
			if (!$mail->send()) 
			{
				echo "Mailer Error: " . $mail->ErrorInfo;	
			}
			else 
			{
				$_SESSION['OTP_NET_BANKING_SENT_MESSAGE'] = 'OTP has been sent to your mail id. Enter that OTP to confirm payment.';
				$redirect_page = 'payment_page.php#make_transactions';
				$redirect = true;
				if($redirect == true)
				{
					header('Location: '.$redirect_page);
				}
			}
		}
		else
		{
			$redirect_page = 'payment_page.php#secure_login';
			$redirect = true;
			if($redirect == true)
			{
				header('Location: '.$redirect_page);
			}
			$_SESSION['ENTER_VALID_USER_ID_OR_PASSWORD_ERROR_MESSAGE'] = 'Enter valid user id or password.';
		}
	}
	/*else
	{
		echo 'Hell';
	}*/
?>
