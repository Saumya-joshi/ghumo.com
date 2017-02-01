<?php
	define('DB_HOST', 'localhost:3306'); 
	define('DB_NAME', 'travel_transport'); 
	define('DB_USER','root'); 
	define('DB_PASSWORD',''); 
	$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
	$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
	
	if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash']))
	{
		$email = mysql_escape_string($_GET['email']); // Set email variable
		$hash = mysql_escape_string($_GET['hash']); // Set hash variable
		$txn_id = $_GET['transactionId'];
        //echo $txn_id;         
		$search = mysql_query("SELECT emailId, hash, status FROM reg_user WHERE emailId = '".$email."' AND hash ='".$hash."' AND status='0'") or die(mysql_error()); 
		$match  = mysql_num_rows($search);
                 
		if($match > 0)
		{
        	mysql_query("UPDATE reg_user SET status = '1' WHERE emailId = '".$email."' AND hash='".$hash."' AND status ='0'") or die(mysql_error());
			//echo 'Your account has been activated, you can now login';
			$select_user_id = "select *from reg_user where emailId = '".$email."'";
			$res_select_user_id = mysql_query($select_user_id) or die(mysql_error());
			if(mysql_num_rows($res_select_user_id) > 0)
			{
				while($rows = mysql_fetch_array($res_select_user_id))
				{
					$user_id = $rows['user_id'];
				}
			}
			//echo $user_id;
			//echo $_SESSION['transaction_id'];
			$select_wallet_id = "select *from my_wallet where txn_id = '".$txn_id."'";
			//echo 'Hell';
			//echo $txn_id;
			$res_select_wallet_id = mysql_query($select_wallet_id) or die(mysql_error());
			//echo $transactionId;
			if(mysql_num_rows($res_select_wallet_id) > 0)
			{
				while($row = mysql_fetch_array($res_select_wallet_id))
				{
					$walletId = $row['wallet_id'];
				}
			}
			//echo $wallet_id;
			$create_wallet_link = "INSERT into reg_user_link_wallet(user_id, wallet_id) values('$user_id', '$walletId')";
			$res_create_link = mysql_query($create_wallet_link) or die(mysql_error());
			if($res_create_link)
			{
				//echo 'SUCCESS';
				
				$redirect_page = 'login.php';
				$redirect = true;
				if($redirect == true)
				{
					header('Location: '.$redirect_page);
				}
			}
		}
		else
		{
        echo '<div class="statusmsg">The url is either invalid or you already have activated your account.</div>';
		}
                 
	}
	else
	{
		echo 'Invalid approach, please use the link that has been send to your email.';
	}
?>