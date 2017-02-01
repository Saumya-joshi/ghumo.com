<?php
	session_start();
	define('DB_HOST', 'localhost:3306'); 
	define('DB_NAME', 'travel_transport'); 
	define('DB_USER','root'); 
	define('DB_PASSWORD',''); 
	$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
	$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
	$email =  $_SESSION['user_email_id'];
	$transaction_id = $_SESSION['transaction_id'];
	//echo 'hell';
	//echo $email;
	//echo $transaction_id;
	$select_user_id = "select *from reg_user where emailId = '$email'";
	$res_select_user_id = mysql_query($select_user_id) or die(mysql_error());
	if(mysql_num_rows($res_select_user_id))
	{
		while($rows = mysql_fetch_array($res_select_user_id))
		{
			$user_id = $rows['user_id'];
		}
	}
	echo $user_id;
	$select_wallet_id = "select *from my_wallet where txn_id = '".$transaction_id."'";
	//echo 'hell';
	$res_select_wallet_id = mysql_query($select_wallet_id) or die(mysql_error());
	//echo 'hulla';
	if(mysql_num_rows($res_select_wallet_id))
	{
		//echo 'Helllla';
		while($row = mysql_fetch_array($res_select_wallet_id))
		{
			$wallet_id = $row['wallet_id'];
		}
	}
	//echo $wallet_id;
	$create_wallet_link = "INSERT into reg_user_link_wallet(user_id, wallet_id) values('$user_id', '$wallet_id')";
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
?>