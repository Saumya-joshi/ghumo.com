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
    height : 920px;
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
				echo '<a style = "text-decoration : none; color : black" href = "home.php">Home</a>&nbsp/&nbspHotels in'.$_SESSION['HOTEL_LOCATION'];
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
	<div id = "div_filter">
		<h1 style = "margin-left : 5px; color : white; font-size : 14px; text-align : left; margin-top : 4px">Filter your Search!</h1>
		<form id = "form_filter" name = "form_filter" method = "post" action = "">
			<div id = "div_filter_price">
				<form name = "filter_price" id = "filter_price" method = "post" action = "">
				<table style = "width : 270px">
					<tr>
						<td colspan = "2" style = "color : black; font-size : 13px; font-weight : 600; height : 20px">Price</td>
					<tr>
					<tr>
						<td style = "width : 135px"><input type = "text" name = "min_budget" id = "min_budget" value = "<?php echo $_SESSION['MIN_BUDGET']?>" style = "margin-left : 0px; width : 129px; height : 25px; border-radius : 2px; background-color : #f2f2f2; border : none" placeholder = "Min. Amount"></td> 
						<td style = "width : 135px"><input type = "text" name = "max_budget" id = "max_budget" value = "<?php echo $_SESSION['MAX_BUDGET']?>" style = "margin-left : 0px; width : 129px; height : 25px; border-radius : 2px; background-color : #f2f2f2; border : none" placeholder = "Max. Amount"></td> 
					</tr>
					<tr>
						<td colspan = "2"><input type = "submit" name = "filter_price" id = "filter_price" value = "Filter" style = "margin-left : 150px; height : 20px; width : 90px; background-color : #ff0000; color : white; font-size : 12px; margin-top : 2px"></td>
					</tr>
				</table>
				</form>
			</div>
			<div id = "div_filter_star_rating">
				<div style = "width : 50px; height : 60px; margin-top : 5px; margin-left : 4px; background-color : white; position :absolute; color : black">
					<img src = "./images/star_image.jpg" style = "margin-left : 10px; margin-top : 12px; position : absolute">
					<p style = "margin-left : 20px; position : absolute; font-size : 10px; margin-top : 39px">1</p>
					<input type = "checkbox" name = "star_rating[]" value =  "1_star" style = "margin-left : 0px; margin-top : 55px; position : absolute">
				</div>
				<div style = "width : 50px; height : 60px; margin-top : 5px; margin-left : 57px; background-color : white; position : absolute; color : black">
					<img src = "./images/star_image.jpg" style = "margin-left : 10px; margin-top : 12px; position : absolute">
					<p style = "margin-left : 20px; position : absolute; font-size : 10px; margin-top : 39px">2</p>
					<input type = "checkbox" name = "star_rating[]" value =  "2_star" style = "margin-left : 0px; margin-top : 55px; position : absolute">
				</div>
				<div style = "width : 50px; height : 60px; margin-top : 5px; margin-left : 110px; background-color : black; position : absolute; background-color : white; color : black">
					<img src = "./images/star_image.jpg" style = "margin-left : 10px; margin-top : 12px; position : absolute">
					<p style = "margin-left : 20px; position : absolute; font-size : 10px; margin-top : 39px">3</p>
					<input type = "checkbox" name = "star_rating[]" value =  "3_star" style = "margin-left : 0px; margin-top : 55px; position : absolute">
				</div>
				<div style = "width : 50px; height : 60px; margin-top : 5px; margin-left : 163px; background-color : black; position : absolute; background-color : white; color : black">
					<img src = "./images/star_image.jpg" style = "margin-left : 10px; margin-top : 12px; position : absolute">
					<p style = "margin-left : 20px; position : absolute; font-size : 10px; margin-top : 39px">4</p>
					<input type = "checkbox" name = "star_rating[]" value  =  "4_star" style = "margin-left : 0px; margin-top : 55px; position : absolute">
				</div>
				<div style = "width : 50px; height : 60px; margin-top : 5px; margin-left : 216px; background-color : black; position : absolute; background-color : white; color : black">
					<img src = "./images/star_image.jpg" style = "margin-left : 10px; margin-top : 12px; position : absolute">
					<p style = "margin-left : 20px; position : absolute; font-size : 10px; margin-top : 39px">5</p>
					<input type = "checkbox" name = "star_rating" value =  "5_star" style = "margin-left : 0px; margin-top : 55px; position : absolute">
				</div>
			</div>
			<div id = "div_filter_hotel_name">
				<h1 style = "font-size : 13px; margin-left : 5px; margin-top : 5px; position : absolute; color : black; font-weight : 600">Enter Hotel Name</h1>
				<input type = "text" name = "search_name" id = "search_name" style = "height : 35px; width : 200px; background-color : #f2f2f2; border : none; margin-top : 20px; position : absolute; margin-left : 5px" placeholder = "Eg. Shakira Hotel">
			</div>
			<div id = "div_filter_hotel_location">
				<h1 style = "font-size : 13px; margin-left : 5px; margin-top : 5px; position : absolute; color : black; font-weight : 600">Hotel Location</h1>
				<table name = "hotel_location" style = "width : 260 ;margin-left : 5px; margin-top : 25px; position : absolute; background-color : #ffffcc" cellspacing = "5px">
				<tr>
					<td style = "width : 215px; font-size : 12px; color : black">
						<p style = "font-size : 13px; color : black">Hazratganj</p>
					</td>
					<td style = "width : 40px">
						<input type = "radio" name = "location_hotel" id = "location_hotel" value = "Hazratganj" style = "width : 20px; height : 20px; margin-left : 4px">
					</td>
				</tr>
				<tr>
					<td style = "width : 215px; font-size : 12px; color : black">
						<p style = "font-size : 13px; color : black">Charbagh</p>
					</td>
					<td style = "width : 40px">
						<input type = "radio" name = "location_hotel" id = "location_hotel" value = "Charbagh" style = "width : 20px; height : 20px; margin-left : 4px">
					</td>
				</tr>
				<tr>
					<td style = "width : 215px; font-size : 12px; color : black">
						<p style = "font-size : 13px; color : black">Gomti Nagar</p>
					</td>
					<td style = "width : 40px">
						<input type = "radio" name = "location_hotel" id = "location_hotel" value = "GomtiNagar" style = "width : 20px; height : 20px; margin-left : 4px">
					</td>
				</tr>
				<tr>
					<td style = "width : 215px; font-size : 12px; color : black">
						<p style = "font-size : 13px; color : black">Raebareli Road</p>
					</td>
					<td style = "width : 40px">
						<input type = "radio" name = "location_hotel" id = "location_hotel" value = "RaeBareliRoad" style = "width : 20px; height : 20px; margin-left : 4px">
					</td>
				</tr>
				<tr>
					<td style = "width : 215px; font-size : 12px; color : black">
						<p style = "font-size : 13px; color : black">Ashok Marg</p>
					</td>
					<td style = "width : 40px">
						<input type = "radio" name = "location_hotel" id = "location_hotel" value = "AshokMarg" style = "width : 20px; height : 20px; margin-left : 4px">
					</td>
				</tr>
				<tr>
					<td style = "width : 215px; font-size : 12px; color : black">
						<p style = "font-size : 13px; color : black">MMM Marg</p>
					</td>
					<td style = "width : 40px">
						<input type = "radio" name = "location_hotel" id = "location_hotel" value = "MMM_Marg" style = "width : 20px; height : 20px; margin-left : 4px">
					</td>
				</tr>
				</table>
			</div>
			<div id = "div_submit_filter">
				<input type = "submit" name = "find_filtered_result" id = "find_filtered_result" value = "Find Hotels" style = "margin-left : 100px; height : 35px; width : 150px; background-color : #ff0000; color : white">
			</div>
		</form>
	</div>
	<div id = "div_line">
	</div>
	<div id = "div_get_result">
		<?php
			error_reporting(E_ERROR);
			session_start();
			define('DB_HOST', 'localhost:3306'); 
			define('DB_NAME', 'travel_transport'); 
			define('DB_USER','root'); 
			define('DB_PASSWORD',''); 
			$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
			$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
			function getHotelDetails()
			{
				$location = $_POST['location'];
				$checkin = $_POST['checkin'];
				$checkout = $_POST['checkout'];
				$date_1 = new DateTime($checkin);
				$checkin = $date_1->format('Y-m-d');
				$date_2 = new DateTime($checkout);
				$checkout = $date_2->format('Y-m-d');
				$nights = $_POST['Nights'];
				$adult_1 = $_POST['No_of_adults'];
				$infant_1 = $_POST['No_of_infants'];
				$adult_2 = $_POST['No_of_adults_1'];
				$infant_2 = $_POST['No_of_infants_1'];
				$adult_3 = $_POST['No_of_adults_2'];
				$infant_3 = $_POST['No_of_infants_2'];
				$adult_4 = $_POST['No_of_adults_3'];
				$infants_4 = $_POST['No_of_infants_3'];
				$adult_5 = $_POST['No_of_adults_4'];
				$infant_5 = $_POST['No_of_infants_4'];
				$total_adult = $adult_1 + $adult_2 + $adult_3 + $adult_4 + $adult_5;
				$total_infant = $infant_1 + $infant_2 + $infant_3 + $infant_4 + $infant_5;
				$rooms_req = 1;
				$rooms = 1;
				$diff = $date_2->diff($date_1)->format("%a");
				$nights = $diff;
				if($adult_5 > 1 || $infant_5 > 1)
				{
					$rooms_req = 5*$total_adult + 5*$total_infant;
					$rooms = 5;
				}
				else if($adult_4 > 1 || $infant_4 > 1)
				{
					$rooms_req = 4*$total_adult + 4*$total_infant;
					$rooms = 4;
				}
				else if($adult_3 > 1 || $infant_3 > 1)
				{
					$rooms_req = 3*$total_adult + 3*$total_infant;
					$rooms = 3;
				}
				else if($adult_2 > 1 || $infant_2 > 1)
				{
					$rooms_req = 2*$total_adult + 2*$total_infant;
					$rooms = 2;
				}
				else
				{
					$rooms_req = $total_adult + $total_infant;
					$rooms = 1;
				}
				$_SESSION['ROOMS_HOTELS'] = $rooms;
				$_SESSION['PERSONS_HOTELS'] = $total_adult + $total_infant;
				$_SESSION['HOTEL_LOCATION'] = $location;
				$_SESSION['HOTEL_CHECKIN_DATE'] = $checkin;
				$_SESSION['HOTEL_CHECKOUT_DATE'] = $checkout;
				$_SESSION['HOTEL_NIGHTS'] = $nights;
				$_SESSION['HOTEL_ROOMS_REQUIRED'] = $rooms_req;
				$search = "SELECT *FROM hotels WHERE main_location = '$location' AND check_in BETWEEN '$checkin' AND '$checkout' AND check_out BETWEEN '$checkin' AND '$checkout' AND no_of_rooms >= '$rooms_req'";
				$res_search = mysql_query($search) or die(mysql_error());
				if(mysql_num_rows($res_search) > 0)
				{
					while($rows = mysql_fetch_array($res_search))
					{
						echo '<div class = "div_table_res">';
						echo '<div class = "div_img_hotel">'.'</div>';
						echo '<p style = "font-size : 14px; font-weight : 600; margin-left : 135px; color : black">'.$rows['hotel_name'].'</p>';
						echo '<p style = "font-size : 12px; margin-left : 135px; color : black; margin-top : -10px; position : absolute">'.$rows['address'].'</p>';
						echo '<p style = "font-size : 15px; margin-left : 700px; color : #e60000; margin-top : -30px; position : absolute; font-weight : 600">'.'Price'.'</p>';
						echo '<p style = "font-size : 15px; margin-left : 700px; color : #e60000; margin-top : -10px; position : absolute; font-weight : 600">'.'<i class="fa fa-inr">'.$rows['price'].'</i>'.'</p>';
						echo '<p style = "font-size : 13px; margin-left : 135px; color : #00e600; margin-top : 5px; position : absolute; font-weight : 600">'.'Free Cancellation!'.'</p>';
						echo '<p style = "font-size : 13px; margin-left : 135px; color : #00e600; margin-top : 22px; position : absolute; font-weight : 600">'.'Dont have cash! Pay at hotel.'.'</p>';
						echo '<p style = "font-size : 13px; margin-left : 135px; color : #00e600; margin-top : 38px; position : absolute; font-weight : 600">'.'<a href = "">'.'View what others say.'.'</a>'.'</p>';
						echo '<a href = "http://localhost/Ghumo.com/pages/book_room.php?hotel_id='.$rows['hotel_id'].'&hotel_name='.$rows['hotel_name'].'&address='.$rows['address'].'&price='.$rows['price'].'&nights='.$_SESSION['HOTEL_NIGHTS'].'&checkin='.$_SESSION['HOTEL_CHECKIN_DATE'].'&checkout='.$_SESSION['HOTEL_CHECKOUT_DATE'].'&persons='.$_SESSION['PERSONS_HOTELS'].'&rooms='.$_SESSION['ROOMS_HOTELS'].'">'.'<input type = "button" name = "book_hotel" id = "book_hotel" value = "Book Now" style = "margin-left : 680px; height : 40px; width : 100px; background-color : #b30000; color : white; margin-top : 18px; position : absolute">'.'</a>';
						echo '</div>';
					}
				}
				else
					echo 'Sorry! no restult matched your search';
			}
			
			function getPriceFilteredResult()
			{
				error_reporting(E_ERROR);
				session_start();
				define('DB_HOST', 'localhost:3306'); 
				define('DB_NAME', 'travel_transport'); 
				define('DB_USER','root'); 
				define('DB_PASSWORD',''); 
				$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
				$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
				$min_price = $_POST['min_budget'];
				$max_price = $_POST['max_budget'];
				$_SESSION['MIN_BUDGET'] = $min_price;
				$_SESSION['MAX_BUDGET'] = $max_price;
				$search = "SELECT *FROM hotels WHERE main_location = '".$_SESSION['HOTEL_LOCATION']."' AND check_in BETWEEN '".$_SESSION['HOTEL_CHECKIN_DATE']."' AND '".$_SESSION['HOTEL_CHECKOUT_DATE']."' AND check_out BETWEEN '".$_SESSION['HOTEL_CHECKIN_DATE']."' AND '".$_SESSION['HOTEL_CHECKOUT_DATE']."' AND no_of_rooms >= '".$_SESSION['HOTEL_ROOMS_REQUIRED']."' AND price between '$min_price' AND '$max_price'";
				$res_search = mysql_query($search) or die(mysql_error());
				if(mysql_num_rows($res_search) > 0)
				{
					while($rows = mysql_fetch_array($res_search))
					{
						echo '<div class = "div_table_res">';
						echo '<div class = "div_img_hotel">'.'</div>';
						echo '<p style = "font-size : 14px; font-weight : 600; margin-left : 135px; color : black">'.$rows['hotel_name'].'</p>';
						echo '<p style = "font-size : 12px; margin-left : 135px; color : black; margin-top : -10px; position : absolute">'.$rows['address'].'</p>';
						echo '<p style = "font-size : 15px; margin-left : 700px; color : #e60000; margin-top : -30px; position : absolute; font-weight : 600">'.'Price'.'</p>';
						echo '<p style = "font-size : 15px; margin-left : 700px; color : #e60000; margin-top : -10px; position : absolute; font-weight : 600">'.'<i class="fa fa-inr">'.$rows['price'].'</i>'.'</p>';
						echo '<p style = "font-size : 13px; margin-left : 135px; color : #00e600; margin-top : 5px; position : absolute; font-weight : 600">'.'Free Cancellation!'.'</p>';
						echo '<p style = "font-size : 13px; margin-left : 135px; color : #00e600; margin-top : 22px; position : absolute; font-weight : 600">'.'Dont have cash! Pay at hotel.'.'</p>';
						echo '<p style = "font-size : 13px; margin-left : 135px; color : #00e600; margin-top : 38px; position : absolute; font-weight : 600">'.'<a href = "">'.'View what others say.'.'</a>'.'</p>';
						echo '<a href = "http://localhost/Ghumo.com/pages/book_room.php?hotel_id='.$rows['hotel_id'].'&hotel_name='.$rows['hotel_name'].'&address='.$rows['address'].'&price='.$rows['price'].'&nights='.$_SESSION['HOTEL_NIGHTS'].'&checkin='.$_SESSION['HOTEL_CHECKIN_DATE'].'&checkout='.$_SESSION['HOTEL_CHECKOUT_DATE'].'&persons='.$_SESSION['PERSONS_HOTELS'].'&rooms='.$_SESSION['ROOMS_HOTELS'].'">'.'<input type = "button" name = "book_hotel" id = "book_hotel" value = "Book Now" style = "margin-left : 680px; height : 40px; width : 100px; background-color : #b30000; color : white; margin-top : 18px; position : absolute">'.'</a>';
						echo '</div>';
					}
				}
				else
					echo '<p style = "font-size : 16px; font-weight : 600; color : black; text-align : center; margin-top : 150px">'.'Sorry! no restult matched your search'.'</p>';
			}
			
			function getAllFilterResult()
			{
				error_reporting(E_ERROR);
				session_start();
				define('DB_HOST', 'localhost:3306'); 
				define('DB_NAME', 'travel_transport'); 
				define('DB_USER','root'); 
				define('DB_PASSWORD',''); 
				$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
				$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
				$min_price = $_POST['min_budget'];
				$max_price = $_POST['max_budget'];
				$hotelName = $_POST['search_name'];
				$rating = array();
				$location_name = $_POST['location_hotel'];
				if(!empty($_POST['star_rating']))
				{
					foreach($_POST['star_rating'] as $star)
					{
						$rating[] = $star;
					}
				}
				$length_star = sizeof($rating);
				$search = "SELECT *FROM hotels WHERE main_location = '".$_SESSION['HOTEL_LOCATION']."' AND check_in BETWEEN '".$_SESSION['HOTEL_CHECKIN_DATE']."' AND '".$_SESSION['HOTEL_CHECKOUT_DATE']."' AND check_out BETWEEN '".$_SESSION['HOTEL_CHECKIN_DATE']."' AND '".$_SESSION['HOTEL_CHECKOUT_DATE']."' AND no_of_rooms >= '".$_SESSION['HOTEL_ROOMS_REQUIRED']."' AND price between '$min_price' AND '$max_price' AND hotel_name = '$hotelName' AND address = '$location_name' AND star_rating in ({implode(',', $rating)})";
				$res_search = mysql_query($search) or die(mysql_error());
				if(mysql_num_rows($res_search) > 0)
				{
					while($rows = mysql_fetch_array($res_search))
					{
						echo '<div class = "div_table_res">';
						echo '<div class = "div_img_hotel">'.'</div>';
						echo '<p style = "font-size : 14px; font-weight : 600; margin-left : 135px; color : black">'.$rows['hotel_name'].'</p>';
						echo '<p style = "font-size : 12px; margin-left : 135px; color : black; margin-top : -10px; position : absolute">'.$rows['address'].'</p>';
						echo '<p style = "font-size : 15px; margin-left : 700px; color : #e60000; margin-top : -30px; position : absolute; font-weight : 600">'.'Price'.'</p>';
						echo '<p style = "font-size : 15px; margin-left : 700px; color : #e60000; margin-top : -10px; position : absolute; font-weight : 600">'.'<i class="fa fa-inr">'.$rows['price'].'</i>'.'</p>';
						echo '<p style = "font-size : 13px; margin-left : 135px; color : #00e600; margin-top : 5px; position : absolute; font-weight : 600">'.'Free Cancellation!'.'</p>';
						echo '<p style = "font-size : 13px; margin-left : 135px; color : #00e600; margin-top : 22px; position : absolute; font-weight : 600">'.'Dont have cash! Pay at hotel.'.'</p>';
						echo '<p style = "font-size : 13px; margin-left : 135px; color : #00e600; margin-top : 38px; position : absolute; font-weight : 600">'.'<a href = "">'.'View what others say.'.'</a>'.'</p>';
						echo '<a href = "http://localhost/Ghumo.com/pages/book_room.php?hotel_id='.$rows['hotel_id'].'&hotel_name='.$rows['hotel_name'].'&address='.$rows['address'].'&price='.$rows['price'].'&nights='.$_SESSION['HOTEL_NIGHTS'].'&checkin='.$_SESSION['HOTEL_CHECKIN_DATE'].'&checkout='.$_SESSION['HOTEL_CHECKOUT_DATE'].'&persons='.$_SESSION['PERSONS_HOTELS'].'&rooms='.$_SESSION['ROOMS_HOTELS'].'">'.'<input type = "button" name = "book_hotel" id = "book_hotel" value = "Book Now" style = "margin-left : 680px; height : 40px; width : 100px; background-color : #b30000; color : white; margin-top : 18px; position : absolute">'.'</a>';
						echo '</div>';
					}
				}
				else
					echo '<p style = "font-size : 16px; font-weight : 600; color : black; text-align : center; margin-top : 150px">'.'Sorry! no restult matched your search'.'</p>';
			}
			
			if(isset($_POST['search_hotels']))
			{
				getHotelDetails();
				//search_hotel_details();
			}
			
			if(isset($_POST['filter_price']))
			{
				getPriceFilteredResult();
			}
			
			if(isset($_POST['find_filtered_result']))
			{
				getAllFilterResult();
			}
		?>
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