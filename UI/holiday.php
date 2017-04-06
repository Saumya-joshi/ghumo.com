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
	background-image: url(back2.jpg) ;
	background-repeat:no-repeat;
    width : 990px;
    height : 1000px;
    padding:10px;
    margin-left : 165px;	 
    margin-top : 2.2px;
    
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
    color: blue;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 4px 4px 0 0;
	background-color:aqua;
	
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

#hol1
{
	border-radius : 10px;
	border : 1px solid black;
	background-color : blue;
	width : 450px;
	height : 300px; 
	margin-left : 30px; 
	top : 175px;
	position : absolute;
}

#hol2
{
	border-radius : 10px;
	border : 1px solid black;
	background-color : blue;
	width : 450px;
	height : 300px; 
	margin-left : 510px; 
	top : 175px;
	position : absolute;
}

#hol3
{
	border-radius : 10px;
	border : 1px solid black;
	background-color : blue;
	width : 450px;
	height : 300px; 
	margin-left : 30px; 
	top : 495px;
	position : absolute;
}

#hol4
{
	border-radius : 10px;
	border : 1px solid black;
	background-color : blue;
	width : 450px;
	height : 300px; 
	margin-left : 510px; 
	top : 495px;
	position : absolute;
}

#hol5
{
	border-radius : 10px;
	border : 1px solid black;
	background-color : blue;
	width : 450px;
	height : 300px; 
	margin-left : 30px; 
	top : 815px;
	position : absolute;
}

#hol6
{
	border-radius : 10px;
	border : 1px solid black;
	background-color :blue;
	width : 450px;
	height : 300px; 
	margin-left : 510px; 
	top : 815px;
	position : absolute;
}

.pkg_cover
{
	border-radius : 10px;
	width : 450px; 
	height : 250px; 
	background-color : white; 
	margin-bottom:52px;
	position : absolute; 
	opacity : .0;
	bottom : -153px;
	transition: all 0.5s ease;
}

#hol1:hover .pkg_cover
{
	background-color: black;
	opacity : .8;
	color : white;
	bottom:0;
}

#hol2:hover .pkg_cover
{
	background-color: black;
	opacity : .8;
	color : white;
	bottom: 0;
}

#hol3:hover .pkg_cover
{
	background-color: black;
	opacity : .8;
	color : white;
	bottom: 0;
}

#hol4:hover .pkg_cover
{
	background-color: black;
	opacity : .8;
	color : white;
	bottom: 0;
}

#hol5:hover .pkg_cover
{
	background-color: black;
	opacity : .8;
	color : white;
	bottom: 0;
}

#hol6:hover .pkg_cover
{
	background-color: black;
	opacity : .8;
	color : white;
	bottom: 0;
}


a:link
{
	color : red;
	text-decoration : none;
}

a:visted
{
	color : orange;
	text-decoration : none;
}

a:hover
{
	color : orange;
	text-decoration : none;
}

a:active
{
	color : green;
	text-decoration : none;
}

div.img
{
	margin : 1px;
	padding : 5px;
	height : auto;
	width : auto;
	float : left;
	tect-align : center;
}

div.img img
{
	display : inline;
	margin : 2px;
	border : 1px solid red;
}

div.img a:hover img
{
	border : 1px solid #0000ff;
}

</style>
</head>

