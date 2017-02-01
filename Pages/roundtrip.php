<!DOCTYPE html>
<html>
<head>
<base target="_parent"></base>
<meta charset="ISO-8859-1">
<title>SuhanaSafar|Book Flights, Hotels & Holidays at best Price!!!</title>
<link href="./CSS/js-image-slider.css" rel="stylesheet" type="text/css" />
<script src="./JavaScript/js-image-slider.js" type="text/javascript"></script>
<link href="./CSS/generic.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script>
function openLink(radio)
{
 window.open(radio.value,'_self');
}
</script>
<style>
#form_flights
{
	background-color : black;
	opacity : .8;
	width : 600px;
	height : 400px;
}

td
{
	width : 230px;
	height : 35px;
}
</style>
</head>
<body>
<div id = "form_flights">
	<form name = "form_roundtrip" action = "flight_search_result.php" method = "post">
		<table style = "width : 570px">
		<tr>
			<td  colspan = "2" style = "font-size:15px; text-align:left; color:white">
				<input type="radio" id="one" name="oneway" value="oneway.php" onclick = "openLink(this)" target = "frame_1">One-Way&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<input type="radio" id="round" name="round" value="roundtrip.php" onclick = "openLink(this)" target = "frame_1" checked>Roundtrip
			</td>
			<td  style = "font-size:15px; text-align:left; color:white">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" id="multi" name="multicity" value="multicity.php" onclick = "openLink(this)" target = "frame_1">Multicity</td>
		</tr>
		<tr>
			<td colspan = "2" style = "font-size:15px; text-align:left; color:white">From : </td>
			<td style = "font-size : 15px; text-align : left; color : white"> To : </td>
		</tr>
		<tr>
			<td colspan = "2"><input type="text" name="from" style = "height : 25px; width : 225px; border-radius : 5px; background-color : #f2f2f2" placeholder="Departure City"></td>
			<td colspan = "2"><input type="text" name="from" style = "height : 25px; width : 225px; border-radius : 5px; background-color : #f2f2f2" placeholder="Departure City"></td>
		</tr>
		<tr>
			<td colspan = "2" style = "font-size : 15px; text-align : left; color : white">Departure Date</td>
			<td style = "font-size : 15px; text-align : left; color : white">Return Date</td>
		</tr>
		<tr>
			<td colspan = "2"><input type = "date" name = "DepartureDate" style = "height : 25px; width : 225px; border-radius : 5px; background-color : #f2f2f2" required></td>
			<td><input type = "date" name = "ReturnDate" style = "height : 25px; width : 225px; border-radius : 5px; background-color : #f2f2f2"></td>
		</tr>
		<tr>
			<td style = "font-size : 15px; text-align : left; color : white">Adult(12+)</td>
			<td style = "font-size : 15px; text-align : left; color : white">Children(2-12)</td>
			<td style = "font-size : 15px; text-align : left; color : white">Infant(0-2)</td>
		</tr>
		<tr>
			<td>
				<select name="Adult" style = "height : 25px; width : 135px; border-radius : 5px; background-color : #f2f2f2">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
				</select>
			</td>
			<td>
				<select name="Children" style = "height : 25px; width : 135px; border-radius : 5px; background-color : #f2f2f2">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
			</select>
			</td>
			<td>
				<select name="Infant" style = "height : 25px; width : 135px; border-radius : 5px; background-color : #f2f2f2">
					<option value="0">0</option>
					<option value="1">1</option>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan = "2" style = "font-size : 15px; text-align : left; color : white">Class</td>
		</tr>
		<tr>
		<td colspan = "2">
			<select name="Class" style = "height : 25px; width : 135px; border-radius : 5px; background-color : #f2f2f2">
				<option value="Economy">Economy</option>
				<option value="Business">Business</option>
				<option value="FirstClass">First Class</option>
				<option value="PreniumEconomy">Premium Economy</option>
			</select>
		</td>
		<td>
			<input type = "submit" name = "search_roundtrip" style="height : 35px; width : 155px; border-radius: 5px; box-shadow: 5px; background-color : #b30000; color:white; font-size:15px" value="Search Flights">
		</td>
		</tr>
		</table>
	</form>
</div>
</body>
</html>
