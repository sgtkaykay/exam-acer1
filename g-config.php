<?php
	session_start();
	require_once "google-api-php-client-2.4.0/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("1044492130865-i8vakvn81gme5eq7poafcptctdkrlohm.apps.googleusercontent.com");
	$gClient->setClientSecret("dywTN5Nv5Wi5A0kfS6vXReXA");
	$gClient->setApplicationName("CPI Login Tutorial");
	$gClient->setRedirectUri("https://localhost/google/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
