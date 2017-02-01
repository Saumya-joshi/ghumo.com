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
<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="screen" href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> 
<script type="text/javascript" src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.en.js"></script>
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

<script>
	$(document).ready(function()
	{
		$('#datetimepicker').datetimepicker({
			format: 'dd/MM/yyyy hh:mm:ss',
			language: 'en'
		});
	});
	
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
	background-image: url(./images/cabs_background.jpg);
	background-repeat: no-repeat;
	width : 1100px;
	height : 700px;
	background-size: 1100px 700px;
	margin-left : 40px;
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

#whyus
{
	width : 580px;
	height : 300px;
	margin-top : 10px;
	margin-left : 580px;
	background-color : yellow;
	opacity: 0.7;
	border-radius:  10px;
}

#partner
{
	width:580px;
	height:295px;
	margin-top: 10px;
	margin-left: 580px;
	background-color: yellow;
	opacity: 0.7;
	position:absolute;
	border-radius: 10px;
}

#text
{
	width:580px;
	height:60px;
	margin-top:315px;
	margin-left: 580px;
	background-color: yellow;
	opacity:0.7;
	position:absolute;
	border-radius: 10px;
	
}

#hotel_details
{
	margin-left : 30px;
	width : 520px;
	height : 385px;
	top : 830px;
	background-color : yellow;
	opacity:0.7;
	position : absolute;
	border-radius : 10px;
	border : 1px solid black;
	box-shadow: 1px 1px 2px 2px #585858;
}

#offers
{
	border-radius : 10px;
	margin-left : 30px;
	width : 520px;
	height : 285px;
	top : 1230px;
	background-color : yellow;
	opacity : .7;
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

#form_cabs
{
	background-color : black;
	opacity : .6;
	width : 600px;
	height : 300px;
	margin-left :25px;
	margin-top : 75px;
	position : absolute;
}

table#t01 {
    border-collapse: collapse;
    width: 100%;
}
table#t01 th, td {
    text-align: left;
    padding: 8px;
}

table#t01 tr:nth-child(even){background-color: #f2f2f2}

table#t01 th {
    background-color: #4CAF50;
    color: white;

}

td
{
	width : 300px;
}

