<?php
	error_reporting(E_ERROR);
	session_start();
	define('DB_HOST', 'localhost:3306'); 
	define('DB_NAME', 'travel_transport'); 
	define('DB_USER','root'); 
	define('DB_PASSWORD',''); 
	$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
	$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
	if(isset($_POST['Apply']) && isset($_SESSION['logged_reg_user']))
	{
		$amount = $_POST['Amount_Added'];
		$promo_code = $_POST['Promo_Code'];
		$get_wallet_id = 'SELECT *from reg_user_link_wallet where user_id = '.$_SESSION['SESS_MEMBER_ID'].'';
		$res_get_wallet_id = mysql_query($get_wallet_id) or die(mysql_error());
		if(mysql_num_rows($res_get_wallet_id) > 0)
		{
			while($rows = mysql_fetch_array($res_get_wallet_id))
			{
				$wallet_id = $rows['wallet_id'];
			}
		}
		$get_promo_code_id = "SELECT *from promo_codes where promo_Code = '$promo_code'";
		$res_get_promo_code_id = mysql_query($get_promo_code_id) or die(mysql_error());
		if(mysql_num_rows($res_get_promo_code_id) > 0)
		{
			while($ans = mysql_fetch_array($res_get_promo_code_id))
			{
				$_SESSION['PROMO_CODE_ID'] = $ans['promo_code_id'];
				$_SESSION['DISCOUNT'] = $ans['amount_percent_off'];
				$_SESSION['MINIMUM_AMOUNT'] = $ans['min_amt_req'];
			}
		}
		$search_code_id = "select *from associate_promo_code where wallet_id = '$wallet_id'";
		$res_search = mysql_query($search_code_id) or die(mysql_error());
		if(mysql_num_rows($res_search) > 0)
		{
			
		}
		else
		{
			if($amount >= $_SESSION['MINIMUM_AMOUNT'])
			{
				$associate_query = "INSERT into associate_promo_code(wallet_id, promo_code_id) values('$wallet_id', '".$_SESSION['PROMO_CODE_ID']."')";
				$res_associate = mysql_query($associate_query) or die(mysql_error());
				if($res_associate)
				{
					$_SESSION['AMOUNT'] = $amount;
					$_SESSION['CASHBACK'] = (($amount * $_SESSION['DISCOUNT'])/100);				
					$_SESSION['FINAL_AMOUNT'] = $amount + $_SESSION['CASHBACK'];
					$_SESSION['APPLICATION_STATUS'] = 'Success! Cashback of Rs.'.''.$_SESSION['CASHBACK'].''.'will be credited to your account within 24hrs.';
					$redirect_page = 'my_wallet.php';
					$redirect = true;
					if($redirect == true)
					{
						header('Location: '.$redirect_page);
					}
				}
			}
		}
	}
	if(isset($_POST['Add_Money']) && isset($_SESSION['logged_reg_user']))
	{
		$_SESSION['AMOUNT'] = $_POST['Amount_Added'];
		$redirect_page = 'payment_page.php';
		$redirect = true;
		if($redirect == true)
		{
			header('Location: '.$redirect_page);
		}
	}
?>