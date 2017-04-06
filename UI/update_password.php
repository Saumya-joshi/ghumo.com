<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Safar Account</title>
</head>

<script>
<script>
    function checkPassword(str)
	{
		var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
		return re.test(str);
	}
  
	function validateForm()	
	{	
		if(!checkPassword(update_password.new_password.value))
		{
			alert("Password must be of atleast 6 characters long and must have atleast one digit, one special character(@,_,#,$,^,etc.), one uppercase alphabet and one lowercase alphabet.");
			document.update_password.new_password.focus();
			return false;
		}
		        
		if((document.update_password.new_password.value != document.update_password.new_password_re.value))
		{
			alert("The password did not matched.");
			document.update_password.new_password_re.focus();
			return false;
		}
		return true;
	}
	
</script>
</script>

<style>

#header 
{
	height : 95px;
	width : auto;
	background-color : #003333;
	box-shadow: 1px 1px 2px #888888;
}

#section 
{
	border-radius : 2px red;
    background-color : white;
    width : 650px;
    height : 320px;
	top : 180px;
    padding : 10px;
    margin-left : 315px;	 
	margin-bottom : 50px;
	position : absolute;
	box-shadow: 1px 1px 2px 2px #888888;

}

#msg
{
	margin-left : 32px;
	width : 600px;
	height : 150px;
	top : 80px;
	position : absolute;
	border-radius : 12px;
}

#heading
{
	text-align : center;
	font-size : 25px;
	font-family : "Palatino Linotype", "Book Antiqua", Palatino, serif;
	position : relative;
}

hr
{
	margin-left : 140px;
	margin-right : 140px;
}
</style>

<body style = "margin : 0px">

<div id="header">
</div>

<div id="section">
	<?php
		session_start();	
		if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash']))
		{
			$email = mysql_escape_string($_GET['email']); // Set email variable
			$hash = mysql_escape_string($_GET['hash']); // Set hash variable
		}                 
		echo '<h1 id = "heading">Reset Password</h1>';
		echo '<hr>';
		echo '<form id = "update_password" name = "update_password" method = "post"; onsubmit = "return validateForm();">
		<input type = "password" name = "new_password" id = "new_password" style = "height : 45px; width : 350px; margin-left : 145px; border-radius : 12px; background-color : #f2f2f2" placeholder = "Enetr New Password" required><br>
		<br><input type = "password" name = "new_password_re" id = "new_password_re" style = "height : 45px; width : 350px; margin-left : 145px; border-radius : 12px; background-color : #f2f2f2" placeholder = "Re-Enetr New Password" required><br>
		<br><input type = "submit" name = "update_password" value = "Submit" style = "background-color : #00004d; color : white; width : 85px; height : 45px; border : thick; border-color : blue; border-radius : 12px; margin-left : 285px">
		</form>';
		if(isset($_POST['update_password']))
		{
			define('DB_HOST', 'localhost:3306'); 
			define('DB_NAME', 'travel_transport'); 
			define('DB_USER','root'); 
			define('DB_PASSWORD',''); 
			$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
			$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
			$new_password = $_POST['new_password'];
			$search = mysql_query("SELECT emailId, hash, status FROM reg_user WHERE emailId = '".$email."' AND hash ='".$hash."'") or die(mysql_error()); 
			$match  = mysql_num_rows($search);
            if($match > 0)
			{
				mysql_query("UPDATE reg_user SET password = '$new_password' WHERE emailId = '".$email."' AND hash='".$hash."'") or die(mysql_error());
				//echo 'You have successfully updated your password.';
				$redirect_page = 'successful_password_reset.php';
				$redirect = true;
				if($redirect == true)
				{
					header('Location: '.$redirect_page);
				}
			}
			else
			{
				echo '<script>alert("Sorry!Password cannot be updated. Please check")</script>';
			}
		}
	?>
</div>

</body>

</html>