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
<script>
$(document).ready(function(){
	$('#add_hotel').click(function()
	{
		$('#image').css("height","880px");
		$('#form_bus').css("height","250px");
		$('#form_hotels').css("margin-top","325px");
		$('#form_hotels').show();
		$('#search_bus').hide();
		$('#hotelstuff').hide();
		$('#section').css("height","1600px");
		
	});
	$('#cross').click(function()
	{
		$('#image').css("height","750px");
		$('#form_bus').css("height","350px");
		$('#form_hotels').hide();
		$('#search_bus').show();
		$('#hotelstuff').show();
		$('#section').css("height","1500px");
		
	});
});
</script>
<script>
$(document).ready(function(){
	$('#Add_Room_2').click(function()
	{
		loadRoom2();
		unloadAdd2();
		loadAdd3();
		$('#form_hotels').css("height", "510px");
	});
	
	function loadRoom2()
	{
		$('#Room_2').show();	
	}
	
	function unloadAdd2()
	{
		$('#Add_2').hide();
	}
	
	function loadAdd3()
	{
		$('#Add_3').show();
	}

	$('#Add_Room_3').click(function()
	{
		loadRoom3();
		unloadAdd3();
		loadAdd4();
		$('#form_hotels').css("height", "570px");
	});
	
	function loadRoom3()
	{
		$('#Room_3').show();	
	}
	
	function unloadAdd3()
	{
		$('#Add_3').hide();
	}
	
	function loadAdd4()
	{
		$('#Add_4').show();
	}
	
	$('#Add_Room_4').click(function()
	{
		loadRoom4();
		unloadAdd4();
		loadAdd5();
		$('#form_hotels').css("height", "630px");
	});
	
	function loadRoom4()
	{
		$('#Room_4').show();	
	}
	
	function unloadAdd4()
	{
		$('#Add_4').hide();
	}
	
	function loadAdd5()
	{
		$('#Add_5').show();
	}
	
	$('#Add_Room_5').click(function()
	{
		loadRoom5();
		unloadAdd5();
		$('#form_hotels').css("height", "670px");
	});
	
	function loadRoom5()
	{
		$('#Room_5').show();	
	}
	
	function unloadAdd5()
	{
		$('#Add_5').hide();
	}
	
	$('#Remove_2').click(function()
	{
		if($('#Room_5').is(':visible'))
		{
			$('#Room_5').hide();
			$('#Add_5').show();
			$('#Add_4').hide();
			$('#form_hotels').css("height", "630px");
		}	
		else if($('#Room_4').is(':visible'))
		{
				$('#Room_4').hide();
				$('#Add_4').show();
				$('#Add_5').hide();
				$('#form_hotels').css("height", "570px");
		}
		else if($('#Room_3').is(':visible'))
		{
			$('#Room_3').hide();
			$('#Add_3').show();
			$('#Add_4').hide();
			$('#form_hotels').css("height", "510px");
		}
		else
		{
			$('#Room_2').hide();
			$('#Add_2').show();
			$('#Add_3').hide();
			$('#form_hotels').css("height", "430px");
		}
	});
	
	$('#Remove_3').click(function()
	{
		if($('#Room_5').is(':visible'))
		{
			$('#Room_5').hide();
			$('#Add_5').show();
			$('#Add_4').hide();
			$('#form_hotels').css("height", "630px");

		}	
		else if($('#Room_4').is(':visible'))
		{
				$('#Room_4').hide();
				$('#Add_4').show();
				$('#Add_5').hide();
				$('#form_hotels').css("height", "570px");
		}
		else
		{
			$('#Room_3').hide();
			$('#Add_3').show();
			$('#Add_4').hide();
			$('#form_hotels').css("height", "510px");
		}
	});
	
	$('#Remove_4').click(function()
	{
		if($('#Room_5').is(':visible'))
		{
			$('#Room_5').hide();
			$('#Add_5').show();
			$('#Add_4').hide();
			$('#form_hotels').css("height", "630px");
		}	
		else
		{
				$('#Room_4').hide();
				$('#Add_4').show();
				$('#Add_5').hide();
				$('#form_hotels').css("height", "570px");
		}
	});
	
	$('#Remove_5').click(function()
	{
		$('#Room_5').hide();
		$('#Add_5').show();
		$('#form_hotels').css("height", "630px");
	});

});
</script>

