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
        <p class="summary-cost">$0.00</p>
      </div>
      <div class="summary-container">
        <p class="summary-text">Taxes</p>
        <p class="summary-cost">$0.00</p>
      </div>
      <div class="summary-container">
        <p class="summary-text">Total</p>
        <p class="summary-cost">$0.00</p>
      </div>
      <button class="checkout-btn">Checkout</button>
    </div>

    <div class="cart-container">
      <div class="cart-product">
        <div class="cart-img-container">
          <img
            src="./images/casual/airforce1s.png"
            alt="Product 1"
            class="product-img"
          />
        </div>
        <div class="cart-product-info-container">
          <div class="cart-product-info">
            <h2 class="cart-product-name">Air Force 1s</h2>
            <p class="cart-product-cost">$135</p>
          </div>
          <p class="cart-product-brand">Nike</p>
          <p class="cart-product-type">Casual</p>
          <div class="cart-product-quantity-container">
            <label for="quantity" class="cart-product-quantity">Quantity</label>
            <select name="quantity" id="quantity">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
        </div>
        <button class="product-remove-btn">Remove</button>
      </div>

      <div class="cart-product">
        <div class="cart-img-container">
          <img
            src="./images/boots/dragon.png"
            alt="Product 2"
            class="product-img"
          />
        </div>
        <div class="cart-product-info-container">
          <div class="cart-product-info">
            <h2 class="cart-product-name">The Dragon Boot 3.0</h2>
            <p class="cart-product-cost">$240</p>
          </div>
          <p class="cart-product-brand">Taft</p>
          <p class="cart-product-type">Boots</p>
          <div class="cart-product-quantity-container">
            <label for="quantity" class="cart-product-quantity">Quantity</label>
            <select name="quantity" id="quantity">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
        </div>
        <button class="product-remove-btn">Remove</button>
      </div>

      <div class="cart-product">
        <div class="cart-img-container">
          <img
            src="./images/running/flyknits.png"
            alt="Product 3"
            class="product-img"
          />
        </div>
        <div class="cart-product-info-container">
          <div class="cart-product-info">
            <h2 class="cart-product-name">React Infinity Run Flyknit 2</h2>
            <p class="cart-product-cost">$210</p>
          </div>
          <p class="cart-product-brand">Nike</p>
          <p class="cart-product-type">Running</p>
          <div class="cart-product-quantity-container">
            <label for="quantity" class="cart-product-quantity">Quantity</label>
            <select name="quantity" id="quantity">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
        </div>
        <button class="product-remove-btn">Remove</button>
      </div>
    </div>
  </body>
</html>
