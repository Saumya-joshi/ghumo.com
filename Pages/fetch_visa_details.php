<?php
	error_reporting(E_ERROR);
	session_start();
	define('DB_HOST', 'localhost:3306'); 
	define('DB_NAME', 'travel_transport'); 
	define('DB_USER','root'); 
	define('DB_PASSWORD',''); 
	$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
	$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
	if(isset($_SESSION['logged_reg_user']))
	{
		$get_passport_no = 'SELECT visa_number from reg_user_visa_link where user_id = '.$_SESSION['SESS_MEMBER_ID'].'';
		$ans = mysql_query($get_passport_no) or die(mysql_error());
		if(mysql_num_rows($ans) > 0)
		{
			while($rows = mysql_fetch_array($ans))
			{
				$_SESSION['VISA_NUMBER'] = $rows['visa_number'];
			}
		}
		$visa_no = $_SESSION['VISA_NUMBER'];
		//echo $passport_no;
		$get_passport_details = "SELECT *FROM visa_details where visa_number = '$visa_no'";
		$result = mysql_query($get_passport_details) or die(mysql_error());
		if(mysql_num_rows($result) > 0)
		{
			while($row = mysql_fetch_array($result))
			{
				$_SESSION['VISA_COUNTRY_NAME'] = $row['country_issued'];
				$_SESSION['VISA_NUMBER'] = $row['visa_number'];
				$_SESSION['VISA_EXPIRY_DATE'] = $row['expiry_date'];
			}
			$redirect_page = 'my_account.php';
			$redirect = true;
			if($redirect == true)
			{
				header('Location: '.$redirect_page);
			}
		}
	}
	else if(isset($_SESSION['google_data']))
	{
		$query_1 = 'SELECT id from google_user where oauth_uid = '.$_SESSION['google_data']['id'].'';
		$ans_1 = mysql_query($query_1) or die(mysql_error());
		if(mysql_num_rows($ans_1) > 0)
		{
			while($rows = mysql_fetch_array($ans_1))
			{
				$google_user_id = $rows['id'];
				$_SESSION['GOOGLE_USER_ID'] = $google_user_id;
			}
		}
		$id_req = $_SESSION['GOOGLE_USER_ID'];
		//echo $id_req;
		$get_passport_no = "SELECT visa_number from google_user_visa_link where user_id = '$id_req'";
		$ans = mysql_query($get_passport_no) or die(mysql_error());
		if(mysql_num_rows($ans) > 0)
		{
			while($rows = mysql_fetch_array($ans))
			{
				$_SESSION['VISA_NUMBER'] = $rows['visa_number'];
			}
		}
		$visa_no = $_SESSION['VISA_NUMBER'];
		//echo $passport_no;
		$get_passport_details = "SELECT *FROM visa_details where visa_number = '$visa_no'";
		$result = mysql_query($get_passport_details) or die(mysql_error());
		if(mysql_num_rows($result) > 0)
		{
			while($row = mysql_fetch_array($result))
			{
				$_SESSION['VISA_COUNTRY_NAME'] = $row['country_issued'];
				$_SESSION['VISA_NUMBER'] = $row['visa_number'];
				$_SESSION['VISA_EXPIRY_DATE'] = $row['expiry_date'];
			}
			$redirect_page = 'my_account.php';
			$redirect = true;
			if($redirect == true)
			{
				header('Location: '.$redirect_page);
			}
		}
	}
	else if(isset($_SESSION['facebook_data']))
	{
		$query_1 = 'SELECT id from fb_users where oauth_uid = '.$_SESSION['facebook_data']['id'].'';
		$ans_1 = mysql_query($query_1) or die(mysql_error());
		if(mysql_num_rows($ans_1) > 0)
		{
			while($rows = mysql_fetch_array($ans_1))
			{
				$google_user_id = $rows['id'];
				$_SESSION['FACEBOOK_USER_ID'] = $google_user_id;
			}
		}
		$id_req = $_SESSION['FACEBOOK_USER_ID'];
		$get_passport_no = "SELECT visa_number from fb_user_visa_link where user_id = '$id_req'";
		$ans = mysql_query($get_passport_no) or die(mysql_error());
		if(mysql_num_rows($ans) > 0)
		{
			while($rows = mysql_fetch_array($ans))
			{
				$_SESSION['VISA_NUMBER'] = $rows['visa_number'];
			}
		}
		$visa_no = $_SESSION['VISA_NUMBER'];
		//echo $passport_no;
		$get_passport_details = "SELECT *FROM visa_details where visa_number = '$visa_no'";
		$result = mysql_query($get_passport_details) or die(mysql_error());
		if(mysql_num_rows($result) > 0)
		{
			while($row = mysql_fetch_array($result))
			{
				$_SESSION['VISA_COUNTRY_NAME'] = $row['country_issued'];
				$_SESSION['VISA_NUMBER'] = $row['visa_number'];
				$_SESSION['VISA_EXPIRY_DATE'] = $row['expiry_date'];
			}
			$redirect_page = 'my_account.php';
			$redirect = true;
			if($redirect == true)
			{
				header('Location: '.$redirect_page);
			}
		}
	}
?>