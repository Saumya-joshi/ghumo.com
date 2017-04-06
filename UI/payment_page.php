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
	border-radius : 5px;
	background-color : #004c99;
	background-repeat: y;
    width : 980px;
    height : 620px;
    padding:10px;
    margin-left : 185px;	 
	margin-right : 165px;
    margin-top : 2.2px;
	box-shadow: 1px 1px 2px 2px #888888;
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

#select_payment_method
{
	height : 35px;
	width : auto;
	margin-top : 2px;
	background-color : #000066;
	color : white;
}

#label_total_amount
{
	width : 250px;
	margin-left : 15px;
	height : 25px;
	font-size : 12px;
	color : white;
	margin-top : 20px
}

#label_transaction_id
{
	width : 250px;
	margin-left : 500px;
	height : 25px;
	font-size : 12px;
	color : white;
	margin-top : 20px;
	position : absolute;
}

.me_nu
{
    top : 205px;
	margin-left : 20px;
	position : absolute;
	padding: 5px;
	font-size : 15px;
}

.me_nu li 
{
	width : 150px;
	height : 50px;
	list-style-type : none;
}

.me_nu li a 
{
	opacity : .8;
    color: white;
    text-decoration: none;
	cursor : pointer;
}

.me_nu li a:hover 
{
	border-right : solid 2px #6C0000;
}

.me_nu li.active a
{
	border-right : solid 2px #6C0000;
}

li span
{
	display : block;
	margin-left : 0.85em;
	font-size : 13px;
}

#credit-card
{
	top : 175px;
	margin-left : 180px;
	width : 720px;
	height : 520px;
	background-color : white;
	border-radius : 5px;
}

#debit-card
{
	margin-left : 180px;
	width : 720px;
	height : 520px;
	background-color : white;
	border-radius : 5px;
	display : none;
	position : absolute;
	margin-top : -520px;
}

#net-banking
{
	margin-left : 180px;
	width : 720px;
	height : 520px;
	background-color : white;
	border-radius : 5px;
	display : none;
	position : absolute;
	margin-top : -520px;
}

.card_info_form
{
	margin-left : 120px;
	margin-top : 45px;
	width : 485px;
	height : 350px;
	background-color : white;
}

.card_number
{
	margin-left : 25px;
	margin-top : 25px;
	width : 432px;
	height : 45px;
	background-color : white;
	border : 1px solid black;
	position :absolute;
}

.image_holder
{
	margin-left : 160px;
	width : 268px;
	background-color : white;
	height : 35px;
	margin-top : 4px;
	position : absolute;
}

.send_otp
{
	margin-left : 120px;
	margin-top : 45px;
	width : 485px;
	height : 150px;
	background-color : white;
}

.confirmation_message
{
	margin-left : 120px;
	margin-top : 45px;
	width : 485px;
	height : 150px;
	background-color : white;
}

#form_select_bank
{
	margin-left : 65px;
	height : 400px;
	width : 580px;
	background-color : white;
	margin-top : 25px;
	position : absolute;
}

#major_bank
{
	margin-left : 25px;
	height : 180px;
	width : 525px;
	background-color : white;
	margin-top : 5px;
	position : absolute;
}

#bank_SBI
{
	margin-left : 25px;
	height : 60px;
	width : 145px;
	background-color : white;
	margin-top : 25px;
	position : absolute;
}

#bank_PNB
{
	margin-left : 188px;
	height : 60px;
	width : 145px;
	background-color : white;
	margin-top : 25px;
	position : absolute;
}

#bank_CITI
{
	margin-left : 350px;
	height : 60px;
	width : 145px;
	background-color : white;
	margin-top : 25px;
	position : absolute;
}

#bank_HDFC
{
	margin-left : 25px;
	height : 60px;
	width : 145px;
	background-color : white;
	margin-top : 95px;
	position : absolute;
}

#bank_AXIS
{
	margin-left : 188px;
	height : 60px;
	width : 145px;
	background-color : white;
	margin-top : 95px;
	position : absolute;
}

#bank_ICICI
{
	margin-left : 350px;
	height : 60px;
	width : 145px;
	background-color : white;
	margin-top : 95px;
	position : absolute;
}

#login_bank
{
	margin-left : 148px;
	height : 200px;
	width : 425px;
	background-color : #e5ffff;
	margin-top : 75px;
	position : absolute;
	border : 1px solid #000066;
}

.lbl_bank_name
{
	width : 425px;
	height : 35px;
	color : white;
	position : absolute;
	background-color : #000066;
	font-size : 14px;
	text-align : center;
}

td
{
	height : 40px;
}

