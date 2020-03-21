<?php
session_start();

require_once('pinterest-api-settings.php');
require_once('pinterest-login-api.php');

// Pinterest passes a parameter 'code' in the Redirect Url
if(isset($_GET['code'])) {
	try {
		$pinterest_ob = new PinterestApi();

		// Get the access token
		$accessToken = $pinterest_ob->GetAccessToken(PINTEREST_APPLICATION_ID, PINTEREST_REDIRECT_URI, PINTEREST_APPLICATION_SECRET, $_GET['code']);
		$_SESSION['access_token'] = (string) $accessToken;
		// Get user information
		$userData = $pinterest_ob->GetUserProfileInfo($accessToken);

		$_SESSION['first'] = $userData['first_name'];
		$_SESSION['last'] = $userData['last_name'];
		$_SESSION['pic'] = $userData['image']['60x60']['url'];

		header('Location: index.php');
		exit();
	}
	catch(Exception $e) {
		echo $e->getMessage();
		exit;
	}
}

?>
