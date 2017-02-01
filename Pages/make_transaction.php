<?php
	error_reporting(E_ERROR);
	session_start();
	define('DB_HOST', 'localhost:3306'); 
	define('DB_NAME', 'travel_transport'); 
	define('DB_USER','root'); 
	define('DB_PASSWORD',''); 
	$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
	$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
	if(isset($_POST['pay_net_banking']))
	{
		$user_txn_id = $_POST['customer_id_txn'];
		$user_txn_pwd = $_POST['txn_password'];
		$txn_otp = $_POST['txn_otp'];
		$query_make_payment = "SELECT *from net_banking where user_id = '$user_txn_id' AND transaction_password = '$user_txn_pwd'";
		$res_query_make_payment = mysql_query($query_make_payment) or die(mysql_error());
		if(mysql_num_rows($res_query_make_payment) > 0)
		{
			if($txn_otp == $_SESSION['OTP_NET_BANKING_PAYMENT'])
			{
				$redirect_page = 'payment_page.php#confirmation_message';
				$redirect = true;
				if($redirect == true)
				{
					header('Location: '.$redirect_page);
				}
			}
			else
			{
				$_SESSION['OTP_NET_BANKING_SENT_MESSAGE'] = 'Entered OTP is not valid. Please re-enter OTP.';
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
			$_SESSION['OTP_NET_BANKING_SENT_MESSAGE'] = 'Entered credentials sre not valid.';
			$redirect_page = 'payment_page.php#make_transactions';
			$redirect = true;
			if($redirect == true)
			{
				header('Location: '.$redirect_page);
			}
		}
	}
?>