#login_bank_transaction
{
	margin-left : 148px;
	height : 250px;
	width : 425px;
	background-color : #e5ffff;
	margin-top : 75px;
	position : absolute;
	border : 1px solid #000066;
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

<div id = "select_payment_method">
	<h1 style = "margin-left : 620px; font-size : 16px; margin-top : 5px; position : absolute">Select Payment Method</h1>
</div>
<div id="section">
	<label id = "label_total_amount">
		<?php
			echo 'Total Amount : '.'<i class="fa fa-inr"></i>&nbsp'.'10000';
		?>
	</label>
	<label id = "label_transaction_id">
		<?php
			echo 'Transaction Id : '.'#10000';
		?>
	</label>
	<ul class = "me_nu" id = "menu_select">
		<li class = "active"><a id = "credit_card" style = "padding: 10px 43px 0px 10px;">Credit Card</a></li>
		<li><a id = "debit_card" style = "padding: 10px 46px 0px 10px;">Debit Card</a></li>
		<li><a id = "net_banking" style = "padding: 10px 35px 0px 10px;">Net Banking</a></li>
	</ul>
	<div id = "credit-card">
		<ul class="nav nav-pills" id = "credit_card_tabs">
			<li class="active"><a data-toggle="pill" href="#credit_card_information">Card Information</a></li>
			<li style = "margin-left : 155px"><a data-toggle="pill" href="#credit_card_validate_otp">Validate OTP</a></li>
			<li style = "margin-left : 141px"><a data-toggle="pill" href="#credit_card_payment_success">Confirmation Message</a></li>
		</ul>

		<div class="tab-content">
			<div id="credit_card_information" class="tab-pane fade in active">
				<div class = "card_info_form">
					<form id = "form_credit_card" name = "form_credit_card" method = "post" action = "">
						<div class = "card_number">
							<div class = "image_holder">
								<img src = "./images/visa_logo.jpg" style = "height : 35px; width : 60px; margin-left : 0px" id = "visa_image">
								<img src = "./images/master_card_logo.jpg" style = "height : 35px; width : 60px; margin-left : 5px" id = "master_card_image">
								<img src = "./images/american_express_logo.jpg" style = "height : 35px; width : 60px; margin-left : 5px" id = "american_express_image">
								<img src = "./images/discover_logo.jpg" style = "height : 35px; width : 60px; margin-left : 5px" id = "discover_image">
							</div>
							<input type = "text" name = "credit_card_number" style = "margin-left : 4px; width : 150px; height : 35px; margin-top : 4px; position : absolute; border : none" placeholder = "Card Number" required>
						</div>
						<select name = "credit_card_month" style = "width : 100px; margin-left : 25px; position :absolute; margin-top : 80px; height : 40px; border-radius : 5px; border : 1px solid black" required>
							<option value = "MM">MM</option>
							<option value = "1">1</option>
							<option value = "2">2</option>
							<option value = "3">3</option>
							<option value = "4">4</option>
							<option value = "5">5</option>
							<option value = "6">6</option>
							<option value = "7">7</option>
							<option value = "8">8</option>
							<option value = "9">9</option>
							<option value = "10">10</option>
							<option value = "11">11</option>
							<option value = "12">12</option>
						</select>
						<select name = "credit_card_year" style = "width : 100px; margin-left : 135px; margin-top : 80px; height : 40px; border-radius : 5px; border : 1px solid black" required>
							<option value = "YYYY">YYYY</option>
							<option value = "1">1</option>
							<option value = "2">2</option>
							<option value = "3">3</option>
							<option value = "4">4</option>
							<option value = "5">5</option>
							<option value = "6">6</option>
							<option value = "7">7</option>
							<option value = "8">8</option>
							<option value = "9">9</option>
							<option value = "10">10</option>
							<option value = "11">11</option>
							<option value = "12">12</option>
						</select>
						<input type = "text" name = "credit_card_cvv" style = "margin-left : 8px; width : 100px; height : 40px; margin-top : 80px; position : absolute; border : 1px solid black; border-radius : 5px" placeholder = "CVV" required><br><br>
						<input type = "text" name = "credit_card_holder_name" style = "margin-left : 25px; width : 320px; height : 40px; margin-top : -8px; position : absolute; border : 1px solid black; border-radius : 5px" placeholder = "Card holder name" required><br><br>
						<input type = "checkbox" name = "remember_credit_card" style = "margin-left : 15px; width : 35px; height : 15px; margin-top : -5px; border : 1px solid black; border-radius : 5px">
						<p style = "margin-left : 45px; color : black; font-size : 12px; margin-top : -20px">Save this card for faster payment</p><br><br>
						<input type = "submit" name = "Proceed_Generate_OTP_Credit_Card" id = "Proceed_Generate_OTP_Credit_Card" value = "Proceed" style = "margin-left : 25px; width : 110px; height : 35px; margin-top : 0px; background-color : #00004d; color : white">
					</form>
				</div>
			</div>
			<div id="credit_card_validate_otp" class="tab-pane fade">
				<div class = "send_otp">
					<p style = "margin-left : 15px; font-size : 12px; color : black; margin-top : 5px">Click generate OTP to get a verification code to youe email id. Enter that code to verify OTP.</p>
					<form id = "generate_OTP" name = "generate_OTP" method = "post" action = "send_otp_credit_card.php">
						<input type = "text" name = "get_otp" id = "get_otp" style = "margin-left : 15px; height : 35px; width : 120px; border : 1px solid black" placeholder = "Enter OTP">
						<input type = "submit" name = "Verify_OTP" id = "Verify_OTP" value = "Verify" style = "margin-left : 10px; width : 70px; height : 35px; margin-top : 0px; background-color : #00004d; color : white; position : absolute">
						<input type = "submit" name = "Generate_OTP" id = "Generate_OTP" value = "Generate OTP" style = "margin-left : 10px; width : 110px; height : 35px; margin-top : 0px; background-color : #00004d; color : white; font-size : 12px; position : absolute">
						<input type = "submit" name = "Resend_OTP" id = "Resend_OTP" value = "Resend OTP" style = "margin-left : 85px; width : 110px; height : 35px; margin-top : 0px; background-color : #00004d; color : white; font-size : 12px; position : absolute; display : none">
						<?php
							echo '<p style = "font-size : 12px; color : red; font-weight : 600; margin-left : 15px; margin-top : 15px">'.$_SESSION['ERROR_MESSAGE_FAILED_OTP'];
						?>
					</form>
				</div>
			</div>
			<div id="credit_card_payment_success" class="tab-pane fade">
				<div class = "confirmation_message">
					<p style = "margin-left : 15px; font-size : 20px; color : black; margin-top : 5px">Success! Your payment has been received and you are being redirected to home page.</p>
				</div>
			</div>
		</div>
	</div>
	<div id = "debit-card">
		<ul class="nav nav-pills" id = "debit_card_tabs">
			<li class="active"><a data-toggle="pill" href="#debit_card_information">Card Information</a></li>
			<li style = "margin-left : 155px"><a data-toggle="pill" href="#debit_card_validate_otp">Validate OTP</a></li>
			<li style = "margin-left : 141px"><a data-toggle="pill" href="#debit_card_payment_success">Confirmation Message</a></li>
		</ul>

		<div class="tab-content">
			<div id="debit_card_information" class="tab-pane fade in active">
				<div class = "card_info_form">
					<form id = "form_debit_card" name = "form_debit_card" method = "post" action = "">
						<div class = "card_number">
							<div class = "image_holder">
								<img src = "./images/visa_logo.jpg" style = "height : 35px; width : 60px; margin-left : 0px" id = "visa_image_debit">
								<img src = "./images/master_card_logo.jpg" style = "height : 35px; width : 60px; margin-left : 5px" id = "master_card_image_debit">
								<img src = "./images/american_express_logo.jpg" style = "height : 35px; width : 60px; margin-left : 5px" id = "american_express_image_debit">
								<img src = "./images/discover_logo.jpg" style = "height : 35px; width : 60px; margin-left : 5px" id = "discover_image_debit">
							</div>
							<input type = "text" name = "debit_card_number" style = "margin-left : 4px; width : 150px; height : 35px; margin-top : 4px; position : absolute; border : none" placeholder = "Card Number" autofocus>
						</div>
						<select name = "debit_card_month" style = "width : 100px; margin-left : 25px; position :absolute; margin-top : 80px; height : 40px; border-radius : 5px; border : 1px solid black" required>
							<option value = "MM">MM</option>
							<option value = "1">1</option>
							<option value = "2">2</option>
							<option value = "3">3</option>
							<option value = "4">4</option>
							<option value = "5">5</option>
							<option value = "6">6</option>
							<option value = "7">7</option>
							<option value = "8">8</option>
							<option value = "9">9</option>
							<option value = "10">10</option>
							<option value = "11">11</option>
							<option value = "12">12</option>
						</select>
						<select name = "debit_card_year" style = "width : 100px; margin-left : 135px; margin-top : 80px; height : 40px; border-radius : 5px; border : 1px solid black" required>
							<option value = "YYYY">YYYY</option>
							<option value = "1">1</option>
							<option value = "2">2</option>
							<option value = "3">3</option>
							<option value = "4">4</option>
							<option value = "5">5</option>
							<option value = "6">6</option>
							<option value = "7">7</option>
							<option value = "8">8</option>
							<option value = "9">9</option>
							<option value = "10">10</option>
							<option value = "11">11</option>
							<option value = "12">12</option>
						</select>
						<input type = "text" name = "debit_card_cvv" style = "margin-left : 8px; width : 100px; height : 40px; margin-top : 80px; position : absolute; border : 1px solid black; border-radius : 5px" placeholder = "CVV" required><br><br>
						<input type = "text" name = "debit_card_holder_name" style = "margin-left : 25px; width : 320px; height : 40px; margin-top : -8px; position : absolute; border : 1px solid black; border-radius : 5px" placeholder = "Card holder name" required><br><br>
						<input type = "checkbox" name = "remember_debit_card" style = "margin-left : 15px; width : 35px; height : 15px; margin-top : -5px; border : 1px solid black; border-radius : 5px">
						<p style = "margin-left : 45px; color : black; font-size : 12px; margin-top : -20px">Save this card for faster payment</p><br><br>
						<input type = "submit" name = "Proceed_Generate_OTP_Debit_Card" id = "Proceed_Generate_OTP_Debit_Card" value = "Proceed" style = "margin-left : 25px; width : 110px; height : 35px; margin-top : 0px; background-color : #00004d; color : white">
					</form>
				</div>
			</div>
			<div id="debit_card_validate_otp" class="tab-pane fade">
				<div class = "send_otp">
					<p style = "margin-left : 15px; font-size : 12px; color : black; margin-top : 5px">Click generate OTP to get a verification code to youe email id. Enter that code to verify OTP.</p>
					<form id = "generate_OTP" name = "generate_OTP" method = "post" action = "send_otp_debit_card.php">
						<input type = "text" name = "get_otp_debit" id = "get_otp_debit" style = "margin-left : 15px; height : 35px; width : 120px; border : 1px solid black" placeholder = "Enter OTP">
						<input type = "submit" name = "Verify_OTP_debit" id = "Verify_OTP_debit" value = "Verify" style = "margin-left : 10px; width : 70px; height : 35px; margin-top : 0px; background-color : #00004d; color : white; position : absolute">
						<input type = "submit" name = "Generate_OTP_debit" id = "Generate_OTP_debit" value = "Generate OTP" style = "margin-left : 10px; width : 110px; height : 35px; margin-top : 0px; background-color : #00004d; color : white; font-size : 12px; position : absolute">
						<input type = "submit" name = "Resend_OTP_debit" id = "Resend_OTP_debit" value = "Resend OTP" style = "margin-left : 85px; width : 110px; height : 35px; margin-top : 0px; background-color : #00004d; color : white; font-size : 12px; position : absolute; display : none; position : absolute">
						<?php
							echo '<p style = "font-size : 12px; color : red; font-weight : 600; margin-left : 15px; margin-top : 15px">'.$_SESSION['ERROR_MESSAGE_FAILED_OTP_DEBIT'];
						?>
					</form>
				</div>
			</div>
			<div id="debit_card_payment_success" class="tab-pane fade">
				<div class = "confirmation_message">
					<p style = "margin-left : 15px; font-size : 20px; color : black; margin-top : 5px">Success! Your payment has been received and you are being redirected to home page.</p>
				</div>
			</div>
		</div>
	</div>
	<div id = "net-banking">
		<ul class="nav nav-pills" id = "net_banking_tabs">
			<li class="active"><a data-toggle="pill" href="#select_bank">Select Bank</a></li>
			<li style = "margin-left : 59px"><a data-toggle="pill" href="#secure_login">Secure Login</a></li>
			<li style = "margin-left : 59px"><a data-toggle="pill" href="#make_transactions">Make Transaction</a></li>
			<li style = "margin-left : 59px"><a data-toggle="pill" href="#confirmation_message">Confirmation Message</a></li>
		</ul>

		<div class="tab-content">
			<div id="select_bank" class="tab-pane fade in active">
				<div id = "form_select_bank">
					<h1 style = "margin-left : 25px; font-size : 12px; color : black">SELECT FROM POPULAR BANK</h1>
					<form name = "form_get_bank_name" id = "form_get_bank_name" method = "post" action = "">
						<div id = "major_bank">
							<div id = "bank_SBI">
								<input type = "checkbox" name = "sbi" style = "margin-top : 20px; margin-left : 2px; height : 15px; width : 15px; border-radius : 100px">
								<img src = "./images/SBI_logo.jpg" style = "margin-left : 4px; width : 140; height : 40px; margin-top : 10px; position : absolute">
							</div>
							<div id = "bank_CITI">
								<input type = "checkbox" name = "citi" style = "margin-top : 20px; margin-left : 2px; height : 15px; width : 15px; border-radius : 100px">
								<img src = "./images/CITI_logo.jpg" style = "margin-left : 4px; width : 140; height : 40px; margin-top : 10px; position : absolute">
							</div>
							<div id = "bank_PNB">
								<input type = "checkbox" name = "pnb" style = "margin-top : 20px; margin-left : 2px; height : 15px; width : 15px; border-radius : 100px">
								<img src = "./images/PNB_logo.gif" style = "margin-left : 4px; width : 140; height : 40px; margin-top : 10px; position : absolute">
							</div>
							<div id = "bank_HDFC">
								<input type = "checkbox" name = "hdfc" style = "margin-top : 20px; margin-left : 2px; height : 15px; width : 15px; border-radius : 100px">
								<img src = "./images/HDFC_logo.jpg" style = "margin-left : 4px; width : 140; height : 40px; margin-top : 10px; position : absolute">
							</div>
							<div id = "bank_AXIS">
								<input type = "checkbox" name = "axis" style = "margin-top : 20px; margin-left : 2px; height : 15px; width : 15px; border-radius : 100px">
								<img src = "./images/AXIS_logo.jpg" style = "margin-left : 4px; width : 140; height : 40px; margin-top : 10px; position : absolute">
							</div>
							<div id = "bank_ICICI">
								<input type = "checkbox" name = "icici" style = "margin-top : 20px; margin-left : 2px; height : 15px; width : 15px; border-radius : 100px">
								<img src = "./images/ICICI_logo.jpg" style = "margin-left : 4px; width : 140; height : 40px; margin-top : 10px; position : absolute">
							</div>
						</div>
						<h1 style = "margin-left : 25px; font-size : 12px; color : black; margin-top : 205px; position : absolute">OR SELECT FROM OTHER BANK</h1>
						<select name = "name_of_bank" id = "name_of_bank" style = "width : 260px; height : 40px; margin-left : 25px; margin-top : 225px; background-color :#f2f2f2; border-radius : 4px">
							<option value = "Select">Select</option>
						</select><br><br>
						<input type = "submit" name = "proceed_net_banking" id = "proceed_net_banking" value = "Pay Now" style = "margin-left : 25px; height : 35px; width : 180px; color : white; background-color :#00004d; border-radius : 5px">
					</form>
				</div>
			</div>
			<div id="secure_login" class="tab-pane fade">
				<div id = "login_bank">
					<label class = "lbl_bank_name">
						<?php
							echo 'Login To Selected Bank';
						?>
					</label>
					<form name = "login_to_bank" id = "login_to_bank" method = "post" action = "">
						<table style = "width : 380px; margin-top : 60px; position : absolute; margin-left : 25px">
							<tr>
								<td style = "font-size : 13px; text-align : left; color : black; font-weight : 600; width : 120px">Customer Id : </td>
								<td><input type = "text" name = "customer_id" id = "customer_id" style = "height : 30px; width : 240px; background-color : #f2f2f2; border-radius : 4px" placeholder = "Customer Id"></td>
							</tr>
							<tr>
								<td style = "font-size : 13px; text-align : left; color : black; font-weight : 600; width : 120px">Login Password : </td>
								<td><input type = "password" name = "login_password" id = "login_password" style = "height : 30px; width : 240px; background-color : #f2f2f2; border-radius : 4px" placeholder = "Login Password"></td>
							</tr>
							<tr>
								<td colspan = "2"><input type = "submit" name = "login_bank" id = "login_bank" value = "Login" style = "margin-left : 25px; height : 32px; width : 150px; color : white; background-color :#00004d; border-radius : 5px; position : absolute; top : 10px"><p style = "font-size : 15px; color : blue; margin-left : 245px; margin-top : 10px"><a style = "text-decoration : none; cursor : pointer" href = "">Cancel</a></p>
								</td>
							</tr>
						</table>
					</form>
				</div>
			</div>
			<div id="make_transactions" class="tab-pane fade">
				<div id = "login_bank_transaction">
					<label class = "lbl_bank_name">
						<?php
							echo 'Confirm Payment';
						?>
					</label>
					<form name = "transact_to_bank" id = "transact_to_bank" method = "post" action = "">
						<table style = "width : 380px; margin-top : 60px; position : absolute; margin-left : 25px">
							<tr>
								<td style = "font-size : 13px; text-align : left; color : black; font-weight : 600; width : 120px">Customer Id : </td>
								<td><input type = "text" name = "customer_id_txn" id = "customer_id_txn" style = "height : 30px; width : 240px; background-color : #f2f2f2; border-radius : 4px" placeholder = "Customer Id"></td>
							</tr>
							<tr>
								<td style = "font-size : 13px; text-align : left; color : black; font-weight : 600; width : 120px">Transaction Password : </td>
								<td><input type = "password" name = "txn_password" id = "txn_password" style = "height : 30px; width : 240px; background-color : #f2f2f2; border-radius : 4px" placeholder = "Transaction Password"></td>
							</tr>
							<tr>
								<td style = "font-size : 13px; text-align : left; color : black; font-weight : 600; width : 120px">OTP : </td>
								<td><input type = "password" name = "txn_otp" id = "txn_otp" style = "height : 30px; width : 240px; background-color : #f2f2f2; border-radius : 4px" placeholder = "Enter OTP"></td>
							</tr>
							<tr>
								<td colspan = "2"><input type = "submit" name = "pay_net_banking" id = "pay_net_banking" value = "Make Payment" style = "margin-left : 25px; height : 32px; width : 150px; color : white; background-color :#00004d; border-radius : 5px; position : absolute; margin-top : 15px"><p style = "font-size : 15px; color : blue; margin-left : 245px; margin-top : 25px"><a style = "text-decoration : none; cursor : pointer" href = "">Cancel</a></p>
								</td>
							</tr>
						</table>
					</form>
				</div>
			</div>
			<div id="confirmation_message" class="tab-pane fade">
				<div class = "confirmation_message">
					<p style = "margin-left : 15px; font-size : 20px; color : black; margin-top : 5px">Success! Your payment has been received and you are being redirected to home page.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<script>   
    $(document).ready( function() {
    
        $('#debit_card').click( function() {            
            loadDebitCard();
			unloadNetBanking();
        });
		      
        $('#credit_card').click( function() {
            unloadDebitCard();
			unloadNetBanking();
        });

        function unloadDebitCard() {    // TO Unload the Popupbox
            $('#debit-card').hide(); 
        }  
        
        function loadDebitCard() {    // To Load the Popupbox
            $('#debit-card').show();        
        }        
		
		$('#net_banking').click( function() {            
            loadNetBanking();
			unloadDebitCard();
        });
		      
        function unloadNetBanking() {    // TO Unload the Popupbox
            $('#net-banking').hide();
        }  
        
        function loadNetBanking() {    // To Load the Popupbox
            $('#net-banking').show();        
        }      
    });
</script>

<script>
	function validatecreditcard()
	{
		var visa_regex = /^(?:4[0-9]{12}(?:[0-9]{3})?)$/;  
		var american_express_regex = /^(?:3[47][0-9]{13})$/; 
		var mastercard_regex = /^(?:5[1-5][0-9]{14})$/;  
		var discover_regex = /^(?:6(?:011|5[0-9][0-9])[0-9]{12})$/;  
		var credit_card_all_regex = /^(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14}|6(?:011|5[0-9][0-9])[0-9]{12}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|(?:2131|1800|35\d{3})\d{11})$/;
		var name = /^[a-zA-Z ]{2,30}$/;
		var cvv_regex = /^[0-9]{3,4}$/;
		var credit_card_no = document.form_credit_card.credit_card_number.value;
		var cvv = document.form_credit_card.credit_card_cvv.value;
		var holder_name = document.form_credit_card.credit_card_holder_name.value;
		if(!credit_card_no.match(credit_card_all_regex))
		{
			alert("Enter valid card number");
			document.form_credit_card.credit_card_number.focus();
			return false;
		}
		if(!cvv.match(cvv_regex))
		{
			alert("Enter valid cvv number");
			document.form_credit_card.credit_card_cvv.focus();
			return false;
		}
		if(!holder_name.match(name))
		{
			alert("Enter valid card holder name");
			document.form_credit_card.credit_card_holder_name.focus();
			return false;
		}
		return true;
	}
	
	function validatedebitcard()
	{
		var debit_card_all_regex = /^(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14}|6(?:011|5[0-9][0-9])[0-9]{12}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|(?:2131|1800|35\d{3})\d{11})$/;
		var name = /^[a-zA-Z ]{2,30}$/;
		var cvv_regex = /^[0-9]{3,4}$/;
		var debit_card_no = document.form_debit_card.debit_card_number.value;
		var cvv = document.form_debit_card.debit_card_cvv.value;
		var holder_name = document.form_debit_card.debit_card_holder_name.value;
		if(!debit_card_no.match(debit_card_all_regex))
		{
			alert("Enter valid card number");
			document.form_debit_card.debit_card_number.focus();
			return false;
		}
		if(!cvv.match(cvv_regex))
		{
			alert("Enter valid cvv number");
			document.form_debit_card.debit_card_cvv.focus();
			return false;
		}
		if(!holder_name.match(name))
		{
			alert("Enter valid card holder name");
			document.form_debit_card.debit_card_holder_name.focus();
			return false;
		}
		return true;
	}
