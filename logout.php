<?php
  include('config.php');
  include('pinterest-api-settings.php');
  include('g-config.php');

  unset($_SESSION['access_token']);
	$gClient->revokeToken();
	session_destroy();

  header('location:index.php');
?>
