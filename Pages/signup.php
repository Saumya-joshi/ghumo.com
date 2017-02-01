<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>ghumo Account| Sign Up</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script>
    function checkPassword(str)
	{
		var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
		return re.test(str);
	}
  
	function validateForm()	
	{	
		var txtEmail = document.signup_form.Email.value;
		var illegalChars= /[\(\)\<\>\,\;\:\\\/\"\[\]]/;
		var n1=txtEmail.indexOf("@");
		var n2=txtEmail.lastIndexOf(".");
		var mob = /^[1-9]{1}[0-9]{9}$/;
		var name = /^[a-zA-Z ]{2,30}$/;
	
		if(name.test(document.signup_form.Fname.value) == false)
		{
			alert("Enter Only Alphabets of length between 2 and 30.");
			document.signup_form.Fname.focus();
			return false;
		}
	
		if(name.test(document.signup_form.Lname.value) == false)
		{
			alert("Enter Only Alphabets.");
			document.signup_form.Lname.focus();
			return false;
		}
		
		if(mob.test(document.signup_form.MobileNo.value) == false)
		{
			alert("Enter Only digits of length 10");
			document.signup_form.MobileNo.focus();
			return false;
		}
			
		if(txtEmail.match(illegalChars))
		{
			alert("Emai address must not contain [\(\)\<\>\,\;\:\\\/\\[\]]");
			document.signup_form.Email.focus();
			return false;
		}
	
		if(n1<1 ||n2-n1<2)
		{
			alert("Enter valid Email address.");
			document.signup_form.Email.focus();
			return false;
		}

		if(!checkPassword(signup_form.password.value))
		{
			alert("Password must be of atleast 6 characters long and must have atleast one digit, one special character(@,_,#,$,^,etc.), one uppercase alphabet and one lowercase alphabet.");
			document.signup_form.password.focus();
			return false;
		}
		        
		if((document.signup_form.password.value != document.signup_form.password_re.value))
		{
			alert("The password did not matched.");
			document.signup_form.password_re.focus();
			return false;
		}
		return true;
	}
</script>
<script>   
    $(document).ready( function() {
    
        $('#click').click( function() {            
            loadPopupBox();
        });
		      
        $('#closeDiv').click( function() {
            unloadPopupBox();
        });

        function unloadPopupBox() {    // TO Unload the Popupbox
            $('#licence_agreement').fadeOut("slow");
            $("#section").css({ // this is just for style        
                "opacity": "1"  
            }); 
        }    
        
        function loadPopupBox() {    // To Load the Popupbox
            $('#licence_agreement').fadeIn("slow");        
        }        
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

#section 
{
	border-radius : 2px red;
    background-color : white;
    width : 660px;
    height : 630px;
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

#signup_form
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

#licence_agreement
{
	overflow : scroll;
	display:none; 
    position:fixed;  
    height:400px;  
    width:600px;  
	background-color : black;
	border-radius : 12px;
	color : white;
	opacity : .8;
    left: 300px;
    top: 130px;
    z-index:100; 
    margin-left: 40px;  
    border:2px solid #888888;      
    padding:15px;  
    font-size:15px;  
    box-shadow: 1px 1px 2px 2px #888888;
}

#T&C
{
	color : blue;
	cursor : pointer;
}
</style>

<body style = "margin : 0px">

<div id="header">
<a href="home.php"><img src="./img/received_939630352792517.jpeg" style="height:80px; width:150px; margin-top:2px; margin-left:90px; z-index:5" ></a>
	<h6 style="margin-top:0px; margin-left: 82px; z-index:10;color:white">Make the world your spinning wheel</h6>
</div>

<div id="section">
	<div id = "licence_agreement">
		<img id = "closeDiv" src = "./images/close.jpg" style = "margin-top : -15px; margin-left : 495px; position : absolute; border-radius : 6px" alt = "close"></img>
		<p style = "color : white; font-size : 12px; margin-top : 5px; position : absolute">GENERAL TERMS OF USE & SERVICE
The website ghumo.com is a site incorporated and existing in accordance with the laws of India When you access, browse or use this Site, you accept, without limitation or qualification, the terms and conditions set forth herein. When you access any of the sub-Site (whether belonging to an 'associate' of Company or otherwise) through this Site, then such sub-Site may have its own terms and conditions, which are specific to such sub-Site.
These Terms and Conditions of use and any additional terms posted on this Site together constitute the entire agreement between Company and you with respect to your use of this Site.

SITE AND ITS CONTENTS
1) This Site is only for your personal use. You shall not distribute exchange, modify, sell or transmit anything you copy from this Site, including but not limited to any text, images, audio and video, for any business, commercial or public purpose
2) As long as you comply with the terms of these Terms and Conditions of Use, Company grants you a non-exclusive, non-transferable, limited right to enter, view and use this Site. You agree not to interrupt or attempt to interrupt the operation of this Site in any manner whatsoever.
3) Access to certain areas of the Site may only be available to registered members. To become a registered member, you may be required to answer certain questions or provide certain details. Answers to such questions or details required may be mandatory and/or optional. You represent and warrant that all information you supply to us, about yourself, and others, is true and accurate.
4) This site is for consumer use only. Any travel agent/tour operator/consolidator/aggregator should not use this site for individual/group bookings. In the event of bookings by any travel agent/tour operator/consolidator/aggregator through the Site are detected, the Company reserves the right, including without limitation, to cancel such bookings immediately without any notice to such travel agent/tour operator/aggregator/consolidator and/or to withhold payments/commissions thereto. The various discounts and offers mentioned on the Site are applicable to the Consumer for the purposes of end use only