</script>

<script>
	$(document).ready(function() {
		$('.nav li').not('.active').addClass('disabled');
		$('.nav li').not('.active').find('a').removeAttr("data-toggle");
    
		$('#Proceed_Generate_OTP_Credit_Card').click(function(e){
        if(validatecreditcard())
		{
			$('.nav li.active').next('li').removeClass('disabled');
        //$('.nav li.active').next('li').find('a').attr("data-toggle","tab");
			$('#credit_card_tabs li:eq(1) a').tab('show');
			$('.nav li').not('.active').addClass('disabled');
			$('.nav li').not('.active').find('a').removeAttr("data-toggle");
			e.preventDefault();
		}});
		
		/*$('#Generate_OTP').click(function(c)){
			if(window.location.hash == '#credit_card_validate_otp')
			{
				$('.nav li.active').next('li').removeClass('disabled');
				$('#credit_card_tabs li:eq(1) a').tab('show');
				$('.nav li').not('.active').addClass('disabled');
				$('.nav li').not('.active').find('a').removeAttr("data-toggle");
				c.preventDefault();
			}
		}*/
		
		/*$('#Verify_OTP').click(function(e)
		{
			$('.nav li.active').next('li').removeClass('disabled');
			$('#credit_card_tabs li:eq(2) a').tab('show');
			$('.nav li').not('.active').addClass('disabled');
			$('.nav li').not('.active').find('a').removeAttr("data-toggle");
			e.preventDefault();
		});*/
});
</script>

