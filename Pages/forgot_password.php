<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Safar Account</title>
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
    width : 650px;
    height : 320px;
	top : 180px;
    padding : 10px;
    margin-left : 315px;	 
	margin-bottom : 50px;
	position : absolute;
	box-shadow: 1px 1px 2px 2px #888888;

}

#msg
{
	margin-left : 32px;
	width : 600px;
	height : 150px;
	top : 80px;
	position : absolute;
	border-radius : 12px;
}

#heading
{
	text-align : center;
	font-size : 25px;
	font-family : "Palatino Linotype", "Book Antiqua", Palatino, serif;
	position : relative;
}

hr
{
	margin-left : 140px;
	margin-right : 140px;
}
</style>

<body style = "margin : 0px">

<div id="header">
</div>

<div id="section">
	<h1 id = "heading">Reset Password</h1>
	<hr>
	<p style = "text-align : center; font-size : 14px; font-weight : 600">Enter your registered email id. We will send you a link to reset your password.</p>
	<form id = "forgot_password" name = "forgot_password" method = "post"; action = "send_password_reset_mail.php";>
	<input type = "text" name = "reset_email_link" id = "reset_email_link" style = "height : 45px; width : 350px; margin-left : 145px; border-radius : 12px; background-color : #f2f2f2" placeholder = "Enetr Email-Id" required><br>
	<br><input type = "submit" name = "reset_password" value = "Submit" style = "background-color : #00004d; color : white; width : 85px; height : 45px; border : thick; border-color : blue; border-radius : 12px; margin-left : 285px">
	</form>
</div>

</body>

</html>