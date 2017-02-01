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
$(document).ready(function(){
		$('#dec_adult').click(function(){
        var val = parseInt($('#No_of_guests').val(), 10);
        if (val != 1) {
          $('#No_of_guests').val(val - 1)
        }
    })
            
   $('#inc_adult').click(function(){
        var val = parseInt($('#No_of_guests').val(), 10);
        if (val != 10) {
          $('#No_of_guests').val(val + 1)
        }
    })
});
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
    height : 700px;
    padding:10px;
    margin-left : 75px;	 
    margin-top : 2.2px;
    box-shadow: 1px 1px 2px 2px #888888;
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

#inc_adult
{
	width : 25px;
	height : 25px;
	background-image : url(./images/+_sign.png);
	color : black;
	margin-left : 5px;
	margin-top : 5px;
	position : absolute;
	cursor : pointer;
}

.passenger_value
{
	width : 150px;
	height : 35px;
	background-color : white;
	margin-left : 30px;
	margin-top : 5px;
}

#dec_adult
{
	width : 30px;
	height : 28px;
	background-image : url(./images/-_sign.png);
	color : black;
	margin-left : 120px;
	margin-top : 2px;
	position : absolute;
	cursor : pointer;
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

		<ul class = "me_nu">
			<li class = "active"><a href="home.php">Flights</a></li>
			<li><a href="hotels.php">Hotels</a></li>
			<li><a href="holiday.php">Holidays</a></li>
			<li><a href="bus.php">Bus</a></li>
			<li><a href="train.php">Trains</a></li>
			<li><a href="cabs.php">Cabs</a></li>
			<li><a href="#7">Reviews</a></li>
		</ul>  
<table id="t1" style="margin-top: 80px; height:500px; width:700px; margin-left:185px">
<form name="book" action="payment_page.php" target="_self" >
<tr>
<th style="margin-left: 10px; font: Arial; text-align:left; font-size:25px; color:white; text-decoration:underline">Personal Information:</th>
</tr>
<tr>
<td style="margin-left: 10px; font: Arial; text-align:left; font-size:20px; color:white">Name :</td>
<td style="margin-left: 10px; font: Arial; text-align:left; font-size:20px; color:white">Email-id :</td>
</tr>
<tr>
<td><input type="text" name="nam" style = "height : 35px; width : 260px; margin-left : 20px; border-radius : 10px; background-color : #f2f2f2" placeholder="Name"></td>
<td><input type="text" name="Email" style = "height : 35px; width : 260px; margin-left : 20px; border-radius : 10px; background-color : #f2f2f2" placeholder="Email-Id"></td>
<tr>
<td style="margin-left: 10px; font: Arial; text-align:left; font-size:20px; color:white">Mobile No :</td>
</tr>
<tr>
<td><input type="text" name="mobno" style = "height : 35px; width : 260px; margin-left : 20px; border-radius : 10px; background-color : #f2f2f2" placeholder="Mobile Number"></td>
</tr>
<tr>
<th style="margin-left: 10px; margin-top: 5px; font: Arial; text-align:left; font-size:25px; color:white; text-decoration:underline">Package Details:</th>
</tr>
<tr>
<td style="margin-left: 65px; font: Arial; text-align:center; font-size:20px; color:white">Package Name:</td>
<td><input type="text" name="package" value = "<?php echo $_GET['package_name']?>"style = "height : 35px; width : 260px; margin-left : 20px; border-radius : 10px; background-color : #f2f2f2"  readonly></td>
</tr>
<tr>
<td style="margin-left: 65px; font: Arial; text-align:center; font-size:20px; color:white">Price:</td>
<td><input type="text" name="package" value = "<?php echo $_GET['package_price']?>"style = "height : 35px; width : 260px; margin-left : 20px; border-radius : 10px; background-color : #f2f2f2"  readonly></td>
</tr>
<tr>
<td></td>
<td style="margin-left: 65px; font: Arial; text-align:center; font-size:13px; color:white"><input type="checkbox" style="height:20px; width:20px">Single occupancy
<input type="checkbox" style="height:20px; width:20px; margin-left:10px">Twin Sharing</td>
</tr>
<tr>
<td style="margin-left: 65px; font: Arial; text-align:center; font-size:20px; color:white">Journey Date :</td>
<td><div id = "datetimepicker" class="input-append date">
							<input type = "text" name = "pickup_date_time" style = "height : 35px; width : 260px; margin-left : 20px; border-radius : 10px; background-color : #f2f2f2" placeholder = "Date and Time">
							<span class="add-on" style = "margin-top : 2px; height : 25px; width : 24px; background-image : url(./images/calender_icon.jpg); pointer : cursor">
							</span>
						</div></td>
</tr>
<tr>
<td style="margin-left: 65px; font: Arial; text-align:center; font-size:20px; color:white">Number of Guests</td>
<td style="align:center"><div class = "passenger_value">
							<div id = "inc_adult"></div>
							<input type = "text" id = "No_of_guests" name = "No_of_guests" value = "1" style = "margin-left : 50px; height : 25px; width : 30px; border : none; position : absolute; text-align : center">
							<div id = "dec_adult"></div>
						</div></td>
</tr>
<br><br>
<tr>
<td><input type = "submit" name = "book" value = "Confirm Booking" style = "background-color : #663300; color : white; width : 150px; height : 50px; border : thick; border-color : blue; border-radius : 12px; margin-left : 285px; text-align: center"></td>
</form>
</table>
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
