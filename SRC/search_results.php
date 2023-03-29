<?php
include('connect_db.php');

$results = array(); // Initialize $results as an empty array

if(isset($_GET['q'])) {
  $searchTerm = $_GET['q'];

  try {
    $conn = getDatabase();

    $stmt = $conn->prepare("SELECT * FROM products WHERE product LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', "%{$searchTerm}%", PDO::PARAM_STR);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
  } catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }
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
        <?php include 'header.php'; ?>
        <!-- Products display section -->
        <div class="container my-5">
            <div class="row row-cols-1 row-cols-md-1 g-4 justify-content-center">
                <?php if(isset($_GET['q'])) { ?>
                <h1 class="text-center txt"><?php echo count($results); ?> result(s) for "<?php echo $searchTerm; ?>"</h1>
                <?php foreach($results as $row) { ?>
                    <div class="col-md-6">
                    <a href="viewProduct.php?id=<?php echo $row['id']; ?>" class="card-link">
                        <div class="card shadow p-3 rounded d-flex h-100 mx-auto product-card">
                        <div class="row g-0 align-items-center product-row py-2">
                            <div class="col-md-4">
                            <div class="zoom">
                                <img src="<?php echo $row['images']; ?>"class="card-img-top">
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
                <?php } else { ?>
                <h1 class="text-center txt">All Products</h1>
                <?php
                $conn = getDatabase();
                $stmt = $conn->prepare("SELECT * FROM products");
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach($result as $row) { ?>
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
                <?php } 
                } ?>
            </div>
        </div>
        <?php include 'footer.php'; ?>
    </body>
</html>