<?php
  function loadProducts($sql, $conn) {
     $result = $conn->query($sql);
     $count = 0;
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          $count++;
          ?>
              <?php $_POST['id'] = $row['listid']?>
              <div class="product">
                <div class="img-container">
                  <p class="product-total"><?php echo $row['stock'] ?> in stock</p>
                  <img
                    src="<?php echo $row['imgpath'] ?>"
                    alt="Product <?php echo $count ?>"
                    class="product-img"
                  />
                </div>
                <div class="product-info">
                  <h2 class="product-name"><?php echo $row['title'] ?></h2>
                  <p class="product-cost">$<?php echo $row['cost'] ?></p>
                </div>
                <p class="product-brand"><?php echo $row['brand'] ?></p>

                <div class="btn-container">
                  <form action="includes/checkout.inc.php" method="post">
                    <button class="btn-add-product" type="submit" name="add">Add Item</button>
                  </form>
                </div>
              </div>
          <?php
        }
      } else {
        echo "0 results";
      }
  }

  function loadCart($sql, $conn) {
    $result = $conn->query($sql);
    $count = 0;
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          $count++;
            ?>
              <?php $_POST['id'] = $row['listid']?>
              <div class="cart-container">
              <div class="cart-product">
                <div class="cart-img-container">
                  <img
                    src="<?php echo $row['imgpath'] ?>"
                    alt="Product <?php echo $count ?>"
                    class="product-img"
                  />
                </div>
                <div class="cart-product-info-container">
                  <div class="cart-product-info">
                    <h2 class="cart-product-name"><?php echo $row['title'] ?></h2>
                    <p class="cart-product-cost">$<?php echo $row['cost'] ?></p>
                  </div>
                  <p class="cart-product-brand"><?php echo $row['brand'] ?></p>
                  <p class="cart-product-type"><?php echo $row['type'] ?></p>
                  <div class="cart-product-quantity-container">
                    <form action="includes/checkout.inc.php" method="post">
                      <label for="quantity" class="cart-product-quantity">Quantity</label>
                      <select name="quantity" id="quantity">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                      </select>
                    </form>
                  </div>
                </div>
                  <form action="includes/checkout.inc.php" method="post">
                    <button class="product-remove-btn" type = "submit" name = "remove">Remove</button>
                  </form>
              </div>
            <?php
      }
    } else {
      echo "0 results";
    }
  }
?>