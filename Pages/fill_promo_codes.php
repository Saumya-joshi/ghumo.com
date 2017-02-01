<?php
	error_reporting(E_ERROR);
	session_start();
	define('DB_HOST', 'localhost:3306'); 
	define('DB_NAME', 'travel_transport'); 
	define('DB_USER','root'); 
	define('DB_PASSWORD',''); 
	$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
	$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
	function get_random_char($min, $max)
	{
		$range = $max - $min;
		if ($range < 1) 
			return $min; 
		$log = ceil(log($range, 2));
		$bytes = (int) ($log / 8) + 1; 
		$bits = (int) $log + 1; 
		$filter = (int) (1 << $bits) - 1; 
		do 
		{
			$rnd = hexdec(base64_encode(openssl_random_pseudo_bytes($bytes)));
			$rnd = $rnd & $filter; 
		} while ($rnd >= $range);
		return $min + $rnd;
	}

	function generate_promocode()
	{
		$code = "";
		$characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$characters.= "abcdefghijklmnopqrstuvwxyz";
		$characters.= "0123456789";
		$max = strlen($characters) - 1;
		for ($i=0; $i < 7; $i++) 
		{
			$code .= $characters[get_random_char(0, $max)];
		}
		return $code;
	}
	
	function generate_max_discount()
	{
		$discount = rand(0, 50);
		return $discount;
	}
	
	function generate_max_amount()
	{
		$max_amount = rand(1000, 10000);
		return $max_amount;
	}
	
	for($var = 1; $var <= 20; $var++)
	{
		$promo_code = generate_promocode();
		$discount = generate_max_discount();
		$amount = generate_max_amount();
		$query_insert = "INSERT into promo_codes(promo_Code, amount_percent_off, min_amt_req) values('$promo_code', '$discount', '$amount')";
		$res_insert = mysql_query($query_insert) or die(mysql_error());
		if($res_insert)
		{
			echo 'Success';
		}
		else
		{
			echo 'Failure';
		}
	}
?>