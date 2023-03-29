<?php
include "connect_db.php";
$conn = getDatabase();
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
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
  <!-- This is for the rollover images, hovering over, the image changes and shows the second image-->
</head>
  <body>
    <!-- header goes here when header is ready -->
    <?php include 'header.php'; ?>
    <div class="text-center">
      
	 
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
		</ol>
		<div class="carousel-inner"  >
			<div class="carousel-item active" style="height:500px">
				
				<img class="w-100"  src="images/category-menu/keyboard.jpg" alt="Keyboard">
				<div class="carousel-caption d-none d-md-block">
					<a href="products.php?product=keyboard">
						<h5>Keyboards</h5>
					</a>
					<p>Look at our top of the line keyboards</p>
					
				</div>
				

			</div>
			<div class="carousel-item" style="height:500px">
				<img class="w-100" src="images/category-menu/speaker.jpg" alt="Speaker">
				<div class="carousel-caption d-none d-md-block">
					<a href="products.php?product=speaker">
						<h5>Speakers</h5>
					</a>
					<p>Listen from the newest speakers</p>
				</div>
			</div>
			<div class="carousel-item" style="height:500px">
				<img class="w-100" src="images\carousel-item\screen.jpg" alt="Monitor">
				<div class="carousel-caption d-none d-md-block">
					<a href="products.php?product=monitor">
						<h5>Monitors</h5>
					</a>
					<p>View the most advanced monitors</p>
				</div>
			</div>
			
			<div class="carousel-item" style="height:500px">
				<img class="w-100" src="images/carousel-item/camera.jpg" alt="Camera">
				<div class="carousel-caption d-none d-md-block">
					<a href="products.php?product=camera">
						<h5>Cameras</h5>
					</a>
					<p>Experience the highest quality cameras</p>
				</div>
			</div>
			
			<div class="carousel-item" style="height:500px">
				<img class="w-100" src="images/carousel-item/mouse.jpg" alt="Mouse">
				<div class="carousel-caption d-none d-md-block">
					<a href="products.php?product=mouse">
						<h5>Mouse</h5>
					</a>
					<p>Watch our most comfortable mice</p>
				</div>
			</div>
			
			
			
			
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
      
	    
	   <br>
	
	<div class="card border border-dark" style="width: 35rem; margin: auto; padding: 10px;">
		<div class="card-body">
			<h5 class="card-title">TechTopia</h5>
			<h6 class="card-subtitle mb-2 text-muted">About Us</h6>
			<p class="card-text">We created the brand Techtopia to try and stand out from the competition and also appeal to our target audience which is technology enthusiasts by going with a futuristic look to our website and only selling the highest quality equipment.We specializes in the sale of technological equipment which focuses in the sale of keyboards, computer mice, microphones, monitors and cameras. </p>
			<a href="aboutUs.php?page=about" class="card-link" style="color:blue;">For more click here</a>
			
		</div>
	</div>
	<br>
	<div class="card border border-dark" style="width: 35rem; margin: auto; padding: 10px;">
		<div class="card-body">
			<h5 class="card-title">How to reach us</h5>
			<h6 class="card-subtitle mb-2 text-muted">Contact Us</h6>
			<p class="card-text">You can contact us at anytime via email or phone. Or vist us at anytime at our location. We strive to help our customers and will welcome anyone 24/7</p>
			<a href="aboutUs.php?page=contact" class="card-link" style="color:blue;">For more click here</a>
			
		</div>
	</div>
    <!--This Java Script code would allow the user to see a live clock and see the exact time -->
    <script language="javascript" src="js/liveclock.js">
      /*
    Live Clock Script-
    By Mark Plachetta (astro@bigpond.net.au(c)) based on code from DynamicDrive.com
    For full source code, 100's more DHTML scripts, and Terms Of Use,
    visit http://www.dynamicdrive.com
    */
    </script>
      <br>
    </div>
    
    <!-- first bit of content for related page goes here-->
    <div>
      
    </div>
    
    <br>
    <br>
    <?php include 'footer.php'; ?>
    
  </body>
</html>
    
