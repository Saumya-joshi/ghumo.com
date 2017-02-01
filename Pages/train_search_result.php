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
	background-color : #cce5ff;
	background-repeat: y;
    width : 980px;
    height : 520px;
    padding:10px;
    margin-left : 180px;	 
	margin-right : 165px;
    margin-top : 2.2px;
	border : 1px solid black;
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
	color : white;
}
 
#lbl_nm_search_location
{
	margin-left : 1px;
	width : 150px;
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

#div_filter
{
	margin-left : 1px;
	width : 280px;
	height : 820px;
	background-color : white;
	position : absolute;
	color : white;
	font-size : 14px;
	margin-top : 86.5px;
}

#div_get_result
{
	margin-left : 300px;
	width : 860px;
	height : 820px;
	background-color : white;
	position : absolute;
	color : white;
	margin-top : 86.5px;
}

#div_line
{
	margin-left : 290px;
	width : 1px;
	height : 820px;
	background-color : black;
	position : absolute;
	color : black;
	margin-top : 86.5px;
}

#div_filter_price
{
	margin-left : 5px;
	width : 270px;
	height : 70px;
	background-color : white;
	position : absolute;
	color : black;
	margin-top : 0px;
}

#div_filter_star_rating
{
	margin-left : 5px;
	width : 270px;
	height : 70px;
	background-color : white;
	position : absolute;
	color : black;
	margin-top : 85px;
}

#div_filter_hotel_name
{
	margin-left : 5px;
	width : 270px;
	height : 65px;
	background-color : white;
	position : absolute;
	color : black;
	margin-top : 170px;
}

#div_filter_hotel_location
{
	margin-left : 5px;
	width : 270px;
	height : 240px;
	background-color : white;
	position : absolute;
	color : black;
	margin-top : 250px;
}

#div_submit_filter
{
	margin-left : 5px;
	width : 270px;
	height : 50px;
	background-color : white;
	position : absolute;
	color : black;
	margin-top : 505px;
}

input[type="checkbox"]
{
	cursor: pointer;
	-webkit-appearance: none;
	appearance: none;
	background: #cccccc;
	border-radius: 1px;
	box-sizing: border-box;
	position: relative;
	box-sizing: content-box ;
	width: 50px;
	height: 5px;
	border-width: 0;
}

input[type="checkbox"]:checked
{
	background-color: #e5e600;
}

input[type="checkbox"]:focus
{
	outline: 0 none;
	box-shadow: none;
}

.div_table_res
{
	width : 840px;
	height : 100px;
	background-color : white;
	border : 1px solid red;
	margin-left : 8px;
	margin-top : 10px;
	background-color : #ecf2f9;
	padding : 0px 0px 15px 0px;
}

.div_img_hotel
{
	width : 120px;
	height : 80px;
	margin-left : 5px;
	margin-top : 10px;
	position : absolute;
	background-color : black;
	opacity : .8;
}

.me_nu
{
	margin-top : 11px;
	margin-left : 100px;
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
	background-color :  #00001a;
}

.me_nu li a:hover 
{
	border-bottom : solid 2px #6C0000;
}

.me_nu li.active a
{
	border-bottom : solid 2px #6C0000;
	background-color : #ff6600;
}

#table_train_result
{
	margin-left : 70px;
	width : 800px;
	margin-top : 30px;
	position : absolute;
}

#table_train_result td
{
	height : 45px;
}

table#table_train_result tr:nth-child(even)
{
	background-color :#f2f2f2;
	color : black;
}

table#table_train_result tr:nth-child(odd) 
{
   background-color: #e6e6e6;
   color : black;
}

.train_class
{
	font_size : 10px;
	margin-left : 2px;
	margin-top : 2px;
	display : inline;
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
	<ul class = "me_nu">
		<li><a href="home.php">Flights</a></li>
		<li><a href="hotels.php">Hotels</a></li>
		<li><a href="holiday.php">Holidays</a></li>
		<li><a href="bus.php">Bus</a></li>
		<li class = "active"><a href="train.php">Trains</a></li>
		<li><a href="cabs.php">Cabs</a></li>
		<li><a href="#7">Reviews</a></li>
	</ul>
</div>

<div id="section">
	<?php
		error_reporting(E_ERROR);
		session_start();
		define('DB_HOST', 'localhost:3306'); 
		define('DB_NAME', 'travel_transport'); 
		define('DB_USER','root'); 
		define('DB_PASSWORD',''); 
		$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
		$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
		if(isset($_POST['search_train']))
		{
			$source = $_POST['from_train'];
			$destination = $_POST['to_train'];
			$dep_date = $_POST['departure_date'];
			$date_1 = new DateTime($dep_date);
			$dep_date = $date_1->format('Y-m-d');
			//$class = $_POST['class_train'];
			$search = "SELECT *from train where departure_city = '$source' AND arrival_city = '$destination' AND dep_date = '$dep_date'";
			$res_search = mysql_query($search) or die(mysql_error());
			if(mysql_num_rows($res_search) > 0)
			{
				echo '<table id = "table_train_result">';
				echo '<th style = "font-size : 12px; font-weight : 600; background-color : aqua; color : black; height : 45px">Train No</th><th style = "font-size : 12px; font-weight : 600; background-color : aqua; color : black; height : 45px">Train Name</th><th style = "font-size : 12px; font-weight : 600; background-color : aqua; color : black; height : 45px">From</th><th style = "font-size : 12px; font-weight : 600; background-color : aqua; color : black; height : 45px">Departure</th><th style = "font-size : 12px; font-weight : 600; background-color : aqua; color : black; height : 45px">To</th><th style = "font-size : 12px; font-weight : 600; background-color : aqua; color : black; height : 45px">Arrival</th><th style = "font-size : 12px; font-weight : 600; background-color : aqua; color : black; height : 45px">Class</th>';
				while($rows = mysql_fetch_array($res_search))
				{
					echo '<tr>';
					echo '<td>'.$rows['train_no'].'</td><td>'.$rows['train_name'].'</td><td>'.$rows['departure_city'].'</td><td>'.$rows['dep_time'].'</td><td>'.$rows['arrival_city'].'</td><td>'.$rows['arr_time'].'</td>';
					//echo '<td><a data-toggle = "modal" href = "#seat_availability_1A?train_id='.$rows['train_id'].'" id = "1_A" style = "cursor : pointer">1A</a></td>';
					echo '<td style = "width : 150px"><a href = "show_seat_availability.php?train_id='.$rows['train_id'].'&train_name='.$rows['train_name'].'&train_no='.$rows['train_no'].'&class_name='."First AC".'"><p class = "train_class">1A</a></p><a href = "show_seat_availability.php?train_id='.$rows['train_id'].'&train_name='.$rows['train_name'].'&train_no='.$rows['train_no'].'&class_name='."Second AC".'"><p class = "train_class">2A</a></p><a href = "show_seat_availability.php?train_id='.$rows['train_id'].'&train_name='.$rows['train_name'].'&train_no='.$rows['train_no'].'&class_name='."Third AC".'"><p class = "train_class">3A</a></p><a href = "show_seat_availability.php?train_id='.$rows['train_id'].'&train_name='.$rows['train_name'].'&train_no='.$rows['train_no'].'&class_name='."Sleeper".'"><p class = "train_class">SL</a></p><a href = "show_seat_availability.php?train_id='.$rows['train_id'].'&train_name='.$rows['train_name'].'&train_no='.$rows['train_no'].'&class_name='."AC Chair".'""><p class = "train_class">CC</a></p><a href = "show_seat_availability.php?train_id='.$rows['train_id'].'&train_name='.$rows['train_name'].'&train_no='.$rows['train_no'].'&class_name='."2S".'"><p class = "train_class">2S</a></p></td>';
					echo '</tr>';
				}
				echo '</table>';
				/*echo '<table style = "margin-top : 350px; position : absolute; width : 800px; background-color : blue; border : 1px solid black; margin-left : 70px">';
				echo '<th style = "font-size : 12px; font-weight : 600; background-color : aqua; color : black; height : 45px">First AC</th><th style = "font-size : 12px; font-weight : 600; background-color : aqua; color : black; height : 45px">Second AC</th><th style = "font-size : 12px; font-weight : 600; background-color : aqua; color : black; height : 45px">Third AC</th><th style = "font-size : 12px; font-weight : 600; background-color : aqua; color : black; height : 45px">Sleeper</th><th style = "font-size : 12px; font-weight : 600; background-color : aqua; color : black; height : 45px">AC Chair Car</th><th style = "font-size : 12px; font-weight : 600; background-color : aqua; color : black; height : 45px">Second Seating</th>';
				echo '</table>';*/
			}
		}
	?>
	<!--<div id = "seat_availability_1A" class="modal fade" role="dialog">
		<div class="modal-dialog modal-sm" style = "width : 500px; height : 100px" >
			<div class="modal-content">
				<div class="modal-header">
				</div>
				<div class="modal-body" style = "height : 45px">
				</div>
			</div>
		</div>
	</div>-->
</div>

<div id="footer">
		<div id="footer_sec1">
			<h5>OUR PRODUCTS</h5>
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
			<h5>COMPANY</h5>
			<a href="aboutus.php">About Us</a><br>
			<a href="underconst.php">Offers</a><br>
			<a href="underconst.php">Gift Vouchers</a><br>
			<a href="underconst.php">Travel Community</a><br>
			<a href="underconst.php">Reviews</a><br>
			</div>
		<div id="footer_sec3">
			<h5>ABOUT THE SITE</h5>
			<a href="faqs.php">FAQs</a><br>
			<a href="tnc.php">Terms and Conditions</a><br>
			<a href="underconst.php">Privacy Policy</a><br>
			<a href="contactus.php">Contact Us</a><br>
			<a href="underconst.php">User Agreement</a><br>
		</div>
		<div id="footer_sec4">
			<h5>MORE LINKS</h5>
			<a href="https://www.irctc.co.in/eticketing/loginHome.jsf">Irctc</a><br>
			<a href="https://www.irctc.co.in/eticketing/loginHome.jsf">Indian Railways</a><br>
			<a href="http://www.indianrail.gov.in/pnr_Enq.html">PNR Status</a><br>
			<a href="http://www.indianrail.gov.in/seat_Avail.html">Seat Availability</a><br>
			<a href="https://www.oyorooms.com">Oyo Rooms</a><br>
		</div>
		<div id="footer_sec5">
			<h5>FOLLOW US ON</h5>
			<a href="https://www.facebook.com/ghumo.com.1"><img src="./img/fblogo.jpg" alt="fblogo" style="height:40px; width:40px"></a>
			<a href="https://www.instagram.com/ghumo"><img src="./img/insta.jpg" alt="instalogo" style="height:40px; width:40px"></a>
			<img src="./img/twitter.jpg" alt="twitterlogo" style="height:40px; width:40px">
			<br><br>
			
		</div>
		
</div>
</body>
</html>