LINKS TO THIRD-PARTY WEBSITES
1) This Site may contain links to websites operated by parties other than Company. Company does not control such Sites and is not responsible for their contents. Company's inclusion of hyperlinks to such Sites does not imply any endorsement of the material on such Sites or any association with their operators. If you decide to access any of the third party Sites linked to this Site, you do so entirely at your own risk.

DISCLAIMER
1) The material in this Site could include technical inaccuracies or typographical errors. Company may make changes/modifications or improvements on the Site at any time.
2) The materials on this Site are provided on an "As Is" basis, without warranties of any kind either expressed or implied. To the fullest extent permissible pursuant to applicable law, Company disclaims all warranties of merchantability and fitness for a particular purpose.
3) Company does not warrant that the functions contained in this Site will be uninterrupted or error free, that defects will be corrected, or that this Site or the servers that make it available are free of viruses or other harmful components, but shall endeavour to ensure your fullest satisfaction. Company does not warrant or make any representations regarding the use of or the result of the use of the material on the Site in terms of their correctness, accuracy, reliability, or otherwise, insofar as such material is derived from other service providers such as airlines, hotel owners and tour operators.
4) You acknowledge that this Site is provided only on the basis set out in these terms and conditions. Your uninterrupted access or use of this Site on this basis may be prevented by certain factors outside our reasonable control including, without limitation, the unavailability, inoperability or interruption of the Internet or other telecommunications services or as a result of any maintenance or other service work carried out on this Website. Company does not accept any responsibility and will not be liable for any loss or damage whatsoever arising out of or in connection with any ability/inability to access or to use the Site.
5) You also acknowledge that through this Site, Company merely provides intermediary services in order to facilitate booking of tickets and hotel services to you. Company is not the last-mile service provider to you and therefore, Company shall not be or deemed to be responsible for any lack or deficiency of services provided by any person (airline, travel/tour operator, hotel, facility or similar agency) you shall engage or hire or appoint pursuant to or resulting from, the material available in this Site.
6) Company will not be liable to you or to any other person for any direct, indirect, incidental, punitive or consequential loss, damage, cost or expense of any kind whatsoever and howsoever caused from out of your usage of this Site.
7) If for any reason, law does not permit exclusions of liability then, the liability of the Company shall be limited to such amount paid by the user and retained by the Company for the transaction in question.

GENERAL PROVISIONS
1) Company may add to, modify or remove any part of these Terms and Conditions of Use at any time as it may deem fit, without notice. Any changes to these Terms and Conditions of Use or any terms posted on this Site apply as soon as they are posted. By continuing to use this Site after any changes are posted, you are indicating your acceptance of those changes.
2) Company may add, change, discontinue, remove or suspend any other Content posted on this Site, including features and specifications of products described or depicted on the Site, temporarily or permanently, at any time, without notice and without liability.
3) Company reserves the right to undertake all necessary steps to ensure that the security, safety and integrity of Company's systems as well as its clients and users interests are and remain, well-protected. Towards this end, Company may take various steps to verify and confirm the authenticity, enforceability and validity of orders placed by you.
4) If Company, in its sole and exclusive discretion, concludes that the said orders are not or do not reasonably appear to be, authentic, enforceable or valid, then Company may cancel the said orders at any time up to 06 hours before the scheduled time of departure of the relevant flight or 24 hours before the expected date of visit to any property booked through Company.
5) You may travel to certain destinations which involve greater risks than others, entirely at your risk as to cost and consequences.
6) Company requests you to consult your local authorities and evaluate travel prohibitions,warnings, announcements, and advisories issued by them before booking travel to certain international destinations.
7) By offering for sale travel to particular destinations, Company does not represent or warrant that travel to such point is advisable or without risk. 
8) Company does not accept liability for damages, losses, or delays that may result from improper documents for entry, exit, length of stay, or from travel to such destinations.
9) Company reserves its exclusive right in its sole discretion to alter, limit or discontinue the Site or any material posted herein, in any respect. Company shall have no obligation to take the needs of any User into consideration in connection therewith.
10) Company reserves its right to deny in its sole discretion any user access to this Site or any portion hereof without notice.
11) No waiver by Company of any provision of these Terms and Conditions shall be binding except as set forth in writing and signed by its duly authorized representative.

