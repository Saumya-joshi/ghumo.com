<!DOCTYPE html>
<html>
<head>
    <title>Beautiful Kashmir|Ghumo Khul Ke|Book Kasmir Packages on Ghumo.com</title>
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
	margin-top : 970px;
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
                    <li><a class="ns-img" href="img/kash1.jpg"></a></li>
                    <li><a class="ns-img" href="img/kash2.jpg"></a></li>
                    <li><a class="ns-img" href="img/kash3.jpg"></a></li>
                    <li><a class="ns-img" href="img/kash4.jpg"></a></li>
                    <li><a class="ns-img" href="img/kash5.jpg"></a></li>
                    <li><a class="ns-img" href="img/kash6.jpg"></a></li>
                    <li><a class="ns-img" href="img/kash7.jpg"></a></li>
                    <li><a class="ns-img" href="img/kash8.jpg"></a></li>
                    <li><a class="ns-img" href="img/kash9.jpg"></a></li>
                    <li><a class="ns-img" href="img/kash10.jpg"></a></li>
                    <li><a class="ns-img" href="img/kash11.jpg"></a></li>
                    <li><a class="ns-img" href="img/kash12.jpg"></a></li>
                    <li><a class="ns-img" href="img/kash13.jpg"></a></li>
                    <li><a class="ns-img" href="img/kash14.jpg"></a></li>
                    <li><a class="ns-img" href="img/kash15.jpg"></a></li>
                   </ul>
                <div class="fs-icon" title="Expand/Close"></div>
            </div>
            <div id="thumbnail-slider">
                <div class="inner">
                    <ul>
                        <li>
                            <a class="thumb" href="img/kash1.jpg"></a>
                            <span>0</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/kash2.jpg"></a>
                            <span>1</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/kash3.jpg"></a>
                            <span>2</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/kash4.jpg"></a>
                            <span>3</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/kash5.jpg"></a>
                            <span>4</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/kash6.jpg"></a>
                            <span>5</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/kash7.jpg"></a>
                            <span>6</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/kash8.jpg"></a>
                            <span>7</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/kash9.jpg"></a>
                            <span>8</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/kash10.jpg"></a>
                            <span>9</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/kash11.jpg"></a>
                            <span>10</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/kash12.jpg"></a>
                            <span>11</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/kash13.jpg"></a>
                            <span>12</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/kash14.jpg"></a>
                            <span>13</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/kash15.jpg"></a>
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
		<div id="view1">
        
		<h4>Holiday Highlight</h4>
		01 Shikara Ride
		
		<br><br><h4>Best Time to Visit</h4>
		<p>The best time to visit this mountain city is between May and September. The landscape is enchanting and the weather pleasant. It snows in the winter months in and around Srinagar and winters can be very severe but Gulmarg, a few hours away is a popular winter games destination.</p>
		<p>Preferred months : April, May, June, July, August, September, October</p>
		<br><h4>Description</h4>
		<p>If anyplace can boast of scenic extravaganza, it is Kashmir.Enjoy the profusion of colors in the Paradise on Earth with its rich traditions, historic Hindu temples and verdant hillsides. A lot can be explored and re-visited to admire Kashmirs breathtaking lakes, picturesque gardens, fir and pine forests, sparkling springs, milky glaciers and lush meadows.</p>
		<br><h4>Itinerary</h4>
		
		<p><b>Day 01:</b> Arrive at Srinagar</p>
		<p><b>Day 02:</b> In Srinagar: Local sightseeing Half a day</p>
		<p><b>Day 03: </b>Srinagar to Pahalgam: (97 kilometers / 3-4 hrs drive)</p>
		<p><b>Day 04: </b>Pahalgam to Gulmarg: (152 kilometers / 4-5 hrs drive)</p>
		<p><b>Day 05: </b>Pahalgam to Srinagar : (97 kms / 3-4 hours)</p>
		<p><b>Day 06: </b>Departure transfer to Airport:: (152 kilometers / 4-5 hrs drive)</p>
		<a href="#view3">View full details</a>
		
		<br><br><h4>Transportation</h4>
		<p>Package includes vehicle.</p><br><br><br>
		
		
		</div>
		<div id="view2">


		<h4>Inclusions</h4>
			<ul>
			<li>Accommodation in Hotel / Houseboats on twin sharing basis.</li>
			<li>Daily breakfast and dinner.</li>
			<li>Sightseeing as per the itinerary.</li>
			<li>All transfer and sightseeing by 01 Non A/C Qualis/Tavera.</li>
			<li>01 Shikara Ride.</li>
			<li>All Arrival/Departure transfer as mentioned in Itinerary.</li>
			<li>All applicable Taxes.</li>
			<li>Any future taxes levies will be charged extra.</li>
			</ul>
			
		<h4>Exclusions</h4>
		<ul>
		<li>Any Airfare, Train fare, Overland Journey which is not mentioned in the Itinerary.</li>
		<li>ny Medical/rescue evacuation due to mishaps.</li>
		<li>Any personal nature items like Laundry, bar bills, table bills, camera fee, tips or any other item.</li>
		<li>Mineral water / Soft or hard drinks / Sarters.</li>
		<li>Entrance Free.</li>
		<li>Horse Riding.</li>
		<li>Gondola Ride in Gulmarg.</li>
		<li>Any other things that is not included in the Package Cost Includes Column.</li>
		<li>3.09% service taxes extra.</li>
		<li>Cost incidental to any change in the itinerary/ stay on account of flight cancellation due to bad weather, ill health, roadblocks and/or any factors beyond control.</li>
		</ul>
		</div>
		
		<div id="view3">

		<h3>Itinerary</h3><br>
		<p><b>Day 01:- Arrive at Srinagar</b></p>
		<p>On your arrival at the Srinagar International Airport, you will be welcomed by our representative who will assist and escort you to your waiting vehicle. From the airport it is a 35 minutes drive through the heart of New Srinagar city. The drive takes you past the Abdullah bridge which connects the banks of the Jehlumriver, snaking its way towards the North-Western frontier of Kashmir. We arrive at the hotel/Houseboat and check in. Later we will go on a 90 minutesshikara ride in the lake. This boat ride glides you past some wonderful vegetable gardens and aquatic life. Dinner and Overnight in hotel/Houseboat.</p>
		<p><b>Day 02:- In Srinagar: Local sightseeing Half a day:</b></p>
		<p>Today we will do some half a day of local sightseeing that includes a visit to the famous Mughal gardens of Nishat and Shalimar. Built in between a period of 14 years the two gardens are a heritage left behind by the erstwhile Mughals, whose taste for laying exquisite gardens was fascinating. With a backdrop of the sprawling Zabarwanmountains, the gardens boast of green turfs, blooming flowers and cascading water fountains. We will explore the gardens and later drive back to the hotel for a dinner and Overnight stay.</p>
		<p><b>Day 03: Srinagar to Pahalgam: (97 kilometers / 3-4 hrs drive):</b></p>
		<p>We will begin our trip towards Pahalgam and drive on the National Highway 1A. This road connects the Valley to the rest of the country. We drive past the saffron fields of Pampore, the marvellous ruins of Avantipura and the village of Bijbehara which remains famous as the bread basket of Kashmir. You can even sample a few exotic breads sold by vendors near the road. We switch the the national highway at Khanabal and drive through the second largest city of Anantnag. From here the road turns scenic as we drive parallel on the Lidderriver flowing from the opposite direction. In Pahalgam we check in at the hotel and later do some nature walks to unwind ourselves. Overnight in hotel.</p>
		<p><b>Day 04: Pahalgam to Gulmarg: (152 kilometers / 4-5 hrs drive):</b></p>
		<p>After breakfast in the morning, we will begin our country tour towards Gulmarg. The drive past colorful villages and rice fields, gives you an insight of the rich cultural past of Kashmir. We arrive at a small picturesue market town of Tangmarg and drive ahead on a scenic drive of 14 kilometers to Gulmarg. We arrive in Gulmarg early in the afternoon and check in at the hotel. Later we will begin a short tour around the meadow familarising ourselves with the beauty. In Gulmarg we will board the Gondola cable car system, and ascend towards the Afarwatt Mountain range. The 08 minutes of ropeway will take you past colorful shepherd hutments to the lower ridge of the Afarwatt peak. From here you can click lots of photos of the nearby mountain ranges that stand tall like sentinels guarding the rich natural beauty of Kashmir valley. We descend back to Gulmarg base after an hour or so and later do some horse-riding to the strawberry valley. We will stay at the hotel for overnight.</p>
		<p><b>Day 05: Pahalgam to Srinagar : (97 kms / 3-4 hours):</b></p>
		<p>We will explore the valley and other side valleys today. Rest of the day will be at leisure for individual activities. In the evening we will drive back to Srinagar for our overnight stay. B&D included</p>
		<p><b>Day 06:Departure transfer to Airport:: (152 kilometers / 4-5 hrs drive):</b></p>
		<p>After a late morning breakfast, we will drive to the airport for your flight home. At the airport the driver will assist you with your luggage screening and drop you at outside the terminal gate.</p>
		<br>
		</div>
		<div id="view4">
        <ul>
		<li><b>Hotel Grand Jigar, Srinagar</b> (or similar hotel)</li>
		<p>Duration: 2 Nights / 3 Days </p>
		<h4>Hotel facilities</h4>
		<p>Airport Transfer Available / Surcharge | Doctor on Call | Laundry Service Available | Lobby | Parking Facilities Available | Reception | Multi Cuisine Restaurant  | Room Service  | Local Tour / Travel Desk | Ceiling Fan | 24 Hour Front Desk | Breakfast Available (surcharge) | Luggage Storage | Medical Assistance Available | Welcome Drinks | Housekeeping | Wake-up Call / Service | Extra Bed, Towels, Linens, Bedding (on request) | Front Desk | Coffee Shop / Cafe | ATM / Banking | Kitchen available (home cook food on request) | Toothbrush / Razor (on request) | Pick Up and Drop (Rly Station, Bus Stand, Temple) | Veg / Non Veg Kitchens Separate  | Shopping Drop Facility (on fixed timings) | Vegetarian Food / Jain Food Available | Extra Person / Child - Share the same room | Car Rental | Power Backup | Express Laundry | Taxi Services | Campfire / Bon Fire |  Drivers Rest Room | Room Heater | Internet Access - Complimentary | Internet Access | Family Room | Room Service (24 Hours) |  Cook Services | Air / Rail Booking | Medical Services | Travel Counter | </p>
		
		<li><b>Hotel Hill View, Pahalgam </b> (or similar hotel)</li>
		<p>Duration: 1 Nights / 2 Days </p>
		<h4>Hotel facilities</h4>
		<p>Doctor on Call | Dry Cleaning | Internet Access - Surcharge | Laundry Service Available | Parking Facilities Available | Front Desk | Multi Cuisine Restaurant  | Locker Facility | Local Tour / Travel Desk | </p>
		
		<li><b>Hotel Affarwat, Gulmarg</b> (or similar hotel)</li>
		<p>Duration: 1 Nights / 2 Days </p>
		<h4>Hotel facilities</h4>
		<p>Doctor on Call | Dry Cleaning | Laundry Service Available | Parking Facilities Available | Roof Top Restaurant / Dining  | Car Rental |</p>

		<li><b>	Deluxe Houseboats, Srinagar </b>(or similar hotel)</li>
		<p>Duration: 1 Nights / 2 Days</p>
		<h4>Hotel facilities</h4>
		<p>Doctor on Call | Dry Cleaning | Laundry Service Available | Reception | Multi Cuisine Restaurant  | Room Service  |</p>
		</ul><br><br>
		</div>
		
		<div id="view5">
        <h3>For travel between January 1, 2016 and May 31, 2016</h3>
		<h2>Price Details		Base Price</h2>
		<p>Single Occupancy :	Rs. 26567</p>
		<p>Twin Sharing :	Rs. 13284</p>
		<p>Extra Adult :	Rs. 4000</p>
		<p>Extra Child :	Rs. 3500</p>
		<br>
		
		<h4>Terms & Conditions</h4>
		<ul>
		<li>Price mentioned is on per person basis.</li>
		<li>Bookings are applicable only on twin sharing basis.</li>
		<li>Bookings are subject to availability with the hotel.</li>
		<li>Package rates are subject to change without any prior notice</li>
		<li>Vehicle as per the itinerary Not on Disposal.</li>
		<li>The above package rate is not valid during national holidays, festivals, long weekends, Christmas and New Year.</li>
		<li>Goibibo.com will provide alternate or similar category of hotel in case the hotel mentioned in program is not available.</li>
		<li>All cancellations & amendments will be done as per hotel policy.</li>
		<li>The package cannot be combined with any other offer.</li>
		<li>The guest must carry photo identification like Passport/Driving License/Voter ID Card IN ORIGINAL at the point of check in at the hotel.</li>
		<li>Goibibo.com reserves the right to change/modify or terminate the offer any time at its own discretion and without any prior notice.</li>
		<li>A Surcharge may be levied by the hotel during National Holidays/Festive period/Extended Weekends, New year etc.</li>
		</ul>
		<h6>*All the prices are standardized and may vary for luxury suites.</h6>
		</div>
		<div id="view6">
		
			<h4>Srinagar</h4>
			<p>Surrounded by lofty mountains and lush green fields, Srinagar is one of the most dazzling locations anywhere in the world. The literal meaning of Srinagar in Sanskrit is 'the city of wealth & abundance'. Nestled on the banks of the river Jhelum are the main places to visit in srinagar, this beautiful city is gifted with magnificent lakes such as Dal, Nagin and Anchar.</p>
			<br><h4>Gulmarg</h4>
			<p>The meaning of Gulmarg is the meadow of flower. Gulmarg is one of the fantastic places located in the state of Jammu and Kashmir. This is the blessed land where travelers enjoy to the fullest. It is popular for its astonishing beauty. You could see the beautiful landscape; get into adventure sports, such as skiing, golf, and trekking. </p>
			<br><h4>Pahalgam</h4>
			<p>Pahalgam is a town located in Anantnag district in the state of Jammu and Kashmir. It is located on the banks of River Laddar at an altitude of 7200 feet from the sea level. Pahalgam is one of the five tehsils of Anantnag district and the headquarters of the tehsil are located in the main town of Pahalgam. It is associated with Amarnath Yatra that takes place every year.</p>
		</div>
		<div id="view7">
		<img src="./img/map_kashmir.jpg" id="map" alt="Kashmir_Map" style="border-radius: 10px; box-shadow:#ff6600">
		</div>
	</div>

</div>
<div id="price">
<br><br>
	<p style="font-size:20px">Original Price</p>
	<p style="font-size:20px"><del>Rs 15190</del></p>
	<br>
	<p style="font-size:30px; color:yellow">Rs 13788/-</p>
	<p style="font-size:25px">5N/6D package</p>
	<h5>*price per person on twin sharing basis</h5>
	<button id="btn"><a href="book.php">Book Now!</a></button>
</div>
<div id="cities">
	<h4>Package Summary</h4>
	<p><b>Starting City </b> Srinagar</p>
	<p><b>Duration</b>  5 Nights / 6 Days</p>
	<p><b>Tour Plan</b></p>
	<p>2N Srinagar </p>
	<p>1N Pahalgam </p>
	<p>1N Gulmarg</p> 
	<p>1N Srinagar</p>
	
	
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
