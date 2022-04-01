<?php session_start();
  $cart = $_SESSION['cart'];
  $quantities = array_fill(0, sizeof($cart), 0);
  $_SESSION['quantities'] = $quantities;
  $total = $_SESSION['total'];
?>
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
    <link rel="stylesheet" href="./css/cart.css" />

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
            <a class="navbar-item-container" href="#">
              <svg class="navbar-item--icon">
                <use xlink:href="./images/icons/sprite.svg#icon-cart"></use>
              </svg>
              <p>cart</p>
            </a>
          </li>
        </div>
      </ul>
    </div>

   <!-- probably need to wrap everything under this in php when dynamically loading the products in the cart (based on ids? in the cart), set up variables for subtotal, tax, and total and add the cost of each item in the cart to subtotal and apply a tax of 13%? to the subtotal then just add the two together and display as total -->

   <!-- also need to account for the quantity of each item, and based on a change in quantity -> reflect onto frontend -> just multiply cost by quantity, and make sure the stock of each item is reduced by the quantity accurately (might require php form to apply the change in quantity on checkout? not sure-->
 
    <div class="checkout-container">
      <h1>Summary</h1>
      <div class="summary-container">
        <p class="summary-text">Subtotal</p>
        <p class="summary-cost">$<?php echo number_format($total, 2, '.')?></p>
      </div>
      <div class="summary-container">
        <p class="summary-text">Taxes</p>
        <p class="summary-cost">$<?php echo number_format($total * 0.13, 2, '.')?></p>
      </div>
      <div class="summary-container">
        <p class="summary-text">Total</p>
        <p class="summary-cost">$<?php echo number_format($total + ($total * 0.13), 2, '.')?></p>
      </div>
      <form action="includes/checkout.inc.php" method="post">
        <button class="checkout-btn" type="submit" name="checkout">Checkout</button>
      </form>
      
    </div>

    <div class="cart-container">
      <?php
        $cart = $_SESSION['cart'];

        require('connection.php');
        require('functions.php');
        
        $cart_ids = join("','", $cart);
        $sql = "SELECT * FROM listings WHERE listings.listid IN ('$cart_ids')";
        $conn = openConnection($servername, $username, $password, $dbname);
        loadCart($sql, $conn); // from functions.php
        closeConnection($conn);
      ?>
      </div>
  </body>
</html>
