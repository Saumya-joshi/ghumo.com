<?php
	error_reporting(E_ERROR);
	session_start();
	if(isset($_POST['save_info_visa']))
	{
		define('DB_HOST', 'localhost:3306'); 
		define('DB_NAME', 'travel_transport'); 
		define('DB_USER','root'); 
		define('DB_PASSWORD',''); 
		$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
		$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
		$country_name = mysql_escape_string($_POST['country_visa_issued']);
		$visa_number = mysql_escape_string($_POST['VisaNo']);
		$expiry_date = mysql_escape_string($_POST['ExpiryDateVisa']);
		$date_1 = new DateTime($expiry_date);
		$expiry_date = $date_1->format('Y-m-d'); 
		/*$_SESSION['PASSPORT_F_NAME'] = $F_name;
		$_SESSION['PASSPORT_M_NAME'] = $M_name;
		$_SESSION['PASSPORT_L_NAME'] = $L_name;
		$_SESSION['PASSPORT_COUNTRY_NAME'] = $country_name;
		$_SESSION['PASSPORT_NUMBER'] = $passport_number;
		$_SESSION['PASSPORT_EXPIRY_DATE'] = $expiry_date;*/
		$query_insert_passport = "INSERT INTO visa_details(visa_number, country_issued, expiry_date) values('$visa_number', '$country_name', '$expiry_date')";
		$result = mysql_query($query_insert_passport) or die(mysql_error());
		if($result)
		{
			if(isset($_SESSION['logged_reg_user']))
			{
				$query_insert_user_visa_link = "INSERT INTO reg_user_visa_link(user_id, visa_number)values('".$_SESSION['SESS_MEMBER_ID']."', '$visa_number')";
				$result_new = mysql_query($query_insert_user_visa_link);
				if($result_new)
				{
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
				$ans = mysql_query($query_1) or die(mysql_error());
				if(mysql_num_rows($ans) > 0)
				{
					while($rows = mysql_fetch_array($ans))
					{
						$google_user_id = $rows['id'];
						$_SESSION['GOOGLE_USER_ID'] = $google_user_id;
					}
				}
				$query_insert_google_user_visa_link = "INSERT INTO google_user_visa_link(user_id, visa_number)values('$google_user_id', '$visa_number')";
				$result_new = mysql_query($query_insert_google_user_visa_link) or die(mysql_error());
				if($result_new)
				{
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
				$query_2 = 'SELECT id from fb_users where oauth_uid = '.$_SESSION['facebook_data']['id'].'';
				$ans_2 = mysql_query($query_2) or die(mysql_error());
				if(mysql_num_rows($ans_2) > 0)
				{
					while($rows = mysql_fetch_array($ans_2))
					{
						$facbook_user_id = $rows['id'];
						$_SESSION['FACEBOOK_USER_ID'] = $facbook_user_id;
					}
				}
				$query_insert_fb_user_visa_link = "INSERT INTO fb_user_visa_link(user_id, visa_number)values('$facbook_user_id', '$visa_number')";
				$result_new = mysql_query($query_insert_fb_user_visa_link) or die(mysql_error());
				if($result_new)
				{
					$redirect_page = 'my_account.php';
					$redirect = true;
					if($redirect == true)
					{
						header('Location: '.$redirect_page);
					}
				}
			}
		}
	}
?>