<?php session_start(); ?>
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
    <title>nadacrease</title>
  </head>
  <body>
    <div class="heading">
      <div class="navbar">
        <ul class="navbar-list">
          <li class="navbar-item">
            <div class="navbar-item-container">
              <a href="#">
                <svg class="navbar-item--icon">
                  <use xlink:href="./images/icons/sprite.svg#icon-home"></use>
                </svg>
              </a>
              <p>nadacrease</p>
            </div>
          </li>

          <div class="navbar-categories">
            <li class="navbar-item">
              <a href="./all.php">all</a>
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

      <div class="header">
        <h1 class="header-main">2022 Bestsellers</h1>
        <h2 class="header-sub">find your style</h2>
        <button class="header-btn">
          <a href="./all.php">Shop Shoes</a>
        </button>
      </div>
    </div>
  </body>
</html>