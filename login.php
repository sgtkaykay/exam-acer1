<?php
	require_once "config.php";
	require_once "pinterest-api-settings.php";
	require_once "g-config.php";

	if (isset($_SESSION['access_token'])) {
		header('Location: index.php');
		exit();
	}

	$redirectURL = "https://exam-acer.herokuapp.com/fb-callback.php";
	$permissions = ['email'];
	$loginURL = $helper->getLoginUrl($redirectURL, $permissions);

	$gLoginURL = $gClient->createAuthUrl();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan+2&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/login-style.css">
  </head>
  <body>
    <div class="login">
      <h1>Log in to</h1>
      <img src="image/acer-log.png">
      <div class="facebook">
        <a href="<?php echo $loginURL ?>"><img src="image/facebook.png"> | Login with Facebook</a>
      </div>
      <div class="pinterest">
				<a href="<?= 'https://api.pinterest.com/oauth/?client_id=' . PINTEREST_APPLICATION_ID . '&redirect_uri=' . urlencode(PINTEREST_REDIRECT_URI) . '&response_type=code&scope=read_public'?>"><img src="image/pinterest.png"> | Login with Pinterest</a>
      </div>
			<div class="google">
				<a href="<?php echo $gLoginURL ?>"><img src="image/google.png"> | Login with Google</a>
      </div>
    </div>
  </body>
</html>
