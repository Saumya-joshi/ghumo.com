<?php 

session_start();
define('DB_HOST', 'localhost:3306'); 
define('DB_NAME', 'travel_transport'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 

function generateTransactionId()
{
	$id = '';
	for($i = 0; $i < 10; $i++)
	{
		$id .= rand(0, 9);
	}
	return $id;
}

function NewUser() 
{ 
	$FirstName = $_POST['Fname']; 
	$LastName = $_POST['Lname']; 
	$MobNumber = $_POST['MobileNo'];
	$email = $_POST['Email']; 
	$password = $_POST['password']; 
	$_SESSION['user_email_id'] = $email;
	$var = "SELECT *FROM reg_user where emailId = '$email'";
	$res = mysql_query($var);
	if(mysql_num_rows($res) != 0)
	{
		echo "user exists...";
	}
	else
	{
		$hash = md5(rand(0, 1000));
		$_SESSION['hash_value'] = $hash;
		$query = "INSERT INTO reg_user(Fname,Lname, MobileNo, emailId, password, hash)VALUES('".mysql_escape_string($FirstName)."','".mysql_escape_string($LastName)."','".mysql_escape_string($MobNumber)."','".mysql_escape_string($email)."','".mysql_escape_string($password)."', '".mysql_escape_string($hash)."');"; 
		$data = mysql_query($query) or die(mysql_error()); 
		if($data) 
		{ 	
			$txn_id = '';
			$amount = 101;
			$credit = 101;
			$debit = 0;
			$status = 'C';
			$txn_id .= generateTransactionId();
			$txn_date = date('Y-m-d H:i:s');
			$_SESSION['transaction_id'] = $txn_id;
			$initiate_wallet = "INSERT into my_wallet(amount, credit, debit, status, txn_id, txn_date) values('$amount', '$credit', '$debit', '$status', '$txn_id', '$txn_date')";
			$res_initiate = mysql_query($initiate_wallet) or die(mysql_error());
			if($res_initiate)
			{
				$redirect_page = 'registration_confirmation_mail.php';
				$redirect = true;
				if($redirect == true)
				{
					header('Location: '.$redirect_page);
				}
			}
		}
	}
} 

if(isset($_POST['signup'])) 
{ 
	NewUser();
}

?>

