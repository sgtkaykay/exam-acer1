<?php
	if(isset($_POST['search'])){
		$query= $_POST['search'];
	}
		if(isset($query)){
      $search = str_replace(" ", "%20", $query);
			$json = file_get_contents('https://acer-api.herokuapp.com/product/search.php?search='.$search);
			$data = json_decode($json,true);
		}
		else{
			$json = file_get_contents('https://acer-api.herokuapp.com/product/read.php');
			$data = json_decode($json,true);
		}
	$list = $data['Acer'];
?>
<h1>Acer Laptops</h1>
<form method="POST" action="index.php?page=product">
	<input type="text" name="search" placeholder="Search Product">
</form>
<div class="laptopwrapper">
  <ul>
    <?php
      foreach($list as $result){
    ?>
      <li>
        <a href="index.php?page=detail&id=<?php echo $result['ID'];?>">
          <?php echo '<img src="acer/'.$result['Image'].'">'?>
          <strong>
            <span><?php echo $result['Name']; ?></span>
          </strong>
        </a>
      </li>
    <?php
      }
    ?>
  </ul>
</div>
