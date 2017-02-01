<?php
	session_start();
	session_unset();
	session_destroy();
	$redirect_page = 'home.php';
	$redirect = true;
	if($redirect == true)
	{
		header('Location: '.$redirect_page);
	}
?>