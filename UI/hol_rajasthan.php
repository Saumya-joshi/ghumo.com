<!DOCTYPE html>
<html>
<head>
    <title>Royal Rajastan|Ghumo Khul Ke|Book Rajasthan Packages on Ghumo.com</title>
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
	height: 1400px;
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
	height: 400px;
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
	margin-top : 1460px;
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
                    <li><a class="ns-img" href="img/raj1.jpg"></a></li>
                    <li><a class="ns-img" href="img/raj2.jpg"></a></li>
                    <li><a class="ns-img" href="img/raj3.jpg"></a></li>
                    <li><a class="ns-img" href="img/raj4.jpg"></a></li>
                    <li><a class="ns-img" href="img/raj5.jpg"></a></li>
                    <li><a class="ns-img" href="img/raj6.jpg"></a></li>
                    <li><a class="ns-img" href="img/raj7.jpg"></a></li>
                    <li><a class="ns-img" href="img/raj8.jpg"></a></li>
                    <li><a class="ns-img" href="img/raj9.jpg"></a></li>
                    <li><a class="ns-img" href="img/raj10.jpg"></a></li>
                    <li><a class="ns-img" href="img/raj11.jpg"></a></li>
                    <li><a class="ns-img" href="img/raj12.jpg"></a></li>
                    <li><a class="ns-img" href="img/raj13.jpg"></a></li>
                    <li><a class="ns-img" href="img/raj14.jpg"></a></li>
                    <li><a class="ns-img" href="img/raj15.jpg"></a></li>
                   </ul>
                <div class="fs-icon" title="Expand/Close"></div>
            </div>
            <div id="thumbnail-slider">
                <div class="inner">
                    <ul>
                        <li>
                            <a class="thumb" href="img/raj1.jpg"></a>
                            <span>0</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/raj2.jpg"></a>
                            <span>1</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/raj3.jpg"></a>
                            <span>2</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/raj4.jpg"></a>
                            <span>3</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/raj5.jpg"></a>
                            <span>4</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/raj6.jpg"></a>
                            <span>5</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/raj7.jpg"></a>
                            <span>6</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/raj8.jpg"></a>
                            <span>7</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/raj9.jpg"></a>
                            <span>8</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/raj10.jpg"></a>
                            <span>9</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/raj11.jpg"></a>
                            <span>10</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/raj12.jpg"></a>
                            <span>11</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/raj13.jpg"></a>
                            <span>12</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/raj14.jpg"></a>
                            <span>13</span>
                        </li>
                        <li>
                            <a class="thumb" href="img/raj15.jpg"></a>
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
		As far as as every one knows that being the driest place in India, the climate of Rajasthan stays extremely beautiful during the period of October to December & January to March In afternoon climate get hot and in the night time it goes in minus temperature
		
		<br><h4>Description</h4>
		<p>Visit Rajasthan this holiday season and experience the vibrant lifestyle and warm hospitality of Rajasthanis. Unfold the legacy of the royal families and admire the grandeur of forts and palaces of this culturally rich state of India.</p>
		<br><h4>Itinerary</h4>
		
		<p><b>Day 01:</b> Arrival Delhi</p>
		<p><b>Day 02:</b> Delhi - Agra ( By road Approx. 4 Hrs.)</p>
		<p><b>Day 03: </b>Agra - Jaipur (By road Approx. 5 Hrs.)</p>
		<p><b>Day 04: </b> Jaipur - Udaipur ( By road Apprx. 8 Hrs.)</p>
		<p><b>Day 05: </b>Udaipur</p>
		<p><b>Day 06: </b> Udaipur - Jodhpur ( By road Apprx. 7 Hrs.) via Ranakpur</p>
		<p><b>Day 07:</b>Jodhpur</p>
		<p><b>Day 08:</b>Jodhpur - Jaisalmer ( By road Approx. 7 Hrs.)</p>
		<p><b>Day 09:</b>Jaisalmer</p>
		<p><b>Day 10:</b>Jaisalmer - Bikaner ( By road Approx. 6 Hrs.)</p>
		<p><b>Day 11:</b>Bikaner - Mandawa ( By road Approx. 06 Hrs.)</p>
		<p><b>Day 12:</b>Mandawa - Delhi (By road Approx. 06 Hrs.) - Departure</p>
		
		<a href="#view3">View full details</a>
		
		<br><br><h4>Transportation</h4>
		<p>Package includes vehicle.</p><br><br><br>
		
		
		</div>
		<div id="view2">


		<h4>Inclusions</h4>
			<ul>
			<li>Stay in a well appointed room for 11 nights and 12 days.</li>
			<li>Daily breakfast and dinner.</li>
			<li>Sightseeing as per the itinerary.</li>
			<li>All transfer and sightseeing by an A/C Indigo.</li>
			<li>All Arrival/Departure transfer as mentioned in Itinerary.</li>
			<li>All applicable Taxes.</li>
			<li>Any future taxes levies will be charged extra.</li>
			</ul>
			
		<h4>Exclusions</h4>
		<ul>
		<li>3.09% Government service tax extra.</li>
		<li>Any Jeep / Elephant Safari at Amer fort.</li>
		<li>Any Air or train fare. Monument fee / Camera fee.</li>
		<li>Kind of Personal Expenses or Optional Tours/Meals other than specified.</li>
		<li>Cost does not include any other thing apart from the itinerary inclusions.</li>
		<li>Transportation as per itinerary only (not available at disposal).</li>
		<li>Medical Travel insurance.</li>
		<li>Surcharges applicable during Festival, Peak Season & Special Events.</li>
		<li>Any changes in the taxes levied by Govt.</li>
		
		</ul>
		</div>
		
		<div id="view3">

		<h3>Itinerary</h3><br>
		<p><b>Day 01 : Arrival Delhi</b></p>
		<p>Arrive Delhi, meet assist at the airport and transfer to hotel. Proceed for sightseeing tour of Old & New Delhi: covering Redfort, Rajghaia Gate, Lotus Temple, Qutub Minar, Rashtapati Bhawan, HumayunTomb etc. Night stay in Delhi.</p>
		<p><b>Day 02: Delhi - Agra ( By road Approx. 4 Hrs.)</b></p>
		<p>After breakfast drive to Agra. Arrive and transfer to hotel. Later visit the Agra Fort, containing the Pearl Mosque - the rusty and majestic red- sandstone fort of Agra stands on the banks of the river Yamuna and the construction wasstarted by Emperor Akbar in 1566. At the Diwan-I-Khas (hall of private audience) where marble pavilions with floral inlays lend an ethereal ambience, the Emperor sat on his gem-studded peacock Throne and met foreign ambassadors and rulers of friendly kingdoms. Also visit Itmad-up-Daus tomb, built by Noorjehan in memory of her father. Night stay in Agra.</p>
		<p><b>Day 03: Agra - Jaipur (By road Approx. 5 Hrs.)</b></p>
		<p>Early morning at sunrise visit the world famous Taj Mahal, built by the Mughal Emperor Shahjehan in 1630 for his queen Mumtaz Mahal to enshrine her mortal remains. Later after breakfast drive to Jaipur enroute visiting Fatehpur Sikri, built by Emperor Akbar in 1569 to commemorate the birth of his son and later abandoned due to scarcity of water. Visit the remains, it fortifications within the city including Jama Masjid, Tomb of Salim Chisti, Panch Mahal and other palaces. On arrival transfer to hotel. After check in at the hotel, proceed for local sightseeing covering City Palace, Jantar- Mantar, Hawa Mahal, Night stay in Jaipur.</p>
		<p><b>Day 04: Jaipur - Udaipur ( By road Apprx. 8 Hrs.)</b></p>
		<p>Morning excursion to Amber Fort. Elephant ride ascent to the fort. AMBER FORT PALACE - Amber is the classic romantic Rajasthani fort palace. Its construction was started by Man Singh I in 1592, and completed by his descendent Jai Singh I. Its forbidding exterior belies an inner paradise where a beautiful fusion of Mughal and Hindu styles finds it's ultimate expression. Drive to Udaipur, an oasis in the desert state, Arrive Udaipur and transfer to hotel. Night stay in Udaipur.</p>
		<p><b>Day 05: Udaipur</b></p>
		<p>Morning city sight seeing tour of Udaipur. The city is built in 1559 A.D. by Maharaja Udai Singh and has been described as the most romantic spot on the continent of India by Col. James Todd. Visit the City Palace museum, the Jagdish temple, Sahelion Ki Bari (Queens resort for their friends) Bhartiya Lok Kala Mandir (Folk art museum) and the Pratap Memorial. Rest of the day at leisure. Night stay in Udaipur.</p>
		<p><b>Day 06:  Udaipur - Jodhpur ( By road Apprx. 7 Hrs.) via Ranakpur</b></p>
		<p>After breakfast drive to Jodhpur in route visit Ranakpur Jain Temple. Ranakpur is one of the five holy places of the Jain community. These temples were built in the 15th century AD during the reign of Rana Kumbha and are enclosed within a wall. The basement is of 48, 000 sq. feet area that covers the whole complex. There are four subsidiary shrines, twenty-four pillared halls and eligibly domes supported by over four hundred columns. Continue drive to Jodhpur on arrival transfer to hotel. Night stay in Jodhpur.</p>
		<p><b>Day 07: Jodhpur </b></p>
		<p>After a relaxed breakfast proceed for city sight seeing tour of Jodhpur. Jodhpur - the stronghold of the fierce Rathore clan, was founded in 1459 by Prince Jodha. Visit the Mehrangarh Fort, situated on a low sandstone hill. Within the fort, visit Moti Mahal and Phool Mahal. Also visit Jaswant Thada, an imposing marble cenotaph, built in memory of Maharaja Jaswant singh II around 1899 and Umaid Public gardens. Night stay in Jodhpur.</p>
		<p><b>Day 08: Jodhpur - Jaisalmer ( By road Approx. 7 Hrs.)</b></p>
		<p>Morning after breakfast drive to Jaisalmer - induces a dramatic picture of utter magic and brilliance of the desert. The hostile terrain not with standing the warmth and color of people is simply over whelming. One of the main draws is the daunting 12th century Jaisalmer Fort and beautiful havelis which were built by wealthy merchants of Jaisalmer are yet another interesting aspect of the you can let your eyes caress the sloppy sand dunes while you ramble your way in a camel safari. Bhatti Rajput ruler Rawal Jaisal, after whom the city finds its name, founded Jaisalmer in 1156. The drive passes by dry vegetation, with villages of colorfully dressed people. Plenty of camels and camel carts, sheep and goats pass you by. On arrival in Jaisalmer, check in the Hotel. Rest the day is free at leisure. Night stay in Jaisalmer.</p>
		<p><b>Day 09: Jaisalmer </b></p>
		<p>Morning city sightseeing tour of Jaisalmer Visit Jaisalmer Fort, over the Trikuta hill, this fort is the biggest and the most beautiful landmark of the city. In the afternoon, visit the Khuri Sand Dunes and the typical Rajasthani Desert Village. Take a camel ride to view the sunset from the dunes, (Same camels to be used for Safari - getting to know the camels) as the sky is set on fire. It can be an unforgettable experience. Overnight in Jaisalmer</p>
		<p><b>Day 10: Jaisalmer - Bikaner ( By road Approx. 6 Hrs.) </b></p>
		<p>Morning drive to Bikaner. On arrival transfer to hotel. Afternoon city sight seeing tour. Also visit Lallgarh Palace, the museum, Bhanda Sagar Jain, Deshnoke Rat temple and The Camels Breeding Farm. Night stay in Bikaner.</p>
		<p><b>Day 11:  Bikaner - Mandawa ( By road Approx. 06 Hrs.) </b></p>
		<p>Mandawa castle one of the finest castles of Rajasthan, is now a hotel and house of collection of armories, costumes of ancestors, canons from 1820 ancient coins, numismatic collection and many other interesting items, preserved in a museum. Night stay in Mandawa.</p>
		<p><b>Day 12: Mandawa - Delhi (By road Approx. 06 Hrs.) - Departure</b></p>
		<p>Morning After breakfast drive to Delhi and transfer to airport for your onward journey.</p>
		<br>
		</div>
		
		<div id="view4">
        <ul>
		<li><b>Hotel Sunstar Residency, New Delhi</b></li>
		<p>Duration: 1 Nights / 2 Days </p>
		<h4>Hotel facilities</h4>
		<p>Airport Transfer Available / Surcharge | Currency Exchange | Gift Shop  | Laundry Service Available | Lift / Elevator | Non Smoking Rooms | Parking Facilities Available | Multi Cuisine Restaurant  | 24 Hour Front Desk | Luggage Storage | Air-Conditioning - Central | Express Check-In / Check-Out | Fax Machine | Car Rental | Express Laundry | Self Check - In | Food Facility | Newspapers In Lobby | Family Room | Airport Transfer Free | </p>
		
		<li><b>Taj Inn Hotel, Agra </b></li>
		<p>Duration: 1 Nights / 2 Days </p>
		<h4>Hotel facilities</h4>
		<p>Airport Transfer Available / Surcharge | Banquet Facilities | Concierge | Currency Exchange | Doctor on Call | Internet Access - Surcharge | Lift / Elevator | Parking Facilities Available | Front Desk | Multi Cuisine Restaurant  | Room Service  | Non Smoking Hotel | Local Tour / Travel Desk | Refrigerator | Major Credit Cards Accepted | 24 Hour Front Desk | Breakfast Available (surcharge) | Luggage Storage | Air-Conditioning - Central | Power Backup | Extra Bed, Towels, Linens, Bedding (on request) | Toiletries | Conference Facility  | Massage Services  | Pick Up and Drop (Rly Station, Bus Stand, Temple) | Roof Top Restaurant / Dining  | Car Rental | Taxi Services | Board Room | City Shuttle Service |  Drivers Rest Room | Room Heater | Newspapers In Lobby | Party hall | Mini Refrigerator | Air / Rail Booking | Guide / Sightseeing Service | RO Water Purification System | </p>
		
		<li><b>Hotel Royal View, Jaipur</b> </li>
		<p>Duration: 1 Nights / 2 Days </p>
		<h4>Hotel facilities</h4>
		<p>Airport Transfer Available / Surcharge | Currency Exchange | Disabled Friendly Facilities  | Doctor on Call | Dry Cleaning | Internet Access - Surcharge | Laundry Service Available | Lobby | Parking Facilities Available | Front Desk | Multi Cuisine Restaurant  | Locker Facility | Local Tour / Travel Desk | 24 Hour Front Desk | Power Backup | Suitable For Children | Coffee Shop / Cafe | Food Facility | Internet Access | Room Service (24 Hours) | Airport Transfer Free | Parking Facility | </p>

		<li><b>Hotel Raj Palace, Udaipur</b></li>
		<p>Duration: 2 Nights / 3 Days</p>
		<h4>Hotel facilities</h4>
		<p>Lobby | Front Desk | Multi Cuisine Restaurant  | </p>
		
		<li><b>Kuchaman Haveli, Jodhpur </b></li>
		<p>Duration: 1 Nights / 2 Days</p>
		<h4>Hotel Facilities</h4>
		<p>Concierge | Currency Exchange | Doctor on Call | Gift Shop  | Internet Access - Surcharge | Laundry Service Available | Lobby | Parking Facilities Available | Front Desk | Multi Cuisine Restaurant  | Locker Facility | Major Credit Cards Accepted | Power Backup | Safari | Smoking Area  | Car Rental | Taxi Services |  Drivers Rest Room | Newspapers In Lobby | Air / Rail Booking | STD / ISD / Fax Facility | Baggage Room | Parking Facility | </p>
		
		<li><b>Hotel Imperial, Jaisalmer</b></li>
		<p>Duration: 2 Nights / 3 Days</p>
		<h4>Hotel Facilities</h4>
		<p>Doctor on Call | Dry Cleaning | Internet Access - Surcharge | Laundry Service Available | Parking Facilities Available | Front Desk | Multi Cuisine Restaurant  | Locker Facility | Local Tour / Travel Desk | Room Service (24 Hours) | </p>
		
		<li><b>Hotel Sagar (Vegetarian Hotel), Bikaner</b></li>
		<p>Duration: 1 Nights / 2 Days</p>
		<h4>Hotel Facilities</h4>
		<p>Bar / Lounge  | Business Center  | Currency Exchange | Internet Access - Surcharge | Laundry Service Available | Parking Facilities Available | Multi Cuisine Restaurant  | Locker Facility | Local Tour / Travel Desk | Major Credit Cards Accepted | 24 Hour Front Desk | Luggage Storage | Suitable For Children | Conference Facility  | 
		</p>
		
		<li><b>Hotel Heritage Mandawa, Mandawa</b></li>
		<p>Duration: 1 Nights / 2 Days</p>
		<h4>Hotel Facilities</h4>
		<p>Business Center  | Internet Access - Surcharge | Laundry Service Available | Parking Facilities Available | Front Desk | Multi Cuisine Restaurant  | Locker Facility | Secretarial Services | Valet service | 24 Hour Front Desk | Doorman | Medical Assistance Available | Welcome Drinks | Power Backup | Gardens | Computer Rental | Dance Performances (on demand) | Catering | Porter / Bellhop | Suitable For Children | Grocery | Coffee Shop / Cafe | Conference Facility  | Fax Machine | Floor Butler | Cell Phone Rental | Massage Services  | Safari | Nature Walk | Camel Ride | Veranda | Roof Top Restaurant / Dining  |  Bike on Rent | Veg / Non Veg Kitchens Separate  | Horse Ride ( Chargeable )  | Shopping Drop Facility (on fixed timings) | In House Events  | Vegetarian Food / Jain Food Available | Car Rental | Board Room | City Shuttle Service | Campfire / Bon Fire | Internet Access | Newspapers In Lobby | Children's Park | Postal / Parcel Services | Room Service (24 Hours) | Spa Services Nearby | Air / Rail Booking | Courier Service | Guide / Sightseeing Service | Parking Facility | 
		</p>
		</ul>
		</div>
		
		<div id="view5">
        <h3>For travel between January 1, 2016 and May 31, 2016</h3>
		<h2>Price Details		Base Price</h2>
		<p>Single Occupancy :	Rs. 60257</p>
		<p>Twin Sharing :	Rs. 34970</p>
		<p>Extra Adult :	Rs. 11900</p>
		<p>Extra Child :	Rs. 10900</p>
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
		
			<h4>New Delhi</h4>
			<p>Situated in the lap of Yamuna River, New Delhi is home to people from multi-ethnic and multi-cultural sections of the country. New Delhi acts as a bridge between two different worlds. Old Delhi which was once the capital of Mughal dynasties is now left with ruined ramparts and mosques. </p>
			<h4>Jaipur</h4>
			<p>Jaipur is known all over the world as the “Pink City”. It is called so because a large number of the tourist places in Jaipur are of the terracotta pink color, such as the forts, havelis and palaces. Jaipur is probably the most important tourist destination in India after the medieval city of Agra.</p>
			<h4>Jaisalmer</h4>
			<p>Jaisalmer, also known as "The sun city" is a shimmering mirage in the Thar desert and a very important place of tourist interest in Rajasthan. The city was named after the founder of the city, Maharawal Jaisal Singh. He was a Rajput king. The city of Jaisalmer is also known as ‘the Golden City’. This is because the yellow sand and the sandstone used to make the structures</p>
			<h4>Udaipur</h4>
			<p>Nestled beautifully amongst the Aravallis, Udaipur is located in the colourful state of Rajasthan in western India and is known as the City of Lakes. The city is the administrative headquarters and a Municipal Council of the Udaipur district. It is also the historical capital of the empire of Mewar.</p>
			<h4>Jodhpur</h4>
			<p>Called the "Blue City" because of the blue-painted houses around the Mehrangarh Fort. Jodhpur is a royal city and the second largest metropolitan area in the state of Rajasthan. The city is famous as an ideal tourist destination because of its ancient castles, the Mehrangarh Fort and most importantly for the amazing Thar Desert close by.</p>
			<h4>Agra</h4>
			<p>Agra is counted among one of the most popular tourist destinations in the Indian state of Uttar Pradesh. Taj Mahal, which is regarded as one of the Seven Wonders of the World and most beautiful and fascinating masterpiece of mughal era is one of the best tourist places in Agra.</p>
			<h4>Bikaner</h4>
			<p>Bikaner is a fascinating city famous for its historical monuments, palaces and temples. This city is located in the state of Rajasthan which is the largest hub of tourists in India. The land around Bikaner is covered with desert vegetation. The magnetic charm of this city lies in its rich culture and heritage. This city is also known for its fairs and festivals.</p>
			<h4>Mandawa</h4>
			<p>Widely known for its beautiful and grandiose forts, historical monuments and Havelis, Mandawa is a wonderful town in the Jhunjhunu district of Rajasthan in India. This town is very popular for its different names like Mandu ka bas, Manduwas, Mandu ki Dhani and later on it was changed into Manduwa, Mandwa and finally it is called by the name of Mandawa.</p>
			</div>
		<div id="view7">
		<img src="./img/map_rajasthan.jpg" id="map" alt="Rajasthan_Map" style="border-radius: 10px; box-shadow:#ff6600">
		</div>
	</div>

</div>
<div id="price">
<br><br>
	<p style="font-size:20px">Original Price</p>
	<p style="font-size:20px"><del>Rs 42897</del></p>
	<br>
	<p style="font-size:30px; color:yellow">Rs 34970/-</p>
	<p style="font-size:25px">11N/12D package</p>
	<h5>*price per person on twin sharing basis</h5>
		<button id="btn"><a href="book.html">Book Now!</a></button>

</div>
<div id="cities">
	<h4>Package Summary</h4>
	<p><b>Starting City </b> New Delhi</p>
	<p><b>Duration</b>  11 Nights / 12 Days</p>
	<p><b>Tour Plan</b></p>
	<p>1N New Delhi </p>
	<p>1N Agra </p>
	<p>1N Jaipur</p> 
	<p>2N Udaipur</p>
	<p>1N Jodhpur</p>
	<p>2N Jaisalmer</p>
	<p>1N Bikaner</p>
	<p>1N Mandawa</p>
	
	
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
