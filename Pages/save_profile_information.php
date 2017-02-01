<?php
	error_reporting(E_ERROR);
	session_start();
	define('DB_HOST', 'localhost:3306'); 
	define('DB_NAME', 'travel_transport'); 
	define('DB_USER','root'); 
	define('DB_PASSWORD',''); 
	$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
	$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
	$title = $_POST['title'];
	$Fname = $_POST['Fname'];
	$Mname = $_POST['Mname'];
	$Lname = $_POST['Lname'];
	$email = $_POST['Email'];
	$MobileNumber = $_POST['MobileNumber'];
	$DOB = $_POST['DOB'];
	$date_1 = new DateTime($DOB);
	$DOB = $date_1->format('Y-m-d');
	$address = $_POST['CurrentAddress'];
	$pin = $_POST['PinCode'];
	$city = $_POST['City'];
	$country = $_POST['country'];
	$state = $_POST['state'];
	$homeTown = $_POST['HomeTown'];
	$marietalStatus = $_POST['MarietalStatus'];
	$anniversaryDate = $_POST['Anniversary'];
	$date_2 = new DateTime($anniversaryDate);
	$anniversaryDate = $date_2->format('Y-m-d');
	if(isset($_POST['save_info']) && isset($_SESSION['logged_reg_user']))
	{
		//echo 'Hello';
		$check_user = 'SELECT profile_id from reg_user_profile_link where user_id = '.$_SESSION['SESS_MEMBER_ID'].'';
		$chk_result = mysql_query($check_user) or die(mysql_error());
		if(mysql_num_rows($chk_result) > 0)
		{
			while($rows = mysql_fetch_array($chk_result))
			{
				$profile_id = $rows['profile_id'];
			}
		}
		//echo 'Hello';
		//echo $profile_id;
		if(mysql_num_rows($chk_result) > 0)
		{
			$update_profile = "UPDATE profile_information SET title = '$title', F_name = '$Fname', M_name = '$Mname', L_name = '$Lname', email_id = '$email', mobile_no = '$MobileNumber', date_of_birth = '$DOB', street_add = '$address', pin_code = '$pin', city = '$city', country = '$country', state = '$state', home_town = '$homeTown', marietal_status = '$marietalStatus', anniversary_date = '$anniversaryDate' where profile_id = '".$profile_id."'";
			$res_update = mysql_query($update_profile) or die(mysql_error());
			if($res_update)
			{
				//echo 'Hi';
				$redirect_page = 'my_account.php';
				$redirect = true;
				if($redirect == true)
				{
					header('Location: '.$redirect_page);
				}
			}
		}
		else
		{
			if(!empty($_FILES["uploadedimage"]["name"]))
			{
				$file_name = $_FILES["uploadedimage"]["name"];
				$temp_name = $_FILES["uploadedimage"]["tmp_name"];
				$target_path = "uploaded_image/".$file_name;
				if(move_uploaded_file($temp_name, $target_path))
				{
					$insert_profile = "INSERT into profile_information(title, F_name, M_name, L_name, email_id, mobile_no, date_of_birth, street_add, pin_code, city, country, state, home_town, marietal_status, anniversary_date, image_path) values('$title', '$Fname', '$Mname', '$Lname', '$email', '$MobileNumber', '$DOB', '$address', '$pin', '$city', '$country', '$state', '$homeTown', '$marietalStatus', '$anniversaryDate', '".$target_path."')";
					$res_insert = mysql_query($insert_profile) or die(mysql_error());
					if($res_insert)
					{
						$get_profile_id = "SELECT profile_id from profile_information where email_id = '$email'";
						$res_get_profile_id = mysql_query($get_profile_id) or die(mysql_error());
						if(mysql_num_rows($res_get_profile_id) > 0)
						{
							while($row = mysql_fetch_array($res_get_profile_id))
								$profileID = $row['profile_id'];
						}
						$create_link = "INSERT into reg_user_profile_link(user_id, profile_id) values('".$_SESSION['SESS_MEMBER_ID']."','$profileID')";
						$res_create = mysql_query($create_link) or die(mysql_error());
						if($res_create)
						{
					//echo 'Hullao';
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
			else
			{
				echo 'error';
			}
		}
	}
	if(isset($_POST['save_info']) && isset($_SESSION['google_data']))
	{
		//echo 'Hello';
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
		$check_user = 'SELECT profile_id from google_user_profile_link where user_id = '.$_SESSION['GOOGLE_USER_ID'].'';
		$chk_result = mysql_query($check_user) or die(mysql_error());
		if(mysql_num_rows($chk_result) > 0)
		{
			while($rows = mysql_fetch_array($chk_result))
			{
				$profile_id = $rows['profile_id'];
			}
		}
		//echo 'Hello';
		//echo $profile_id;
		if(mysql_num_rows($chk_result) > 0)
		{
			$update_profile = "UPDATE profile_information SET title = '$title', F_name = '$Fname', M_name = '$Mname', L_name = '$Lname', email_id = '$email', mobile_no = '$MobileNumber', date_of_birth = '$DOB', street_add = '$address', pin_code = '$pin', city = '$city', country = '$country', state = '$state', home_town = '$homeTown', marietal_status = '$marietalStatus', anniversary_date = '$anniversaryDate' where profile_id = '".$profile_id."'";
			$res_update = mysql_query($update_profile) or die(mysql_error());
			if($res_update)
			{
				//echo 'Hi';
				$redirect_page = 'my_account.php';
				$redirect = true;
				if($redirect == true)
				{
					header('Location: '.$redirect_page);
				}
			}
		}
		else
		{
			$insert_profile = "INSERT into profile_information(title, F_name, M_name, L_name, email_id, mobile_no, date_of_birth, street_add, pin_code, city, country, state, home_town, marietal_status, anniversary_date) values('$title', '$Fname', '$Mname', '$Lname', '$email', '$MobileNumber', '$DOB', '$address', '$pin', '$city', '$country', '$state', '$homeTown', '$marietalStatus', '$anniversaryDate')";
			$res_insert = mysql_query($insert_profile) or die(mysql_error());
			if($res_insert)
			{
				$get_profile_id = "SELECT profile_id from profile_information where email_id = '$email'";
				$res_get_profile_id = mysql_query($get_profile_id) or die(mysql_error());
				if(mysql_num_rows($res_get_profile_id) > 0)
				{
					while($row = mysql_fetch_array($res_get_profile_id))
						$profileID = $row['profile_id'];
				}
				$create_link = "INSERT into google_user_profile_link(user_id, profile_id) values('$google_user_id','$profileID')";
				$res_create = mysql_query($create_link) or die(mysql_error());
				if($res_create)
				{
					//echo 'Hullao';
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
	if(isset($_POST['save_info']) && isset($_SESSION['facebook_data']))
	{
		//echo 'Hello';
		$query_1 = 'SELECT id from fb_users where oauth_uid = '.$_SESSION['facebook_data']['id'].'';
		$ans = mysql_query($query_1) or die(mysql_error());
		if(mysql_num_rows($ans) > 0)
		{
			while($rows = mysql_fetch_array($ans))
			{
				$facebook_user_id = $rows['id'];
				$_SESSION['FACEBOOK_USER_ID'] = $facebook_user_id;
			}
		}
		$check_user = 'SELECT profile_id from fb_user_profile_link where user_id = '.$_SESSION['FACEBOOK_USER_ID'].'';
		$chk_result = mysql_query($check_user) or die(mysql_error());
		if(mysql_num_rows($chk_result) > 0)
		{
			while($rows = mysql_fetch_array($chk_result))
			{
				$profile_id = $rows['profile_id'];
			}
		}
		//echo 'Hello';
		//echo $profile_id;
		if(mysql_num_rows($chk_result) > 0)
		{
			$update_profile = "UPDATE profile_information SET title = '$title', F_name = '$Fname', M_name = '$Mname', L_name = '$Lname', email_id = '$email', mobile_no = '$MobileNumber', date_of_birth = '$DOB', street_add = '$address', pin_code = '$pin', city = '$city', country = '$country', state = '$state', home_town = '$homeTown', marietal_status = '$marietalStatus', anniversary_date = '$anniversaryDate' where profile_id = '".$profile_id."'";
			$res_update = mysql_query($update_profile) or die(mysql_error());
			if($res_update)
			{
				//echo 'Hi';
				$redirect_page = 'my_account.php';
				$redirect = true;
				if($redirect == true)
				{
					header('Location: '.$redirect_page);
				}
			}
		}
		else
		{
			$insert_profile = "INSERT into profile_information(title, F_name, M_name, L_name, email_id, mobile_no, date_of_birth, street_add, pin_code, city, country, state, home_town, marietal_status, anniversary_date) values('$title', '$Fname', '$Mname', '$Lname', '$email', '$MobileNumber', '$DOB', '$address', '$pin', '$city', '$country', '$state', '$homeTown', '$marietalStatus', '$anniversaryDate')";
			$res_insert = mysql_query($insert_profile) or die(mysql_error());
			if($res_insert)
			{
				$get_profile_id = "SELECT profile_id from profile_information where email_id = '$email'";
				$res_get_profile_id = mysql_query($get_profile_id) or die(mysql_error());
				if(mysql_num_rows($res_get_profile_id) > 0)
				{
					while($row = mysql_fetch_array($res_get_profile_id))
						$profileID = $row['profile_id'];
				}
				$create_link = "INSERT into fb_user_profile_link(user_id, profile_id) values('$facebook_user_id','$profileID')";
				$res_create = mysql_query($create_link) or die(mysql_error());
				if($res_create)
				{
					//echo 'Hullao';
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