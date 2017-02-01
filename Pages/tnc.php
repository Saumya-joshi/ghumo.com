<!DOCTYPE html>
<html>
<head>
<base target="_parent"></base>
<meta charset="ISO-8859-1">
<title>SuhanaSafar|Book Flights, Hotels & Holidays at best Price!!!</title>
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

#image
{
	width : 1000px;
	height : 980px;
	margin-left : 150px;
	background-image: url(./img/back2.jpg);
	background-size: 1000px 980px;

	background-repeat: No-repeat;
	
	margin-top : 15px;
	box-shadow: black;
}

#imager
{
	width : 995px;
	height:900px;
	margin-top:75px;
	margin-left:5px;
	overflow:scroll;
	position:absolute;
}
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

#popular_dest
{
	width : 580px;
	height : 600px;
	margin-top : 10px;
	margin-left : 560px;
	background-color : red;
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

	<div id = "image">
		<ul class = "me_nu">
			<li class = "active"><a href="flights.php">Flights</a></li>
			<li><a href="hotels.php">Hotels</a></li>
			<li><a href="holiday.php">Holidays</a></li>
			<li><a href="bus.php">Bus</a></li>
			<li><a href="train.php">Trains</a></li>
			<li><a href="cabs.php">Cabs</a></li>
			<li><a href="#7">Reviews</a></li>
		</ul>  
		<div id="imager">
		<h1 style = " text-align : center; color : black; text-decoration : underline; margin-top:80px; position:absolute; margin-left: 343px"><strong>Terms And Conditions</strong></h1><br>
		<br>
		<p style="text-align:left; font-size:20px; color:black; margin-top: 150px"><b>GENERAL TERMS OF USE & SERVICE</b><br>
The website ghumo.com is a site incorporated and existing in accordance with the laws of India When you access, browse or use this Site, you accept, without limitation or qualification, the terms and conditions set forth herein. When you access any of the sub-Site (whether belonging to an 'associate' of Company or otherwise) through this Site, then such sub-Site may have its own terms and conditions, which are specific to such sub-Site.
These Terms and Conditions of use and any additional terms posted on this Site together constitute the entire agreement between Company and you with respect to your use of this Site.<br>
<br>
<b>SITE AND ITS CONTENTS</b><br>
1) This Site is only for your personal use. You shall not distribute exchange, modify, sell or transmit anything you copy from this Site, including but not limited to any text, images, audio and video, for any business, commercial or public purpose<br>
2) As long as you comply with the terms of these Terms and Conditions of Use, Company grants you a non-exclusive, non-transferable, limited right to enter, view and use this Site. You agree not to interrupt or attempt to interrupt the operation of this Site in any manner whatsoever.<br>
3) Access to certain areas of the Site may only be available to registered members. To become a registered member, you may be required to answer certain questions or provide certain details. Answers to such questions or details required may be mandatory and/or optional. You represent and warrant that all information you supply to us, about yourself, and others, is true and accurate.<br>
4) This site is for consumer use only. Any travel agent/tour operator/consolidator/aggregator should not use this site for individual/group bookings. In the event of bookings by any travel agent/tour operator/consolidator/aggregator through the Site are detected, the Company reserves the right, including without limitation, to cancel such bookings immediately without any notice to such travel agent/tour operator/aggregator/consolidator and/or to withhold payments/commissions thereto. The various discounts and offers mentioned on the Site are applicable to the Consumer for the purposes of end use only<br>

