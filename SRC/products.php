<?php 
include "connect_db.php";

$conn = getDatabase();

$products = "";
if (isset($_GET['product'])) {
  $products = $_GET['product'];
}

function getProduct($conn, $type)
{
  $stat = $conn->prepare("SELECT id, product, price, images, `type` FROM products WHERE type=:type");
  $stat->execute(['type' => $type]);
  return $stat->fetchAll(PDO::FETCH_ASSOC);
}
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

    <?php if (!isset($_GET['product'])) { ?>
      <div class="wrapper">
      <div class="grid-image">

        <div class="keyboard">
          <a href="products.php?product=keyboard">
            <h3>Keyboards</h3>
          </a>
        </div>

        <div class="mouse">
          <a href="products.php?product=mouse">
            <h3>Mouse</h3>
          </a>
        </div>

        <div class="monitors">
          <a href="products.php?product=monitor">
            <h3>Monitors</h3>
          </a>
        </div>

        <div class="speaker">
          <a href="products.php?product=speaker">
            <h3>Speakers</h3>
          </a>
        </div>

        <div class="camera">
          <a href="products.php?product=camera">
            <h3>Cameras</h3>
          </a>
        </div>
      </div>
    </div>
  <?php } ?>

  <!-- Keyboard displayed -->

<?php if ($products == "keyboard") {
  $result = getProduct($conn, "keyboard"); ?>

  <br>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <button class="btn btn-primary mt-4 mb-3" onclick="history.back()">Back</button>
      </div>
    </div>
    <div class="row row-cols-1 row-cols-md-1 g-4 justify-content-center">
      <h1 class="text-center txt"><?php echo ($products); ?>s</h1>
      <?php foreach($result as $row) { ?>
        <div class="col-md-6">
          <a href="viewProduct.php?id=<?php echo $row['id']; ?>" class="card-link">
            <div class="card shadow p-3 rounded d-flex h-100 mx-auto product-card">
              <div class="row g-0 align-items-center product-row py-2">
                <div class="col-md-4">
                  <div class="zoom">
                    <img src="<?php echo $row['images']; ?>" alt="<?php echo $row['product']; ?>" class="card-img-top">
                  </div>
                </div>
                <div class="product-info col-md-4 px-4">
                  <h5 class="card-title"><?php echo $row['product']; ?></h5>
                  <h6 class="card-subtitle mb-2">£<?php echo $row['price']; ?></h6>
                </div>
              </div>
            </div>
          </a>
        </div>
      <?php } ?>
    </div>
  </div>
  <br>
<?php } ?>

  <!-- Mouse displayed -->

  <?php if ($products == "mouse") {
  $result = getProduct($conn, "mouse"); ?>

  <br>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <button class="btn btn-primary mt-4 mb-3" onclick="history.back()">Back</button>
      </div>
    </div>
    <div class="row row-cols-1 row-cols-md-1 g-4 justify-content-center">
      <h1 class="text-center txt"><?php echo ($products); ?>s</h1>
      <?php foreach($result as $row) { ?>
        <div class="col-md-6">
          <a href="viewProduct.php?id=<?php echo $row['id']; ?>" class="card-link">
            <div class="card shadow p-3 rounded d-flex h-100 mx-auto product-card">
              <div class="row g-0 align-items-center product-row py-2">
                <div class="col-md-4">
                  <div class="zoom">
                    <img src="<?php echo $row['images']; ?>" alt="<?php echo $row['product']; ?>" class="card-img-top">
                  </div>
                </div>
                <div class="product-info col-md-4 px-4">
                  <h5 class="card-title"><?php echo $row['product']; ?></h5>
                  <h6 class="card-subtitle mb-2">£<?php echo $row['price']; ?></h6>
                </div>
              </div>
            </div>
          </a>
        </div>
      <?php } ?>
    </div>
  </div>
  <br>
<?php } ?>

<!-- Monitors displayed -->