<script>
	$(document).ready(function(){
		$('#dec_adult').click(function(){
        var val = parseInt($('#No_of_adults').val(), 10);
        if (val != 1) {
          $('#No_of_adults').val(val - 1)
        }
    })
            
   $('#inc_adult').click(function(){
        var val = parseInt($('#No_of_adults').val(), 10);
        if (val != 6) {
          $('#No_of_adults').val(val + 1)
        }
    })         
	
	$('#dec_infant').click(function(){
        var val = parseInt($('#No_of_infants').val(), 10);
        if (val != 0) {
          $('#No_of_infants').val(val - 1)
        }
    })
            
   $('#inc_infant').click(function(){
        var val = parseInt($('#No_of_infants').val(), 10);
        if (val != 2) {
          $('#No_of_infants').val(val + 1)
        }
    })         
	
	$('#dec_adult_1').click(function(){
        var val = parseInt($('#No_of_adults_1').val(), 10);
        if (val != 1) {
          $('#No_of_adults_1').val(val - 1)
        }
    })
            
   $('#inc_adult_1').click(function(){
        var val = parseInt($('#No_of_adults_1').val(), 10);
        if (val != 6) {
          $('#No_of_adults_1').val(val + 1)
        }
    })         
	
	$('#dec_infant_1').click(function(){
        var val = parseInt($('#No_of_infants_1').val(), 10);
        if (val != 0) {
          $('#No_of_infants_1').val(val - 1)
        }
    })
            
   $('#inc_infant_1').click(function(){
        var val = parseInt($('#No_of_infants_1').val(), 10);
        if (val != 2) {
          $('#No_of_infants_1').val(val + 1)
        }
    })
	
	$('#dec_adult_2').click(function(){
        var val = parseInt($('#No_of_adults_2').val(), 10);
        if (val != 1) {
          $('#No_of_adults_2').val(val - 1)
        }
    })
            
   $('#inc_adult_2').click(function(){
        var val = parseInt($('#No_of_adults_2').val(), 10);
        if (val != 6) {
          $('#No_of_adults_2').val(val + 1)
        }
    })         
	
	$('#dec_infant_2').click(function(){
        var val = parseInt($('#No_of_infants_2').val(), 10);
        if (val != 0) {
          $('#No_of_infants_2').val(val - 1)
        }
    })
            
   $('#inc_infant_2').click(function(){
        var val = parseInt($('#No_of_infants_2').val(), 10);
        if (val != 2) {
          $('#No_of_infants_2').val(val + 1)
        }
    })         
	
	$('#dec_adult_3').click(function(){
        var val = parseInt($('#No_of_adults_3').val(), 10);
        if (val != 1) {
          $('#No_of_adults_3').val(val - 1)
        }
    })
            
   $('#inc_adult_3').click(function(){
        var val = parseInt($('#No_of_adults_3').val(), 10);
        if (val != 6) {
          $('#No_of_adults_3').val(val + 1)
        }
    })         
	
	$('#dec_infant_3').click(function(){
        var val = parseInt($('#No_of_infants_3').val(), 10);
        if (val != 0) {
          $('#No_of_infants_3').val(val - 1)
        }
    })
            
   $('#inc_infant_3').click(function(){
        var val = parseInt($('#No_of_infants_3').val(), 10);
        if (val != 2) {
          $('#No_of_infants_3').val(val + 1)
        }
    })
	
	$('#dec_adult_4').click(function(){
        var val = parseInt($('#No_of_adults_4').val(), 10);
        if (val != 1) {
          $('#No_of_adults_4').val(val - 1)
        }
    })
            
   $('#inc_adult_4').click(function(){
        var val = parseInt($('#No_of_adults_4').val(), 10);
        if (val != 6) {
          $('#No_of_adults_4').val(val + 1)
        }
    })         
	
	$('#dec_infant_4').click(function(){
        var val = parseInt($('#No_of_infants_4').val(), 10);
        if (val != 0) {
          $('#No_of_infants_4').val(val - 1)
        }
    })
            
   $('#inc_infant_4').click(function(){
        var val = parseInt($('#No_of_infants_4').val(), 10);
        if (val != 2) {
          $('#No_of_infants_4').val(val + 1)
        }
    })
});
	
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
	background-color : #003333;
	background-repeat: y;
    width : 1180px;
    height : 1500px;
    padding:10px;
    margin-left : 75px;	 
    margin-top : 2.2px;
    box-shadow: 1px 1px 2px 2px #888888;
}

