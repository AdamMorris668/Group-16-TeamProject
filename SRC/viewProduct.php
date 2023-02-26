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

    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <button class="btn btn-primary mt-4 mb-3" onclick="window.history.back()">Back</button>
        </div>
      </div>
      <h1 class="text-center">Product View</h1>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <img class="img-fluid img" src="images/monitors/A1.jpg" alt="Product Image">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex flex-column">
          <h2 class="product-name mt-5">Product Name</h2>
          <p class="product-price">$19.99</p>
          <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
          <div class="mt-auto">
            <button class="btn btn-success add-to-basket">Add to Basket</button>
            <button class="btn btn-success add-to-wishlist">Add to Wishlist</button>
          </div>
        </div>
      </div>
    </div>

    <br>
    <?php include 'footer.php'; ?>
    
  </body>
</html>