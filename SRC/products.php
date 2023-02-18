<?php 
include "connect_db.php";

$conn = getDb();

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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
    $result = getProduct($conn, "keyboard");

    echo "<div class=\"gallery\">";

    foreach($result as $row) {
      echo "<div class=\"content\">";
      echo "<div class=\"zoom\">";
      echo "<a href=\"view_product.php?id=" . $row["id"] . "\"><img src=\"" . $row["images"] . "\" alt=\"" . $row["product"] . "\"></a>";
      echo "</div>";
      echo "<a href=\"view_product.php?id=" . $row["id"] . "\"><h3>" . $row["product"] . "</h3></a>";
      echo "<a href=\"view_product.php?id=" . $row["id"] . "\"><p>" . $row["type"] . "</p></a>";
      echo "<h6>£" . $row["price"] . "</h6>";
      echo "</div>";
    }
    echo "</div>";
  } ?>

  <!-- Mouse displayed -->

<?php if ($products == "mouse") {
    $result = getProduct($conn, "mouse");

    echo "<div class=\"gallery\">";

    foreach($result as $row) {
      echo "<div class=\"content\">";
      echo "<div class=\"zoom\">";
      echo "<a href=\"view_product.php?id=" . $row["id"] . "\"><img src=\"" . $row["images"] . "\" alt=\"" . $row["product"] . "\"></a>";
      echo "</div>";
      echo "<a href=\"view_product.php?id=" . $row["id"] . "\"><h3>" . $row["product"] . "</h3></a>";
      echo "<a href=\"view_product.php?id=" . $row["id"] . "\"><p>" . $row["type"] . "</p></a>";
      echo "<h6>£" . $row["price"] . "</h6>";
      echo "</div>";
    }
    echo "</div>";
  } ?>

<!-- Monitors displayed -->

<?php if ($products == "monitor") {
    $result = getProduct($conn, "monitor");

    echo "<div class=\"gallery\">";

    foreach($result as $row) {
      echo "<div class=\"content\">";
      echo "<div class=\"zoom\">";
      echo "<a href=\"view_product.php?id=" . $row["id"] . "\"><img src=\"" . $row["images"] . "\" alt=\"" . $row["product"] . "\"></a>";
      echo "</div>";
      echo "<a href=\"view_product.php?id=" . $row["id"] . "\"><h3>" . $row["product"] . "</h3></a>";
      echo "<a href=\"view_product.php?id=" . $row["id"] . "\"><p>" . $row["type"] . "</p></a>";
      echo "<h6>£" . $row["price"] . "</h6>";
      echo "</div>";
    }
    echo "</div>";
  } ?>

<!-- Cameras displayed -->

<?php if ($products == "camera") {
    $result = getProduct($conn, "camera");

    echo "<div class=\"gallery\">";

    foreach($result as $row) {
      echo "<div class=\"content\">";
      echo "<div class=\"zoom\">";
      echo "<a href=\"view_product.php?id=" . $row["id"] . "\"><img src=\"" . $row["images"] . "\" alt=\"" . $row["product"] . "\"></a>";
      echo "</div>";
      echo "<a href=\"view_product.php?id=" . $row["id"] . "\"><h3>" . $row["product"] . "</h3></a>";
      echo "<a href=\"view_product.php?id=" . $row["id"] . "\"><p>" . $row["type"] . "</p></a>";
      echo "<h6>£" . $row["price"] . "</h6>";
      echo "</div>";
    }
    echo "</div>";
  } ?>

<!-- Speakers displayed -->

<?php if ($products == "speaker") {
    $result = getProduct($conn, "speaker");

    echo "<div class=\"gallery\">";

    foreach($result as $row) {
      echo "<div class=\"content\">";
      echo "<div class=\"zoom\">";
      echo "<a href=\"view_product.php?id=" . $row["id"] . "\"><img src=\"" . $row["images"] . "\" alt=\"" . $row["product"] . "\"></a>";
      echo "</div>";
      echo "<a href=\"view_product.php?id=" . $row["id"] . "\"><h3>" . $row["product"] . "</h3></a>";
      echo "<a href=\"view_product.php?id=" . $row["id"] . "\"><p>" . $row["type"] . "</p></a>";
      echo "<h6>£" . $row["price"] . "</h6>";
      echo "</div>";
    }
    echo "</div>";
  } ?>

    
  
    <?php include 'footer.php'; ?>
    
  </body>
</html>