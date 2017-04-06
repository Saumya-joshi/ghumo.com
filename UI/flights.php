<!DOCTYPE html>
<html>
<head>
<base target="_parent"></base>
<meta charset="ISO-8859-1">
<title>SuhanaSafar|Book Flights, Hotels & Holidays at best Price!!!</title>
<link href="./CSS/js-image-slider.css" rel="stylesheet" type="text/css" />
<script src="./JavaScript/js-image-slider.js" type="text/javascript"></script>
<link href="./CSS/generic.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script type="text/javascript">

	var make_button_active = function()
	{
		var siblings =($(this).siblings());//Get item siblings
		siblings.each(function (index)	//Remove active class on all buttons
		{
			$(this).removeClass('active');
		}
	)
	$(this).addClass('active');//Add the clicked button class
}
									//Attach events to menu
	$(document).ready(
	function()
	{
		$(".me_nu li").click(make_button_active);
	}  
)
</script>
</head>

<style>

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
	border-radius : 0px;
	background-color : #003333;
	background-repeat: y;
    width : 1180px;
    height : 1400px;
    padding:10px;
    margin-left : 75px;	 
    margin-top : 2.2px;
    box-shadow: 1px 1px 2px 2px #888888;
}

#image
{
	width : 1100px;
	height : 800px;
	margin-left : 40px;
	background-image: url(./img/backflight.jpg);
	background-repeat: No-repeat;
	background-size: 1100px 800px;
	opacity : .8;
	margin-top : 10px;
}

#menu
{
	top : 125px;
	margin-left : 20px;
	width : 1060px;
	height : 50px;
	background-color : white;
	opacity : .4;
	position : absolute;
}

#popular_dest
{
	width : 580px;
	height : 600px;
	margin-top : 10px;
	margin-left : 560px;
	background-color : red;
}

#img_slider
{
	margin-left : 40px;
	width : 510px;
	height : 295px;
	top : 1000px;
	background-color : blue;
	position : absolute;
	border-radius : 10px;
	border : 1px solid black;
	box-shadow: 1px 1px 2px 2px #585858;
}

#offers
{
	border-radius : 10px;
	margin-left : 40px;
	width : 510px;
	height : 295px;
	top : 1082px;
	background-color : white;
	opacity : .3;
	position : absolute;
	box-shadow: 1px 1px 2px 2px #585858;
}

#footer 
{
    background-color:gray;
	margin-top : 2.2px;
    height : 100px;
    color:white;
    clear:both;
    text-align:center;
   	padding:5px;	 	 
}

.me_nu
{
    top : 125px;
	margin-left : 20px;
	position : absolute;
	padding: 0;
	font-size : 15px;
}

.me_nu li 
{
    display: inline;
}

.me_nu li a 
{
	opacity : .8;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 4px 4px 0 0;
}

.me_nu li a:hover 
{
	border-bottom : solid 2px #6C0000;
}

.me_nu li.active a
{
	border-bottom : solid 2px #6C0000;
}

.icons_left
{
	margin-left : 35px;
	width : 200px;
	height : 30px;
	background-color : yellow;
}

.icons_right
{
	margin-left : 255px;
	width : 200px;
	height : 30px;
	background-color : yellow;
}

li span
{
	display : block;
	margin-left : 0.35em;
	font-size : 13px;
}

#flights
{
	width : 950px;
	height : 700px;
	margin-left :25px;
	margin-top : 75px;
	position : absolute;
}

iframe 
{
  overflow-x:hidden;
  overflow-Y:hidden;
}

#cover
{
	margin-left : 25px;
	width : 600px;
	height : 60px;
	position : absolute;
	background-color : black;
	opacity : .8;
	margin-top : 475px;
}
</style>

<body style = "margin : 0px">

<div id="header">
	<div id = "login">
		<label id = "lbl">
			<?php
				session_start();
				error_reporting(0);
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
	<div id = "image">
		<ul class = "me_nu">
			<li class = "active"><a href="#1">Flights</a></li>
			<li><a href="#2">Hotels</a></li>
			<li><a href="#3">Holidays</a></li>
			<li><a href="#4">Bus</a></li>
			<li><a href="#5">Trains</a></li>
			<li><a href="#6">Cabs</a></li>
			<li><a href="#7">Reviews</a></li>
		</ul>  
		<div id = "flights">
			<iframe name = "frame_1" src = "roundtrip.php" style = "width : 600px; height : 460px; position : absolute; border : none; opacity : .8"></iframe>
		</div>
		<div id = "cover">
		</div>
	</div>
	<div id = "popular_dest">
	</div>
	<div id = "img_slider">
		
	</div>
	<div id = "offers">
		<h1 style = "font-size : 20px; text-align : left; color : black; text-decoration : underline; margin-left : 15px"><strong>Customer Services</strong></h1><br>
		<ul style = "margin-left : 15px; list-style-image : url(./images/print_e_tkt.jpg)">
			<li><span><strong><a href = "#1" style = "text-decoration : none">Print E-Ticket</a></strong></span></li>
		</ul>
		<ul style = "margin-left : 15px; list-style-image : url(./images/cancel.png)">
			<li><span><strong><a href = "#2" style = "text-decoration : none">Cancellation</a></strong></span></li>
		</ul>
		<ul style = "margin-left : 15px; list-style-image : url(./images/wallet.jpg)">
			<li><span><strong><a href = "#3" style = "text-decoration : none">Wallet</a></strong></span></li>
		</ul>
		<ul style = "margin-left : 15px; list-style-image : url(./images/reg_complaint.jpg)">
			<li><span><strong><a href = "#4" style = "text-decoration : none">Complaints/Help</a></strong></span></li>
		</ul>
		<ul style = "margin-left : 15px; list-style-image : url(./images/FAQ_1.jpg)">
			<li><span><strong><a href = "#5" style = "text-decoration : none">FAQ</a></strong></span></li>
		</ul>
		<ul style = "margin-left : 215px; list-style-image : url(./images/manage_bookings_1.png); top : 65px; position : absolute">
			<li><span><strong><a href = "#6" style = "text-decoration : none">Manage Your Bookings</a></strong></span></li>
		</ul>
		<ul style = "margin-left : 215px; list-style-image : url(./images/chk_status_1.jpg); top : 100px; position : absolute">
			<li><span><strong><a href = "#6" style = "text-decoration : none">Booking Status</a></strong></span></li>
		</ul>
		<ul style = "margin-left : 215px; list-style-image : url(./images/add_balance_1.jpg); top : 138px; position : absolute">
			<li><span><strong><a href = "#6" style = "text-decoration : none">Load Your Wallet</a></strong></span></li>
		</ul>
		<ul style = "margin-left : 215px; list-style-image : url(./images/contact-us_1.jpg); top : 170px; position : absolute">
			<li><span><strong><a href = "#6" style = "text-decoration : none">Contact Us</a></strong></span></li>
		</ul>
	</div>
</div>

<div id="footer">
</div>

</body>
</html>