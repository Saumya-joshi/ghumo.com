<!DOCTYPE html>
<html>
<head>
    <title>Perfect Thailand|Ghumo Khul Ke|Book Thailand Packages on Ghumo.com</title>
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
	height: 1200px;
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
	margin-top : 1100px;
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
                    <li><a class="ns-img" href="img/thai1.jpg"></a></li>
                    <li><a class="ns-img" href="img/thai2.jpg"></a></li>
                    <li><a class="ns-img" href="img/thai3.jpg"></a></li>
                    <li><a class="ns-img" href="img/thai4.jpg"></a></li>
                    <li><a class="ns-img" href="img/thai5.jpg"></a></li>
                    <li><a class="ns-img" href="img/thai6.jpg"></a></li>
                    <li><a class="ns-img" href="img/thai7.jpg"></a></li>
                    <li><a class="ns-img" href="img/thai8.jpg"></a></li>
                    <li><a class="ns-img" href="img/thai9.jpg"></a></li>
                    <li><a class="ns-img" href="img/thai10.jpg"></a></li>
                    <li><a class="ns-img" href="img/thai11.jpg"></a></li>
                    <li><a class="ns-img" href="img/thai12.jpg"></a></li>
                    <li><a class="ns-img" href="img/thai13.jpg"></a></li>
                    <li><a class="ns-img" href="img/thai14.jpg"></a></li>
                    <li><a class="ns-img" href="img/thai15.jpg"></a></li>
                   </ul>
                <div class="fs-icon" title="Expand/Close"></div>
            </div>
            <div id="thumbnail-slider">
                <div class="inner">
                    <ul>
                        <li>
                            <a class="thumb" href="img/thai1.jpg"></a>
                            <span>0</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/thai2.jpg"></a>
                            <span>1</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/thai3.jpg"></a>
                            <span>2</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/thai4.jpg"></a>
                            <span>3</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/thai5.jpg"></a>
                            <span>4</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/thai6.jpg"></a>
                            <span>5</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/thai7.jpg"></a>
                            <span>6</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/thai8.jpg"></a>
                            <span>7</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/thai9.jpg"></a>
                            <span>8</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/thai10.jpg"></a>
                            <span>9</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/thai11.jpg"></a>
                            <span>10</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/thai12.jpg"></a>
                            <span>11</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/thai13.jpg"></a>
                            <span>12</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/thai14.jpg"></a>
                            <span>13</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/thai15.jpg"></a>
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
		Inclusive of return airfare, Coral Island tour with Indian Lunch
		
		<br><br><h4>Description</h4>
		<p>Thailand's beaches and islands attract millions of visitors each year from all over the globe. The bustling, administrative centre of Phuket is often overlooked in favour of the beaches, but there's a lot to see and do (and spend your money on!) in Phuket City/Town. Having been recently upgraded to city status, Phuket City features an exciting mix of old and new, simple and sophisticated, peaceful and pulsating. The activity in Phuket City is nearly around the clock. In the early morning, stoic monks take to the streets on their daily alms rounds and the fresh market buzzes with restaurant owners buying ingredients for the day's meals. Non-stop bustle characterizes the daytime, and lasts well into the evening. Nights are reserved for enjoying good company, whether at a restaurant, a disco, a quiet bar, or a combination of all three.</p>
		<br><h4>Itinerary</h4>
		</div>
		<div id="view2">


		<h4>Inclusions</h4>
			<ul>
			<li>Return economy class airfare</li>
			<li>2 Nights Accommodation in Phuket.(The Crib Patong / Equivalent*)</li>
			<li>2 Nights Accommodation in Pattaya.(Citin Garden Resort Pattaya / Equivalent*)</li>
			<li>2 Nights Accommodation in Bangkok.(Citin Pratunam / Equivalent*)</li>
			<li>Daily Breakfast</li>
			<li>Half day Phuket City Tour</li>
			<li>Half day Bangkok City Tour with Gems gallery</li>
			<li>Coral Island tour with lunch in Pattaya</li>
			<li>Return Airport transfers</li>
			<li>All Tours & Transfers on Seat In Coach (Shared) basis</li>
			</ul>
			
		<h4>Exclusions</h4>
		<ul>
		<li>3.50% Government service tax extra.</li>
		<li>Beverages, Lunch & Dinner throughout the tour.</li>
		<li>Entrance Fees for sight seeing places mentioned above</li>
		<li>Visa charges</li>
		<li>Any other services not mentioned above</li>
		<li>Any Service not mentioned in Inclusions.</li>
		<li>Travel Insurance</li>
		<li>Medical Travel Insurance</li>
		<li>Surcharge(if any)</li>
		<li>Any Increase/Changes in the taxes levied by Govt.</li>
		</ul>
		</div>
		<div id="view4">
        <ul>
		<li><b>Citin Pratunam Bangkok Hotel, Bangkok</b></li>
		<br>
		<h4>Hotel facilities</h4>
		<p>steamroom | laundry service | Internet Access | Free Wi-Fi in all rooms | business center | safety deposit boxes | concierge | tours | spa | elevator | shuttle service | Room service | smoking area | Restaurant | airport transfer | sauna | Sports and Recreation | babysitting | coffee shop | Wi-Fi in public areas | 24-hour front desk | Fitness center | massage | </p>
		
		<li><b>The Crib Patong, Phuket </b></li>
		<br>
		<h4>Hotel facilities</h4>
		<p>outdoor pool | coffee shop | bar | laundry service | Restaurant | Internet Access | Wi-Fi in public areas | airport transfer | free Wi-Fi in all rooms | 24-hour front desk | elevator | safety deposit boxes | Fitness center | shuttle service | luggage storage | car park | shared lounge/TV area | Parking | Room service | Swimming Pool | smoking area | </p>
		
		<li><b>Citin Garden Resort, Pattaya</b> (or similar hotel)</li>
		<br>
		<h4>Hotel facilities</h4>
		<p>Doctor on Call | Dry Cleaning | Laundry Service Available | Parking Facilities Available | Roof Top Restaurant / Dining  | Car Rental |</p>
		</ul><br><br>
		</div>
		
		<div id="view5">
        <h3>For travel between January 1, 2016 and May 31, 2016</h3>
		<h2>Price Details		Base Price</h2>
		<p>Single Occupancy :	Rs. 89345</p>
		<p>Twin Sharing :	Rs. 50100</p>
		<br>
		
		<h4>Terms & Conditions</h4>
		<ul>
		<li>Similar * means the hotels with per night room tariff differential in the range of ten-fifteen dollars. Package cost includes (ground handling charges) dollar segment, which will be taken out of your BTQ (Basic Travel Quota)</li>
		<li>Normal hotel check in time is 1400-1600 hours and check out time is 1000-1200 hours Package cost is subject to change until full confirmation for package tour.</li>
		<li>Rooms are subject to availability.</li>
		<li>Selection of seats in Airline is subject to availability and is at sole discretion of the airlines.</li>
		<li>All transfers tours based on Seat-In-Coach (SIC) basis (Shared Basis).</li>
		<li>Date and timing of tours programmed can be changed by local agent.</li>
		<li>ghumo.com will provide alternate or similar category of hotel in case the hotel mentioned in program is not available.As of now we are not holding any service, it is subject to availability. Booking process will start only after receiving booking amount.</li>
		<li>Room type (double or twin is subject to availability and is at sole discretion of the hotel)</li>
		<li>Above tour prices are subject to change in the event of increase in hotel room rates levy by the hotel especially during peak season/holiday surcharge and major events/fairs and convention.</li>
		<li>Tour is in group & one may have to wait intermittently for transfers especially for pick-up and dropping as transfers services are used for other group tourists too.</li>
		<li>The time schedule fixed by the local tour operator should be strictly adhered to. For any inconvenience, loss or consequence suffered due to tourists failure to keep the local tour operators timings, the tourist alone would be responsible. Please also note that unlike in the case of individual tailor made tour packages; you might have to adjust timings for the sake of general member of your tour group. Hotels mentioned now are only proposed at the moment. The hotel named in the service voucher shall be final.</li>
		<li>Scheduling & re-scheduling may be done on circumstance prevailing at the time tour operations in best interest of tour group at the discretion group coordinator (Destination Management Company).</li>
		<li>Quote is based on Rate of Exchange: 01 USD = INR 60.00 Any increase in the same, shall be applicable at the day of payment. In case of any increase in currency more than 10 Paisa, Tour cost will be affected and supplement cost would be billed.</li>
		</ul>
		<h6>*All the prices are standardized and may vary for luxury suites.</h6>
		</div>
		<div id="view6">
		
			<h4>Pattaya</h4>
			<p></p>
			<br><h4>Phuket</h4>
			<p></p>
			<br><h4>Bangkok</h4>
			<p></p>
		</div>
		<div id="view7">
		<img src="./img/map_thailand.jpg" id="map" alt="Thailand_Map" style="border-radius: 10px; box-shadow:#ff6600">
		</div>
	</div>

</div>
<div id="price">
<br><br>
	<p style="font-size:20px">Original Price</p>
	<p style="font-size:20px"><del>Rs 55963</del></p>
	<br>
	<p style="font-size:30px; color:yellow">Rs 50100/-</p>
	<p style="font-size:25px">6N/7D package</p>
	<h5>*price per person on twin sharing basis</h5>
	<button id="btn"><a href="book.html">Book Now!</a></button>
	</div>
<div id="cities">
	<h4>Package Summary</h4>
	<p><b>Starting City </b> Delhi</p>
	<p><b>Duration</b>  6 Nights / 7 Days</p>
	<p><b>Tour Plan</b></p>
	<p>2N Phuket </p>
	<p>2N Pattaya </p>
	<p>2N Bangkok</p> 
	
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
