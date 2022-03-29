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



    <h1 class="product-type">Casual</h1>

    <div class="product-grid">
      <div class="product">
        <div class="img-container">
          <p class="product-total">5 in stock</p>
          <img
            src="./images/casual/airforce1s.png"
            alt="Product 1"
            class="product-img"
          />
        </div>
        <div class="product-info">
          <h2 class="product-name">Air Force 1s</h2>
          <p class="product-cost">$135</p>
        </div>
        <p class="product-brand">Nike</p>

        <div class="btn-container">
          <button class="btn-add-product">Add Item</button>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
          <p class="product-total">5 in stock</p>
          <img
            src="./images/casual/allstars.jpg"
            alt="Product 2"
            class="product-img"
          />
        </div>
        <div class="product-info">
          <h2 class="product-name">Chuck Taylor All Star Low Top</h2>
          <p class="product-cost">$70</p>
        </div>
        <p class="product-brand">Converse</p>
        <div class="btn-container">
          <button class="btn-add-product">Add Item</button>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
          <p class="product-total">5 in stock</p>
          <img
            src="./images/casual/stansmiths.png"
            alt="Product 3"
            class="product-img"
          />
        </div>
        <div class="product-info">
          <h2 class="product-name">Stan Smith</h2>
          <p class="product-cost">$120</p>
        </div>
        <p class="product-brand">Adidas</p>
        <div class="btn-container">
          <button class="btn-add-product">Add Item</button>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
          <p class="product-total">5 in stock</p>
          <img
            src="./images/casual/jordans91.png"
            alt="Product 4"
            class="product-img"
          />
        </div>
        <div class="product-info">
          <h2 class="product-name">Jordan Flight Club '91</h2>
          <p class="product-cost">$170</p>
        </div>
        <p class="product-brand">Jordan</p>
        <div class="btn-container">
          <button class="btn-add-product">Add Item</button>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
          <p class="product-total">5 in stock</p>
          <img
            src="./images/casual/nmds.png"
            alt="Product 5"
            class="product-img"
          />
        </div>
        <div class="product-info">
          <h2 class="product-name">NMD R1 Primeblues</h2>
          <p class="product-cost">$190</p>
        </div>
        <p class="product-brand">Adidas</p>
        <div class="btn-container">
          <button class="btn-add-product">Add Item</button>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
          <p class="product-total">5 in stock</p>
          <img
            src="./images/casual/superstars.png"
            alt="Product 6"
            class="product-img"
          />
        </div>
        <div class="product-info">
          <h2 class="product-name">Adidas Superstars</h2>
          <p class="product-cost">$120</p>
        </div>
        <p class="product-brand">Adidas</p>
        <div class="btn-container">
          <button class="btn-add-product">Add Item</button>
        </div>
      </div>
    </div>
  </body>
</html>