<body style="margin:0px; background-image: url(img/back.jpg)">
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
	<div id="hol1">
	<a target = "_self" href = "hol_kashmir.php"><img src = "img/kash.jfif" alt = "God's Own Land Kashmir" style = "width : 100%; height : 100%; border-radius : 10px"></a>
		<div style = "width : 420px; height : 50px; background-color : white; top : 245px; margin-left : 10px; position : absolute; opacity : .4">
		<p style = "font-size : 14px; text-align : center"><a target = "_self" href = "hol_kashmir.php"><strong>Beautiful Kashmir<br>(5N/6D)</strong></a></p>
		</div>
		<div class = "pkg_cover">
		<h1 style = "font-size : 18px"><strong>Cities Covered</strong></h1>
		<ul style = "list-style-type:disc; font-size : 16px">
			<li><span>Sri Nagar</span></li>
			<li><span>Pahalgam</span></li>
			<li><span>Gulmarg</span></li>
		</ul>
		<br><p><marquee>Rs 13788/- per person</marquee></p>
		</div>
	</div>
	<div id="hol2">
	<a target = "_self" href = "hol_dubai.php"><img src = "img/dubai.jfif" alt = "Unique Dubai" style = "width : 100%; height : 100%; border-radius : 10px"></a>
		<div style = "width : 420px; height : 50px; background-color : white; top : 245px; margin-left : 10px; position : absolute; opacity : .4">
		<p style = "font-size : 14px; text-align : center"><a target = "_self" href = "hol_dubai.php"><strong>Unique Dubai<br>(4N/5D)</strong></a></p>
		</div>
		<div class = "pkg_cover">
		<h1 style = "font-size : 18px"><strong>Cities Covered</strong></h1>
		<ul style = "list-style-type:disc; font-size : 16px">
			<li><span>Dubai</span></li>
		</ul>
		<br><p><marquee>Rs 48688/- per person</marquee></p>
		</div>
	</div>
	<div id="hol3">
	<a target = "_self" href = "hol_rajasthan.php"><img src = "img/raj.jfif" alt = "Royal Rajasthan" style = "width : 100%; height : 100%; border-radius : 10px"></a>
		<div style = "width : 420px; height : 50px; background-color : white; top : 245px; margin-left : 10px; position : absolute; opacity : .4">
		<p style = "font-size : 14px; text-align : center;"><a target = "_self" href = "hol_rajasthan.php"><strong>Royal Rajasthan<br>(11N/12D)</strong></a></p>
		</div>
		<div class = "pkg_cover">
		<h1 style = "font-size : 18px"><strong>Cities Covered</strong></h1>
		<ul style = "list-style-type:disc; font-size : 16px">
			<li><span>New Delhi</span></li>
			<li><span>Agra</span></li>
			<li><span>Jaipur</span></li>
			<li><span>Udaipur</span></li>
			<li><span>Jodhpur</span></li>
			<li><span>Jaisalmer</span></li>
			<li><span>Bikaner</span></li>
			<li><span>Mandawa</span></li>

		</ul>
			<p><marquee>Rs 34970/- per person</marquee></p>		
		</div>
	</div>
	<div id="hol4">
	
	<a target = "_self" href = "hol_kerala.php"><img src = "./img/ker.jfif" alt = "" style = "width : 100%; height : 100%; border-radius : 10px"></a>
		<div style = "width : 420px; height : 50px; background-color : white; top : 245px; margin-left : 10px; position : absolute; opacity : .4">
		<p style = "font-size : 14px; text-align : center"><a target = "_self" href = "hol_kerala.php"><strong>Adorable Kerala<br>(5N/6D)</strong></a></p>
		</div>
		<div class = "pkg_cover">
		<h1 style = "font-size : 18px"><strong>Cities Covered</strong></h1>
		<ul style = "list-style-type:disc; font-size : 16px">
			<li><span>Munnar</span></li>
			<li><span>Thekkady</span></li>
			<li><span>Alleppey</span></li>
			<li><span>Cochin</span></li>
			
		</ul>
		<br><p><marquee>Rs 13284/- per person</marquee></p>
		</div>
	</div>
	<div id="hol5">
	<a target = "_self" href = "hol_singapore.php"><img src = "img/singapore.jpeg" alt = "Amazing Singapore" style = "width : 100%; height : 100%; border-radius : 10px"></a>
		<div style = "width : 420px; height : 50px; background-color : white; top : 245px; margin-left : 10px; position : absolute; opacity : .4">
		<p style = "font-size : 14px; text-align : center"><a target = "_self" href = "hol_singapore.php"><strong>Amazing Singapore<br>(5N/6D)</strong></a></p>
		</div>
		<div class = "pkg_cover">
		<h1 style = "font-size : 18px"><strong>Cities Covered</strong></h1>
		<ul style = "list-style-type:disc; font-size : 16px">
			<li><span>Singapore</span></li>
			
		</ul>
		<br><p><marquee>Rs 72116/- per person</marquee></p>
		</div>
	</div>
	<div id="hol6">
	<a target = "_self" href = "hol_thailand.php"><img src = "img/thai.jfif" alt = "Perfect Thailand" style = "width : 100%; height : 100%; border-radius : 10px"></a>
		<div style = "width : 420px; height : 50px; background-color : white; top : 245px; margin-left : 10px; position : absolute; opacity : .4">
		<p style = "font-size : 14px; text-align : center"><a target = "_self" href = "hol_thailand.php"><strong>Perfect Thailand<br>(6N/7D)</strong></a></p>
		</div>
		<div class = "pkg_cover">
		<h1 style = "font-size : 18px"><strong>Cities Covered</strong></h1>
		<ul style = "list-style-type:disc; font-size : 16px">
			<li><span>Phuket</span></li>
			<li><span>Pattaya</span></li>
			<li><span>Bangkok</span></li>
			
		</ul>
		<br><p><marquee>Rs 50100/- per person</marquee></p>
		</div>
	</div>
</div>
<div id="footer">
		<div id="footer_sec1">
			<h3>OUR PRODUCTS</h3>
			<a href="">Flight schedule</a><br>
			<a href="">Domestic Flights</a><br>
			<a href="">Hotels</a><br>
			<a href="">Holidays in India</a><br>
			<a href="">International holidays</a><br>
			<a href="">Bus Booking</a><br>
			<a href="">Railway</a><br>
			<a href="">Cab Booking</a><br>
			</div>
			<div id="footer_sec2">
			<h3>COMPANY</h3>
			<a href="">About Us</a><br>
			<a href="">Offers</a><br>
			<a href="">Gift Vouchers</a><br>
			<a href="">Travel Community</a><br>
			<a href="">Reviews</a><br>
			</div>
		<div id="footer_sec3">
			<h3>ABOUT THE SITE</h3>
			<a href="">FAQs</a><br>
			<a href="">Terms and Conditions</a><br>
			<a href="">Privacy Policy</a><br>
			<a href="">Contact Us</a><br>
			<a href="">User Agreement</a><br>
		</div>
		<div id="footer_sec4">
			<h3>MORE LINKS</h3>
			<a href="">Irctc</a><br>
			<a href="">Indian Railways</a><br>
			<a href="">PNR Status</a><br>
			<a href="">Seat Availability</a><br>
			<a href="">Oyo Rooms</a><br>
		</div>
		<div id="footer_sec5">
			<h3>FOLLOW US ON</h3>
			<img src="./img/fblogo.jpg" alt="fblogo" style="height:40px; width:40px">
			<img src="./img/insta.jpg" alt="instalogo" style="height:40px; width:40px">
			<img src="./img/twitter.jpg" alt="twitterlogo" style="height:40px; width:40px">
			<br><br>
			
		</div>
		
</div>

</body>
</html>