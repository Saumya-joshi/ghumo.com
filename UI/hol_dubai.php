<!DOCTYPE html>
<html>
<head>
    <title>Unique Dubai |Ghumo Khul Ke|Book Dubai Packages on Ghumo.com</title>
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
	margin-top : 880px;
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

    <div id='ninja-slider'>
        
            <div class="slider-inner">
                <ul>
                    <li><a class="ns-img" href="img/dub1.jpg"></a></li>
                    <li><a class="ns-img" href="img/dub2.jpg"></a></li>
                    <li><a class="ns-img" href="img/dub3.jpg"></a></li>
                    <li><a class="ns-img" href="img/dub4.jpg"></a></li>
                    <li><a class="ns-img" href="img/dub5.jpg"></a></li>
                    <li><a class="ns-img" href="img/dub6.jpg"></a></li>
                    <li><a class="ns-img" href="img/dub7.jpg"></a></li>
                    <li><a class="ns-img" href="img/dub8.jpg"></a></li>
                    <li><a class="ns-img" href="img/dub9.jpg"></a></li>
                    <li><a class="ns-img" href="img/dub10.jpg"></a></li>
                    <li><a class="ns-img" href="img/dub11.jpg"></a></li>
                    <li><a class="ns-img" href="img/dub12.jpg"></a></li>
                    <li><a class="ns-img" href="img/dub13.jpg"></a></li>
                    <li><a class="ns-img" href="img/dub14.jpg"></a></li>
                    <li><a class="ns-img" href="img/dub15.jpg"></a></li>
                   </ul>
                <div class="fs-icon" title="Expand/Close"></div>
            </div>
            <div id="thumbnail-slider">
                <div class="inner">
                    <ul>
                        <li>
                            <a class="thumb" href="img/dub1.jpg"></a>
                            <span>0</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/dub2.jpg"></a>
                            <span>1</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/dub3.jpg"></a>
                            <span>2</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/dub4.jpg"></a>
                            <span>3</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/dub5.jpg"></a>
                            <span>4</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/dub6.jpg"></a>
                            <span>5</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/dub7.jpg"></a>
                            <span>6</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/dub8.jpg"></a>
                            <span>7</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/dub9.jpg"></a>
                            <span>8</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/dub10.jpg"></a>
                            <span>9</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/dub11.jpg"></a>
                            <span>10</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/dub12.jpg"></a>
                            <span>11</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/dub13.jpg"></a>
                            <span>12</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/dub14.jpg"></a>
                            <span>13</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/dub15.jpg"></a>
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
		<li><a href="#view3">Package Itinerary</a></li>
		<li><a href="#view4">Hotel Details</a></li>
		<li><a href="#view5">Date And Price</a></li>
		<li><a href="#view6">Destination</a></li>
		<li><a href="#view7">Map</a></li>

	</ul>

	<div class="tabcontents" data-persist="true">
		<div id="view1" style="y-overflow:scroll">
        
		<h4>Holiday Highlight</h4>
		Desert Safari with (BBQ Dinner, Belly Dancing, Sheesha smoking, Sunset stop) Dhow Cruise with Dinner.
		
		<br><br><h4>Description</h4>
		<p>Dubai has burst on to the global scene as perhaps one of the most happening cities in the world with its ambitious projects and unique events. And, much of the credit of promoting Dubai as a tourism and commerce hub can be attributed to Dubais Department of Tourism and Commerce Marketing. The potential of the tourism sector to stimulate economic and social development thereby transforming economies has been internationally acknowledged. Since its inception, DTCM has played a pivotal role in promoting Dubai and growing the economic contribution of tourism to the emirate.</p>
		<br><h4>Itinerary</h4>
		
		<p><b>Day 01:</b> Delhi - Arrive Dubai - Dhow Cruise with BBQ Buffet Dinner</p>
		<p><b>Day 02:</b>  Dubai - Half day city Tour & Desert Safari with Dinner</p>
		<p><b>Day 03: </b>Dubai - Free Day or Opt for optional tours</p>
		<p><b>Day 04: </b>Dubai - Free Day or Opt for optional tours</p>
		<p><b>Day 05: </b>Departure transfer to Airport.</p>
		<a href="#view3">View full details</a>
		
		<br><br><h4>Transportation</h4>
		<p>Package does not include vehicle.</p><br><br><br>
		
		
		</div>
		<div id="view2" style="y-overflow:scroll">


		<h4>Inclusions</h4>
			<ul>
			<li>Return Economy Class Airfare with Airline taxes</li>
			<li>04 Nights accommodation in a well appointed Room</li>
			<li>Daily breakfast at same hotel</li>
			<li>Two way Dubai airport transfer</li>
			<li>Half Day Dubai city Tour</li>
			<li>Desert Safari with (BBQ Dinner, Belly Dancing, Sheesha smoking, Sunset stop)</li>
			<li>Dhow Cruise with Dinner</li>
			<li>UAE Single entry Tourist visa + Ok to Board Charges</li>
			<li>All tours and transfer on Seat in Coach basis</li>
			</ul>
			
		<h4>Exclusions</h4>
		<ul>
		<li>3.50% Government service tax extra.</li>
		<li>Beverages & Meals not mentioned in inclusions.</li>
		<li>Entrance Fees for sight seeing places mentioned above</li>
		<li>Any other services not mentioned above</li>
		<li>Any Service not mentioned in Inclusions</li>
		<li>Travel Insurance</li>
		<li>Medical Travel insurance.</li>
		<li>Surcharge (if Any)</li>
		<li>Any Increase/Changes in the taxes levied by Govt.</li>
		<li>UAE City Tax, which is USD 2 to 5 Per Person per day according to star category of the hotel.</li>
		</ul>
		</div>
		
		<div id="view3" style="y-overflow:scroll">

		<h3>Itinerary</h3><br>
		<p><b>Day 01:- Delhi - Arrive Dubai - Dhow Cruise with BBQ Buffet Dinner</b></p>
		<p>On arrival at Dubai International Airport, you'll be transferred to your hotel. Check into the hotel. Check in time will be 1400 hours. Rest of the day free for rest. Later in evening, Enjoy Dhow Cruise - Cruising down Dubai creek is a novel experience, one which you cannot miss when in Dubai. Fancy having dinner on a Dhow Cruise with the fascinating lights of Dubai Creek and the soft music in the background. Sip your favorite drink and enjoy a BBQ buffet dinner on board the cruise. Later Transfer back to hotel and overnight stay at hotel.</p>
		<p><b>Day 2: Dubai - Half day city Tour & Desert Safari with Dinner</b></p>
		<p>After breakfast, you can embark on an exciting half-day city tour of Dubai where you will visit landmarks like Burj Al Arab, Jumeirah Mosque, Dubai Museum, ending it with shopping at Gold Souk. Also, later in the day, you'll get picked up from your hotel for a scintillating desert safari. Enjoy dinner after the safari and return to your hotel for a comfortable overnight stay.</p>
		<p><b>Day 3: Dubai - Free Day or Opt for optional tours</b></p>
		<p>After breakfast, you'll spend the morning at leisure. You can take optional tours likeBurj Khalifa, Aqua venture Park & Lost world at Atlantis Hotel. Comfortable overnight stay.</p>
		<p><b>Day 04: Dubai - Free Day or Opt for optional tours</b></p>
		<p>After breakfast, you'll spend the morning at leisure. You can take optional tours likeBurj Khalifa, Aqua venture Park & Lost world at Atlantis Hotel. Comfortable overnight stay.</p>
		<p><b>Day 5: Depart</b></p>
		<p>After breakfast today, spend some time at leisure and enjoy some last minute shopping or go for some tours, depending on your flight schedule. Check out of the hotel and get transferred to the airport to board your return flight.</p>
		<br>
		<br>
		</div>
		<div id="view4" style="y-overflow:scroll">
        <ul>
		<li><b>Ramada Hotel, Dubai</b> (or similar hotel)</li>
		<p>Duration: 4 Nights / 5 Days </p>
		<p>At a distance of 8.5 kilometres from the Dubai International Airport and 300 metres from the Al Fahidi Station, the luxurious Ramada Hotel is in the heart of Bur Dubai and features a gymnasium and an outdoor swimming pool. Wi Fi, high speed internet access is available at a charge. The business traveller can organize meetings, trainings or even seminars in one of the in house meeting rooms.

