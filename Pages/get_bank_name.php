<?php
	error_reporting(E_ERROR);
	session_start();
	if(isset($_POST['proceed_net_banking']))
	{
		$bank_name = $_POST['bank_name'];
		$_SESSION['NET_BANKING_BANK_NAME'] = $bank_name;
		if(!empty($_SESSION['NET_BANKING_BANK_NAME']))
		{
			$redirect_page = 'payment_page.php#secure_login';
			$redirect = true;
			if($redirect == true)
			{
				header('Location: '.$redirect_page);
			}
		}
		else
		{
			$_SESSION['SELECT_BANK_NAME_ERROR_MESSAGE'] = 'Please select bank to proceed';
			$redirect_page = 'payment_page.php#select_bank';
			$redirect = true;
			if($redirect == true)
			{
				header('Location: '.$redirect_page);
			}
		}
	}
?>