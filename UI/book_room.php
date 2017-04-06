<!DOCTYPE html>
<html>
<head>
<base target="_parent"></base>
<meta charset="ISO-8859-1">
<title>ghumo.com|Book Flights, Hotels & Holidays at best Price!!!</title>
<link href="./CSS/js-image-slider.css" rel="stylesheet" type="text/css" />
<script src="./JavaScript/select_country_state.js" type="text/javascript"></script>
<script src="./JavaScript/js-image-slider.js" type="text/javascript"></script>
<link href="./CSS/generic.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

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
	background-color : white;
	background-repeat: y;
    width : 1180px;
    height : 1080px;
    padding:10px;
    margin-left : 80px;	 
	margin-right : 165px;
    margin-top : 2.2px;
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


#menu_div
{
	height : 45px;
	width : auto;
	margin-top : 2px;
	background-color : blue;
	color : white;
}
 
#lbl_nm_search_location
{
	margin-left : 1px;
	width : 350px;
	height : 20px;
	background-color : white;
	position : absolute;
	color : black;
	font-size : 11px;
}

#search_overview
{
	margin-left : 1px;
	width : 1160px;
	height : 60px;
	background-color : white;
	position : absolute;
	color : black;
	margin-top : 23.5px;
}

#div_hotel_overview
{
	margin-left : 1px;
	width : 1160px;
	height : 160px;
	background-color : white;
	position : absolute;
	color : black;
	font-size : 14px;
	margin-top : 86.5px;
	border : 1px solid black;
}

.div_img_hotel
{
	width : 240px;
	height : 140px;
	margin-left : 10px;
	margin-top : 10px;
	position : absolute;
	background-color : black;
	opacity : .8;
}

#hotel_description
{
	margin-left : 1px;
	width : 1160px;
	height : 220px;
	background-color : white;
	position : absolute;
	color : black;
	font-size : 14px;
	margin-top : 255px;
	border : 1px solid black;
}

#div_no_card_required
{
	margin-left : 1px;
	width : 1160px;
	height : 50px;
	background-color : #3d5c5c;
	position : absolute;
	color : white;
	font-size : 14px;
	margin-top : 485px;
	border : 1px solid black;
}

.div_room_info
{
	margin-left : 1px;
	width : 1160px;
	height : 150px;
	background-color : #3d5c5c;
	position : absolute;
	color : white;
	font-size : 14px;
	margin-top : 545px;
	border : 1px solid black;
}

#hotel_faciliteis
{
	margin-left : 1px;
	width : 1160px;
	height : 90px;
	background-color : #3d5c5c;
	position : absolute;
	color : white;
	font-size : 14px;
	margin-top : 705px;
	border : 1px solid black;
}

#hotel_policies
{
	margin-left : 1px;
	width : 1160px;
	height : 120px;
	background-color : #3d5c5c;
	position : absolute;
	color : white;
	font-size : 14px;
	margin-top : 915px;
	border : 1px solid black;
}

