<!DOCTYPE html>
<html lang="en">

<head>
  <title>TT | My WishList</title>
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
            <button class="btn btn-primary mt-4 mb-3" onclick="history.back()">Back</button>
        </div>
    </div>
    <h1 class="text-center txt">My Wishlist</h1>
      
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="card mb-3 col-lg-12 col-md-12">
                    <div class="row g-0">
                        <div class="image-container col-md-4">
                            <img src="images/monitors/A1.jpg" alt="Product Image" class="mx-auto img-fluid m-2 card-img">
                        </div>
                        <div class="col-md-4 d-flex align-items-center justify-content-center mb-2">
                            <div>
                                <h5 class="card-title mb-1">Product Name</h5>
                                <p class="card-text mb-0">Price: £10.00</p>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-center justify-content-center mb-2">
                            <button type="button" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <?php include 'footer.php'; ?>
    
  </body>
</html>