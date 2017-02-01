<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Take Loan</title>
</head>

<style>

#header 
{
	height : 95px;
	width : auto;
	background-color : #003333;
	box-shadow: 1px 1px 2px #888888;
}

#header 
{
	height : 95px;
	width : auto;
	background-color : #003333;
	box-shadow: 1px 1px 2px #888888;
}

#login
{
	height : 65px;
	width : 250px;
	top : 15px;
	margin-left : 1025px;
	border-radius : 10px;
	border : 1.5px solid black;
	position : absolute;
}

#profile_pic
{
	height : 55px;
	width : 80px;
	top : 20px;
	margin-left : 1030px;
	border-radius : 20px;
	border : 1.5px solid black;
	position : absolute;
}

#lbl
{
	top : 15px;
	margin-left : 95px;
	color : white;
	position : relative;
	font-size : 12px;
}

#lbl1
{
	top : 48px;
	margin-left : 1121px;
	color : white;
	position : absolute;
	font-size : 12px;
	font-weight : bold;
}

#my_account
{
	margin-left : 1121px;
	width : 125px;
	height : 25px;
	top : 50px;
	position : absolute;
}

#section 
{
	border-radius : 2px red;
    background-color : white;
    width : 660px;
    height : 350px;
	top : 100px;
    padding : 10px;
    margin-left : 315px;	 
	margin-bottom : 50px;
	position : absolute;
	box-shadow: 1px 1px 2px 2px #888888;

}

#heading
{
	text-align : center;
	font-size : 20px;
	font-family : "Palatino Linotype", "Book Antiqua", Palatino, serif;
	position : relative;
}

#loan_policy
{
	border-radius : 2px red;
    background-color : black;
    width : 560px;
    height : 100px;
	margin-top : 15px;
    padding : 10px;
    margin-left : 315px;	 
	margin-bottom : 50px;
	position : absolute;
	color : white;
	opacity : .8;
	margin-left : 35px;
	box-shadow: 1px 1px 2px 2px #888888;

}
</style>

<body style = "margin : 0px">

<div id="header">
	<div id = "login">
		<label id = "lbl">
			<?php
				error_reporting(E_ERROR);
				session_start();
				if(isset($_SESSION['facebook_data']))
				{
					echo 'Hello!'.$_SESSION['facebook_data']['first_name'];
					echo '<a href = "logout.php" style = "text-decoration : none">';
					echo '|Logout';
				}
				else if(isset($_SESSION['google_data']))
				{
					echo 'Hello!'.$_SESSION['google_data']['given_name'];
					echo '<a href = "logout.php" style = "text-decoration : none">';
					echo '|Logout';
				}
				else if(isset($_SESSION['logged_reg_user']))
				{
					echo 'Hello!'.$_SESSION['user_name'];
					echo '<a href = "logout.php" style = "text-decoration : none">';
					echo '|Logout';
				}
				else
				{
					echo '<a style = "color : white; text-decoration : none" href = "login.php">Login</a>';
				}
			?>
		</label>
	</div>
	<div id = "my_account">
		<label id = "lbl1">
		<?php
			session_start();
			if(isset($_SESSION['logged_reg_user']))
				echo '<a href = "my_account.php" style = "text-decoration : none; color : white">My Account</a>';
			else if(isset($_SESSION['facebook_data']))
				echo '<a href = "my_account.php" style = "text-decoration : none; color : white">My Account</a>';
			else if(isset($_SESSION['google_data']))
				echo '<a href = "my_account.php" style = "text-decoration : none; color : white">My Account</a>';
		?>
		</label>
	</div>
	<div id = "profile_pic">
		<?php
			session_start();
			error_reporting(0);
			if(isset($_SESSION['facebook_data']))
			{
				echo '<img src="'.$_SESSION['facebook_data']['picture']['data']['url'].'" alt="" style = "width : 80px; height : 55px; border-radius : 12px"/>';
			}
			else if(isset($_SESSION['google_data']))
			{
				echo '<img src="'.$_SESSION['google_data']['picture'].'" alt="" style = "width : 80px; height : 55px; border-radius : 12px"/>';
			}
			else if(isset($_SESSION['logged_reg_user']))
			{
				define('DB_HOST', 'localhost:3306'); 
				define('DB_NAME', 'travel_transport'); 
				define('DB_USER','root'); 
				define('DB_PASSWORD',''); 
				$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
				$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
				$query = "select image_path from profile_information where profile_id = (SELECT profile_id from reg_user_profile_link where user_id = '".$_SESSION['SESS_MEMBER_ID']."')";
				$res = mysql_query($query) or die(mysql_error());
				while($rows = mysql_fetch_array($res, MYSQL_BOTH))
				{
					echo '<img src="'.$rows['image_path'].'" alt="" style = "width : 80px; height : 55px; border-radius : 12px"/>';
				}
			}
		?>
	</div>
</div>

<div id="section">
	<h1 id = "heading">Has your credit limit exceeded! Don't worry we have a solution.</h1>
	<div id = "loan_policy">
		<p style = "margin-left : 15px; font-size : 18px; margin-top : 15px; color : white; position : absolute; font-weight : 100">Loan shall be provided only if booking date is 10 days prior to current date. You have to make payemnt 10 days before the journey date, or else your booking is laible to get cancelled.</p>
		<?php
			echo '<a href = "confirm_loan.php?hotelName='.$_GET['hotel_name'].'&roomType='.$row['room_type'].'&checkin='.$_GET['checkin'].'&checkout='.$_GET['checkout'].'&nights='.$_GET['nights'].'&address='.$_GET['address'].'&rooms='.$_GET['rooms'].'&persons='.$_GET['persons'].'&final_amount='.$_SESSION['PAY_AMOUNT'].'&reward_point='.$reward_point.'">'.'<input type = "button" name = "take_loan" id = "take_loan" value = "Proceed" style = "font-size : 12px; color : white; border-radius : 4px; background-color : #cc0000; margin-left : 350px; margin-top : 160px; height : 35px; width : 150px; position : absolute">';
		?>
	</div>
</div>

</body>

</html>