<script>
$(document).ready(function(){
	if(window.location.hash == '#credit_card_validate_otp')
	{
		$('#credit_card_tabs li:eq(1) a').tab('show');
		$('#Generate_OTP').hide();
		$('#Resend_OTP').show();
	}
	
	if(window.location.hash == '#credit_card_payment_success')
	{
		$('#credit_card_tabs li:eq(2) a').tab('show');
	}
	
	if(window.location.hash == '#debit_card_validate_otp')
	{
		//$('.me_nu li.active').removeClass('active');
		$('.me_nu li.active').next('li').addClass('active');
		$('#debit_card_tabs li:eq(1) a').tab('show');
		$('#Generate_OTP_debit').hide();
		$('#Resend_OTP_debit').show();
	}
	
	if(window.location.hash == '#debit_card_payment_success')
	{
		$('#debit_card_tabs li:eq(2) a').tab('show');
	}
});
</script>

<script>
	$(document).ready(function() {
		$('.nav li').not('.active').addClass('disabled');
		$('.nav li').not('.active').find('a').removeAttr("data-toggle");
    
		$('#Proceed_Generate_OTP_Debit_Card').click(function(E){
        if(validatedebitcard())
		{
			$('.nav li.active').next('li').removeClass('disabled');
			$('#debit_card_tabs li:eq(1) a').tab('show');
			$('.nav li').not('.active').addClass('disabled');
			$('.nav li').not('.active').find('a').removeAttr("data-toggle");
			E.preventDefault();
		}
		
		/*$('#Verify_OTP_debit').click(function(E)
		{
			$('.nav li.active').next('li').removeClass('disabled');
			$('#debit_card_tabs li:eq(2) a').tab('show');
			$('.nav li').not('.active').addClass('disabled');
			$('.nav li').not('.active').find('a').removeAttr("data-toggle");
			E.preventDefault();
		});*/
    });
});
</script>

