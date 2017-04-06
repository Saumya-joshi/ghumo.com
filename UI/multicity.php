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
	width : 200px;
	height : 35px;
}
</style>
<script>
$(document).ready(function(){
	$('#Add_2').click(function()
	{
		loadCity2();
		unloadAdd();
		loadbutton();
	});
	
	function loadCity2()
	{
		$('#city_2').show();	
	}
	
	function unloadAdd()
	{
		$('#Add_2').hide();
	}
	
	function loadbutton()
	{
		$('#Add_3').show();
	}

	$('#Add_3').click(function()
	{
		loadCity3();
		unloadAdd2();
		loadbutton2();
	});
	
	function loadCity3()
	{
		$('#city_3').show();	
	}
	
	function unloadAdd2()
	{
		$('#Add_3').hide();
	}
	
	function loadbutton2()
	{
		$('#Add_4').show();
	}
	
	$('#Add_4').click(function()
	{
		loadCity4();
		unloadAdd3();
	});
	
	function loadCity4()
	{
		$('#city_4').show();
	}
	
	function unloadAdd3()
	{
		$('#Add_4').hide();
	}
	
	$('#remove_2').click(function()
	{
		if($('#city_4').is(':visible'))
		{
			$('#city_4').hide();
			$('#Add_4').show();
			$('#Add_3').hide();
		}
		
		else if($('#city_3').is(':visible'))
		{
			$('#city_3').hide();
			$('#Add_2').show();
			$('#Add_3').hide();
			$('#Add_4').hide();
		}	
		else
		{
			$('#city_2').hide();
			$('#Add_2').show();
			$('#Add_3').hide();
		}
	});
	
	$('#remove_3').click(function()
	{
		if($('#city_4').is(':visible'))
		{
			$('#city_4').hide();
			$('#Add_4').show();
			$('#Add_3').hide();
		}
		else
		{
			$('#city_3').hide();
			$('#Add_2').show();
			$('#Add_3').hide();
			$('#Add_4').hide();
		}	
		/*$('#city_3').hide();
		$('#Add_3').show();*/
	});
	
	$('#remove_4').click(function()
	{
		$('#city_4').hide();
		$('#Add_4').show();
	});

});
	
	
</script>
</head>
<body>
<div id = "form_flights">
	<form name = "form_multicity" action = "flight_search_result.php" method = "post">
		<table style = "width : 600px">
		<tr>
			<td  colspan = "2" style = "font-size:15px; text-align:left; color:white">
				<input type="radio" id="one" name="oneway" value="oneway.php" onclick = "openLink(this)" target = "frame_1">One-Way&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<input type="radio" id="round" name="round" value="roundtrip.php" onclick = "openLink(this)" target = "frame_1">Roundtrip
			</td>
			<td  colspan = "2" style = "font-size:15px; text-align:left; color:white">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" id="multi" name="multicity" value="multicity.php" onclick = "openLink(this)" target = "frame_1">Multicity</td>
		</tr>
		<tr>
			<td style = "font-size:15px; text-align:left; color:white">Leaving From</td>
			<td style = "font-size:15px; text-align:left; color:white">Going To</td>
			<td colspan = "2" style = "font-size:15px; text-align:left; color:white">Departure Date</td>
		</tr>
		<tr>
			<td><input type = "text" name = "LeavingFrom" placeholder = "Enter City/Airport" style = "height : 25px; width : 150px; border-radius : 5px; background-color : #f2f2f2" required></td>
			<td><input type = "text" name = "GoingTo" placeholder = "Enter City/Airport" style = "height : 25px; width : 150px; border-radius : 5px; background-color : #f2f2f2" required></td>
			<td colspan = "2"><input type = "date" name = "DepartureDate" style = "height : 25px; width : 150px; border-radius : 5px; background-color : #f2f2f2" required></td>
		</tr>
		<tr id = "city_2" style = "display : none">
			<td><input type = "text" name = "LeavingFrom" placeholder = "Enter City/Airport" style = "height : 25px; width : 150px; border-radius : 5px; background-color : #f2f2f2" required></td>
			<td><input type = "text" name = "GoingTo" placeholder = "Enter City/Airport" style = "height : 25px; width : 150px; border-radius : 5px; background-color : #f2f2f2" required></td>
			<td><input type = "date" name = "DepartureDate" style = "height : 25px; width : 150px; border-radius : 5px; background-color : #f2f2f2" required></td>
			<td style = "width : 80px"><input type = "button" id = "remove_2" value = "Remove" style = "height : 20px; width : 70px; color : white; background-color : #800000">
		</tr>
		<tr id = "city_3" style = "display : none">
			<td><input type = "text" name = "LeavingFrom" placeholder = "Enter City/Airport" style = "height : 25px; width : 150px; border-radius : 5px; background-color : #f2f2f2" required></td>
			<td><input type = "text" name = "GoingTo" placeholder = "Enter City/Airport" style = "height : 25px; width : 150px; border-radius : 5px; background-color : #f2f2f2" required></td>
			<td><input type = "date" name = "DepartureDate" style = "height : 25px; width : 150px; border-radius : 5px; background-color : #f2f2f2" required></td>
			<td style = "width : 80px"><input type = "button" id = "remove_3" value = "Remove" style = "height : 20px; width : 70px; color : white; background-color : #800000">
		</tr>
		<tr id = "city_4" style = "display : none">
			<td><input type = "text" name = "LeavingFrom" placeholder = "Enter City/Airport" style = "height : 25px; width : 150px; border-radius : 5px; background-color : #f2f2f2" required></td>
			<td><input type = "text" name = "GoingTo" placeholder = "Enter City/Airport" style = "height : 25px; width : 150px; border-radius : 5px; background-color : #f2f2f2" required></td>
			<td><input type = "date" name = "DepartureDate" style = "height : 25px; width : 150px; border-radius : 5px; background-color : #f2f2f2" required></td>
			<td style = "width : 80px"><input type = "button" id = "remove_4" value = "Remove" style = "height : 20px; width : 70px; color : white; background-color : #800000">
		</tr>
		<tr id = "Add_2">
			<td>
				<input type = "button" value = "Add City" style = "height : 30px; width : 100px; color : white; background-color : #800000">
			</td>
		</tr>
		<tr id = "Add_3" style = "display : none">
			<td>
				<input type = "button" value = "Add City" style = "height : 30px; width : 100px; color : white; background-color : #800000">
			</td>
		</tr>
		<tr id = "Add_4" style = "display : none">
			<td>
				<input type = "button" value = "Add City" style = "height : 30px; width : 100px; color : white; background-color : #800000">
			</td>
		</tr>
		<tr>
			<td style = "font-size : 15px; text-align : left; color : white">Adult(12+)</td>
			<td style = "font-size : 15px; text-align : left; color : white">Children(2-12)</td>
			<td colspan = "2" style = "font-size : 15px; text-align : left; color : white">Infant(0-2)</td>
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
			<td colspan = "2">
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
		<td colspan = "2">
			<input type = "submit" name = "search_multicity" style="height : 35px; width : 155px; border-radius: 5px; box-shadow: 5px; background-color : #b30000; color:white; font-size:15px" value="Search Flights">
		</td>
		</tr>
		</table>
	</form>
</div>
</body>
</html>
