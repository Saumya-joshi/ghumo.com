<!DOCTYPE html>
<html>
<head>
    <title>Amazing Singapore|Ghumo Khul Ke|Book Singapore Packages on Ghumo.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="4/thumbnail-slider.css" rel="stylesheet" type="text/css" />
    <link href="4/ninja-slider.css" rel="stylesheet" type="text/css" />
    <script src="4/thumbnail-slider.js" type="text/javascript"></script>
    <script src="4/ninja-slider.js" type="text/javascript"></script>
	<link href="tab-content/template4/tabcontent.css" rel="stylesheet" type="text/css" />
	<script src="tab-content/tabcontent.js" type="text/javascript"></script>
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

    body 
	{
	font: normal 0.9em Arial;
	margin:0;
	}
    a 
	{
	color:#1155CC;
	}
    ul li 
	{
	padding: 10px 0;
	}      
    code 
	{
	display:block;
	white-space:pre; 
	background-color:#f6f6f6;
	padding:8px; 
	overflow:auto;
	border:1px dotted #999;
	margin:6px 0;
	}
#info
{
	top:600px;
	margin-left: 20px;
	width: 1000px;
	height: 800px;
	background-image: url(img/back.jpg);
	position: absolute;
	
	
}
#price
{
	top: 600px;
	margin-left: 1030px;
	width: 300px;
	height: 400px;
	background-color: gray;
	color:white;
	border-radius : 10px;
	border : 1px solid black;
	box-shadow: 1px 1px 2px 2px #585858;
	position: absolute;
	text-align:center;
}

#cities
{
	top: 1010px;
	margin-left: 1030px;
	width: 300px;
	height: 275px;
	background-color: gray;
	color:white;
	border-radius : 10px;
	border : 1px solid black;
	box-shadow: 1px 1px 2px 2px #585858;
	position: absolute;
}

