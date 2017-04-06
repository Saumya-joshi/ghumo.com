<?php
session_start();
include_once("src/Google_Client.php");
include_once("src/contrib/Google_Oauth2Service.php");
######### edit details ##########
$clientId = '1039872108556-sqnq72ip241n5kp5dd6v7k2dn6ecc915.apps.googleusercontent.com'; //Google CLIENT ID
$clientSecret = 'zxlr6EEJ0TLwjXsk0t3XwJA2'; //Google CLIENT SECRET
$redirectUrl = 'http://localhost/ghumo.com/pages/google/';  //return url (url to script)
$homeUrl = 'http://localhost/ghumo.com/pages/google/';  //return to home

##################################

$gClient = new Google_Client();
$gClient->setApplicationName('Login to codexworld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectUrl);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>