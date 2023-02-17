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

    <?php include 'footer.php'; ?>
    
  </body>
</html>