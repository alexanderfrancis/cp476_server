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
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/products.css" />

    <title>Ecommerce - Running</title>
  </head>
  <body>
    <div class="navbar">
      <ul class="navbar-list">
        <li class="navbar-item">
          <div class="navbar-item-container">
            <a href="../index.php">
              <svg class="navbar-item--icon">
                <use xlink:href="../images/icons/sprite.svg#icon-home"></use>
              </svg>
            </a>
            <a href="../index.php"> home </a>
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
              <a href="#">running</a>
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
                  <use xlink:href="../images/icons/sprite.svg#icon-user"></use>
                </svg>
                <p>sign in</p>
              </a>
          </li>
          <li class="navbar-item">
            <div class="navbar-item-container">
              <a href="#">
                <svg class="navbar-item--icon">
                  <use xlink:href="../images/icons/sprite.svg#icon-cart"></use>
                </svg>
              </a>
              <p>cart</p>
            </div>
          </li>
        </div>
      </ul>
    </div>

    <h1 class="product-type">Running</h1>

        <div class="product-grid">
      <div class="product">
        <div class="img-container">
          <p class="product-total">5 in stock</p>
          <img
            src="../images/running/flyknits.png"
            alt="Product 1"
            class="product-img"
          />
        </div>
        <div class="product-info">
          <h2 class="product-name">React Infinity Run Flyknit 2</h2>
          <p class="product-cost">$210</p>
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
            src="../images/running/streakflys.png"
            alt="Product 2"
            class="product-img"
          />
        </div>
        <div class="product-info">
          <h2 class="product-name">ZoomX Streakfly</h2>
          <p class="product-cost">$210</p>
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
            src="../images/running/endorphin.png"
            alt="Product 3"
            class="product-img"
          />
        </div>
        <div class="product-info">
          <h2 class="product-name">Endorphin Speed 2</h2>
          <p class="product-cost">$200</p>
        </div>
        <p class="product-brand">Saucony</p>
        <div class="btn-container">
          <button class="btn-add-product">Add Item</button>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
          <p class="product-total">5 in stock</p>
          <img
            src="../images/running/fuelcells.png"
            alt="Product 4"
            class="product-img"
          />
        </div>
        <div class="product-info">
          <h2 class="product-name">FuelCell TC</h2>
          <p class="product-cost">$260</p>
        </div>
        <p class="product-brand">New Balance</p>
        <div class="btn-container">
          <button class="btn-add-product">Add Item</button>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
          <p class="product-total">5 in stock</p>
          <img
            src="../images/running/machinas.png"
            alt="Product 5"
            class="product-img"
          />
        </div>
        <div class="product-info">
          <h2 class="product-name">Machina 2 Colorshift</h2>
          <p class="product-cost">$190</p>
        </div>
        <p class="product-brand">Under Armour</p>
        <div class="btn-container">
          <button class="btn-add-product">Add Item</button>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
          <p class="product-total">5 in stock</p>
          <img
            src="../images/running/ultraboosts.png"
            alt="Product 6"
            class="product-img"
          />
        </div>
        <div class="product-info">
          <h2 class="product-name">Ultraboost 22</h2>
          <p class="product-cost">$250</p>
        </div>
        <p class="product-brand">Adidas</p>
        <div class="btn-container">
          <button class="btn-add-product">Add Item</button>
        </div>
      </div>
    </div>
  </body>
</html>
