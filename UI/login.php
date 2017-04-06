<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>ghumo Account</title>
</head>

<style>

#header 
{
	height : 95px;
	width : auto;
	background-color : #003333;
	box-shadow: 1px 1px 2px #888888;
}

#section 
{
	border-radius : 2px red;
    background-color : white;
    width : 660px;
    height : 500px;
	top : 100px;
    padding : 10px;
    margin-left : 315px;	 
	margin-bottom : 50px;
	position : absolute;
	box-shadow: 1px 1px 2px 2px #888888;

}

#heading
{
	text-align : center;
	font-size : 20px;
	font-family : "Palatino Linotype", "Book Antiqua", Palatino, serif;
	position : relative;
}

#login_form
{
	text-align : left;
}

hr
{
	margin-left : 140px;
	margin-right : 140px;
}

#facebook
{
	width : 60px;
	height : 60px;
	border-radius : 12px;
	background-color : yellow;
	margin-left : 245px;
	top : 23px;
}

#google
{
	width : 60px;
	height : 60px;
	border-radius : 12px;
	background-color : yellow;
	margin-left : 345px;
	margin-top : -61px;
}
</style>

<body style = "margin : 0px">

<div id="header">
<a href="home.php"><img src="./img/received_939630352792517.jpeg" style="height:80px; width:150px; margin-top:2px; margin-left:90px; z-index:5" ></a>
	<h6 style="margin-top:0px; margin-left: 82px; z-index:10;color:white">Make the world your spinning wheel</h6>
</div>

<div id="section">
	<h1 id = "heading">Sign In</h1>
	<form id = "login_form" name = "login_form" method = "post"; action = "logged_user.php">
	<input type = "text" name = "userID" style = "height : 35px; width : 360px; margin-left : 140px; border-radius : 10px; background-color : #f2f2f2" placeholder = "Email Id" required><br><br>
	<input type = "password" name = "password" style = "height : 35px; width : 360px; margin-left : 140px; border-radius : 10px; background-color : #f2f2f2" placeholder = "Password" required><br>
	<input type = "checkbox" name = "remember" style = "margin-left : 140px; margin-top : 10px"><p style = "margin-left : 160px; font-weight : 800; margin-top : -20px;">Remember Me</p>
	<p style = "margin-left : 380px; margin-top : -35px; font-weight : 800; font-size : 15px"><a href = "forgot_password.php">Forgot Password?</a></p>
	<br><input type = "submit" name = "login" value = "Sign In" style = "background-color : #00004d; color : white; width : 85px; height : 45px; border : thick; border-color : blue; border-radius : 12px; margin-left : 285px"><br>
	<p style = "text-align : center; margin-top : 6px; font-weight : 800; font-size : 17px"><a href = "signup.php" style = "text-decoration : none">Sign Up</a></p><br>
	<hr>
	<p style = "text-align : center; margin-top : 6px; font-weight : 800; font-size : 16x">Or Connect With</p>
	<div id = "facebook">
		<a href="index.php"><img src = "./images/facebook.png" style = "border-radius : 12px" alt = "fconnect"></a>
	</div>
	<div id = "google">
		<a href = "http://localhost/Ghumo.com/pages/google/index.php"><img src = "./images/google.jpg" style = "border-radius : 12px" alt = "gconnect"></a>
	</div>
</div>

</body>

</html>