PROMOTION CODES
1) ghumo.com generates promotion codes from time to time which may be availed on the Site as a discount coupon. Users are advised that the promotional offer of using Promotion Codes for receiving discounts can be availed only if correct and full details (of the promotional code) are filled in at the time of making the booking. In case if the customer fails to enter the promocode before making the booking, the company shall not be liable to give any credit to the customer after the booking has been made.
2) Considering there are multiple promotional offers running on the site, user can avail the benefit of only one offer at a time. No two promotional codes can be combined at the time of making a booking.
3) Promotional discounts are applied only on the base amount for Hotels. Discounts are not applicable for any additional components including taxes.
4) On cancellation of bookings done using promotional codes, the hotel cancellation charges are calculated on total price before discount. For such bookings, an additional cancellation charge of 10% or Rs.500, whichever is minimum will be deducted from the refund amount after applying the hotel cancellation policy.

MODIFICATION OF TERMS OF USE

The Company reserves the right to modify or supplement these terms of use for regulatory, legal, technical or any other reason with future effect by placing an advance notice on the Website. The notice will include the date of planned change and the consequences for users.
Registered users of the Company will get additional information about planned change of terms of use via e-mail.

GOVERNING LAW AND FORUM
These terms and conditions are governed by and shall be construed in accordance with the laws of the Republic of India and any dispute shall exclusively be subject to the jurisdiction of the appropriate Courts situated at Delhi, India

SEVERABILITY CLAUSE
If any part of these terms is determined to be invalid or unenforceable pursuant to applicable law including, but not limited to, the warranty disclaimers and liability limitations set forth above, then the invalid or unenforceable provision will be deemed superseded by a valid, enforceable provision that most closely matches the intent of the original provision and the remaining provisions of these terms of use shall continue in effect.

COMPENSATION
You agree to defend and fully compensate Company and its affiliates and any of their officers, directors, employees and agents from and against any claims, causes of action, demands, recoveries, losses, damages, fines, penalties or other costs or expenses of any kind or nature, including but not limited, to reasonable legal and accounting fees, brought by third parties as a result of:
		Your breach of these terms of use or the documents referenced herein;
		Your violation of any applicable law including but not limited to violation of intellectual property rights of a third party; or
		Your use of this Website.</p>
	</div>
	<h1 id = "heading">Sign Up</h1><br>
	<form id = "signup_form" name = "signup_form" method = "post"; action = "registered_user.php"; onsubmit = "return validateForm();">
	<input type = "text" name = "Fname" style = "height : 35px; width : 260px; margin-left : 65px; border-radius : 10px; background-color : #f2f2f2" placeholder = "First Name" required>
	<input type = "text" name = "Lname" style = "height : 35px; width : 260px; margin-left : 15px; border-radius : 10px; background-color : #f2f2f2; margin-top : 1px; position : absolute" placeholder = "Last Name" required><br><br>
	<input type = "text" name = "MobileNo" style = "height : 35px; width : 540px; margin-left : 65px; border-radius : 10px; background-color : #f2f2f2" placeholder = "Mobile Number" required><br><br>
	<input type = "text" name = "Email" style = "height : 35px; width : 540px; margin-left : 65px; border-radius : 10px; background-color : #f2f2f2" placeholder = "Email Id" required><br><br>
	<input type = "password" name = "password" style = "height : 35px; width : 540px; margin-left : 65px; border-radius : 10px; background-color : #f2f2f2" placeholder = "Password" required><br><br>
	<input type = "password" name = "password_re" style = "height : 35px; width : 540px; margin-left : 65px; border-radius : 10px; background-color : #f2f2f2" placeholder = "Password" required><br><br>
	<input type = "checkbox" name = "remember" style = "margin-left : 65px; margin-top : 10px" required><p style = "margin-left : 85px; font-weight : 700; margin-top : -20px;">I Agree to <a id = "click" style = "color : blue; cursor : pointer">Terms and Conditions.</a></p>
	<input type = "submit" name = "signup" value = "Register" style = "background-color : #00004d; color : white; width : 85px; height : 45px; border : thick; border-color : blue; border-radius : 12px; margin-left : 285px"><br><br>
	<hr>
	<p style = "text-align : center; margin-top : 6px; font-weight : 800; font-size : 16x; margin-top : 15px">Or Connect With</p>
	<div id = "facebook">
		<a href="index.php"><img src = "./images/facebook.png" style = "border-radius : 12px" alt = "fconnect">
	</div>
	<div id = "google">
		<a href = "http://localhost/Ghumo.com/pages/google/index.php"><img src = "./images/google.jpg" style = "border-radius : 12px" alt = "gconnect"></a>
	</div>
	</form>
</div>

</body>
</html>