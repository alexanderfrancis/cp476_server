<?php
  function loadProducts($sql, $conn) {
     $result = $conn->query($sql);
     $count = 0;
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          $count++;
          ?>
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
                  <button class="btn-add-product">Add Item</button>
                </div>
              </div>
          <?php
        }
      } else {
        echo "0 results";
      }
  }
?>