Guests are spoilt for choice when it comes to fine dining. Discover the flavours of Asia with a visit to Teppanyaki House and Dynasty restaurants. For mouth watering Indian cuisine, head to Tamaring restaurant. Of the 5 eclectic eating outlets, the Pastry Boutique has an array of desserts and even Turkish coffee.

The hotel offers beautifully furnished, spacious rooms with classic decor. Taking into account the needs of a leisure or business traveller, the hotel provides amenities like a spacious wardrobe area and closet, tea or coffee making facility, iron and ironing board. Some of the rooms offer complimentary buffet breakfast at The Bistro.

There are plenty of nearby sightseeing options. For shopping, Meena Bazaar is a short 5 minute walk from the hotel, while Dubai Museum and Dubai International Exhibition Centre are 10 minutes away!</p>
		<h4>Hotel facilities</h4>
		<p>Airport Transfer Available / Surcharge | Doctor on Call | Laundry Service Available | Lobby | Parking Facilities Available | Reception | Multi Cuisine Restaurant  | Room Service  | Local Tour / Travel Desk | Ceiling Fan | 24 Hour Front Desk | Breakfast Available (surcharge) | Luggage Storage | Medical Assistance Available | Welcome Drinks | Housekeeping | Wake-up Call / Service | Extra Bed, Towels, Linens, Bedding (on request) | Front Desk | Coffee Shop / Cafe | ATM / Banking | Kitchen available (home cook food on request) | Toothbrush / Razor (on request) | Pick Up and Drop (Rly Station, Bus Stand, Temple) | Veg / Non Veg Kitchens Separate  | Shopping Drop Facility (on fixed timings) | Vegetarian Food / Jain Food Available | Extra Person / Child - Share the same room | Car Rental | Power Backup | Express Laundry | Taxi Services | Campfire / Bon Fire |  Drivers Rest Room | Room Heater | Internet Access - Complimentary | Internet Access | Family Room | Room Service (24 Hours) |  Cook Services | Air / Rail Booking | Medical Services | Travel Counter | </p>
		
		</ul><br><br>
		</div>
		
		<div id="view5" style="y-overflow:scroll">
        <h3>For travel between July 25, 2015 and May 31, 2016</h3>
		<h2>Price Details		Base Price</h2>
		<p>Single Occupancy :	Rs. 87638</p>
		<p>Twin Sharing :	Rs. 48688</p>
		<br>
		
		<h4>Terms & Conditions</h4>
		<ul>
		<li>Similar * means the hotels with per night room tariff differential in the range of ten-fifteen dollars. Package cost includes (ground handling charges) dollar segment, which will be taken out of your BTQ (Basic Travel Quota)</li>
		<li>Normal hotel check in time is 1400-1600 hours and check out time is 1000-1200 hours Package cost is subject to change until full confirmation for package tour.</li>
		<li>Rooms are subject to availability.</li>
		<li>Selection of seats in Airline is subject to availability and is at sole discretion of the airlines.</li>
		<li>All transfers tours based on Seat-In-Coach (SIC) basis (Shared Basis).</li>
		<li>Date and timing of tours programmed can be changed by local agent.</li>
		<li>As of now we are not holding any service, it is subject to availability. Booking process will start only after receiving booking amount.</li>
		<li>Above tour prices are subject to change in the event of increase in hotel room rates levy by the hotel especially during peak season/holiday surcharge and major events/fairs and convention.</li>
		<li>Tour is in group & one may have to wait intermittently for transfers especially for pick-up and dropping as transfers services are used for other group tourists too.</li>
		<li>The time schedule fixed by the local tour operator should be strictly adhered to. For any inconvenience, loss or consequence suffered due to tourists failure to keep the local tour operators timings, the tourist alone would be responsible. Please also note that unlike in the case of individual tailor made tour packages; you might have to adjust timings for the sake of general member of your tour group. Hotels mentioned now are only proposed at the moment. The hotel named in the service voucher shall be final.</li>
		<li>Scheduling & re-scheduling may be done on circumstance prevailing at the time tour operations in best interest of tour group at the discretion group coordinator (Destination Management Company).</li>
		<li>Quote is based on Rate of Exchange: 01 USD = INR 60.00 Any increase in the same, shall be applicable at the day of payment. In case of any increase in currency more than 10 Paisa, Tour cost will be affected and supplement cost would be billed.</li>
		</ul>
		<h6>*All the prices are standardized and may vary for luxury suites.</h6>
		</div>
		<div id="view6" style="y-overflow:scroll">
		
			<h4>Dubai</h4>
			<p> Dubai is the most populous city in the United Arab Emirates (UAE).It is located on the southeast coast of the Persian Gulf and is one of the seven emirates that make up the country. Abu Dhabi and Dubai are the only two emirates to have veto power over critical matters of national importance in the country's legislature. The city of Dubai is located on the emirate's northern coastline and heads up the Dubai-Sharjah-Ajman metropolitan area. Dubai is to host World Expo 2020.