<script>
	$(document).ready(function() {
		$('[name="credit_card_number"]').on('keyup', function() 
		{
			if ( this.value.length ) 
			{
				if (this.value.charAt(0) === '4') 
				{
					$('#visa_image').show();
					$('#master_card_image').hide();
					$('#discover_image').hide();
					$('#american_express_image').hide();
					$('.card_number').css("width", "225px");
					$('.image_holder').css("width", "40px");
				}
				else if (this.value.charAt(0) === '5' && ((this.value.charAt(1) === '1') || (this.value.charAt(1) === '2') || (this.value.charAt(1) === '3') || (this.value.charAt(1) === '4') || (this.value.charAt(1) === '5')))
				{
					$('#visa_image').hide();
					$('#master_card_image').show();
					$('#discover_image').hide();
					$('#american_express_image').hide();
					$('.card_number').css("width", "235px");
					$('.image_holder').css("width", "40px");
				}
				else if (this.value.charAt(0) === '3' && ((this.value.charAt(1) === '4') || (this.value.charAt(1) === '7')))
				{
					$('#visa_image').hide();
					$('#master_card_image').hide();
					$('#discover_image').hide();
					$('#american_express_image').show();
					$('.card_number').css("width", "235px");
					$('.image_holder').css("width", "40px");
				}
				else if ((this.value.charAt(0) === '6' && (this.value.charAt(1) === '0') && (this.value.charAt(2) === '1') && (this.value.charAt(3) === '1')) || ((this.value.charAt(0) === '6' && (this.value.charAt(1) === '5'))))
				{
					$('#visa_image').hide();
					$('#master_card_image').hide();
					$('#discover_image').show();
					$('#american_express_image').hide();
					$('.card_number').css("width", "235px");
					$('.image_holder').css("width", "40px");
				}
				else
				{
					$('#visa_image').hide();
					$('#master_card_image').hide();
					$('#discover_image').hide();
					$('#american_express_image').hide();
					$('.card_number').css("width", "432px");
					$('.image_holder').css("width", "268px");
				}
			}
			else
			{
				$('#visa_image').show();
				$('#master_card_image').show();
				$('#discover_image').show();
				$('#american_express_image').show();
				$('.card_number').css("width", "432px");
				$('.image_holder').css("width", "268px");
			}
		});
    });
