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
    height : 350px;
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
	background-color : #003333;
	margin-top : 0px;
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

#little_facility
{
	height : 35px;
	width : auto;
	margin-top : 2px;
	background-color : #d9d9d9;
	border-bottom : #cccccc;
	color : white;
}

#MyProfile
{
	margin-left : 35px;
	width : 450px;
	height : 200px;
	border-radius : 12px;
	margin-top : 35px;
	background-image : url(./images/background_1.jpg);
}

#My_Profile_Photo
{
	margin-left : 15px;
	margin-top : 15px;
	width : 150px;
	height : 150px;
	border-radius : 100px;
	position : absolute;
	background-image : url(./images/user_default_icon.png);
}

#My_Profile_Gen_Info
{
	margin-left : 180px;
	margin-top : 10px;
	width : 250px;
	height : 180px;
	border-radius : 12px;
	position : absolute;
	border-left : black;
	color : white;
}

#passport_info
{
	margin-left : 500px;
	margin-top : -190px;
	height : 82px;
	width : 450px;
	border-radius : 12px;
	background-color : #8c8c8c;
}

#visa_info
{
	margin-left : 500px;
	margin-top : 20px;
	height : 82px;
	width : 450px;
	border-radius : 12px;
	background-color : #8c8c8c;
}

#sub_menu
{
	border-radius : 0px;
	background-color : green;
    width : 580px;
    height : 40px;
    padding:10px;
    margin-left : 165px;	 
    margin-top : 2.2px;
	border-radius : 12px;
}

#user_passport_details
{
	display : none;
	margin-left : 500px;
	width : 450px;
	height : 100px;
	border-radius : 5px;
	background-color : #8c8c8c;
	margin-top : -201px;
	position : absolute;
}

#user_visa_details
{
	display : none;
	margin-left : 500px;
	width : 450px;
	height : 100px;
	border-radius : 5px;
	background-color : #8c8c8c;
	margin-top : -90px;
	position : absolute;
}

#pass_name
{
	margin-left : 60px;
	width : 150px;
	height : 30px;
	background-color : #8c8c8c;
	margin-top : 15px;
	position : absolute;
	color : white;
	font-size : 12px;
}

#pass_country
{
	margin-left : 240px;
	width : 150px;
	height : 30px;
	background-color : #8c8c8c;
	margin-top : 15px;
	position : absolute;
	color : white;
	font-size : 12px;
}

#pass_expiry_date
{
	margin-left : 60px;
	width : 150px;
	height : 30px;
	background-color : #8c8c8c;
	margin-top : 55px;
	position : absolute;
	color : white;
	font-size : 12px;
}

#pass_number
{
	margin-left : 240px;
	width : 150px;
	height : 30px;
	background-color : #8c8c8c;
	margin-top : 55px;
	position : absolute;
	color : white;
	font-size : 12px;
}

#visa_no
{
	margin-left : 60px;
	width : 150px;
	height : 30px;
	background-color : #8c8c8c;
	margin-top : 15px;
	position : absolute;
	color : white;
	font-size : 12px;
}

#visa_country
{
	margin-left : 240px;
	width : 150px;
	height : 30px;
	background-color : #8c8c8c;
	margin-top : 15px;
	position : absolute;
	color : white;
	font-size : 12px;
}

