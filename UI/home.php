<!DOCTYPE html>
<html>
<head>
<base target="_parent"></base>
<meta charset="ISO-8859-1">
<title>ghumo.com|Book Flights, Hotels & Holidays at best Price!!!</title>
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
    height : 1280px;
    padding:10px;
    margin-left : 75px;	 
    margin-top : 2.2px;
    box-shadow: 1px 1px 2px 2px #888888;
}

#image
{
	width : 1100px;
	height : 650px;
	margin-left : 40px;
	background-image: url(./img/backflight.jpg);
	background-size: 1100px 650px;
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
}

#img1
{
	width:300px;
	height:330px;
	margin-top:5px;
	margin-left:5px;
	background-color:blue;
	border-radius:5px;
	position:absolute;
}

#img2
{
	width:262px;
	height:380px;
	margin-top:5px;
	margin-left:310px;
	background-color:blue;
	border-radius:5px;
	position:absolute;
}

#img3
{
	width:300px;
	height:212px;
	margin-top:340px;
	margin-left:5px;
	background-color:blue;
	border-radius:5px;
	position:absolute;
}

#img4
{
	width:262px;
	height:162px;
	margin-top:390px;
	margin-left:310px;
	background-color:blue;
	border-radius:5px;
	position:absolute;
}

#txt
{
	width:570px;
	height:40px;
	margin-top:557px;
	margin-left:5px;
	background-color:black;
	border-radius:5px;
	position:absolute;
}

#img_slider
{
	margin-left : 40px;
	width : 510px;
	height : 295px;
	top : 777px;
	background-color : black;
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
background-color : #003333;
	margin-top : 2.2px;
    height : 250px;
    color:white;
    clear:both;
    text-align:center;
   	padding:5px;	 	 
	position:relative;
}

#footer_sec1
{
background-color : #003333;
	top: 5px;
	margin-left: 150px;
	height: 240px;
	width: 200px;
	text-align:center;
	position: absolute;
}

#footer_sec2
{
background-color : #003333;
	top: 5px;
	margin-left: 345px;
	height: 240px;
	width: 200px;
	text-align:center;
	position: absolute;	
}

#footer_sec3
{
	background-color : #003333;
	top: 5px;
	margin-left: 540px;
	height: 240px;
	width: 200px;
	text-align:center;
	position: absolute;	
}

#footer_sec4
{
background-color : #003333;
	top: 5px;
	margin-left: 735px;
	height: 240px;
	width: 200px;
	text-align:center;
	position: absolute;	
}

#footer_sec5
{
	background-color : #003333;
	top: 5px;
	margin-left: 900px;
	height: 240px;
	width: 250px;
	text-align:center;
	position: absolute;	
}

#footer_sec4 a{
	text-decoration:none;
	color:white;
	font-size:12px;
}
#footer_sec3 a{
	text-decoration:none;
	color:white;
	font-size:12px;
}
#footer_sec2 a{
	text-decoration:none;
	color:white;
	font-size:12px;
}
#footer_sec1 a{
	text-decoration:none;
	color:white;
	font-size:12px;
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

#form_flights
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