<?php if ($products == "monitor") {
  $result = getProduct($conn, "monitor"); ?>

  <br>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <button class="btn btn-primary mt-4 mb-3" onclick="history.back()">Back</button>
      </div>
    </div>
    <div class="row row-cols-1 row-cols-md-1 g-4 justify-content-center">
      <h1 class="text-center txt"><?php echo ($products); ?>s</h1>
      <?php foreach($result as $row) { ?>
        <div class="col-md-6">
          <a href="viewProduct.php?id=<?php echo $row['id']; ?>" class="card-link">
            <div class="card shadow p-3 rounded d-flex h-100 mx-auto product-card">
              <div class="row g-0 align-items-center product-row py-2">
                <div class="col-md-4">
                  <div class="zoom">
                    <img src="<?php echo $row['images']; ?>" alt="<?php echo $row['product']; ?>" class="card-img-top">
                  </div>
                </div>
                <div class="product-info col-md-4 px-4">
                  <h5 class="card-title"><?php echo $row['product']; ?></h5>
                  <h6 class="card-subtitle mb-2">£<?php echo $row['price']; ?></h6>
                </div>
              </div>
            </div>
          </a>
        </div>
      <?php } ?>
    </div>
  </div>
  <br>
<?php } ?>

<!-- Cameras displayed -->

<?php if ($products == "camera") {
  $result = getProduct($conn, "camera"); ?>

  <br>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <button class="btn btn-primary mt-4 mb-3" onclick="history.back()">Back</button>
      </div>
    </div>
    <div class="row row-cols-1 row-cols-md-1 g-4 justify-content-center">
      <h1 class="text-center txt"><?php echo ($products); ?>s</h1>
      <?php foreach($result as $row) { ?>
        <div class="col-md-6">
          <a href="viewProduct.php?id=<?php echo $row['id']; ?>" class="card-link">
            <div class="card shadow p-3 rounded d-flex h-100 mx-auto product-card">
              <div class="row g-0 align-items-center product-row py-2">
                <div class="col-md-4">
                  <div class="zoom">
                    <img src="<?php echo $row['images']; ?>" alt="<?php echo $row['product']; ?>" class="card-img-top">
                  </div>
                </div>
                <div class="product-info col-md-4 px-4">
                  <h5 class="card-title"><?php echo $row['product']; ?></h5>
                  <h6 class="card-subtitle mb-2">£<?php echo $row['price']; ?></h6>
                </div>
              </div>
            </div>
          </a>
        </div>
      <?php } ?>
    </div>
  </div>
  <br>
<?php } ?>



<!-- Speakers displayed -->

<?php if ($products == "speaker") {
  $result = getProduct($conn, "speaker"); ?>

  <br>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <button class="btn btn-primary mt-4 mb-3" onclick="history.back()">Back</button>
      </div>
    </div>
    <div class="row row-cols-1 row-cols-md-1 g-4 justify-content-center">
      <h1 class="text-center txt"><?php echo ($products); ?>s</h1>
      <?php foreach($result as $row) { ?>
        <div class="col-md-6">
          <a href="viewProduct.php?id=<?php echo $row['id']; ?>" class="card-link">
            <div class="card shadow p-3 rounded d-flex h-100 mx-auto product-card">
              <div class="row g-0 align-items-center product-row py-2">
                <div class="col-md-4">
                  <div class="zoom">
                    <img src="<?php echo $row['images']; ?>" alt="<?php echo $row['product']; ?>" class="card-img-top">
                  </div>
                </div>
                <div class="product-info col-md-4 px-4">
                  <h5 class="card-title"><?php echo $row['product']; ?></h5>
                  <h6 class="card-subtitle mb-2">£<?php echo $row['price']; ?></h6>
                </div>
              </div>
            </div>
          </a>
        </div>
      <?php } ?>
    </div>
  </div>
  <br>
<?php } ?>

  
  
    <?php include 'footer.php'; ?>
    
  </body>
</html>