#image
{
	background-image: url(./img/backbus.jpg);
	background-repeat: no-repeat;
	width : 1100px;
	height : 750px;
	background-size: 1100px 880px;
	margin-left : 40px;
	opacity : .8;
	margin-top : 10px;
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

#bus_details
{
	width : 1080px;
	height : 300px;
	margin-top : 20px;
	margin-left : 49px;
	text-align:center;
	background-color : black;
	color : white;
	opacity: 0.5;
	border-radius:  10px;
	position : absolute;
}

#partner
{
	width:350px;
	height:315px;
	margin-top: 330px;
	margin-left: 60px;
	background-color: black;
	color: white;
	opacity:0.5;
	position:absolute;
	border-radius: 10px;
	}

#whyus
{
	margin-left : 420px;
	margin-top:330px;
	width : 350px;
	height : 315px;
	opacity:0.5;
	background-color : black;
	color:white;
	position : absolute;
	border-radius : 10px;

}

#offers
{
	border-radius : 10px;
	margin-left : 780px;
	width : 350px;
	height : 315px;
	margin-top:330px;
	background-color : black;
	color: gray;
	opacity : .5;
	position : absolute;
	
}

#offers a{
	color:gray;
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

#form_bus
{
	background-color : black;
	opacity : .6;
	width : 675px;
	height : 350px;
	margin-left :25px;
	margin-top : 75px;
	position : absolute;
}

#form_hotels
{
	background-color : black;
	opacity : .6;
	width : 675px;
	height : 430px;
	margin-left :25px;
	margin-top : 420px;
	position : absolute;
}



table#t01 {
    border-collapse: collapse;
    width: 100%;
}
table#t01 th, td {
	
    text-align: left;
    padding: 8px;
}

table#t01 tr:nth-child(even){background-color: #f2f2f2
												color:black;
												}

table#t01 th {
    background-color: #4CAF50;
    color: white;

}

td
{
	width : 200px;
}

#inc_adult
{
	width : 25px;
	height : 25px;
	background-image : url(./images/+_sign.png);
	color : black;
	margin-left : 5px;
	margin-top : 5px;
	position : absolute;
	cursor : pointer;
}

#inc_infant
{
	width : 25px;
	height : 25px;
	background-image : url(./images/+_sign.png);
	color : black;
	margin-left : 5px;
	margin-top : 5px;
	position : absolute;
	cursor : pointer;
}

#inc_adult_1
{
	width : 25px;
	height : 25px;
	background-image : url(./images/+_sign.png);
	color : black;
	margin-left : 5px;
	margin-top : 5px;
	position : absolute;
	cursor : pointer;
}

#inc_infant_1
{
	width : 25px;
	height : 25px;
	background-image : url(./images/+_sign.png);
	color : black;
	margin-left : 5px;
	margin-top : 5px;
	position : absolute;
	cursor : pointer;
}

#inc_adult_2
{
	width : 25px;
	height : 25px;
	background-image : url(./images/+_sign.png);
	color : black;
	margin-left : 5px;
	margin-top : 5px;
	position : absolute;
	cursor : pointer;
}

#inc_infant_2
{
	width : 25px;
	height : 25px;
	background-image : url(./images/+_sign.png);
	color : black;
	margin-left : 5px;
	margin-top : 5px;
	position : absolute;
	cursor : pointer;
}

#inc_adult_3
{
	width : 25px;
	height : 25px;
	background-image : url(./images/+_sign.png);
	color : black;
	margin-left : 5px;
	margin-top : 5px;
	position : absolute;
	cursor : pointer;
}

