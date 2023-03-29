<?php
include "connect_db.php";
$conn = getDatabase();

$stmt = $conn->prepare("SELECT id, product, product_description, price, images, size, `type` FROM products WHERE id=?");
$stmt->bindParam(1, $_GET["id"], PDO::PARAM_INT);
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$result = $stmt->fetchAll();
$product = $result[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>TT | TechTopia products</title>
  <!-- fix in future for logo as an icon <link rel="icon" type="image/x-icon" href="/Images/Logo.ico"> -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- This is for the rollover images, hovering over, the image changes and shows the second image-->
</head>
  <body>
    <!-- header goes here when header is ready -->
    <?php include 'header.php'; ?>
    <div class="screen-container">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <button class="btn btn-primary mt-4 mb-3" onclick="window.location.href = 'products.php'">Back</button>
          </div>
        </div>
        <h1 class="text-center txt"><?php echo $product['type']; ?></h1>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div id="image-zoom">
            <img class="img-fluid product-zoom img" src="<?php echo $product['images']; ?>" alt="Product-Image">
            </div>
          </div>

          <!-- product information column -->
          
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex flex-column">
            <h2 class="product-name mt-5"><?php echo $product['product']; ?></h2>
            <p class="product-price">£<?php echo $product['price']; ?></p>
            <p class="product-description"><?php echo $product['product_description']; ?></p>
            <p class="product-description">Stock: <?php echo $product['size']; ?></p>
            <div class="d-flex justify-content-end">
              <?php 
              if (isset($_SESSION['id'])) {
                $stmt = $conn->prepare("SELECT * FROM basket WHERE user_id=:user_id AND product_id=:product_id");
                $stmt->execute(['user_id' => $_SESSION['id'], 'product_id' => $product['id']]);
                $productInBasket = $stmt->fetch(PDO::FETCH_ASSOC);

                // Check if the product is out of stock
                if ($product['size'] == 0) {
                    echo '<button type="button" class="btn btn-success" name="basket" disabled>Out of Stock</button>';
                } else {
                    if ($productInBasket) {
                        echo '<button type="button" class="btn btn-success" name="basket" onclick="addToBasket()">Add to Basket <i class="fa fa-shopping-cart"></i></button>';
                    } else {
                        echo '<button type="button" class="btn btn-success" name="basket" onclick="addToBasket()">Add to Basket <i class="fa fa-shopping-cart"></i></button>';
                    }
                }
              } else {
                echo '<button type="button" class="btn btn-success" name="basket" onclick="addToBasket()">Add to Basket <i class="fa fa-shopping-cart"></i></button>';
              }
              
              if(isset($_SESSION['id'])) {
                $stmt = $conn->prepare("SELECT * FROM wishlist WHERE user_id=:user_id AND product_id=:product_id");
                $stmt->execute(['user_id' => $_SESSION['id'], 'product_id' => $product['id']]);
                $productInWishlist = $stmt->fetch(PDO::FETCH_ASSOC);
                if($productInWishlist) {
                  echo '<button type="button" class="btn btn-danger mx-2" name="wishlist" disabled>Product Already in Wishlist <i class="fa fa-heart"></i></button>';
                } else {
                  echo '<button type="button" class="btn btn-danger mx-2" name="wishlist" onclick="addToWishlist()">Add to Wishlist <i class="fa fa-heart-o"></i></button>';
                }
              } else {
                echo '<button type="button" class="btn btn-danger mx-2" name="wishlist" onclick="addToWishlist()">Add to Wishlist <i class="fa fa-heart-o"></i></button>';
              }
              ?>
              <script>
              function addToBasket() {
                  if (!<?php echo isset($_SESSION['id']) ? 'true' : 'false' ?>) {
                      alert("Please login to add this product to your basket.");
                      window.location.href = "login.php"
                  } else {
                      window.location.href = "viewProduct.php?id=<?php echo $product['id']; ?>&basket=1";
                  }
              }

              function addToWishlist() {
                  if (!<?php echo isset($_SESSION['id']) ? 'true' : 'false' ?>) {
                      alert("Please login to add this product to your wishlist.");
                      window.location.href = "login.php"
                  } else {
                      window.location.href = "viewProduct.php?id=<?php echo $product['id']; ?>&wishlist=1";
                  }
              }
              </script>

            </div>
          </div>
        </div>
      </div>

      <?php
      if (isset($_GET['basket']) && isset($_SESSION['id'])) {
        $product_id = $product['id'];
        $user_id = $_SESSION['id'];

        $stmt = $conn->prepare("SELECT * FROM basket WHERE user_id = :user_id AND product_id = :product_id");
        $stmt->execute([
            ':user_id' => $user_id,
            ':product_id' => $product_id
        ]);

        $result = $stmt->fetch();

        if ($result) {
            $quantity = $result['quantity'] + 1;
            $stmt = $conn->prepare("UPDATE basket SET quantity = :quantity WHERE user_id = :user_id AND product_id = :product_id");
            $stmt->execute([
                ':quantity' => $quantity,
                ':user_id' => $user_id,
                ':product_id' => $product_id
            ]);
        } else {
            $stmt = $conn->prepare("INSERT INTO basket(user_id, product_id, quantity) VALUES(:user_id, :product_id, :quantity)");
            $stmt->execute([
                ':user_id' => $user_id,
                ':product_id' => $product_id,
                ':quantity' => 1
            ]);
        }

        echo '<script>alert("Product added to basket!")</script>';
      }

      if (isset($_GET['wishlist']) && isset($_SESSION['id'])) {
        if(isset($_GET["wishlist"])){
          $stmt = $conn->prepare("SELECT * FROM wishlist WHERE user_id=:user_id AND product_id=:product_id");
          $stmt->execute([
            ':user_id' => $_SESSION['id'],
            ':product_id' => $product['id'],
          ]);
          $result = $stmt->fetchAll();
    
        if (count($result) > 0) {
          // product is already in wishlist
          echo '<script>alert("This product is already in your wishlist!")</script>';
        } else {
          // product is not in wishlist, so add it
          $stmt = $conn->prepare("INSERT INTO wishlist(user_id, product_id)
            VALUES(:user_id, :product_id)");
    
          $stmt->execute([
            ':user_id' => $_SESSION['id'],
            ':product_id' => $product['id'],
          ]);
    
          echo '<script>alert("Product added to wishlist!")</script>';
          }
        }
      }
      ?>
      
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-md-6 col-sm-12 col-12 d-flex flex-column">
            <h3>Recommended Products</h3>
            <div class="row">
              <?php
                $stmt2 = $conn->prepare("SELECT id, product, product_description, price, images, `type` FROM products WHERE `type`<> ? ORDER BY RAND() LIMIT 4");
                $stmt2->bindParam(1, $product['type'], PDO::PARAM_STR);
                $stmt2->execute();
                $results = $stmt2->fetchAll();
                foreach ($results as $row) { ?>
                  <div class="col col-sm-6 col-md-4 col-lg-3 mb-3">
                    <a href="viewProduct.php?id=<?php echo $row['id']; ?>" class="card-link">
                      <div class="card h-100 rounded">
                        <div class="zoom">
                          <img src="<?php echo $row['images']; ?>" alt="<?php echo $row['product']; ?>" class="card-img-top img-fluid">
                        </div>
                        <div class="card-body">
                          <h5 class="card-title text-center"><?php echo $row['product']; ?></h5>
                          <h6 class="card-subtitle mb-2 text-center">£<?php echo $row['price']; ?></h6>
                        </div>
                      </div>
                    </a>
                  </div>
                <?php } ?>
            </div>
          </div>
        </div>
      </div>


    <br>
    <?php include 'footer.php'; ?>

    <!-- Zoom in JS script -->
    <script>
    const magnifier = document.getElementById("image-zoom");
    const img = document.querySelector(".product-zoom");

    magnifier.addEventListener("mousemove", (e) => {
      const x = e.clientX - e.target.offsetLeft;
      const y = e.clientY - e.target.offsetTop;

      console.log(x,y);

      img.style.transformOrigin = `${x}px ${y}px`;
      img.style.transform = "scale(2)"
    });

    magnifier.addEventListener("mouseleave", () => {
      img.style.transformOrigin = "center";
      img.style.transform = "scale(1)";
    });
  </script>


  </body>

<!-- existing code for viewProduct.php -->

</body>
</html>


</html>