#hotel_reviews
{
	margin-left : 1px;
	width : 1160px;
	height : 100px;
	background-color : #3d5c5c;
	position : absolute;
	color : white;
	font-size : 14px;
	margin-top : 805px;
	border : 1px solid black;
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

<div id = "menu_div">
</div>

<div id="section">
	<label id = "lbl_nm_search_location">
		<?php
			//if(isset($_POST['search_hotels']))
				echo '<a style = "text-decoration : none; color : black" href = "home.php">Home</a>&nbsp/&nbspHotels in&nbsp'.$_SESSION['HOTEL_LOCATION'].'/&nbsp'.$_GET['hotel_name'];
		?>
	</label>
	<div id = "search_overview">
		<?php
				$location = $_SESSION['HOTEL_LOCATION'];
				$checkin = $_POST['HOTEL_CHECKIN_DATE'];
				$checkout = $_POST['HOTEL_CHECKOUT_DATE'];
				$nights = $_POST['HOTEL_NIGHTS'];
				$rooms = $_SESSION['ROOMS_HOTELS'];
				$persons = $_SESSION['PERSONS_HOTELS'];
				echo '<div style = "margin-left : 5px; margin-top : 5px; width : 300px; height : 50px; background-color : white; border : 1px solid black">';
				echo '<p style = "font-size : 18px; font-weight : 600; margin-left : 5px; position : absolute; margin-top : 10px">'.$_SESSION['HOTEL_LOCATION'];
				echo '<p style = "font-size : 14px; margin-left : 5px; position : absolute; margin-top : 30px">'.'India';
				echo '</div>';
				echo '<div style = "margin-left : 310px; margin-top : -50px; width : 300px; height : 50px; background-color : white; position : absolute; z-index : 10; border : 1px solid black">';
				echo '<p style = "font-size : 12px; font-weight : 600; margin-left : 25px; position : absolute; margin-top : 4px">'.'Check In';
				echo '<p style = "font-size : 14px; font-weight : 600; margin-left : 25px; position : absolute; margin-top : 20px">'.$_SESSION['HOTEL_CHECKIN_DATE'];
				echo '<p style = "font-size : 12px; font-weight : 600; margin-left : 175px; position : absolute; margin-top : 4px">'.'Check Out';
				echo '<p style = "font-size : 14px; font-weight : 600; margin-left : 175px; position : absolute; margin-top : 20px">'.$_SESSION['HOTEL_CHECKOUT_DATE'];
				echo '</div>';
				echo '<div style = "margin-left : 615px; margin-top : -50px; width : 300px; height : 50px; background-color : white; position : absolute; z-index : 10; border : 1px solid black">';
				echo '<p style = "font-size : 12px; font-weight : 600; margin-left : 15px; position : absolute; margin-top : 4px">'.'Nights';
				echo '<p style = "font-size : 14px; font-weight : 600; margin-left : 15px; position : absolute; margin-top : 20px">'.$_SESSION['HOTEL_NIGHTS'];
				echo '<p style = "font-size : 12px; font-weight : 600; margin-left : 125px; position : absolute; margin-top : 4px">'.'Rooms';
				echo '<p style = "font-size : 14px; font-weight : 600; margin-left : 125px; position : absolute; margin-top : 20px">'.$_SESSION['ROOMS_HOTELS'];
				echo '<p style = "font-size : 12px; font-weight : 600; margin-left : 235px; position : absolute; margin-top : 4px">'.'Persons';
				echo '<p style = "font-size : 14px; font-weight : 600; margin-left : 235px; position : absolute; margin-top : 20px">'.$_SESSION['PERSONS_HOTELS'];
				echo '</div>';
				echo '<div style = "margin-left : 925px; margin-top : -50px; width : 150px; height : 50px; background-color : white; position : absolute; z-index : 10">';
				echo '<a href = "hotels.php">'.'<input type = "button" name = "ModifySearch" Value = "Modify Search" style = "margin-left : 15px; margin-top : 10px; width : 115px; height : 35px; background-color : #d9d9d9; color : black; border-radius : 5px">'.'</a>';
				echo '</div>';
			
		?>
	</div>
	<div id = "div_hotel_overview">
		<?php
			echo '<div class = "div_img_hotel">'.'</div>';
			echo '<p style = "font-size : 20px; font-weight : 500; margin-left : 260px; margin-top : 25px; position : absolute; color : black">'.$_GET['hotel_name'];
			echo '<p style = "font-size : 14px; font-weight : 500; margin-left : 260px; margin-top : 60px; position : absolute; color : black">'.$_GET['address'];
			echo '<img src = "./images/location.JPEG" style = "margin-left : 6px; margin-top : -2px; position : absolute" alt = "location_img">';
			echo '<img src = "./images/breakfast_symbol.png" style = "margin-left : -65px; margin-top : 25px; position : absolute" alt = "breakfast_symbol">';
			echo '<img src = "./images/parking_icon.jpg" style = "margin-left : -35px; margin-top : 25px; position : absolute" alt = "parking_icon">';
			echo '<img src = "./images/wifi_icon.png" style = "margin-left : -5px; margin-top : 25px; position : absolute" alt = "wifi_icon">';
			echo '<img src = "./images/conference_room.png" style = "margin-left : 10px; margin-top : 0px; position : absolute" alt = "conference_room">';
			echo '<img src = "./images/more_icon.gif" style = "margin-left : 68px; margin-top : 25px; position : absolute" alt = "more_icon">';
			echo '<p style = "font-size : 15px; margin-left : 700px; color : #e60000; margin-top : 30px; position : absolute; font-weight : 600">'.'<i class="fa fa-inr">'.$_GET['price'].'</i>'.'</p>';
			echo '<p style = "font-size : 10px; margin-left : 700px; color : black; margin-top : 50px; position : absolute; font-weight : 600">'.'Per room per night.'.'</p>';
			echo '<p style = "font-size : 12px; margin-left : 700px; color : green; margin-top : 90px; position : absolute; font-weight : 600">'.'<a href = "" style = "color : green">'.'Pay at hotel.'.'</a>'.'</p>';
			echo '<input type = "button" name = "select_room" id = "select_room" value = "Select Room" style = "font-size : 12px; color : white; border-radius : 4px; background-color : #cc0000; margin-left : 880px; margin-top : 45px; height : 35px; width : 180px">';
		?> 
	</div>
	<div id = "hotel_description">
		<h1 style = "margin-left : 5px; font-size : 16px; font-weight : 600; margin-top : 15px; position : absolute">Hotel Overview</h1>
		<p style = "margin-left : 5px; font-size : 14px; margin-top : 45px; position : absolute">600 m from Charbagh Railway Station, 10 km from Amausi Airport, 5.6 km from Bara Imambara, 5.2 km from Bhool Bhulaiyaa, Restaurant, Banquet, Conference hall, Beauty salon

		Mohan Hotel is a 3 star property, conveniently located in proximity to the Charbagh Railway Station and popular tourist attractions, including Bara Imambara. It features 68 well-furnished rooms that are replete with modern amenities such as television and air-conditioner.

		Owing to its convenient location, close to the railway station and popular tourist hot spots, this hotel makes for an ideal place to stay for both leisure and corporate travellers. The banquet and conference halls are apt for organising official meetings, conferences and marriage parties as it can easily accommodate up to 200 people. Other facilities offered by the hotel include a beauty salon, doctor-on-call and, travel desk and ticketing.

		Chief Guest is the in-house restaurant and bar that serves a variety of delectable dishes and exotic drinks to guests.

		Well-known tourist attractions of the City of Nawabs, like Bara Imambara, Chota Imambara and Bhool Bhulaiyaa, can be reached easily from this hotel.</p>
	</div>
	<div id = "div_no_card_required">
		<h1 style = "font-size : 15px; font-weight : 500; color : white; margin-left : 15px; margin-top : 15px">Has your credit limit exceeded! dont worry. You can take loan from us or pay at hotel.</h1>
	</div>
	<?php
		error_reporting(E_ERROR);
		session_start();
		define('DB_HOST', 'localhost:3306'); 
		define('DB_NAME', 'travel_transport'); 
		define('DB_USER','root'); 
		define('DB_PASSWORD',''); 
		$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
		$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
		$get_room_id = "SELECT *from link_hotel_room where hotel_id = '".$_GET['hotel_id']."'";
		$res_get_room_id = mysql_query($get_room_id) or die(mysql_error());
		if(mysql_num_rows($res_get_room_id) > 0)
		{
			while($rows = mysql_fetch_array($res_get_room_id))
			{
				$get_room_info = "SELECT *from room where room_id = '".$rows['room_id']."'";
				$res_get_room_info = mysql_query($get_room_info) or die(mysql_error());
				if(mysql_num_rows($res_get_room_info) > 0)
				{
					while($row = mysql_fetch_array($res_get_room_info))
					{
						echo '<div class = "div_room_info">';
						echo '<div class = "div_img_hotel" style = "margin-left : 5px; margin-top : 4px">'.'</div>';
						echo '<h1 style = "margin-left : 260px; margin-top : 15px; position : absolute; font-size :17px; font-weight : 600; color : white">'.$row['room_type'];
						echo '<p style = "margin-left : 1px; margin-top : 5px; font-size : 12px; color : white;  font-weight : 600">'.'Includes Free Breakfast'.'</p>';
						echo '<p style = "margin-left : 1px; margin-top : 5px; font-size : 11px; color : white;  font-weight : 500">'.'Upto three persons will be provided with beds.'.'<br>'.'More than three persons(adult/children) will be'.'<br>'.'provided with mattress, no extra bed'.'</p>';
						echo '<p style = "margin-left : 1px; font-size : 11px; color : white; font-weight : 500">'.'Early check in and late check out for our members, with additional pickup and drop facility from respective place(if member has opted for cab service. He can book cab on spot also!)'.'</p>';
						echo '<p style = "margin-left : 650px; margin-top : -115px; color : white; font-size : 15px; position : absolute; font-weight : 600">'.'Price'.'</p>';
						echo '<p style = "margin-left : 650px; margin-top : -95px; color : white; font-size : 15px; position : absolute; font-weight : 600">'.'<i class="fa fa-inr">'.$row['room_pricee'].'</i>'.'</p>';
						echo '<a href = "hotel_review_book.php?hotelName='.$_GET['hotel_name'].'&roomType='.$row['room_type'].'&checkin='.$_GET['checkin'].'&checkout='.$_GET['checkout'].'&nights='.$_GET['nights'].'&address='.$_GET['address'].'&rooms='.$_GET['rooms'].'&persons='.$_GET['persons'].'">'.'<input type = "button" name = "select_room" id = "select_room" value = "Book Now" style = "font-size : 12px; color : white; border-radius : 4px; background-color : #cc0000; margin-left : 650px; margin-top : -65px; height : 35px; width : 150px; position : absolute">';
						echo '</div>';
					}
				}
			}
		}
	?>
	<div id = "hotel_faciliteis">
		<h1 style = "margin-left : 2px; font-size : 14px; color : white; font-weight : 600; position : absolute; margin-top : 2px">Hotel Facilities</h1>
		<ul style = "margin-left : 5px; margin-top : 25px; font-size : 12px; color : white; position : absolute">
			<li>Airport Transfer</li>
			<li>Doctor on Call</li>
			<li>Bar</li>
		</ul>
		<ul style = "margin-left : 275px; margin-top : 25px; font-size : 12px; color : white; position : absolute">
			<li>Coffee Shop</li>
			<li>Extra Mattress</li>
			<li>Cab Facility(on demand)</li>
		</ul>
		<ul style = "margin-left : 545px; margin-top : 25px; font-size : 12px; color : white; position : absolute">
			<li>Video Conferencing Room</li>
			<li>Handicap Facility</li>
			<li>Internet Facility</li>
		</ul>
		<ul style = "margin-left : 815px; margin-top : 25px; font-size : 12px; color : white; position : absolute">
			<li>Indoor game</li>
			<li>Recreational Work</li>
			<li>Meditation Hall</li>
		</ul>
	</div>
	
	<div id = "hotel_reviews">
		<?php
			echo '<p style = "margin-left : 15px; margin-top : 15px; position : absolute; color : white; font-size : 12px">'.'Sorry! No reviews available'.'</p>';
		?>
	</div>
	
	<div id = "hotel_policies">
		<h1 style = "margin-left : 2px; font-size : 16px; color : white; font-weight : 600; position : absolute; margin-top : 2px">Hotel Policies</h1>
		<h1 style = "margin-left : 2px; font-size : 14px; color : white; font-weight : 600; position : absolute; margin-top : 28px">Check In/Out</h1>
		<p style = "margin-left : 205px; font-size : 12px; color : white; position : absolute; margin-top : 28px">Hotel check in time is 2PM and check out time is 12PM.</p>
		<h1 style = "margin-left : 2px; font-size : 14px; color : white; font-weight : 600; position : absolute; margin-top : 56px">Cancellation Policy</h1>
		<p style = "margin-left : 205px; font-size : 12px; color : white; position : absolute; margin-top : 56px">Cancellation charge is variable and is dependent on type of room.</p>
		<h1 style = "margin-left : 2px; font-size : 14px; color : white; font-weight : 600; position : absolute; margin-top : 84px">Payment Mode</h1>
		<p style = "margin-left : 205px; font-size : 12px; color : white; position : absolute; margin-top : 84px">U can pay online through your credit/debit/net banking or pay at hotels. U can also opt for loan facility.</p>
		<p style = "margin-left : 805px; font-size : 12px; color : white; position : absolute; margin-top : 28px"><a href = "">Policies and terms and conditions.</a></p>
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