#inc_infant_3
{
	width : 25px;
	height : 25px;
	background-image : url(./images/+_sign.png);
	color : black;
	margin-left : 5px;
	margin-top : 5px;
	position : absolute;
	cursor : pointer;
}

#inc_adult_4
{
	width : 25px;
	height : 25px;
	background-image : url(./images/+_sign.png);
	color : black;
	margin-left : 5px;
	margin-top : 5px;
	position : absolute;
	cursor : pointer;
}

#inc_infant_4
{
	width : 25px;
	height : 25px;
	background-image : url(./images/+_sign.png);
	color : black;
	margin-left : 5px;
	margin-top : 5px;
	position : absolute;
	cursor : pointer;
}

.passenger_value
{
	width : 150px;
	height : 35px;
	background-color : white;
	margin-left : 5px;
	margin-top : 5px;
}

#dec_adult
{
	width : 30px;
	height : 28px;
	background-image : url(./images/-_sign.png);
	color : black;
	margin-left : 120px;
	margin-top : 2px;
	position : absolute;
	cursor : pointer;
}

#dec_infant
{
	width : 30px;
	height : 28px;
	background-image : url(./images/-_sign.png);
	color : black;
	margin-left : 120px;
	margin-top : 2px;
	position : absolute;
	cursor : pointer;
}

#dec_adult_1
{
	width : 30px;
	height : 28px;
	background-image : url(./images/-_sign.png);
	color : black;
	margin-left : 120px;
	margin-top : 2px;
	position : absolute;
	cursor : pointer;
}

#dec_infant_1
{
	width : 30px;
	height : 28px;
	background-image : url(./images/-_sign.png);
	color : black;
	margin-left : 120px;
	margin-top : 2px;
	position : absolute;
	cursor : pointer;
}

#dec_adult_2
{
	width : 30px;
	height : 28px;
	background-image : url(./images/-_sign.png);
	color : black;
	margin-left : 120px;
	margin-top : 2px;
	position : absolute;
	cursor : pointer;
}

#dec_infant_2
{
	width : 30px;
	height : 28px;
	background-image : url(./images/-_sign.png);
	color : black;
	margin-left : 120px;
	margin-top : 2px;
	position : absolute;
	cursor : pointer;
}

#dec_adult_3
{
	width : 30px;
	height : 28px;
	background-image : url(./images/-_sign.png);
	color : black;
	margin-left : 120px;
	margin-top : 2px;
	position : absolute;
	cursor : pointer;
}

#dec_infant_3
{
	width : 30px;
	height : 28px;
	background-image : url(./images/-_sign.png);
	color : black;
	margin-left : 120px;
	margin-top : 2px;
	position : absolute;
	cursor : pointer;
}

#dec_adult_4
{
	width : 30px;
	height : 28px;
	background-image : url(./images/-_sign.png);
	color : black;
	margin-left : 120px;
	margin-top : 2px;
	position : absolute;
	cursor : pointer;
}

#dec_infant_4
{
	width : 30px;
	height : 28px;
	background-image : url(./images/-_sign.png);
	color : black;
	margin-left : 120px;
	margin-top : 2px;
	position : absolute;
	cursor : pointer;
}

