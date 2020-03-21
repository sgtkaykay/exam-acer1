<?php
  $page = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';

  session_start();

	if (!isset($_SESSION['access_token'])) {
	header('Location: login.php');
	exit();
	}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Acer API</title>
    <script src="js/myScript.js"></script>
    <link rel="stylesheet" type="text/css" href="css/index-style.css">
    <link rel="stylesheet" type="text/css" href="css/content-style.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan+2&display=swap" rel="stylesheet">
  </head>
  <body>
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="index.php" class="logonav"><img src="image/acer-logo-white.png" class="logonav"></a>
      <a href="index.php">Home</a>
      <a href="index.php?page=product">Product List</a>
      <a href="index.php?page=category">Display Categories</a>
      <a href="logout.php">Log Out</a>
    </div>
    <div class="header">
      <a class="barhover" href="#" onclick="openNav()">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
      </a>
      <a href="index.php" class="barhover"><img src="image/acer-log.png" class="logoheader"></a>
      <img class="profilepic" src="<?php echo $_SESSION['pic'] ?>"><h3><?php echo $_SESSION['first']." ". $_SESSION['last'] ?></h3>
      <br class="clear">
    </div>
    <div class="content">
      <?php
          switch ($page) {
    				case 'product':
    				    require_once('product.php');
    				        break;
    				case 'detail':
    			      require_once('product_one.php');
    			          break;
            case 'category':
            		require_once('category.php');
            			  break;
    				default:
    					  require_once('home.php');
    					      break;
    				}

			?>
    </div>
    <footer>
  		© Copyright Acer Inc. All Rights Reserved.
  	</footer>
  </body>
</html>