</script>

<script>
	$(document).ready(function() {
		$('[name="debit_card_number"]').on('keyup', function() 
		{
			if ( this.value.length ) 
			{
				if (this.value.charAt(0) === '4') 
				{
					$('#visa_image_debit').show();
					$('#master_card_image_debit').hide();
					$('#discover_image_debit').hide();
					$('#american_express_image_debit').hide();
					$('.card_number').css("width", "225px");
					$('.image_holder').css("width", "40px");
				}
				else if (this.value.charAt(0) === '5' && ((this.value.charAt(1) === '1') || (this.value.charAt(1) === '2') || (this.value.charAt(1) === '3') || (this.value.charAt(1) === '4') || (this.value.charAt(1) === '5')))
				{
					$('#visa_image_debit').hide();
					$('#master_card_image_debit').show();
					$('#discover_image_debit').hide();
					$('#american_express_image_debit').hide();
					$('.card_number').css("width", "235px");
					$('.image_holder').css("width", "40px");
				}
				else if (this.value.charAt(0) === '3' && ((this.value.charAt(1) === '4') || (this.value.charAt(1) === '7')))
				{
					$('#visa_image').hide();
					$('#master_card_image_debit').hide();
					$('#discover_image_debit').hide();
					$('#american_express_image_debit').show();
					$('.card_number').css("width", "235px");
					$('.image_holder').css("width", "40px");
				}
				else if ((this.value.charAt(0) === '6' && (this.value.charAt(1) === '0') && (this.value.charAt(2) === '1') && (this.value.charAt(3) === '1')) || ((this.value.charAt(0) === '6' && (this.value.charAt(1) === '5'))))
				{
					$('#visa_image_debit').hide();
					$('#master_card_image_debit').hide();
					$('#discover_image_debit').show();
					$('#american_express_image_debit').hide();
					$('.card_number').css("width", "235px");
					$('.image_holder').css("width", "40px");
				}
				else
				{
					$('#visa_image_debit').hide();
					$('#master_card_image_debit').hide();
					$('#discover_image_debit').hide();
					$('#american_express_image_debit').hide();
					$('.card_number').css("width", "432px");
					$('.image_holder').css("width", "268px");
				}
			}
			else
			{
				$('#visa_image_debit').show();
				$('#master_card_image_debit').show();
				$('#discover_image_debit').show();
				$('#american_express_image_debit').show();
				$('.card_number').css("width", "432px");
				$('.image_holder').css("width", "268px");
			}
		});
    });
