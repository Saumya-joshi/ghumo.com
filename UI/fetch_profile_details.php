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
		$get_profile_id = 'SELECT profile_id from reg_user_profile_link where user_id = '.$_SESSION['SESS_MEMBER_ID'].'';
		$ans = mysql_query($get_profile_id) or die(mysql_error());
		if(mysql_num_rows($ans) > 0)
		{
			while($rows = mysql_fetch_array($ans))
			{
				$_SESSION['PROFILE_ID'] = $rows['profile_id'];
			}
		}
		else
		{
			$redirect_page = 'my_account.php';
			$redirect = true;
			if($redirect == true)
			{
				header('Location: '.$redirect_page);
			}
		}
		$profile_id = $_SESSION['PROFILE_ID'];
		//echo $profile_id;
		$get_profile_details = 'SELECT *FROM profile_information where profile_id = '.$_SESSION['PROFILE_ID'].'';
		$result = mysql_query($get_profile_details) or die(mysql_error());
		if(mysql_num_rows($result) > 0)
		{
			while($row = mysql_fetch_array($result))
			{
				$_SESSION['PROFILE_TITLE'] = $row['title'];
				$_SESSION['PROFILE_M_NAME'] = $row['M_name'];
				$_SESSION['PROFILE_MOBILE_NUMBER'] = $row['mobile_no'];
				$_SESSION['PROFILE_DOB'] = $row['date_of_birth'];
				$_SESSION['PROFILE_ADDRESS'] = $row['street_add'];
				$_SESSION['PROFILE_PIN'] = $row['pin_code'];
				$_SESSION['PROFILE_CITY'] = $row['city'];
				$_SESSION['PROFILE_COUNTRY'] = $row['country'];
				$_SESSION['PROFILE_STATE'] = $row['state'];
				$_SESSION['PROFILE_HOME_TOWN'] = $row['home_town'];
				$_SESSION['PROFILE_MARIETAL_STATUS'] = $row['marietal_status'];
				$_SESSION['PROFILE_ANNIVERSARY_DATE'] = $row['anniversary_date'];
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
		$get_profile_id = "SELECT profile_id from google_user_profile_link where user_id = '$id_req'";
		$ans = mysql_query($get_profile_id) or die(mysql_error());
		if(mysql_num_rows($ans) > 0)
		{
			while($rows = mysql_fetch_array($ans))
			{
				$_SESSION['PROFILE_ID'] = $rows['profile_id'];
			}
		}
		$profile_id = $_SESSION['PROFILE_ID'];
		//echo $passport_no;
		$get_profile_details = "SELECT *FROM profile_information where profile_id = '$profile_id'";
		$result = mysql_query($get_profile_details) or die(mysql_error());
		if(mysql_num_rows($result) > 0)
		{
			while($row = mysql_fetch_array($result))
			{
				$_SESSION['PROFILE_TITLE'] = $row['title'];
				$_SESSION['PROFILE_M_NAME'] = $row['M_name'];
				$_SESSION['PROFILE_MOBILE_NUMBER'] = $row['mobile_no'];
				$_SESSION['PROFILE_DOB'] = $row['date_of_birth'];
				$_SESSION['PROFILE_ADDRESS'] = $row['street_add'];
				$_SESSION['PROFILE_PIN'] = $row['pin_code'];
				$_SESSION['PROFILE_CITY'] = $row['city'];
				$_SESSION['PROFILE_COUNTRY'] = $row['country'];
				$_SESSION['PROFILE_STATE'] = $row['state'];
				$_SESSION['PROFILE_HOME_TOWN'] = $row['home_town'];
				$_SESSION['PROFILE_MARIETAL_STATUS'] = $row['marietal_status'];
				$_SESSION['PROFILE_ANNIVERSARY_DATE'] = $row['anniversary_date'];
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
		$get_profile_id = "SELECT profile_id from fb_user_profile_link where user_id = '$id_req'";
		$ans = mysql_query($get_profile_id) or die(mysql_error());
		if(mysql_num_rows($ans) > 0)
		{
			while($rows = mysql_fetch_array($ans))
			{
				$_SESSION['PROFILE_ID'] = $rows['profile_id'];
			}
		}
		$profile_id = $_SESSION['PROFILE_ID'];
		//echo $passport_no;
		$get_profile_details = "SELECT *FROM profile_information where profile_id = '$profile_id'";
		$result = mysql_query($get_profile_details) or die(mysql_error());
		if(mysql_num_rows($result) > 0)
		{
			while($row = mysql_fetch_array($result))
			{
				$_SESSION['PROFILE_TITLE'] = $row['title'];
				$_SESSION['PROFILE_M_NAME'] = $row['M_name'];
				$_SESSION['PROFILE_MOBILE_NUMBER'] = $row['mobile_no'];
				$_SESSION['PROFILE_DOB'] = $row['date_of_birth'];
				$_SESSION['PROFILE_ADDRESS'] = $row['street_add'];
				$_SESSION['PROFILE_PIN'] = $row['pin_code'];
				$_SESSION['PROFILE_CITY'] = $row['city'];
				$_SESSION['PROFILE_COUNTRY'] = $row['country'];
				$_SESSION['PROFILE_STATE'] = $row['state'];
				$_SESSION['PROFILE_HOME_TOWN'] = $row['home_town'];
				$_SESSION['PROFILE_MARIETAL_STATUS'] = $row['marietal_status'];
				$_SESSION['PROFILE_ANNIVERSARY_DATE'] = $row['anniversary_date'];
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