#visa_expiry_date
{
	margin-left : 60px;
	width : 150px;
	height : 30px;
	background-color : #8c8c8c;
	margin-top : 55px;
	position : absolute;
	color : white;
	font-size : 12px;
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
      <li class="active"><a href="my_account.php">My Account</a></li>
      <li><a href="my_wallet.php">My Wallet</a></li>
      <li><a href="#">History</a></li>
      <li><a href="#">My Bookings</a></li>
    </ul>
  </div>
</nav>
<div id="section">
	<div id = "MyProfile">
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
					echo '<img src="'.$rows['image_path'].'" alt="" style = "width : 150px; height : 150px; border-radius : 100px"/>';
				}
			}
		?>
		</div>
		<div id = "My_Profile_Gen_Info">
			<?php
				session_start();
				error_reporting(0);
				if(isset($_SESSION['logged_reg_user']))
				{
					echo '<h1 style = "text-align : right; font-size : 12px; color : white"><a data-toggle = "modal" href = "#ProfileForm" style = "cursor : pointer; color : white">Edit</a></h1>';
					echo '<h1 style = "text-align : left; font-size : 18px; color : white">Mr/Ms&nbsp'.$_SESSION['user_name'].' '.$_SESSION['SESS_LAST_NAME'].'<br>'.'</h1>';
					echo $_SESSION['SESS_MEMBER_EMAIL_ID'].'<br>'.'<br>';
					echo $_SESSION['SESS_MEMBER_MOBILE'].'<br>';
				}
				else if(isset($_SESSION['google_data']))
				{
					echo '<h1 style = "text-align : right; font-size : 12px; color : white"><a data-toggle = "modal" href = "#ProfileForm" style = "cursor : pointer; color : white">Edit</a></h1>';
					echo '<h1 style = "text-align : left; font-size : 18px; color : white">Mr/Ms&nbsp'.$_SESSION['google_data']['name'].'<br>'.'</h1>';
					echo $_SESSION['google_data']['email'].'<br>'.'<br>';
				}
				else if(isset($_SESSION['facebook_data']))
				{
					echo '<h1 style = "text-align : right; font-size : 12px; color : white"><a data-toggle = "modal" href = "#ProfileForm" style = "cursor : pointer; color : white">Edit</a></h1>';
					echo '<h1 style = "text-align : left; font-size : 18px; color : white">Mr/Ms&nbsp'.$_SESSION['facebook_data']['first_name'].' '.$_SESSION['facebook_data']['last_name'].'<br>'.'</h1>';
					echo $_SESSION['facebook_data']['email'].'<br>'.'<br>';
				}
			?>
		</div>
	</div>
	<div id = "passport_info">
		<?php
			if(isset($_SESSION['logged_reg_user']) || isset($_SESSION['facebook_data']) || isset($_SESSION['google_data']))
				echo'<h1 style = "text-align : right; font-size : 12px; color : white; margin-top : 8px; margin-left : 415px; position : absolute"><a data-toggle = "modal" href = "#PassportForm" style = "cursor : pointer; color : white">Edit</a></h1>';
		?>
		<img src = "./images/passport_1.jpg" style = "margin-left : 8px; border-radius : 12px; margin-top : 8px" alt = "passport_icon">
		<h1 style = "margin-left : 65px; font-size : 22px; margin-top : -50px; color : #bfbfbf">Passport Information</h1>
		<img id = "show_passport_details" src = "./images/down_icon.png" style = "margin-left : 425px; margin-top : -35px; position :absolute; opacity : .4" alt = "down_icon"> 
	</div>
	<div id = "visa_info">
		<?php
			if(isset($_SESSION['logged_reg_user']) || isset($_SESSION['facebook_data']) || isset($_SESSION['google_data']))
				echo'<h1 style = "text-align : right; font-size : 12px; color : white; margin-top : 8px; margin-left : 415px; position : absolute"><a data-toggle = "modal" href = "#VisaForm" id = "visa_information" style = "cursor : pointer; color : white">Edit</a></h1>';
		?>
		<img src = "./images/visa.png" style = "margin-left : 8px; border-radius : 2px; margin-top : 30px" alt = "visa_icon">
		<h1 style = "margin-left : 85px; font-size : 22px; margin-top : -28px; color : #bfbfbf">Visa Information</h1>
		<img id = "show_visa_details" src = "./images/down_icon.png" style = "margin-left : 425px; margin-top : -35px; position :absolute; opacity : .4" alt = "down_icon"> 
	</div>
	<div id="ProfileForm" class="modal fade" role="dialog" style = "height : 880px">
		<div class="modal-dialog modal-lg" style = "width : 700px; height : 1080px" >
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title" style = "text-align : center">PERSONAL INFORMATION</h4>
				</div>
				<div class="modal-body" style = "height : 760px">
					<form id = "personal_information" name = "personal_information" enctype="multipart/form-data" method = "post" action = "save_profile_information.php">
						<select name = "title" style = "width : 80px; margin-left : 280px; margin-top : -10px; position : absolute; height : 30px; border-radius : 5px; background-color : #f2f2f2" placeholder = "Title" required>
							<option value = "Mr.">Mr.</option>
							<option value = "Ms.">Ms.</option>
							<option value = "Mrs.">Mrs.</option>
							<option value = "Miss.">Miss.</option>
							<option value = "Mistr.">Mistr.</option>
						</select><br>
						<input type = "text" name = "Fname" id = "Fname" value = "<?php if(isset($_SESSION['logged_reg_user']))echo $_SESSION['user_name'];else if(isset($_SESSION['google_data'])) echo $_SESSION['google_data']['given_name']; else if(isset($_SESSION['facebook_data'])) echo $_SESSION['facebook_data']['first_name'];?>" style = "margin-left : 160px; width : 100px; height : 35px; border-radius : 5px; background-color : #f2f2f2; margin-top : 20px" placeholder = "First Name" readonly>
						<input type = "text" name = "Mname" id = "Fname" value = "<?php echo $_SESSION['PROFILE_M_NAME']?>" style = "margin-left : 15px; width : 100px; height : 35px; border-radius : 5px; background-color : #f2f2f2; margin-top : -20px" placeholder = "Middle Name">
						<input type = "text" name = "Lname" id = "Lname" value = "<?php if(isset($_SESSION['logged_reg_user']))echo $_SESSION['SESS_LAST_NAME'];else if(isset($_SESSION['google_data'])) echo $_SESSION['google_data']['family_name']; else if(isset($_SESSION['facebook_data'])) echo $_SESSION['facebook_data']['last_name'];?>"style = "margin-left : 15px; width : 100px; height : 35px; border-radius : 5px; background-color : #f2f2f2; margin-top : -20px" placeholder = "Last Name" readonly><br><br>
						<input type = "text" name = "Email" id = "Email" value = "<?php if(isset($_SESSION['logged_reg_user']))echo $_SESSION['SESS_MEMBER_EMAIL_ID'];else if(isset($_SESSION['google_data'])) echo $_SESSION['google_data']['email']; else if(isset($_SESSION['facebook_data'])) echo $_SESSION['facebook_data']['email'];?>" style = "margin-left : 160px; width : 340px; height : 35px; border-radius : 5px; background-color : #f2f2f2" readonly><br><br>;
						<input type = "text" name = "MobileNumber" id = "MobileNumber" value = "<?php echo $_SESSION['PROFILE_MOBILE_NUMBER']?>" style = "margin-left : 150px; width : 340px; height : 35px; border-radius : 5px; background-color : #f2f2f2" placeholder = "Mobile Number" required><br><br>
						<input placeholder="Date Of Birth" class="textbox-n" type="text" value = "<?php echo $_SESSION['PROFILE_DOB']?>" onfocus="(this.type='date')" onblur="(this.type='text')" name = "DOB" style = "margin-left : 160px; width : 340px; height : 35px; border-radius : 5px; background-color : #f2f2f2" required><br><br>
						<input type = "text" name = "CurrentAddress" id = "CurrentAddress" value = "<?php echo $_SESSION['PROFILE_ADDRESS']?>" style = "margin-left : 160px; width : 340px; height : 75px; border-radius : 5px; background-color : #f2f2f2" placeholder = "Enter Your Current Address"><br><br>
						<input type = "text" name = "PinCode" id = "PinCode" value = "<?php echo $_SESSION['PROFILE_PIN']?>" style = "margin-left : 160px; width : 165px; height : 35px; border-radius : 5px; background-color : #f2f2f2" placeholder = "Pin Code">
						<input type = "text" name = "City" id = "City" value = "<?php echo $_SESSION['PROFILE_CITY']?>" style = "margin-left : 10px; width : 165px; height : 35px; border-radius : 5px; background-color : #f2f2f2; margin-top : 0px; position : absolute" placeholder = "Enter City"><br><br>
						<select name = "country" id = "country" value = "<?php echo $_SESSION['PROFILE_COUNTRY']?>" style = "margin-left : 160px; width : 165px; height : 35px; border-radius : 5px; background-color : #f2f2f2" placeholder = "country"></select>
						<select name = "state" id = "state" value = "<?php echo $_SESSION['PROFILE_STATE']?>" style = "margin-left : 10px; width : 165px; height : 35px; border-radius : 5px; background-color : #f2f2f2; margin-top : 0px; position : absolute" placeholder = "State"><br><br>
						<script language="javascript">
							populateCountries("country", "state");
						</script>
						<input type = "text" name = "HomeTown" id = "HomeTown" value = "<?php echo $_SESSION['PROFILE_HOME_TOWN']?>" style = "margin-left : -170px; width : 340px; height : 35px; border-radius : 5px; background-color : #f2f2f2; margin-top : 55px; position : absolute" placeholder = "Home Town"><br><br>
						<select name = "MarietalStatus" id = "MarietalStatus" style = "margin-left : 160px; width : 165px; height : 35px; border-radius : 5px; background-color : #f2f2f2; margin-top : 55px; position : absolute">
							<option value = "Marietal Status"><?php echo $_SESSION['PROFILE_MARIETAL_STATUS']?></option>
							<option value = "Single">Single</option>
							<option value = "Married">Married</option>
						</select><br><br>
						<input placeholder="Anniversary Date" class="textbox-n" type="text" value = "<?php echo $_SESSION['PROFILE_ANNIVERSARY_DATE']?>" onfocus="(this.type='date')" onblur="(this.type='text')" name = "Anniversary" style = "margin-left : 160px; width : 340px; height : 35px; border-radius : 5px; background-color : #f2f2f2; position : absolute; margin-top : 70px"><br><br>
						<?php
							error_reporting(E_ERROR);
							if(isset($_SESSION[logged_reg_user]))
								echo'<input name = "uploadedimage" type="file" value = "Upload Image" style = "margin-left : 160px; width : 340px; height : 22px; border-radius : 5px; background-color : #f2f2f2; margin-top : 85px; position : absolute" placeholder = "Upload Image">';
						?>
						<input type = "submit" name = "save_info" value = "save" style = "background-color : #cc0000; color : white; width : 125px; height : 45px; border : thick; border-color : red; border-radius : 1px; margin-left : 180px; margin-top : 125px; position : absolute">
						<button type="button" class="btn btn-default" data-dismiss="modal" style = "background-color : #808080; color : white; width : 125px; height : 45px; border : thick; border-color : red; border-radius : 1px; margin-left : 350px; margin-top : 125px; position : absolute">Close</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	<div id="PassportForm" class="modal fade" role="dialog">
		<div class="modal-dialog modal-sm" style = "width : 500px; height : 350px" >
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<img src = "./images/passport_1.jpg" style = "margin-left : 8px; border-radius : 2px; margin-top : 0px; height : 40px" alt = "passport_icon">
					<h4 class="modal-title" style = "margin-left : 55px; text-align : center; top : 20px; position : absolute">Passport Details</h4>
				</div>
				<div class="modal-body" style = "height : 350px">
					<form id = "passport_information" name = "passport_information" method = "post" action = "save_passport_details.php">
						<input type = "text" name = "Fname" id = "Fname" style = "margin-left : 50px; width : 100px; height : 35px; border-radius : 5px; background-color : #f2f2f2; margin-top : 20px" placeholder = "First Name" required>
						<input type = "text" name = "Mname" id = "Fname" style = "margin-left : 15px; width : 100px; height : 35px; border-radius : 5px; background-color : #f2f2f2; margin-top : -20px" placeholder = "Middle Name">
						<input type = "text" name = "Lname" id = "Lname" style = "margin-left : 15px; width : 100px; height : 35px; border-radius : 5px; background-color : #f2f2f2; margin-top : -20px" placeholder = "Last Name"><sub>(As per passport)</sub><br><br>
						<select name = "country_passport" id = "country_passport" style = "margin-left : 50px; width : 165px; height : 35px; border-radius : 5px; background-color : #f2f2f2" placeholder = "country" required></select><br><br>
						<input type = "text" name = "PassportNo" id = "PassportNo" style = "margin-left : 50px; width : 340px; height : 35px; border-radius : 5px; background-color : #f2f2f2" placeholder = "Passport Number" required><br><br>
						<input placeholder="Expiry Date" class="textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name = "ExpiryDatePassport" style = "margin-left : 50px; width : 340px; height : 35px; border-radius : 5px; background-color : #f2f2f2" required><br><br>
						<input type = "submit" name = "save_info_passport" value = "save" style = "background-color : #cc0000; color : white; width : 125px; height : 45px; border : thick; border-color : red; border-radius : 1px; margin-left : 75px">
						<button type="button" class="btn btn-default" data-dismiss="modal" style = "background-color : #808080; color : white; width : 125px; height : 45px; border : thick; border-color : red; border-radius : 1px; margin-left : 15px; margin-top : 0px">Close</button>
						<script language="javascript">
							populateCountries("country_passport", "");
						</script>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	<div id="VisaForm" class="modal fade" role="dialog">
		<div class="modal-dialog modal-sm" style = "width : 500px; height : 350px" >
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<img src = "./images/visa.png" style = "margin-left : 8px; border-radius : 2px; margin-top : 0px; height : 20px; width : 60px" alt = "passport_icon">
					<h4 class="modal-title" style = "margin-left : 75px; text-align : center; top : 15px; position : absolute">Visa Details</h4>
				</div>
				<div class="modal-body" style = "height : 245px">
					<form id = "visa_information" name = "visa_information" method = "post" action = "save_visa_details.php">
						<select name = "country_visa_issued" id = "country_visa_issued" style = "margin-left : 50px; width : 165px; height : 35px; border-radius : 5px; background-color : #f2f2f2" placeholder = "country" required></select><sub>(Issued in Country)</sub><br><br>
						<input type = "text" name = "VisaNo" id = "VisaNo" style = "margin-left : 50px; width : 340px; height : 35px; border-radius : 5px; background-color : #f2f2f2" placeholder = "Enter Visa Number" required><br><br>
						<input placeholder="Expiry Date" class="textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name = "ExpiryDateVisa" style = "margin-left : 50px; width : 340px; height : 35px; border-radius : 5px; background-color : #f2f2f2" required><br><br>
						<input type = "submit" name = "save_info_visa" value = "save" style = "background-color : #cc0000; color : white; width : 125px; height : 45px; border : thick; border-color : red; border-radius : 1px; margin-left : 75px">
						<button type="button" class="btn btn-default" data-dismiss="modal" style = "background-color : #808080; color : white; width : 125px; height : 45px; border : thick; border-color : red; border-radius : 1px; margin-left : 15px; margin-top : 0px">Close</button>
						<script language="javascript">
							populateCountries("country_visa_issued", "");
						</script>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	<div id = "user_passport_details">
		<label id = "pass_name">
			<?php
				include('fetch_passport_details.php');
				echo 'Name(as on passport) '.$_SESSION['PASSPORT_F_NAME']." ".$_SESSION['PASSPORT_M_NAME']." ".$_SESSION['PASSPORT_L_NAME'];
			?>
		</label>
		<label id = "pass_country">
			<?php
				echo 'Country '.'<br>'.$_SESSION['PASSPORT_COUNTRY_NAME'];
			?>
		</label>
		<label id = "pass_expiry_date">
			<?php
				echo 'Expiry Date '.'<br>'.$_SESSION['PASSPORT_EXPIRY_DATE'];
			?>
		</label>
		<label id = "pass_number">
			<?php
				echo 'Passport Number '.'<br>'.$_SESSION['PASSPORT_NUMBER'];
			?>
		</label>
	</div>
	
	<div id = "user_visa_details">
		<label id = "visa_no">
			<?php
				include('fetch_visa_details.php');
				echo 'Visa Number '.'<br>'.$_SESSION['VISA_NUMBER'];
			?>
		</label>
		<label id = "visa_country">
			<?php
				echo 'Country '.'<br>'.$_SESSION['VISA_COUNTRY_NAME'];
			?>
		</label>
		<label id = "visa_expiry_date">
			<?php
				echo 'Expiry Date '.'<br>'.$_SESSION['VISA_EXPIRY_DATE'];
			?>
		</label>
	</div>
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
<script>
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

<!--<script>
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