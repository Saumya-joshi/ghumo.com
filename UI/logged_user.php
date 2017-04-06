<?php
if(isset($_POST['login'])) 
{
	session_start();
	define('DB_HOST', 'localhost:3306'); 
	define('DB_NAME', 'travel_transport'); 
	define('DB_USER','root'); 
	define('DB_PASSWORD',''); 
	$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
	$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
 
	function clean($str) 
	{
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
 
	//Sanitize the POST values
	$username = clean($_POST['userID']);
	$password = clean($_POST['password']);
 
	$qry="SELECT * FROM reg_user WHERE emailId ='$username' AND password='$password' AND status = '1'";
	$result=mysql_query($qry);
 
	//Check whether the query was successful or not
		if(mysql_num_rows($result) > 0) 
		{
			//Login Successful
			$_SESSION['logged_reg_user'] = 1;
			while($rows = mysql_fetch_array($result))
			{
				$_SESSION['SESS_MEMBER_ID'] = $rows['user_id'];
				$_SESSION['user_name'] = $rows['Fname'];
				$_SESSION['SESS_LAST_NAME'] = $rows['Lname'];
				$_SESSION['SESS_MEMBER_EMAIL_ID'] = $rows['emailId'];
				$_SESSION['SESS_MEMBER_MOBILE'] = $rows['MobileNo'];
				$redirect_page = 'home.php';
				$redirect = true;
				if($redirect == true)
				{
					header('Location: '.$redirect_page);
				}
				exit();
			}
		}
		else 
		{
			echo "user name and password not found";
		}
}
?>