<b>LINKS TO THIRD-PARTY WEBSITES</b><br>
This Site may contain links to websites operated by parties other than Company. Company does not control such Sites and is not responsible for their contents. Company's inclusion of hyperlinks to such Sites does not imply any endorsement of the material on such Sites or any association with their operators. If you decide to access any of the third party Sites linked to this Site, you do so entirely at your own risk.<br>
<br>
<b>DISCLAIMER</b><br>
1) The material in this Site could include technical inaccuracies or typographical errors. Company may make changes/modifications or improvements on the Site at any time.<br>
2) The materials on this Site are provided on an "As Is" basis, without warranties of any kind either expressed or implied. To the fullest extent permissible pursuant to applicable law, Company disclaims all warranties of merchantability and fitness for a particular purpose.<br>
3) Company does not warrant that the functions contained in this Site will be uninterrupted or error free, that defects will be corrected, or that this Site or the servers that make it available are free of viruses or other harmful components, but shall endeavour to ensure your fullest satisfaction. Company does not warrant or make any representations regarding the use of or the result of the use of the material on the Site in terms of their correctness, accuracy, reliability, or otherwise, insofar as such material is derived from other service providers such as airlines, hotel owners and tour operators.<br>
4) You acknowledge that this Site is provided only on the basis set out in these terms and conditions. Your uninterrupted access or use of this Site on this basis may be prevented by certain factors outside our reasonable control including, without limitation, the unavailability, inoperability or interruption of the Internet or other telecommunications services or as a result of any maintenance or other service work carried out on this Website. Company does not accept any responsibility and will not be liable for any loss or damage whatsoever arising out of or in connection with any ability/inability to access or to use the Site.<br>
5) You also acknowledge that through this Site, Company merely provides intermediary services in order to facilitate booking of tickets and hotel services to you. Company is not the last-mile service provider to you and therefore, Company shall not be or deemed to be responsible for any lack or deficiency of services provided by any person (airline, travel/tour operator, hotel, facility or similar agency) you shall engage or hire or appoint pursuant to or resulting from, the material available in this Site.<br>
6) Company will not be liable to you or to any other person for any direct, indirect, incidental, punitive or consequential loss, damage, cost or expense of any kind whatsoever and howsoever caused from out of your usage of this Site.<br>
7) If for any reason, law does not permit exclusions of liability then, the liability of the Company shall be limited to such amount paid by the user and retained by the Company for the transaction in question.<br>
<br>
<b>GENERAL PROVISIONS</b><br>
1) Company may add to, modify or remove any part of these Terms and Conditions of Use at any time as it may deem fit, without notice. Any changes to these Terms and Conditions of Use or any terms posted on this Site apply as soon as they are posted. By continuing to use this Site after any changes are posted, you are indicating your acceptance of those changes.
<br>2) Company may add, change, discontinue, remove or suspend any other Content posted on this Site, including features and specifications of products described or depicted on the Site, temporarily or permanently, at any time, without notice and without liability.
<br>3) Company reserves the right to undertake all necessary steps to ensure that the security, safety and integrity of Company's systems as well as its clients and users interests are and remain, well-protected. Towards this end, Company may take various steps to verify and confirm the authenticity, enforceability and validity of orders placed by you.
<br>4) If Company, in its sole and exclusive discretion, concludes that the said orders are not or do not reasonably appear to be, authentic, enforceable or valid, then Company may cancel the said orders at any time up to 06 hours before the scheduled time of departure of the relevant flight or 24 hours before the expected date of visit to any property booked through Company.
<br>5) You may travel to certain destinations which involve greater risks than others, entirely at your risk as to cost and consequences.
<br>6) Company requests you to consult your local authorities and evaluate travel prohibitions,warnings, announcements, and advisories issued by them before booking travel to certain international destinations.
<br>7) By offering for sale travel to particular destinations, Company does not represent or warrant that travel to such point is advisable or without risk. 
<br>8) Company does not accept liability for damages, losses, or delays that may result from improper documents for entry, exit, length of stay, or from travel to such destinations.
<br>9) Company reserves its exclusive right in its sole discretion to alter, limit or discontinue the Site or any material posted herein, in any respect. Company shall have no obligation to take the needs of any User into consideration in connection therewith.
<br>10) Company reserves its right to deny in its sole discretion any user access to this Site or any portion hereof without notice.
<br>11) No waiver by Company of any provision of these Terms and Conditions shall be binding except as set forth in writing and signed by its duly authorized representative.
<br><br>
<b>PROMOTION CODES</b><br>
1) ghumo.com generates promotion codes from time to time which may be availed on the Site as a discount coupon. Users are advised that the promotional offer of using Promotion Codes for receiving discounts can be availed only if correct and full details (of the promotional code) are filled in at the time of making the booking. In case if the customer fails to enter the promocode before making the booking, the company shall not be liable to give any credit to the customer after the booking has been made.
<br>2) Considering there are multiple promotional offers running on the site, user can avail the benefit of only one offer at a time. No two promotional codes can be combined at the time of making a booking.
<br>3) Promotional discounts are applied only on the base amount for Hotels. Discounts are not applicable for any additional components including taxes.
<br>4) On cancellation of bookings done using promotional codes, the hotel cancellation charges are calculated on total price before discount. For such bookings, an additional cancellation charge of 10% or Rs.500, whichever is minimum will be deducted from the refund amount after applying the hotel cancellation policy.
<br><br>
<b>MODIFICATION OF TERMS OF USE</b><br>

The Company reserves the right to modify or supplement these terms of use for regulatory, legal, technical or any other reason with future effect by placing an advance notice on the Website. The notice will include the date of planned change and the consequences for users.
Registered users of the Company will get additional information about planned change of terms of use via e-mail.
<br><br>
<b>GOVERNING LAW AND FORUM</b><br>
These terms and conditions are governed by and shall be construed in accordance with the laws of the Republic of India and any dispute shall exclusively be subject to the jurisdiction of the appropriate Courts situated at Delhi, India<br><br>

<b>SEVERABILITY CLAUSE</b><br>
If any part of these terms is determined to be invalid or unenforceable pursuant to applicable law including, but not limited to, the warranty disclaimers and liability limitations set forth above, then the invalid or unenforceable provision will be deemed superseded by a valid, enforceable provision that most closely matches the intent of the original provision and the remaining provisions of these terms of use shall continue in effect.

<br><br><b>COMPENSATION</b><br>
You agree to defend and fully compensate Company and its affiliates and any of their officers, directors, employees and agents from and against any claims, causes of action, demands, recoveries, losses, damages, fines, penalties or other costs or expenses of any kind or nature, including but not limited, to reasonable legal and accounting fees, brought by third parties as a result of:
		Your breach of these terms of use or the documents referenced herein;
		Your violation of any applicable law including but not limited to violation of intellectual property rights of a third party; or
		Your use of this Website.
		</p>
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