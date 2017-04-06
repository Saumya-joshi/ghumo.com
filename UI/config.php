<?php
include_once("inc/facebook.php"); //include facebook SDK
######### Facebook API Configuration ##########
$appId = '788266257984095'; //Facebook App ID
$appSecret = '43be91697fafd800ef8f89be49e63129'; // Facebook App Secret
$homeurl = 'http://localhost/ghumo.com/pages/';  //return to home
$fbPermissions = 'email';  //Required facebook permissions

//Call Facebook API
$facebook = new Facebook(array(
  'appId'  => $appId,
  'secret' => $appSecret

));
$fbuser = $facebook->getUser();
?>