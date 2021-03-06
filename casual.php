<?php session_start(); ?>
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
              <a href="./all.php">all</a>
            </li>
            <li class="navbar-item">
              <a href="#">casual</a>
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
            <?php if (!isset($_SESSION["uname"])) { ?>
              <a class="navbar-item-container" href="./signin.php">
                <svg class="navbar-item--icon">
                  <use xlink:href="./images/icons/sprite.svg#icon-user"></use>
                </svg>
                <p>sign in</p>
              </a>
            <?php } else { ?>
              <div class="navbar-item-container">
                <svg class="navbar-item--icon">
                  <use xlink:href="./images/icons/sprite.svg#icon-user"></use>
                </svg>
                <p>welcome, <?php echo $_SESSION["uname"]; ?></p>
              </div>
            <?php } ?>
          </li>
          <li class="navbar-item">
            <a class="navbar-item-container" href="./cart.php">
              <svg class="navbar-item--icon">
                <use xlink:href="./images/icons/sprite.svg#icon-cart"></use>
              </svg>
              <p>cart</p>
            </a>
          </li>
        </div>
      </ul>
    </div>

    <h1 class="product-type">Casual</h1>
    <div class="product-grid">
    <?php
      require('connection.php');
      require('functions.php');

      $sql = "SELECT * FROM listings WHERE listings.type = \"casual\"";
      $conn = openConnection($servername, $username, $password, $dbname);
      loadProducts($sql, $conn); // from functions.php
      closeConnection($conn);
    ?>
    </div>
  </body>
</html>
