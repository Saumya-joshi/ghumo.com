<?php
session_start();
include_once("src/Google_Client.php");
include_once("src/contrib/Google_Oauth2Service.php");
######### edit details ##########
$clientId = '**************************'; //Google CLIENT ID
$clientSecret = '*************************'; //Google CLIENT SECRET
$redirectUrl = 'http://localhost/ghumo.com/pages/google/';  //return url (url to script)
$homeUrl = 'http://localhost/ghumo.com/pages/google/';  //return to home

##################################

$gClient = new Google_Client();
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectUrl);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>
