<?php
  $json = file_get_contents('https://acer-api.herokuapp.com/category/read.php');
	$data = json_decode($json,true);
	$list = $data['Acer'];
?>
<h1>Laptop Categories</h1>
<div class="categoryWrapperEvery">
  <?php
    foreach($list as $result){
  ?>
    <div class="categoryWrapperOne">
        <h2><?php echo $result['Category']; ?></h2>
      <div class="descwrapper">
        <p><?php echo $result['Description']; ?></p>
      </div>
    </div>
  <?php
    }
  ?>
</div>
