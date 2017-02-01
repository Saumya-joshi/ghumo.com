<?php
	date_default_timezone_set('Etc/UTC');
	require './PHPMailer-master/PHPMailerAutoload.php';
	if(isset($_POST['reset_password']))
	{
		session_start();
		define('DB_HOST', 'localhost:3306'); 
		define('DB_NAME', 'travel_transport'); 
		define('DB_USER','root'); 
		define('DB_PASSWORD',''); 
		$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
		$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
		$email_id = $_POST['reset_email_link'];
		$query = "select Fname, hash, status from reg_user where emailId = '$email_id'";
		$res = mysql_query($query);
		if(mysql_num_rows($res) > 0)
		{
			while($rows = mysql_fetch_array($res))
			{
				$Fname = $rows['Fname'];
				$hash_value = $rows['hash'];
				$status = $rows['status'];
			}
			if($status == '0')
				echo "Sorry!please check that you have entered correct id or your account is activated.";
			else
			{
				$mail = new PHPMailer;
				$mail->isSMTP();
				$mail->SMTPDebug = 2;
				//$mail->Debugoutput = 'html';
				$mail->Host = 'smtp.gmail.com';
				$mail->Port = 587;
				$mail->SMTPSecure = 'tls';
				$mail->SMTPAuth = true;
				$mail->Username = "email_id";
				$mail->Password = "your_password";
				$mail->setFrom('email_id_from_where_mail_to_be_sent', 'Ghumo.com');
				$mail->addAddress($email_id);
				$mail->Subject = 'Hi!!Password Reset';
				$mail->Body = 'Hi!'.$Fname.'
				Please click on this link to reset your password:
				http://localhost/Ghumo.com/pages/update_password.php?email='.$email_id.'&hash='.$hash_value.'';

				if (!$mail->send()) 
				{
					echo "Mailer Error: " . $mail->ErrorInfo;
				}
				else 
				{
					$redirect_page = 'update_password_link_sent.php';
					$redirect = true;
					if($redirect == true)
					{
						header('Location: '.$redirect_page);
					}
				}
			}
		}
		else
		{
			echo 'No such id exists';
		}
	}
?>
