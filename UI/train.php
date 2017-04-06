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
    height : 1400px;
    padding:10px;
    margin-left : 75px;	 
    margin-top : 2.2px;
    box-shadow: 1px 1px 2px 2px #888888;
}

#image
{
	background-image: url(./img/backtrain.jpg);
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
	width : 550px;
	height : 290px;
	margin-top : 10px;
	margin-left : 40px;
	background-color: #854236;
	color:white;
	opacity:.9;
	border-radius:  10px;
}

#offers a{
	color: white;
}
#train_details
{
	margin-left : 200px;
	width : 750px;
	height : 350px;
	top : 1130px;
	background-color : #854236;
	opacity:.9;
	color:gray;
	position : absolute;
	border-radius : 10px;
	border : 1px solid black;
	box-shadow: 1px 1px 2px 2px #585858;
}

#offers
{
	border-radius : 10px;
	margin-left : 600px;
	width : 520px;
	height : 290px;
	top : 835px;
	background-color : #854236;
	color:#663300;
	opacity : .9;
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

#form_train
{
	background-color : black;
	opacity : .6;
	width : 600px;
	height : 380px;
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
	width : 185px;
}
 
#img{
	height:32px;
	width:45px;
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
			<li class = "active"><a href="home.php">Flights</a></li>
			<li><a href="hotels.php">Hotels</a></li>
			<li><a href="holiday.php">Holidays</a></li>
			<li><a href="bus.php">Bus</a></li>
			<li><a href="train.php">Trains</a></li>
			<li><a href="cabs.php">Cabs</a></li>
			<li><a href="#7">Reviews</a></li>
		</ul>  
		<div id = "form_train">
			<form id = "train_form" name = "form_train" method = "post" action = "">
				<table style = "width : 600px">
					<tr>
						<td style = "font-size : 15px; color : white; text-align : left">FROM</td>
						<td style = "font-size : 15px; color : white; text-align : left">TO</td>
					</tr>
					<tr>
						<td><input type = "text" name = "from_train" style = "margin-left : 0px; height : 35px; width : 200px; background-color : #f2f2f2; border-radius : 5px" placeholder = "Type Departure City"></td>
						<td><input type = "text" name = "to_train" style = "margin-left : 0px; height : 35px; width : 200px; background-color : #f2f2f2; border-radius : 5px" placeholder = "Type Destination City"></td>
					</tr>
					<tr>
						<td colspan = "2" style = "font-size : 15px; color : white; text-align : left">Journey Date</td>
					</tr>
					<tr>
						<td colspan = "2"><input type = "date" name = "departure_date" style = "margin-left : 0px; height : 35px; width : 200px; background-color : #f2f2f2; border-radius : 5px"></td>
					</tr>
					<tr>
						<td colspan = "2" style = "font-size : 15px; color : white; text-align : left">Class</td>
					</tr>
					<tr>
						<td colspan = "2">
							<select name = "class_train" style = "margin-left : 0px; height : 35px; width : 200px; background-color : #f2f2f2; border-radius : 5px">
								<option value = "sleeper">Sleeper</option>
								<option value = "third_ac">Third AC</option>
								<option value = "second_ac">Second AC</option>
								<option value = "first_ac">First AC</option>
								<option value = "second_seating">Second seating</option>
								<option value = "ac_chair_car">AC chair car</option>
								<option value = "first_class">First class</option>
								<option value = "third_ac_economy">Third AC economy</option>
							</select>
						</td>
					</tr>
					<tr>
						<td colspan = "2"><input type = "submit" name = "search_train" value = "Search Trains" style = "margin-left : 25px; width : 150px; height : 35px; background-color : #b30000; color : white; font-weight : 600"></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
	<div id = "whyus">
      <h1 style = " text-align : center; color : black; text-decoration : underline"><strong>Why Us? </strong></h1>
	  <br>
	 &nbsp&nbsp <img id="img" src="./img/custsat.jpg" >&nbsp&nbsp<b>Customer Satisfaction.</b><br>
		&nbsp&nbsp <img id="img" src="./img/grtdeal.jpg" >&nbsp&nbsp<b>We have great deals to offer.</b><br>
		&nbsp&nbsp <img id="img" src="./img/cashback.jpg">&nbsp&nbsp<b>Guaranteed Cashbacks and discount coupons.</b><br>
		&nbsp&nbsp <img id="img" src="./img/wallet.jpg">&nbsp&nbsp<b>Pay easily using the site wallet.</b><br>
		&nbsp&nbsp <img id="img" src="./img/loan.jpg">&nbsp&nbsp<b>Less Money? No worry! Take a loan from us.</b><br>
		&nbsp&nbsp <img id="img" src="./img/cab.jpg" >&nbsp&nbsp<b>Book a cab easily with your hotel and flight booking.</b><br>
	</div>
	<div id = "train_details">
 <h1 style = " text-align : center; color : black; text-decoration : underline"><strong>Train Details</strong></h1>
	<p>Book train tickets online without any hassle!</p>
	<table id = "t01">
	<tr>
	<th>Source</th>
	<th>Destination</th>
    <th>Train Name</th>
	<th>Train Number</th>
	</tr>
	<tr>
	<td>Delhi</td>
	<td>Kanpur</td>
	<td>Shatabdi Express</td>
	<td>12034</td>
	</tr>
	<tr>
	<td>Mumbai</td>
	<td>Lucknow</td>
	<td>Pushpak Express</td>
	<td>12534</td>
	</tr>
	<tr>
	<td>Sealdah</td>
	<td>New Delhi</td>
	<td>NDLS Duronto</td>
	<td>12259</td>
	</tr>
	<tr>
	<td>Jammu Tawi</td>
	<td>New Delhi</td>
	<td>Jammu Rajdhani</td>
	<td>12426</td>
	</tr>
	<tr>
	<td>Kalka</td>
	<td>Shimla</td>
	<td>Shivalk Dlx Express</td>
	<td>52451</td>
	</tr>
	</table>
	<p><sup>*</sup>Subject to availability.Prices are inclusive of taxes and fees.</p>
		</div>
	<div id = "offers">
		<h1 style = " text-align : center; color : black; text-decoration : underline"><strong>Customer Services</strong></h1><br>
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
		<ul style = "margin-left : 215px; list-style-image : url(./images/manage_bookings_1.png); top : 85px; position : absolute">
			<li><span><strong><a href = "#6" style = "text-decoration : none">Manage Your Bookings</a></strong></span></li>
		</ul>
		<ul style = "margin-left : 215px; list-style-image : url(./images/chk_status_1.jpg); top : 120px; position : absolute">
			<li><span><strong><a href = "#6" style = "text-decoration : none">Booking Status</a></strong></span></li>
		</ul>
		<ul style = "margin-left : 215px; list-style-image : url(./images/add_balance_1.jpg); top : 158px; position : absolute">
			<li><span><strong><a href = "#6" style = "text-decoration : none">Load Your Wallet</a></strong></span></li>
		</ul>
		<ul style = "margin-left : 215px; list-style-image : url(./images/contact-us_1.jpg); top : 190px; position : absolute">
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