Dubai has emerged as a global city and business hub of the Middle East. It is also a major transport hub for passengers and cargo. By the 1960s Dubai's economy was based on revenues from trade and, to a smaller extent, oil exploration concessions, but oil was not discovered until 1966. Oil revenue first started to flow in 1969. Dubai's oil revenue helped accelerate the early development of the city, but its reserves are limited and production levels are low: today, less than 5% of the emirate's revenue comes from oil. The emirate's Western-style model of business drives its economy with the main revenues now coming from tourism, aviation, real estate, and financial services.Dubai has recently attracted world attention through many innovative large construction projects and sports events. The city has become iconic for its skyscrapers and high-rise buildings, in particular the world's tallest building, the Burj Khalifa. Dubai has been criticised for human rights violations concerning the city's largely South Asian workforce. Dubai's property market experienced a major deterioration in 2008–09 following the financial crisis of 2007–08,but the emirate's economy has made a return to growth, with a projected 2015 budget surplus.

As of 2012, Dubai is the 22nd most expensive city in the world and the most expensive city in the Middle East. In 2014, Dubai's hotel rooms were rated as the second most expensive in the world, after Geneva. Dubai was rated as one of the best places to live in the Middle East by American global consulting firm Mercer.</p>
			<br><br>
		</div>
		<div id="view7" style="y-overflow:scroll">
		
		<img src="./img/map_dubai.gif" id="map" alt="Dubai_Map" style="border-radius: 10px; box-shadow:#ff6600">
		</div>
	</div>

</div>
<div id="price">
<br><br>
	<p style="font-size:20px">Original Price</p>
	<p style="font-size:20px"><del>Rs 51900</del></p>
	<br>
	<p style="font-size:30px; color:yellow">Rs 48688/-</p>
	<p style="font-size:25px">4N/5D package</p>
	<h5>*price per person on twin sharing basis</h5>
	<button id="btn"><a href="book.html">Book Now!</a></button>
</div>
<div id="cities">
	<h4>Package Summary</h4>
	<p><b>Starting City </b> New Delhi</p>
	<p><b>Duration</b>  4 Nights / 5 Days</p>
	<p><b>Tour Plan</b></p>
	<p>4N Dubai </p>
	
	
	
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