#img
{
	height: 32px;
	width: 45px;
	background-color:black;
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
			<li><a href="home.php">Flights</a></li>
			<li><a href="hotels.php">Hotels</a></li>
			<li><a href="holiday.php">Holidays</a></li>
			<li><a href="bus.php">Bus</a></li>
			<li><a href="train.php">Trains</a></li>
			<li class = "active"><a href="cabs.php">Cabs</a></li>
			<li><a href="#7">Reviews</a></li>
		</ul>  
		<div id = "form_cabs">
			<form id = "cab_form" name = "cab_form" method = "post" action = "">
				<table style = "width : 600px">
				<tr>
					<td style = "font-size : 15px; color : white; text-align : left">Pick-Up</td>
					<td style = "font-size : 15px; color : white; text-align : left">Drop</td>
				</tr>
				<tr>
					<td><input type = "text" name = "pickup_location" style = "height : 30px; width : 260px; border-radius : 5px; background-color : #f2f2f2" placeholder = "Pick-Up Location" required></td>
					<td><input type = "text" name = "drop_location" style = "height : 30px; width : 260px; border-radius : 5px; background-color : #f2f2f2" placeholder = "Drop Location"></td>
				</tr>
				<tr>
					<td colspan = "2" style = "font-size : 15px; color : white; text-align : left">Date and Time</td>
				</tr>
				<tr>
					<td colspan = "2">
						<div id = "datetimepicker" class="input-append date">
							<input type = "text" name = "pickup_date_time" style = "height : 30px; width : 420px; border-radius : 5px; background-color : #f2f2f2" placeholder = "PickUp Date and Time">
							<span class="add-on" style = "margin-top : 2px; height : 25px; width : 24px; background-image : url(./images/calender_icon.jpg); pointer : cursor">
							</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<input type = "submit" name = "search_cab" value = "Search Cabs" style = "height : 35px; width : 155px; border-radius: 5px; box-shadow: 5px; background-color : #b30000; color:white; font-size:15px">
					</td>
				</tr>
				</table>
			</form>
		</div>
	</div>
	<div id = "whyus">
      <h3 style = " text-align : center; color : black; text-decoration : underline"><strong>Why Us? </strong></h3>
	 &nbsp&nbsp <img id="img" src="./img/custsat.jpg" >&nbsp&nbsp<b>Customer Satisfaction.</b><br>
		&nbsp&nbsp <img id="img" src="./img/grtdeal.jpg" >&nbsp&nbsp<b>We have great deals to offer.</b><br>
		&nbsp&nbsp <img id="img" src="./img/cashback.jpg">&nbsp&nbsp<b>Guaranteed Cashbacks and discount coupons.</b><br>
		&nbsp&nbsp <img id="img" src="./img/wallet.jpg">&nbsp&nbsp<b>Pay easily using the site wallet.</b><br>
		&nbsp&nbsp <img id="img" src="./img/loan.jpg">&nbsp&nbsp<b>Less Money? No worry! Take a loan from us.</b><br>
		&nbsp&nbsp <img id="img" src="./img/cab.jpg" >&nbsp&nbsp<b>Book a cab easily with your hotel and flight booking.</b><br>
	</div>
	<div id="partner">
		<h3 style = "text-align : center; color : black; text-decoration : underline">Add your business </h3>
		<br><br>
		<h4 style="text-align:center;color:#663300">Have a cab? Want to start a business?</h4>
		<h5 style = " text-align : center; color : #663300">Register with us now!</h5>
		<input type = "submit" id = "Register_cab" name = "Register_cabs" value = "Register Now" style = "margin-left : 220px; height : 40px; width : 150px; background-color : #663300; color : white">
	</div>
	<div id="text">
		<h3 style="color:#663300"><marquee>We offer cabs without surge prices. We care about your safety. Keep exploring.</marquee></h3>
	</div>
	<div id = "hotel_details">
		<h3 style = "text-align : center; color : black; text-decoration : underline">Taxi Details</h3>
	<p>Get the best deals you have ever got... Hurry! it's a limited period offer.</p>
	<table id = "t01">
	<tr>
	<th>City</th>
	<th>Car</th>
	<th>Starting Price<sup>*</sup></th>
	</tr>
	<tr>
	<td>Delhi</td>
	<td>Duster</td>
	<td>INR 6594</td>
	</tr>
	<tr>
	<td>Mumbai</td>
	<td>Honda City</td>
	<td>INR 6540</td>
	</tr>
	<tr>
	<td>Mumbai</td>
	<td>Swift Dzire</td>
	<td>INR 5940</td>
	</tr>
	<tr>
	<td>Kanpur</td>
	<td>Royal Cliff</td>
	<td>INR 5940</td>
	</tr>
	<tr>
	<td>Chennai</td>
	<td>Venkateswaraya</td>
	<td>INR 4024</td>
	</tr>
	</table>
	<p><sup>*</sup>Subject to availability.Prices are inclusive of taxes and fees.</p>
		</div>
	<div id = "offers">
		<h3 style = " text-align : center; color : black; text-decoration : underline; margin-left : 15px"><strong>Customer Services</strong></h3><br>
		<ul style = "margin-left : 35px; list-style-image : url(./images/print_e_tkt.jpg)">
			<li><span><strong><a href = "#1" style = "text-decoration : none">Print E-Ticket</a></strong></span></li>
		</ul>
		<ul style = "margin-left : 35px; list-style-image : url(./images/cancel.png)">
			<li><span><strong><a href = "#2" style = "text-decoration : none">Cancellation</a></strong></span></li>
		</ul>
		<ul style = "margin-left : 35px; list-style-image : url(./images/wallet.jpg)">
			<li><span><strong><a href = "#3" style = "text-decoration : none">Wallet</a></strong></span></li>
		</ul>
		<ul style = "margin-left : 35px; list-style-image : url(./images/reg_complaint.jpg)">
			<li><span><strong><a href = "#4" style = "text-decoration : none">Complaints/Help</a></strong></span></li>
		</ul>
		<ul style = "margin-left : 35px; list-style-image : url(./images/FAQ_1.jpg)">
			<li><span><strong><a href = "#5" style = "text-decoration : none">FAQ</a></strong></span></li>
		</ul>
		<ul style = "margin-left : 235px; list-style-image : url(./images/manage_bookings_1.png); top : 65px; position : absolute">
			<li><span><strong><a href = "#6" style = "text-decoration : none">Manage Your Bookings</a></strong></span></li>
		</ul>
		<ul style = "margin-left : 235px; list-style-image : url(./images/chk_status_1.jpg); top : 100px; position : absolute">
			<li><span><strong><a href = "#6" style = "text-decoration : none">Booking Status</a></strong></span></li>
		</ul>
		<ul style = "margin-left : 235px; list-style-image : url(./images/add_balance_1.jpg); top : 138px; position : absolute">
			<li><span><strong><a href = "#6" style = "text-decoration : none">Load Your Wallet</a></strong></span></li>
		</ul>
		<ul style = "margin-left : 235px; list-style-image : url(./images/contact-us_1.jpg); top : 170px; position : absolute">
			<li><span><strong><a href = "#6" style = "text-decoration : none">Contact Us</a></strong></span></li>
		</ul>
	</div>
</div>

<div id="footer">
		<div id="footer_sec1">
			<h6>OUR PRODUCTS</h6>
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
			<h6>COMPANY</h6>
			<a href="aboutus.php">About Us</a><br>
			<a href="underconst.php">Offers</a><br>
			<a href="underconst.php">Gift Vouchers</a><br>
			<a href="underconst.php">Travel Community</a><br>
			<a href="underconst.php">Reviews</a><br>
			</div>
		<div id="footer_sec3">
			<h6>ABOUT THE SITE</h6>
			<a href="faqs.php">FAQs</a><br>
			<a href="tnc.php">Terms and Conditions</a><br>
			<a href="underconst.php">Privacy Policy</a><br>
			<a href="contactus.php">Contact Us</a><br>
			<a href="underconst.php">User Agreement</a><br>
		</div>
		<div id="footer_sec4">
			<h6>MORE LINKS</h6>
			<a href="https://www.irctc.co.in/eticketing/loginHome.jsf">Irctc</a><br>
			<a href="https://www.irctc.co.in/eticketing/loginHome.jsf">Indian Railways</a><br>
			<a href="http://www.indianrail.gov.in/pnr_Enq.html">PNR Status</a><br>
			<a href="http://www.indianrail.gov.in/seat_Avail.html">Seat Availability</a><br>
			<a href="https://www.oyorooms.com">Oyo Rooms</a><br>
		</div>
		<div id="footer_sec5">
			<h6>FOLLOW US ON</h6>
			<a href="https://www.facebook.com/ghumo.com.1"><img src="./img/fblogo.jpg" alt="fblogo" style="height:40px; width:40px"></a>
			<a href="https://www.instagram.com/ghumo"><img src="./img/insta.jpg" alt="instalogo" style="height:40px; width:40px"></a>
			<img src="./img/twitter.jpg" alt="twitterlogo" style="height:40px; width:40px">
			<br><br>
			
		</div>
		
</div>
</body>
</html>