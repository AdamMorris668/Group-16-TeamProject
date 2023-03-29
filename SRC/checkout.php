<?php
include 'connect_db.php';
$conn = getDatabase();

// Checking if the user is logged in, otherwise take him to the login page
if(!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit(); 
}

$id = (int)$_SESSION["id"];

// Remove Product from the wishlist

if (isset($_GET["remove"])) {
    $delete = $conn->prepare("DELETE FROM basket WHERE id=:id");
    $delete->execute([
        'id' => $_GET["remove"]
    ]);
    
    header('Location: checkout.php');
    exit();
}

if (isset($_POST["checkout"])) {
    // Insert the products from the basket into the orders table
    $stmt = $conn->prepare("INSERT INTO orders (user_id, product_id, order_status) SELECT user_id, product_id, 'processing' FROM basket WHERE user_id=:id");
    $stmt->execute(['id'=>$id]);
    
    // Delete the products from the basket
    $stmt = $conn->prepare("DELETE FROM basket WHERE user_id=:id");
    $stmt->execute(['id'=>$id]);
    
    header('Location: checkout.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>TT | Basket</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
  <body>
    <!-- header goes here when header is ready -->
    <?php include 'header.php'; ?>

    <div class="screen-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <button class="btn btn-primary mt-4 mb-3" onclick="history.back()">Back</button>
                </div>
            </div>
            <h1 class="text-center txt">Basket</h1>
        
            <div class="container">
                <div class="row justify-content-center">

                <!-- Displaying the products from the user wishlist -->
                    
                <?php
                $totalPrice = 0;
                $stmt = $conn->prepare("SELECT * FROM basket WHERE user_id=:id");
                $stmt->execute(['id'=>$id]);
                $basket = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
                foreach($basket as $item){
                    $stmt = $conn->prepare("SELECT * FROM products WHERE id=:id");
                    $stmt->execute(['id'=>$item['product_id']]);
                    $result = $stmt-> fetchAll(PDO::FETCH_ASSOC);

                    foreach($result as $row){
                        $totalPrice += $row['price'];
                        echo "<div class=\"col-lg-8 col-md-10 mx-auto\">";
                            echo "<a href=\"viewProduct.php?id=" . $row['id'] . "\" class=\"card-link\">";
                                echo "<div class=\"card shadow rounded mb-3 col-lg-12 col-md-12 product-card\">";
                                    echo "<div class=\"row g-0\">";
                                        echo "<div class=\"image-container col-md-4\">";
                                            echo "<img src=" . $row["images"] . " alt=\"Product Image\" class=\"mx-auto img-fluid m-2 card-img\">";
                                        echo "</div>";
                                        echo "<div class=\"col-md-4 d-flex align-items-center justify-content-center mb-2\">";
                                            echo "<div>";
                                                echo "<h5 class=\"card-title mb-1\">" . $row["product"] . "</h5>";
                                                echo "<p class=\"card-text mb-0\">Price: £" . $row["price"] . "</p>";
                                            echo "</div>";
                                        echo "</div>";
                                        echo "<div class=\"col-md-4 d-flex align-items-center justify-content-center mb-2\">";
                                            echo "<form method=\"post\" action=\"checkout.php?remove=" . $item["id"] . "\"> <button type=\"submit\" class=\"btn btn-danger my-3\" name=\"remove\"><i class=\"fa fa-times\"></i></button></form>";
                                        echo "</div>";
                                    echo "</div>";
                                echo "</div>";
                            echo "</a>";
                        echo "</div>";
                    }
                }
                ?>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-lg-8 col-md-10 mx-auto d-flex justify-content-end">
                <div class="total-price mb-3">
                    <h4 class="card-title mb-3">Total Price: £<?php echo $totalPrice; ?></h4>
                    <form method="post" action="checkout.php">
                        <button type="submit" class="btn btn-success" name="checkout">Checkout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <?php include 'footer.php'; ?>
    
  </body>
</html>