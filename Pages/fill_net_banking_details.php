<?php
	error_reporting(E_ERROR);
	session_start();
	define('DB_HOST', 'localhost:3306'); 
	define('DB_NAME', 'travel_transport'); 
	define('DB_USER','root'); 
	define('DB_PASSWORD',''); 
	$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
	$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
	function create_user_id()
	{
		$user_id = '';
		for($i = 0; $i<7; $i++)
		{
			$user_id .= rand(1, 9);
		}
		return $user_id;
	}
	
	function create_login_password()
	{
		$login_password = '';
		for($i = 0; $i<7; $i++)
		{
			$login_password .= rand(1, 9);
		}
		return $login_password;
	}
	
	function create_transaction_password($len = 7)
	{
		$txn_password = '';
		for($i = 0; $i<7; $i++)
		{
			$txn_password .= rand(1, 9);
		}
		return $txn_password;
	}

	for($var = 0; $var<20; $var++)
	{
		$usr_id = create_user_id();
		$login_pwd = create_login_password();
		$txn_pwd = create_transaction_password();
		$query_insert = "INSERT INTO net_banking(user_id, login_password, transaction_password) values('$usr_id', '$login_pwd', '$txn_pwd')";
		$res_query_insert = mysql_query($query_insert) or die(mysql_error());
		if($res_query_insert)
		{
			echo 'Success';
		}
		else
		{
			echo 'Failed';
		}
	}
?>