<?php 
  // create connection
  $con = new mysqli_connect('localhost', 'root');
  
  // check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);  
  }

  
  mysqli_select_db($con, 'database_name');
  $sql = "SELECT * FROM products WHERE featured=1";
  $featured = $con->query($sql);
?>

<div class="col-md-2"></div>

 <div class="col-md-8">
    <div class="row">
      <h2 class="text-center">Product Details:</h2>
      <?php 
          while($product = mysqli_fetch_assoc($featured)):

      ?>
        <div class="col-md-5">
            <h4><b><?= $product['title'];?></b></h4>
            <img src="<?= $product['images'];?>" alt="<?= $product['title'];?>"/>
            <p class="lprice"><b>Cdn <?= $product['price'];?> </b></p>
            <p class="desc">Cdn <?= $product['description'];?></p>
            <p class="bname">Cdn <?= $product['brandname'];?></p>
        </div>
      <?php endwhile; ?>

    </div>
  </div>