</script>

<script>
	$(document).ready(function() {
		$('.nav li').not('.active').addClass('disabled');
		$('.nav li').not('.active').find('a').removeAttr("data-toggle");
    
		$('#proceed_net_banking').click(function(N){
        if(validatenetbanking())
		{
			$('.nav li.active').next('li').removeClass('disabled');
			$('#net_banking_tabs li:eq(1) a').tab('show');
			$('.nav li').not('.active').addClass('disabled');
			$('.nav li').not('.active').find('a').removeAttr("data-toggle");
			N.preventDefault();
		}
    });
		$('#login_bank').click(function(n){
        	$('.nav li.active').next('li').removeClass('disabled');
			$('#net_banking_tabs li:eq(2) a').tab('show');
			$('.nav li').not('.active').addClass('disabled');
			$('.nav li').not('.active').find('a').removeAttr("data-toggle");
			n.preventDefault();
		
    });
	
		$('#pay_net_banking').click(function(nt){
        	$('.nav li.active').next('li').removeClass('disabled');
			$('#net_banking_tabs li:eq(3) a').tab('show');
			$('.nav li').not('.active').addClass('disabled');
			$('.nav li').not('.active').find('a').removeAttr("data-toggle");
			nt.preventDefault();
		
    });
});
</script>

<script>
	function validatenetbanking()
	{
		return true;
	}
</script>
<div id="footer">
</div>
</body>
</html>