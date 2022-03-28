<?php 
  var_dump(function_exists('mysqli_connect'));
  // create connection
  $con = mysqli_connect('localhost','root','root','dbname','3306');
  
  // check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);  
  }

  
  mysqli_select_db($con, 'database_name');
  $sql = "SELECT * FROM products WHERE featured=1";
  $featured = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Shoe Shop</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Shoeshop.com</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-2">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Shoes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="product-boots.php">Boots</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="product-casual.php">Casual</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="product-running.php">Running</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>

<div class="col-md-2"></div>

 <div class="col-md-8">
    <div class="row">
      <h2 class="text-center">Top Products</h2> <br> <br>
      <?php 
          while($product = mysqli_fetch_assoc($featured)):

      ?>
        <div class="col-md-5">
            <h4><?= $product['title'];?></h4>
            <img src="<?= $product['images'];?>" alt="<?= $product['title'];?>"/>
            <p class="lprice">Cdn <?= $product['price'];?></p>
            <a href="details.php">
              <button type="button" class="btn btn-success" data-bs-toggle="modal" data-target="#details-1">More</button>
            </a>
        </div>
      <?php endwhile; ?>

    </div>
  </div>
</body>
</html>