<!DOCTYPE html>
<html>
<head>
    <title>Adorable Kerala|Ghumo Khul Ke|Book Kerala Packages on Ghumo.com</title>
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
                    <li><a class="ns-img" href="img/ker1.jpg"></a></li>
                    <li><a class="ns-img" href="img/ker2.jpg"></a></li>
                    <li><a class="ns-img" href="img/ker3.jpg"></a></li>
                    <li><a class="ns-img" href="img/ker4.jpg"></a></li>
                    <li><a class="ns-img" href="img/ker5.jpg"></a></li>
                    <li><a class="ns-img" href="img/ker6.jpg"></a></li>
                    <li><a class="ns-img" href="img/ker7.jpg"></a></li>
                    <li><a class="ns-img" href="img/ker8.jpg"></a></li>
                    <li><a class="ns-img" href="img/ker9.jpg"></a></li>
                    <li><a class="ns-img" href="img/ker10.jpg"></a></li>
                    <li><a class="ns-img" href="img/ker11.jpg"></a></li>
                    <li><a class="ns-img" href="img/ker12.jpg"></a></li>
                    <li><a class="ns-img" href="img/ker13.jpg"></a></li>
                    <li><a class="ns-img" href="img/ker14.jpg"></a></li>
                    <li><a class="ns-img" href="img/ker15.jpg"></a></li>
                   </ul>
                <div class="fs-icon" title="Expand/Close"></div>
            </div>
            <div id="thumbnail-slider">
                <div class="inner">
                    <ul>
                        <li>
                            <a class="thumb" href="img/ker1.jpg"></a>
                            <span>0</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/ker2.jpg"></a>
                            <span>1</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/ker3.jpg"></a>
                            <span>2</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/ker4.jpg"></a>
                            <span>3</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/ker5.jpg"></a>
                            <span>4</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/ker6.jpg"></a>
                            <span>5</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/ker7.jpg"></a>
                            <span>6</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/ker8.jpg"></a>
                            <span>7</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/ker9.jpg"></a>
                            <span>8</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/ker10.jpg"></a>
                            <span>9</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/ker11.jpg"></a>
                            <span>10</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/ker12.jpg"></a>
                            <span>11</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/ker13.jpg"></a>
                            <span>12</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/ker14.jpg"></a>
                            <span>13</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/ker15.jpg"></a>
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
		Sightseeing at Munnar and Cochin and visit Cheyyappara water falls		
		<br><br><h4>Best Time to Visit</h4>
		<p>Kerala weather can be summarized into winter, summer and monsoon. The winter period is from October to February. The climate at this point in Kerala is moderate and pleasant. Summer is generally in between March and May and the climate is hot and humid at this time of the year. During monsoons that lie between June and September, the atmosphere is rainy and windy. Winter is the best and peak season because it has pleasant climatic conditions with respect to any other state of India. Since the temperature drops down slightly, climatic conditions remain a bit mild and pleasant. It is therefore the most preferable time to enjoy at the beaches, backwaters and the hills of Kerala. Winter period of Kerala is also the best time to witness some of the greatest Hindu festivals of the country, Christmas eve celebration and traditional festivals and customs. One feels like a true Keralite during this time of the year because of all the occasions happening in and around the place. If you're planning for a tour in Kerala, book your hotel rooms and/or airline/train tickets in advance so that you can witness God's own country's magic at its best. Best time for heavy discounts and budget holidays in Kerala is during the summer. The climate remains hot and humid at this time but the hill stations of Munnar and Thekkady are pleasant at this time. Kerala during monsoon is best for Ayurvedic Treatment. The preferred time to visit Kerala is during April and October.</p>
		<p>Preferred months : April, May, June, July, August, September</p>
		<br><h4>Description</h4>
		<p>With the Arabian Sea in the west, the Western Ghats towering 500-2700 ms in the east and networked by 44 rivers, Kerala enjoys unique geographical features. This has made it one of the most sought after destinations in Asia. An equable climate, long shoreline with serene beaches, tranquil stretches of emerald backwaters, lush green hill stations, exotic wildlife, cool waterfalls, sprawling plantations and paddy fields are what define Kerala. Apart from these, the Ayurvedic health holidays, enchanting art forms, magical festivals, historic and cultural monuments, and mouth watering cuisine, all add up as delights of the place. These charming destinations offer a unique experience and are located at a distance of just two hour drive from each other. This is a singular advantage that no other destinations offer. The beautiful palm fringed beaches of Kovalam and Varkala and the majesty of the undulating hills of Munnar and Vagamon are some of the many reasons to visit the heavenly land of Kerala. The serenity of the pristine backwaters of Kumarakom and Kuttanad and the enchanting woods and forests of Thekkady and Silent Valley will have you bowled over again and again and again.</p>
		<br><h4>Itinerary</h4>
		
		<p><b>Day 01:</b> Arrive at Cochin</p>
		<p><b>Day 02:</b> Sightseeing in Munnar</p>
		<p><b>Day 03: </b>Munnar - Thekkady (90 kms. / 1-2 hrs)</p>
		<p><b>Day 04: </b>Thekkady - Alleppey (139 kms. / 2-3 hrs)</p>
		<p><b>Day 05: </b> Alleppey - Cochin (54 kms. / 1-2 hrs)</p>
		<p><b>Day 06: </b>Cochin Departure</p>
		<a href="#view3">View full details</a>
		
		<br><br><h4>Transportation</h4>
		<p>Package includes vehicle.</p>
		
		
		</div>
		<div id="view2">


		<h4>Inclusions</h4>
			<ul>
			<li>Accommodation in Hotel / Houseboats on twin sharing basis.</li>
			<li>Daily breakfast and dinner.</li>
			<li>Assistance on Arrival & Departure.</li>
			<li>02 Hrs Motor Boat Cruise in Alleppey</li>
			<li>Exclusive Indigo A/C vehicle for Transfers & Sightseeing.</li>
			<li>All applicable hotel taxes.</li>
			</ul>
			
		<h4>Exclusions</h4>
		<ul>
		<li>3.50% Government service tax extra.</li>
		<li>Motor Boat Cruise in Alleppey applicable on without houseboat package</li>
		<li>Any Air or train fare. Monument fee / Camera fee.</li>
		<li>Kind of Personal Expenses or Optional Tours/Meals other than specified.</li>
		<li>Cost does not include any other thing apart from the itinerary inclusions.</li>
		<li>Dlx Houseboat supplement cost is Rs.2800/- per head.</li>
		<li>Transportation as per itinerary only (not available at disposal).</li>
		<li>Extra Child without bed in standard Rs 1800/- Deluxe 2500/- Luxury 5000/-</li>
		<li>Houseboat supplement cost in Standard Rs 4000, Deluxe Rs 2750 for Luxury no extra cost</li>
		<li>Medical Travel insurance.</li>
		<li>Surcharges applicable during Festival, Peak Season & Special Events.</li>
		<li>Any Increase/Changes in the taxes levied by Govt.</li>
		<li>Any cost arising due to natural calamities like, landslides, roadblocks etc (to be borne by the clients directly on the spot).</li>
		</ul>
		</div>
		
		<div id="view3">

		<h3>Itinerary</h3><br>
		<p><b>Day 01:- Arrive at Cochin</b></p>
		<p>Our friendly representative welcomes you at Cochin Airport or Railway Station and helps you proceed to Munnar. It is called as Nature Lovers Paradise and is at 1800 metres above the sea level. On the way to Munnar, youll visit the Cheeyappara waterfalls. Check-in to hotel/resort and enjoy an overnight stay at the Munnar hotel.</p>
		<p><b>Day 2:- Sightseeing at Munnar</b></p>
		<p>After breakfast, tour proceeds for Munnar sightseeing. A morning visit to Eravikulam National Park is sure to refresh you. In the afternoon, visit Mattupetty Dam/Kundala dam for boating, Eco point and Tata Tea museum. Evening at leisure. Overnight stay at Munnar hotel.</p>
		<p><b>Day 3:- Munnar - Thekkady (90 kms. / 1-2 hrs)</b></p>
		<p>Checkout from the hotel/resort after breakfast and proceed to Thekkady. Check-in to hotel/resort. Sightseeing of Thekkady: Go for Plantation Tour, Evening boat ride to National Park. Shop around during evening marked for personal leisure time. The day completes with an overnight stay at Thekkady.</p>
		<p><b>Day 4:- Thekkady - Alleppey (139 kms. / 2-3 hrs)</b></p>
		<p>After breakfast, checkout from the hotel and proceed to Alleppey which has natural beauty in abundance. It is also known as the Venice of the East and is famous for the backwaters, boat races, houseboat holidays, beaches, marine products and coir products. Check-in at your hotel and visit beach in the evening. End the day with an overnight stay at the hotel.</p>
		<p><b>Day 5:- Alleppey - Cochin (54 kms. / 1-2 hrs)</b></p>
		<p>After breakfast, checkout from the hotel so as to proceed to Cochin. Check-in at the hotel/resort once you reach Cochin. The day comprises sightseeing places at Cochin like Dutch Palace, The Jewish Synagogue, St. Francis Church, Chinese fishing nets, Santa Cruz Basilica etc, Also, get to view an array of shops with antiques, fabrics & jewellery. Thereafter, return back to the hotel for an overnight stay.</p>
		<p><b>Day 06:- Cochin Departure</b></p>
		<p>After breakfast, our representative helps you to proceed to the airport /railway station for your departure.</p>
		<br>
		</div>
		<div id="view4">
        <ul>
		<li><b>Munnar Clouds, Munnar</b></li>
		<p>Duration: 2 Nights / 3 Days </p>
		<h4>Hotel facilities</h4>
		<p>Airport Transfer Available / Surcharge | Doctor on Call | Laundry Service Available | Lobby | Parking Facilities Available | Reception | Room Service  | Local Tour / Travel Desk | Ceiling Fan | 24 Hour Front Desk | Breakfast Available (surcharge) | Luggage Storage | Medical Assistance Available | Welcome Drinks | Housekeeping | Wake-up Call / Service | Extra Bed, Towels, Linens, Bedding (on request) | Front Desk |Pick Up and Drop (Rly Station, Bus Stand, Temple) | Veg / Non Veg Kitchens Separate  | Shopping Drop Facility (on fixed timings) | Vegetarian  </p>
		
		<li><b>Hotel Sandra Palace, Thekkady</b></li>
		<p>Duration: 1 Nights / 2 Days </p>
		<h4>Hotel facilities</h4>
		<p>Doctor on Call | Dry Cleaning | Internet Access - Surcharge | Laundry Service Available | Non Smoking Rooms | Parking Facilities Available | Front Desk | Multi Cuisine Restaurant  | Local Tour / Travel Desk | Major Credit Cards Accepted | 24 Hour Front Desk | Luggage Storage | Medical Assistance Available | Welcome Drinks | Power Backup | Express Laundry | Internet Access | Newspapers In Lobby | Outdoor Parking - Secured | Parking Facility | </p>
		
		<li><b>Suvasam Lake Resort,(Ktdc), Alleppey</b> </li>
		<p>Duration: 1 Nights / 2 Days </p>
		<h4>Hotel facilities</h4>
		<p>Doctor on Call | Laundry Service Available | Multi Cuisine Restaurant  | Gardens | Multi Lingual Staff | Conference Facility  | </p>

		<li><b>	Aishwarya, Cochin</b></li>
		<p>Duration: 1 Nights / 2 Days</p>
		<h4>Hotel facilities</h4>
		<p>24-hour front desk | Air-conditioned public areas | Airport transportation(surcharge) | Banquet facilities | Breakfast services | Complimentary Newspapers in lobby | Babysitting or child care | Coffee shop or cafe | Luggage storage | Backup generator | Laundry facilities | Number of floors | Parking(free) | Parking nearby | Restaurant | Room service | Safe deposit box-front desk | Security guard | Smoke-free property | Currency exchange | Doorman | Elevator/lift | Express check-in/check-out | Firplace in lobby | Floor butler | Travel counter | </p>
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
		<li>ghumo.com will provide alternate or similar category of hotel in case the hotel mentioned in program is not available.</li>
		<li>All cancellations & amendments will be done as per hotel policy.</li>
		<li>The package cannot be combined with any other offer.</li>
		<li>The guest must carry photo identification like Passport/Driving License/Voter ID Card IN ORIGINAL at the point of check in at the hotel.</li>
		<li>ghumo.com reserves the right to change/modify or terminate the offer any time at its own discretion and without any prior notice.</li>
		<li>A Surcharge may be levied by the hotel during National Holidays/Festive period/Extended Weekends, New year etc.</li>
		</ul>
		<h6>*All the prices are standardized and may vary for luxury suites.</h6>
		</div>
		<div id="view6">
		
			<h4>Cochin</h4>
			<p>Kochi (colonial name Cochin) is a vibrant city situated on the south-west coast of the Indian peninsula in the breathtakingly scenic and prosperous state of Kerala, hailed as 'God's Own Country'. Its strategic importance over the centuries is underlined by the sobriquet Queen of the Arabian Sea. Informally, Cochin is also referred to as the Gateway to Kerala.</p>
			<br><h4>Munnar</h4>
			<p>Munnar is a magnificent hill station located on the Western Ghats in the Idukki district of the Kerala. This place is known as a home to an array of mountains. Munnar Travel Guide dilates the beautiful lush green hill station that is bounded by south India's highest tea gardens. The early history of Munnar is not perfectly known today.</p>
			<br><h4>Alleppey</h4>
			<p>Blessed with a wide number of waterways, lagoons, lakes and canals Alleppey is an aquatic paradise within the folds of Gods own country and is aptly called "Venice of the East". This lively town was founded by the Divan of Travanacore, Raja Keshawadasan. While sailing on houseboats in Alleppey, you can witness the charm of this immaculate backwater town.</p>
			<br><h4>Thekkady</h4>
			<p>The lush green surrounding, the picturesque and serene lakes here will take your breath away and make your holiday here memorable.Nestled in the Idukki district of Gods own country, Thekkady Kerela is one of those impressive places people love to visit again and again. </p>
		</div>
		<div id="view7">
		<img src="./img/map_kerala.jpg" id="map" alt="Kerala_Map" style="border-radius: 10px; box-shadow:#ff6600">
		</div>
	</div>

</div>
<div id="price">
<br><br>
	<p style="font-size:20px">Original Price</p>
	<p style="font-size:20px"><del>Rs 14688</del></p>
	<br>
	<p style="font-size:30px; color:yellow">Rs 13284/-</p>
	<p style="font-size:25px">5N/6D package</p>
	<h5>*price per person on twin sharing basis</h5>
	<button id="btn"><a href="book.php">Book Now!</a></button>

</div>
<div id="cities">
	<h4>Package Summary</h4>
	<p><b>Starting City </b> Cochin</p>
	<p><b>Duration</b>  5 Nights / 6 Days</p>
	<p><b>Tour Plan</b></p>
	<p>2N Munnar</p>
	<p>1N Thekkady</p>
	<p>1N Alleppey</p> 
	<p>1N Cochin</p>
	
	
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