#img
{
	height: 30px;
	width: 30px;
	background-color:black;
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

<div id="section">
	<div id = "image" >
		<ul class = "me_nu">
			<li class = "active"><a href="home.php">Flights</a></li>
			<li><a href="hotels.php">Hotels</a></li>
			<li><a href="holiday.php">Holidays</a></li>
			<li><a href="bus.php">Bus</a></li>
			<li><a href="train.php">Trains</a></li>
			<li><a href="cabs.php">Cabs</a></li>
			<li><a href="#7">Reviews</a></li>
		</ul>  
		<div id = "form_bus">
			<form id = "bus_form" name = "form_bus" method = "post" action = "">
				<table style = "width : 600px">
					<tr>
						<td style = "font-size : 15px; color : white; text-align : left">FROM</td>
						<td style = "font-size : 15px; color : white; text-align : left">TO</td>
					</tr>
					<tr>
						<td><input type = "text" name = "from_bus" style = "margin-left : 0px; height : 35px; width : 200px; background-color : #f2f2f2; border-radius : 5px" placeholder = "Type Departure City"></td>
						<td><input type = "text" name = "to_bus" style = "margin-left : 0px; height : 35px; width : 200px; background-color : #f2f2f2; border-radius : 5px" placeholder = "Type Destination City"></td>
					</tr>
					<tr>
						<td  style = "font-size : 15px; color : white; text-align : left">Journey Date</td>
						<td  style = "font-size : 15px; color : white; text-align : left">Email Id(Optional)</td>
					</tr>
					<tr>
						<td ><input type = "date" name = "departure_date" style = "margin-left : 0px; height : 35px; width : 200px; background-color : #f2f2f2; border-radius : 5px"></td>
						<td ><input type = "text" name = "email" style = "margin-left : 0px; height : 35px; width : 200px; background-color : #f2f2f2; border-radius : 5px" placeholder="Enter email id"></td>
					</tr>
					<tr><td style="height:25px"></td></tr>
					<tr id="hotelstuff">
				<td colspan="4" style="border:dotted; color:white; text-align:left">Travel easy. Add hotel with your bus booking!</td>
				<td colspan="4"><input type="button" style="background-color:black; color:white; border-radius: 10px; height:25px; width:75px" id="add_hotel" value="Add Hotel"></td>
				</tr>
					<tr>
					<td colspan = "4" id = "search_bus">
						<input type = "submit"  name = "search_bus" value = "Search Bus" style = "margin-left : 25px; height : 40px; width : 150px; background-color : #ff0000; color : white">
					</td>
				</tr>
				</table>
			</form>
		</div>
		<div id = "form_hotels" style="display : none">
			<form name = "hotels_form" id = "hotels_form" method = "post" action = "">
			<br>
				
				<table style = "width : 675px">
				<tr>
				<td colspan="4" id="cross" style ="margin-left: 650px; margin-top: 2px; margin-right:3px; font-size:20px; text-decoration: bold; color:white; opacity:.8; position:absolute; cursor:pointer">X</td>
				</tr>
				<tr>
					<td colspan = "4" style = "font-size : 15px; text-align : left; color:white">Location:</td>
				</tr>
				<tr>
				<td colspan = "4" ><input type = "text" name = "location" style = "height : 35px; width : 225px; border-radius : 10px; background-color : #f2f2f2" placeholder = "I want to go to:" </td>
				</tr>
				<tr>
					<td style = "font-size : 15px; text-align : left; color : white">Check-in date</td>
					<td style = "font-size : 15px; text-align : left; color : white">Check-Out date</td>
					<td style = "font-size : 15px; text-align : left; color : white">Nights</td>
				</tr>
				<tr>
					<td><input type="date" name="checkin" style = "height : 35px; width : 150px; border-radius : 10px; background-color : #f2f2f2"</td>
					<td><input type="date" name="checkout" style = "height : 35px; width : 150px; border-radius : 10px; background-color : #f2f2f2"</td>
					<td>
						<select name="Nights" style = "height : 35px; width : 150px; border-radius : 5px; background-color : #f2f2f2">
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
							<option value = "13">13</option>
							<option value = "14">14</option>
							<option value = "15">15</option>
							<option value = "16">16</option>
							<option value = "17">17</option>
							<option value = "18">18</option>
							<option value = "19">19</option>
							<option value = "20">20</option>
							<option value = "21">21</option>
							<option value = "22">22</option>
							<option value = "23">23</option>
							<option value = "24">24</option>
							<option value = "25">25</option>
							<option value = "26">26</option>
							<option value = "27">27</option>
							<option value = "28">28</option>
							<option value = "29">29</option>
							<option value = "30">30+</option>
						</select>
					</td>
				</tr>
				<tr>
					<td style = "font-size : 18px; text-align : center; color : white">Room 1</td>
					<td>
						<h1 style = "font-size : 10px; color : white; margin-left : 5px">ADULTS(12+)</h1>
						<div class = "passenger_value">
							<div id = "inc_adult"></div>
							<input type = "text" id = "No_of_adults" name = "No_of_adults" value = "1" style = "margin-left : 50px; height : 30px; width : 30px; border : none; position : absolute; text-align : center">
							<div id = "dec_adult"></div>
						</div>
					</td>
					<td>
						<h1 style = "font-size : 10px; color : white; margin-left : 5px">CHILDREN(0-12)</h1>
						<div class = "passenger_value">
							<div id = "inc_infant"></div>
							<input type = "text" id = "No_of_infants" name = "No_of_infants" value = "0" style = "margin-left : 50px; height : 30px; width : 30px; border : none; position : absolute; text-align : center">
							<div id = "dec_infant"></div>
						</div>
					</td>
				</tr>
				<tr id = "Room_2" style = "display : none">
					<td style = "font-size : 18px; text-align : center; color : white">Room 2</td>
					<td>
						<h1 style = "font-size : 10px; color : white; margin-left : 5px">ADULTS(12+)</h1>
						<div class = "passenger_value">
							<div id = "inc_adult_1"></div>
							<input type = "text" id = "No_of_adults_1" name = "No_of_adults_1" value = "1" style = "margin-left : 50px; height : 30px; width : 30px; border : none; position : absolute; text-align : center">
							<div id = "dec_adult_1"></div>
						</div>
					</td>
					<td>
						<h1 style = "font-size : 10px; color : white; margin-left : 5px">CHILDREN(0-12)</h1>
						<div class = "passenger_value">
							<div id = "inc_infant_1"></div>
							<input type = "text" id = "No_of_infants_1" name = "No_of_infants_1" value = "0" style = "margin-left : 50px; height : 30px; width : 30px; border : none; position : absolute; text-align : center">
							<div id = "dec_infant_1"></div>
						</div>
					</td>
					<td style = "width : 30px"><input type="button" id="Remove_2" name="remove" value = "Remove" style = "height : 20px; width : 70px; text-align = center; background-color: red; border-radius : 2px"></td>
				</tr>
				<tr id = "Room_3" style = "display : none">
					<td style = "font-size : 18px; text-align : center; color : white">Room 3</td>
					<td>
						<h1 style = "font-size : 10px; color : white; margin-left : 5px">ADULTS(12+)</h1>
						<div class = "passenger_value">
							<div id = "inc_adult_2"></div>
							<input type = "text" id = "No_of_adults_2" name = "No_of_adults_2" value = "1" style = "margin-left : 50px; height : 30px; width : 30px; border : none; position : absolute; text-align : center">
							<div id = "dec_adult_2"></div>
						</div>
					</td>
					<td>
						<h1 style = "font-size : 10px; color : white; margin-left : 5px">CHILDREN(0-12)</h1>
						<div class = "passenger_value">
							<div id = "inc_infant_2"></div>
							<input type = "text" id = "No_of_infants_2" name = "No_of_infants_2" value = "0" style = "margin-left : 50px; height : 30px; width : 30px; border : none; position : absolute; text-align : center">
							<div id = "dec_infant_2"></div>
						</div>
					</td>
					<td style = "width : 30px"><input type="button" id = "Remove_3" name="remove" value = "Remove" style = "height : 20px; width : 70px; text-align = center; background-color: red; border-radius : 2px"></td>
				</tr>
				<tr id = "Room_4" style = "display : none">
					<td style = "font-size : 18px; text-align : center; color : white">Room 4</td>
					<td>
						<h1 style = "font-size : 10px; color : white; margin-left : 5px">ADULTS(12+)</h1>
						<div class = "passenger_value">
							<div id = "inc_adult_3"></div>
							<input type = "text" id = "No_of_adults_3" name = "No_of_adults_3" value = "1" style = "margin-left : 50px; height : 30px; width : 30px; border : none; position : absolute; text-align : center">
							<div id = "dec_adult_3"></div>
						</div>
					</td>
					<td>
						<h1 style = "font-size : 10px; color : white; margin-left : 5px">CHILDREN(0-12)</h1>
						<div class = "passenger_value">
							<div id = "inc_infant_3"></div>
							<input type = "text" id = "No_of_infants_3" name = "No_of_infants_3" value = "0" style = "margin-left : 50px; height : 30px; width : 30px; border : none; position : absolute; text-align : center">
							<div id = "dec_infant_3"></div>
						</div>
					</td>
					<td style = "width : 30px"><input type="button" id="Remove_4" name="remove" value = "Remove" style = "height : 20px; width : 70px; text-align = center; background-color: red; border-radius : 2px"></td>
				</tr>
				<tr id = "Room_5" style = "display : none">
					<td style = "font-size : 18px; text-align : center; color : white">Room 5</td>
					<td>
						<h1 style = "font-size : 10px; color : white; margin-left : 5px">ADULTS(12+)</h1>
						<div class = "passenger_value">
							<div id = "inc_adult_4"></div>
							<input type = "text" id = "No_of_adults_4" name = "No_of_adults_4" value = "1" style = "margin-left : 50px; height : 30px; width : 30px; border : none; position : absolute; text-align : center">
							<div id = "dec_adult_4"></div>
						</div>
					</td>
					<td>
						<h1 style = "font-size : 10px; color : white; margin-left : 5px">CHILDREN(0-12)</h1>
						<div class = "passenger_value">
							<div id = "inc_infant_4"></div>
							<input type = "text" id = "No_of_infants_4" name = "No_of_infants_4" value = "0" style = "margin-left : 50px; height : 30px; width : 30px; border : none; position : absolute; text-align : center">
							<div id = "dec_infant_4"></div>
						</div>
					</td>
					<td style = "width : 30px"><input type="button" id="Remove_5" name="remove" value = "Remove" style = "height : 20px; width : 70px; text-align = center; background-color: red; border-radius : 2px"></td>
				</tr>
				<tr id = "Add_2">
					<td colspan = "4"><input type = "button" id = "Add_Room_2" name = "Add_Room_2" value = "Add Room + " style = "margin-left : 25px; height : 35px; width : 130px; text-align : center; color : black; background-color : #d6f5f5; border-radius : 5px"></td>
				</tr>
				<tr id = "Add_3" style = "display : none">
					<td colspan = "4"><input type = "button" id = "Add_Room_3" name = "Add_Room_3" value = "Add Room + " style = "margin-left : 25px; height : 35px; width : 130px; text-align : center; color : black; background-color : #d6f5f5; border-radius : 5px"></td>
				</tr>
				<tr id = "Add_4" style = "display : none">
					<td colspan = "4"><input type = "button" id = "Add_Room_4" name = "Add_Room_4" value = "Add Room + " style = "margin-left : 25px; height : 35px; width : 130px; text-align : center; color : black; background-color : #d6f5f5; border-radius : 5px"></td>
				</tr>
				<tr id = "Add_5" style = "display : none">
					<td colspan = "4"><input type = "button" id = "Add_Room_5" name = "Add_Room_5" value = "Add Room + " style = "margin-left : 25px; height : 35px; width : 130px; text-align : center; color : black; background-color : #d6f5f5; border-radius : 5px"></td>
				</tr>
				
				<tr>
					<td colspan = "4">
						<input type = "submit" id = "search_hotels" name = "search_hotels" value = "Search Hotel + Buses" style = "margin-left : 25px; height : 40px; width : 150px; background-color : #ff0000; color : white">
					</td>
				</tr>
				</table>
			</form>
		</div>
	</div>
	
<div id="bus_details">
	<h2  style = " text-align : center; color : white; text-decoration : underline">Bus Details</h2>
		<p style = "font-size : 15px; text-align : center; color : white">Get the best deals you have ever got... Hurry! it's a limited period offer.</p>
		<table id = "t01" style="border: 1px solid #ddd">
		<tr>
			<th>City</th>
			<th>Destination</th>
			<th>Bus</th>
			<th>Starting Price<sup>*</sup></th>
		</tr>
		<tr>
			<td>Delhi</td>
			<td>Lucknow</td>
			<td>Shatabdi Travels</td>
			<td>INR 659</td>
		</tr>
		<tr>
			<td>Mumbai</td>
			<td>Pune</td>
			<td>Volvo</td>
			<td>INR 250</td>
		</tr>
		<tr>
			<td>Delhi</td>
			<td>Manali</td>
			<td>City Land Travels</td>
			<td>INR 850</td>
		</tr>
		<tr>
			<td>Bangalore</td>
			<td>Mumbai</td>
			<td>Kallada Travels</td>
			<td>INR 540</td>
		</tr>
		</table>
		<p><b><sup>*</sup>Subject to availability.Prices are inclusive of taxes and fees.</b></p>
</div>
<div id="partner">
		<h1 style = "text-align : center; color : white; text-decoration : underline">Add your business </h1>
		<br>
		<h4 style="text-align:center;color:gray">Have your own bus? Want to start a business?</h4>
		<h3 style = " text-align : center; color : white">Register with us now!</h3>
		<input type = "submit" id = "Register_hotel" name = "Register_hotels" value = "Register Now" style = "margin-left : 110px; height : 40px; width : 150px; background-color : #663300; color : white">
	</div>
<div id = "whyus">
      <h1 style = " text-align : center; color : white; text-decoration : underline"><strong>Why Us? </strong></h1>
	 &nbsp <img id="img" src="./img/custsat.jpg" >&nbspCustomer Satisfaction.<br>
		&nbsp <img id="img" src="./img/grtdeal.jpg" >&nbsp We have great deals to offer.<br>
		&nbsp <img id="img" src="./img/cashback.jpg">&nbsp Guaranteed Cashbacks and discount coupons.<br>
		&nbsp <img id="img" src="./img/wallet.jpg">&nbsp Pay easily using the site wallet.<br>
		&nbsp <img id="img" src="./img/loan.jpg">&nbsp Less Money? No worry! Take a loan from us.<br>
		&nbsp <img id="img" src="./img/cab.jpg" >&nbsp Book a cab easily with your hotel and flight booking.<br>
	</div>
<div id="offers">
<h1 style = "text-align : center; color : white; text-decoration : underline"><strong>Customer Services</strong></h1><br>
		<ul style = "margin-left : 15px; list-style-image : url(./images/print_e_tkt.jpg)">
			<li><span><strong><a href = "#1" style = "text-decoration : none">Print E-Ticket</a></strong></span></li>
		</ul>
		<ul style = "margin-left : 15px; list-style-image : url(./images/cancel.png)">
			<li><span><strong><a href = "#2" style = "text-decoration : none">Cancellation</a></strong></span></li>
		</ul>
		<ul style = "margin-left : 15px; list-style-image : url(./images/wallet.jpg)">
			<li><span><strong><a href = "#3" style = "text-decoration : none">Wallet</a></strong></span></li>
		</ul>
		<ul style = "margin-left : 15px; list-style-image : url(./images/reg_complaint.jpg)">
			<li><span><strong><a href = "#4" style = "text-decoration : none">Complaints/Help</a></strong></span></li>
		</ul>
		<ul style = "margin-left : 15px; list-style-image : url(./images/FAQ_1.jpg)">
			<li><span><strong><a href = "#5" style = "text-decoration : none">FAQ</a></strong></span></li>
		</ul>
		<ul style = "margin-left : 170px; list-style-image : url(./images/manage_bookings_1.png); top : 85px; position : absolute">
			<li><span><strong><a href = "#6" style = "text-decoration : none">Manage Your Bookings</a></strong></span></li>
		</ul>
		<ul style = "margin-left : 170px; list-style-image : url(./images/chk_status_1.jpg); top : 120px; position : absolute">
			<li><span><strong><a href = "#6" style = "text-decoration : none">Booking Status</a></strong></span></li>
		</ul>
		<ul style = "margin-left : 170px; list-style-image : url(./images/add_balance_1.jpg); top : 158px; position : absolute">
			<li><span><strong><a href = "#6" style = "text-decoration : none">Load Your Wallet</a></strong></span></li>
		</ul>
		<ul style = "margin-left : 170px; list-style-image : url(./images/contact-us_1.jpg); top : 190px; position : absolute">
			<li><span><strong><a href = "#6" style = "text-decoration : none">Contact Us</a></strong></span></li>
		</ul>
	</div>

</div>
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