<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/products.css" />

    <title>nadacrease</title>
  </head>
  <body>
    <div class="navbar">
      <ul class="navbar-list">
        <li class="navbar-item">
          <div class="navbar-item-container">
            <a href="./index.php">
              <svg class="navbar-item--icon">
                <use xlink:href="./images/icons/sprite.svg#icon-home"></use>
              </svg>
            </a>
            <a href="./index.php"> nadacrease </a>
          </div>
        </li>

        <div class="navbar-categories">
          <div class="navbar-categories">
            <li class="navbar-item">
              <a href="#">all</a>
            </li>
            <li class="navbar-item">
              <a href="./casual.php">casual</a>
            </li>
            <li class="navbar-item">
              <a href="./running.php">running</a>
            </li>
            <li class="navbar-item">
              <a href="./boots.php">boots</a>
            </li>
          </div>
        </div>

        <div class="navbar-options">
          <li class="navbar-item">
              <a class="navbar-item-container" href="./signin.php">
                <svg class="navbar-item--icon">
                  <use xlink:href="./images/icons/sprite.svg#icon-user"></use>
                </svg>
                <p>sign in</p>
              </a>
          </li>
          <li class="navbar-item">
            <div class="navbar-item-container">
              <a href="#">
                <svg class="navbar-item--icon">
                  <use xlink:href="./images/icons/sprite.svg#icon-cart"></use>
                </svg>
              </a>
              <p>cart</p>
            </div>
          </li>
        </div>
      </ul>
    </div>
    <h1 class="product-type">All Products</h1>

    <?php
      $servername = "localhost";
      $username = "root";
      $password = "password";
      $dbname = "ecomm_shoes";

      $conn = new mysqli($servername, $username, $password, $dbname);
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      $sql = "SELECT * FROM listings";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          ?>
            <!--HTML-->
            
            <div class="product-grid">
              <div class="product">
                <div class="img-container">
                  <p class="product-total"><?php $row['stock'] ?> in stock</p>
                  <img
                    src="<?php $row['imgpath'] ?>"
                    alt="Product 1"
                    class="product-img"
                  />
                </div>
                <div class="product-info">
                  <h2 class="product-name"><?php $row['title'] ?></h2>
                  <p class="product-cost">$<?php $row['cost'] ?></p>
                </div>
                <p class="product-brand"><?php $row['brand'] ?></p>

                <div class="btn-container">
                  <button class="btn-add-product">Add Item</button>
              </div>
            </div>

            <!--HTML-->
          <?php
          // echo $row['listid'] . '  |  ' . $row['title'] . '  |  ' . $row['brand'] . '  |  ' . 
          // $row['cost'] . ' | ' . $row['imgpath'] . ' | ' . $row['stock']. "\n";
        }
      } else {
        echo "0 results";
      }
        $conn->close();
    ?>
    </div>
  </body>
</html>