#cover_add
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

	<a href="home.php"><img src="./img/received_939630352792517.jpeg" style="height:80px; width:150px; margin-top:2px; margin-left:90px; z-index:5" ></a>
	<h6 style="margin-top:0px; margin-left: 82px; z-index:10;color:white">Make the world your spinning wheel</h6>
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
	<div id = "image">
		<ul class = "me_nu">
			<li class = "active"><a href="home.php">Flights</a></li>
			<li><a href="hotels.php">Hotels</a></li>
			<li><a href="holiday.php">Holidays</a></li>
			<li><a href="bus.php">Bus</a></li>
			<li><a href="train.php">Trains</a></li>
			<li><a href="cabs.php">Cabs</a></li>
			<li><a href="#7">Reviews</a></li>
		</ul>  
		<div id = "form_flights">
			<iframe name = "frame_1" src = "roundtrip.php" style = "width : 600px; height : 460px; position : absolute; border : none; opacity : .8"></iframe>
		</div>
		<div id = "cover_add">
		<h3 style="text-align: center; font-size:120%; color:white">Book flights at low prices. Hurry! Limited Period Offer!</h3>
		</div>
	</div>
	<div id = "popular_dest">
			<div id="img1" >
			<img src="./img/podest1.jpg" style="height:330px; width:300px">
			</div>
			<div id="img2">
			<img src="./img/podest2.jpg" style="height:380px; width:262px">
			</div>
			<div id="img3">
			<img src="./img/podest3.jpg" style="height:212px; width:300px">
			</div>
			<div id="img4">
			<img src="./img/podest4.jpg" style="height:162px; width:262px">
			</div>
			<div id="txt">
			<h2 style="text-align: center; color:white; margin-top:10px; position:absolute"><marquee>Popular Destinations this season: Dubai, Paris, Venice, Thailand..</marquee></h2>
			</div>
	</div>
	<div id = "img_slider">
		<div id="sliderFrame">
			<div id="slider">
				<img src="./images/flights_3_1.jpg" alt="Get the best flights at your price." />
				<img src="./images/etihad_1.jpg" alt="Enjot the ride of ETHIHAD...." />
				<img src="./images/hotels_1.jpg" alt="Lodge in multistarred hotels." />
				<img src="./images/singapore_1.jpg" alt="Experience the beauty of Singapore." />
				<img src="./images/nature_beauty_1.jpg" alt = "Spend your holidays in the lap of Nature." />
			</div>
		</div>
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
		<div id="footer_sec1">
			<h3>OUR PRODUCTS</h3>
			<a href="home.php">Flight schedule</a><br>
			<a href="home.php">Domestic Flights</a><br>
			<a href="hotels.php">Hotels</a><br>
			<a href="holiday.php">Holidays in India</a><br>
			<a href="holiday.php">International holidays</a><br>
			<a href="bus.php">Bus Booking</a><br>
			<a href="train.php">Railway</a><br>
			<a href="cabs.php">Cab Booking</a><br>
			</div>
			<div id="footer_sec2">
			<h3>COMPANY</h3>
			<a href="aboutus.php">About Us</a><br>
			<a href="underconst.php">Offers</a><br>
			<a href="underconst.php">Gift Vouchers</a><br>
			<a href="underconst.php">Travel Community</a><br>
			<a href="underconst.php">Reviews</a><br>
			</div>
		<div id="footer_sec3">
			<h3>ABOUT THE SITE</h3>
			<a href="faqs.php">FAQs</a><br>
			<a href="tnc.php">Terms and Conditions</a><br>
			<a href="underconst.php">Privacy Policy</a><br>
			<a href="contactus.php">Contact Us</a><br>
			<a href="underconst.php">User Agreement</a><br>
		</div>
		<div id="footer_sec4">
			<h3>MORE LINKS</h3>
			<a href="https://www.irctc.co.in/eticketing/loginHome.jsf">Irctc</a><br>
			<a href="https://www.irctc.co.in/eticketing/loginHome.jsf">Indian Railways</a><br>
			<a href="http://www.indianrail.gov.in/pnr_Enq.html">PNR Status</a><br>
			<a href="http://www.indianrail.gov.in/seat_Avail.html">Seat Availability</a><br>
			<a href="https://www.oyorooms.com">Oyo Rooms</a><br>
		</div>
		<div id="footer_sec5">
			<h3>FOLLOW US ON</h3>
			<a href="https://www.facebook.com/ghumo.com.1"><img src="./img/fblogo.jpg" alt="fblogo" style="height:40px; width:40px"></a>
			<a href="https://www.instagram.com/ghumo"><img src="./img/insta.jpg" alt="instalogo" style="height:40px; width:40px"></a>
			<img src="./img/twitter.jpg" alt="twitterlogo" style="height:40px; width:40px">
			<br><br>
			
		</div>
		
</div>
</body>
</html>