#map
{
	height:400px;
	width:400px;
	margin-left: 300px;
}
#footer 
{
background-color : #003333;
	margin-top : 1010px;
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


</style>
</head>
<body style= "background-image: url(img/back.jpg); margin : 0px">
 

<div id="header">
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

    <!--start-->
    <div id='ninja-slider'>
        <div>
            <div class="slider-inner">
                <ul>
                    <li><a class="ns-img" href="img/sing1.jpg"></a></li>
                    <li><a class="ns-img" href="img/sing2.jpg"></a></li>
                    <li><a class="ns-img" href="img/sing3.jpg"></a></li>
                    <li><a class="ns-img" href="img/sing4.jpg"></a></li>
                    <li><a class="ns-img" href="img/sing5.jpg"></a></li>
                    <li><a class="ns-img" href="img/sing6.jpg"></a></li>
                    <li><a class="ns-img" href="img/sing7.jpg"></a></li>
                    <li><a class="ns-img" href="img/sing8.jpg"></a></li>
                    <li><a class="ns-img" href="img/sing9.jpg"></a></li>
                    <li><a class="ns-img" href="img/sing10.jpg"></a></li>
                    <li><a class="ns-img" href="img/sing11.jpg"></a></li>
                    <li><a class="ns-img" href="img/sing12.jpg"></a></li>
                    <li><a class="ns-img" href="img/sing13.jpg"></a></li>
                    <li><a class="ns-img" href="img/sing14.jpg"></a></li>
                    <li><a class="ns-img" href="img/sing15.jpg"></a></li>
                   </ul>
                <div class="fs-icon" title="Expand/Close"></div>
            </div>
            <div id="thumbnail-slider">
                <div class="inner">
                    <ul>
                        <li>
                            <a class="thumb" href="img/sing1.jpg"></a>
                            <span>0</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/sing2.jpg"></a>
                            <span>1</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/sing3.jpg"></a>
                            <span>2</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/sing4.jpg"></a>
                            <span>3</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/sing5.jpg"></a>
                            <span>4</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/sing6.jpg"></a>
                            <span>5</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/sing7.jpg"></a>
                            <span>6</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/sing8.jpg"></a>
                            <span>7</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/sing9.jpg"></a>
                            <span>8</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/sing10.jpg"></a>
                            <span>9</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/sing11.jpg"></a>
                            <span>10</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/sing12.jpg"></a>
                            <span>11</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/sing13.jpg"></a>
                            <span>12</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/sing14.jpg"></a>
                            <span>13</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/sing15.jpg"></a>
                            <span>14</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--end-->
	
    <div id="info">
     <ul class="tabs" data-persist="true">
		<li><a href="#view1">Package Overview</a></li>
		<li><a href="#view2">Inclusions</a></li>
		<li><a href="#view4">Hotel Details</a></li>
		<li><a href="#view5">Date And Price</a></li>
		<li><a href="#view6">Destination</a></li>
		<li><a href="#view7">Map</a></li>

	</ul>

	<div class="tabcontents" data-persist="true">
		<div id="view1">
        
		<h4>Holiday Highlight</h4>
		High Tea at Singapore Flyer, Gardens by the Bay Tour, Sentosa Extreme, Universal Studio, Night Safari, Jurong Bird Park.
		
		
		<br><br><h4>Description</h4>
		<p>ISingapore, officially the Republic of Singapore, is a sovereign city-state and island country in Southeast Asia. It lies off the southern tip of the Malay Peninsula and is 137 kilometres north of the equator.</p>
		
		</div>
		<div id="view2">


		<h4>Inclusions</h4>
			<ul>
			<li>Return Economy Class Airfare with Taxes</li>
			<li>Singapore Tourist Visa charges</li>
			<li>5 Nights accommodation in a well appointed Room</li>
			<li>Daily Breakfast</li>
			<li>Half day Singapore City Tour</li>
			<li>Sentosa Extreme including admission, one way cable car, Underwater World, Dolphin Lagoon, Luge & Skyride, Butterfly Park & Insect Kingdom with tea and Wings of Time on SIC basis</li>
			<li>Night Safari Tour</li>
			<li>Universal Studio Tour</li>
			<li>Jurong Bird Park</li>
			<li>High Tea at Singapore Flyer with transfers</li>
			<li>Gardens by the Bay Tour</li>
			<li>Return Airport transfers on Seat In Coach (Shared) basis</li>
			<li>All Tours and Transfers on seat in Coach basis</li>
			</ul>
			
		<h4>Exclusions</h4>
		<ul>
		<li>3.09% Government service tax extra.</li>
		<li>Any Service not mentioned in Inclusions.</li>
		<li>Travel Insurance</li>
		<li>Medical Travel Insurance</li>
		<li>Surcharge (if any)</li>
		<li>Any Increase/Changes in the taxes levied by Govt.</li>
		</ul>
		</div>
		
		<div id="view4">
        <ul>
		<li><b>Aqueen Lavender Hotel, Singapore</b></li>
		<p>Duration: 2 Nights / 3 Days </p>
		<h4>Hotel facilities</h4>
		<p>
Fax Service | Luggage storage | Internet Access | Designated smoking area | Safety deposit box | Dry cleaning | Laundry/Valet | Air Conditioning | Front Desk | Laundry | Handicap Facilities | Business Facilities | Lift | Air conditioning | Bar | Restaurant | Ironing service | numberOfRooms:105 | Non-Smoking Room | Check-in From 14:00 hours | Check-out Until 12:00 hours | Free Wi-Fi | Coffee Shop | Free WiFi | Elevators | WiFi is available in all areas | 24-hour front desk | Safe Deposit | Non-smoking rooms | Facilities for disabled guests | Fax/photocopying | Allergy-free room |  </p>
		
		</div>
		
		<div id="view5">
        <h3>For travel between January 1, 2016 and May 31, 2016</h3>
		<h2>Price Details		Base Price</h2>
		<p>Single Occupancy :	Rs. 129808</p>
		<p>Twin Sharing :	Rs. 72116</p>
		<br>
		
		<h4>Terms & Conditions</h4>
		<ul>
		<li>Similar * means the hotels with per night room tariff differential in the range of ten-fifteen dollars. Package cost includes (ground handling charges) dollar segment, which will be taken out of your BTQ (Basic Travel Quota)</li>
		<li>Bookings are applicable only on twin sharing basis.Normal hotel check in time is 1400-1600 hours and check out time is 1000-1200 hours Package cost is subject to change until full confirmation for package tour.</li>
		<li>Rooms are subject to availability.</li>
		<li>Selection of seats in Airline is subject to availability and is at sole discretion of the airlines.</li>
		<li>All transfers tours based on Seat-In-Coach (SIC) basis (Shared Basis).</li>
		<li>Date and timing of tours programmed can be changed by local agent.</li>
		<li>As of now we are not holding any service, it is subject to availability. Booking process will start only after receiving booking amount.</li>
		<li>Room type (double or twin is subject to availability and is at sole discretion of the hotel)</li>
		<li>Above tour prices are subject to change in the event of increase in hotel room rates levy by the hotel especially during peak season/holiday surcharge and major events/fairs and convention.</li>
		<li>Tour is in group & one may have to wait intermittently for transfers especially for pick-up and dropping as transfers services are used for other group tourists too.</li>
		<li>The time schedule fixed by the local tour operator should be strictly adhered to. For any inconvenience, loss or consequence suffered due to tourists failure to keep the local tour operators timings, the tourist alone would be responsible. Please also note that unlike in the case of individual tailor made tour packages; you might have to adjust timings for the sake of general member of your tour group. Hotels mentioned now are only proposed at the moment. The hotel named in the service voucher shall be final.</li>
		<li>Scheduling & re-scheduling may be done on circumstance prevailing at the time tour operations in best interest of tour group at the discretion group coordinator (Destination Management Company).</li>
		<li>Quote is based on Rate of Exchange: 01 SGD = INR 49.00 Any increase in the same, shall be applicable at the day of payment. In case of any increase in currency more than 10 Paisa, Tour cost will be affected and supplement cost would be billed.</li>
		</ul>
		<h6>*All the prices are standardized and may vary for luxury suites.</h6>
		</div>
		<div id="view6">
		
			<h4>Singapore</h4>
			<p>Full of amazing and colourful contrasts, Singapore is arguably the most heterogeneous city in the world. A veritable melange of cultures and eras - everything collides and ends up in one piece: the potpourri city of Singapore - all seemingly symbolized in the half-fish half-lion Singapore icon called The Merlion. A spotless and efficient city, it is also home to modern architectural marvels and historical splendours. Singapore is known for its shopping, an acknowledged national pastime, and one that brings the world to its shores. From the Thieves Market to the Esplanade, Singapore is a truly cosmopolitan city, unforgettable in the extremes it encompasses.</p>
		</div>
		<div id="view7">
		<img src="./img/map_singapore.jpg" id="map" alt="Singapore_Map" style="border-radius: 10px; box-shadow:#ff6600">
		</div>
	</div>

</div>
<div id="price">
<br><br>
	<p style="font-size:20px">Original Price</p>
	<p style="font-size:20px"><del>Rs 75195</del></p>
	<br>
	<p style="font-size:30px; color:yellow">Rs 72116/-</p>
	<p style="font-size:25px">5N/6D package</p>
	<h5>*price per person on twin sharing basis</h5>
	<button id="btn"><a href="book.php">Book Now!</a></button>
</div>
<div id="cities">
	<h4>Package Summary</h4>
	<p><b>Starting City </b> Mumbai</p>
	<p><b>Duration</b>  5 Nights / 6 Days</p>
	<p><b>Tour Plan</b></p>
	<p>5N Singapore </p>
	
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
