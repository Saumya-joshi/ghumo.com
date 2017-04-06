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
    width : 980px;
    height : 320px;
    padding:10px;
    margin-left : 165px;	 
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
    background-color:gray;
	margin-top : 2.2px;
    height : 100px;
    color:white;
    clear:both;
    text-align:center;
   	padding:5px;	 	 
}

#menu_div
{
	height : 45px;
	width : auto;
	margin-top : 2px;
	background-color : blue;
	color : white;
}

#little_facility
{
	height : 35px;
	width : auto;
	margin-top : 2px;
	background-color : #d9d9d9;
	border-bottom : #cccccc;
	color : white;
}

#MyWallet
{
	margin-left : 140px;
	width : 680px;
	height : 250px;
	border-radius : 12px;
	margin-top : 18px;
	background-image : url(./images/my_wallet_background.jpg);
}

#My_Profile_Photo
{
	margin-left : 35px;
	margin-top : 45px;
	width : 100px;
	height : 100px;
	border-radius : 100px;
	position : absolute;
	background-image : url(./images/user_default_icon.png);
}

#My_Wallet_Info
{
	margin-left : 150px;
	margin-top : 55px;
	width : 150px;
	height : 150px;
	border-radius : 12px;
	position : absolute;
	color : white;
}

#Add_Money
{
	margin-left : 320px;
	margin-top : 25px;
	width : 320px;
	height : 200px;
	border-radius : 12px;
	position : absolute;
	border : 1px solid white;
	color : white;
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
<!--<div id = "little_facility">
</div>-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
		<h1 style = "font-size : 12px; color : white; margin-left: 850px; position : absolute"><a href = "forgot_password.php" style = "color : white; text-decoration : none">Change Password</a>&nbsp|&nbsp<a data-toggle = "modal" href = "#ChangeEmailId" style = "color : white; text-decoration : none">Change Email-Id</a></h1>
    </div>
    <ul class="nav navbar-nav" style = "height : 35px; margin-left : 190px; border-radius : 0px">
      <li><a href="my_account.php">My Account</a></li>
      <li class="active"><a href="my_wallet.php">My Wallet</a></li>
      <li><a href="#">History</a></li>
      <li><a href="#">My Bookings</a></li>
    </ul>
  </div>
</nav>
<div id="section">
	<div id = "MyWallet">
		<div id = "My_Profile_Photo">
			<?php
			session_start();
			error_reporting(0);
			if(isset($_SESSION['facebook_data']))
			{
				echo '<img src="'.$_SESSION['facebook_data']['picture']['data']['url'].'" alt="" style = "width : 150px; height : 150px; border-radius : 100px"/>';
			}
			else if(isset($_SESSION['google_data']))
			{
				echo '<img src="'.$_SESSION['google_data']['picture'].'" alt="" style = "width : 150px; height : 150px; border-radius : 100px"/>';
			}
			else if(isset($_SESSION['logged_reg_user']))
			{
				$query = "select image_path from profile_information where profile_id = (SELECT profile_id from reg_user_profile_link where user_id = '".$_SESSION['SESS_MEMBER_ID']."')";
				$res = mysql_query($query) or die(mysql_error());
				while($rows = mysql_fetch_array($res, MYSQL_BOTH))
				{
					echo '<img src="'.$rows['image_path'].'" alt="" style = "width : 100px; height : 100px; border-radius : 100px"/>';
				}
			}
		?>
		</div>
		<div id = "My_Wallet_Info">
			<?php
				echo '<strong style = "margin-left : 5px; font-size : 12px">Wallet Balance</strong>'.'<br>';
				echo '<i class="fa fa-inr" style = "margin-left : 5px"></i>&nbsp'.'10000';
			?>
		</div>
		<div id = "Add_Money">
			<p style = "margin-left : 15px; margin-top : 15px; font-size : 13px"><strong>Add Money</strong></p>
			<form id = "form_add_money" name = "form_add_money" method = "post" action = "validate_promo_code.php">
				<input type = "text" name = "Amount" id = "amount" style = "margin-left : 15px; width : 280px; height : 30px; background-color : #e6e6e6; border-radius : 5px" placeholder = "Add Amount(Min Rs. 1000)"><br><br>
				<input type = "text" name = "Promo_Code" id = "Promo_Code" style = "margin-left : 15px; width : 180px; height : 30px; background-color : #e6e6e6; border-radius : 5px" placeholder = "Have Promo Code?">
				<input type = "submit" name = "Apply_Promo_Code" id = "Apply_Promo_Code" value = "Apply" style = "margin-left : 10px; width : 70px; height : 30px; background-color : #00004d; border-radius : 5px">
				<?php
					echo '<p style = "font-size : 10px; margin-left : 10px; margin-top : 5px">Success!casback of 1000 will be credited to your account within 24 hrs.</p>';
				?>
				<input type = "submit" name = "Add_Amount" id = "Add_Amount" value = "Add" style = "margin-left : 15px; width : 110px; height : 25px; margin-top : -2px; background-color : #00004d; border-radius : 5px">
				<p style = "font-size : 11px; margin-left : 140px; margin-top : -20px"><a href = "" style = "text-decoration : none; cursor : pointer; color : white">View wallet transactions>></a></p>
			</form>
		</div>
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
<!--<script>
	$(document).ready(function(){
    $("#show_passport_details").click(function(){
        $("#user_passport_details").slideToggle("slow");
		//$("#user_visa_details").hide();
    });
	
	$("#user_passport_details").click(function()
	{
		$("#user_passport_details").hide("slow");
	});
});
</script>

<script>
	$(document).ready(function(){
    $("#show_visa_details").click(function(){
        $("#user_visa_details").slideToggle("slow");
		//$("#user_passport_details").hide();
    });
	
	$("#user_visa_details").click(function()
	{
		$("#user_visa_details").hide("slow");
	});
});
</script>

<script>
	$(document).ready(function(){
    $('.navbar li').click(function(e) {
    $('.navbar li.active').removeClass('active');
    var $this = $(this);
    if (!$this.hasClass('active')) {
        $this.addClass('active');
    }
    e.preventDefault();
});
});
</script>-->
</body>
</html>