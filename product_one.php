<?php
  $ID = $_GET['id'];
  $json = file_get_contents('http://acer-api.herokuapp.com/product/read_one.php?id='.$ID);
  $data = json_decode($json,true);
  $list = $data['Acer'];
?>
<?php foreach ($list as $result) { ?>
  <div class="imageContainer">
    <?php echo '<img src="acer/'.$result['Image'].'">'?>
  </div>
  <div class="specsContainer">
    <h4><?php echo $result['Name']; ?></h4>
    <div class="specs">
      <div class="nostyle">
        <table>
          <tr>
            <td width="15%"><p>Processor:</p></td>
            <td width="50%"><p><?php echo $result['Processor']; ?></p></td>
          </tr>
          <tr>
            <td><p>Video:</p></td>
            <td><p><?php echo $result['Video']; ?></p></td>
          </tr>
          <tr>
            <td><p>Memory:</p></td>
            <td><p><?php echo $result['Memory']; ?></p></td>
          </tr>
          <tr>
            <td><p>Storage:</p></td>
            <td><p><?php echo $result['Storage']; ?></p></td>
          </tr>
          <tr>
            <td><p>Ports:</p></td>
            <td><p><?php echo $result['Ports']; ?></p></td>
          </tr>
          <tr>
            <td><p>Battery:</p></td>
            <td><p><?php echo $result['Battery']; ?></p></td>
          </tr>
          <tr>
            <td><p>OS:</p></td>
            <td><p><?php echo $result['OS']; ?></p></td>
          </tr>
        </table>
      </div>
  </div>
</div>
<?php } ?>
<br class="clear">
