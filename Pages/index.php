<?php
session_start();
include_once("config.php");
include_once("includes/functions.php");
//destroy facebook session if user clicks reset
if(!$fbuser){
	$fbuser = null;
	$loginUrl = $facebook->getLoginUrl(array('redirect_uri'=>$homeurl,'scope'=>$fbPermissions));
	$output = 'Click&nbsp<a href="'.$loginUrl.'">here&nbsp</a>to proceed.'; 	
}else{
	$user_profile = $facebook->api('/me?fields=id,first_name,last_name,email,gender,locale,picture');
	$user = new Users();
	$user_data = $user->checkUser('facebook',$user_profile['id'],$user_profile['first_name'],$user_profile['last_name'],$user_profile['email'],$user_profile['gender'],$user_profile['locale'],$user_profile['picture']['data']['url']);
	$_SESSION['facebook_data'] = $user_profile;
	$redirect_page = 'home.php';
	$redirect = true;
	if($redirect == true)
	{
		header('Location: '.$redirect_page);
	}
	/*if(!empty($user_data)){
		$_SESSION['loggedIn'] = true;
 		$output = '<h1>Facebook Profile Details </h1>';
		$output .= '<img src="'.$user_data['picture'].'">';
        $output .= '<br/>Facebook ID : ' . $user_data['oauth_uid'];
        $output .= '<br/>Name : ' . $user_data['fname'].' '.$user_data['lname'];
        $output .= '<br/>Email : ' . $user_data['email'];
        $output .= '<br/>Gender : ' . $user_data['gender'];
        $output .= '<br/>Locale : ' . $user_data['locale'];
        $output .= '<br/>You are login with : Facebook';
        $output .= '<br/>Logout from <a href="logout.php?logout">Facebook</a>'; 
		$_SESSION['username'] = $user_data['fname'];
		$_SESSION['id'] = $user_data['oauth_uid'];
		$_SESSION['picture'] = '<img src="'.$user_data['picture'].'">';
		$redirect_page = 'home.php';
		$redirect = true;
		if($redirect == true)
		{
			header('Location: '.$redirect_page);
		}
	}else{
		$output = '<h3 style="color:red">Some problem occurred, please try again.</h3>';
	}*/
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<div>
<?php echo $output; ?>
</div>

</body>
</html>