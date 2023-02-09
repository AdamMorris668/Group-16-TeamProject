<!-- php for email connction stuff to be added-->

<!DOCTYPE html>
<html lang="en">
<title>Contact Us | Here you can contact Us</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="/Images/Logo.ico">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/contactUs.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
<body>
    <!-- navbar for the site -->
  <header> <?php include 'header.php'; ?></header>
  <!-- general contact information for the company -->
  <div id="mainStuff" class="sidebar">
    <h1 class="sideh1">Our Contact details</h1>
    <br>
    <br>
    <p class="sidep">Email address: team16@aston.ac.uk</p>
    <p class="sidep">Address: Aston University B4 7ET</p>
    <P class="sidep">Phone: 07789 700444</P>
    <p class="sidep">Any Question? feel free to contact</p>
  </div>
  <br>
  <!-- form used to gather data to be inserted into the database -->
  <form class="contact" method="post">
    <h1>Contact Form</h1>
    <div class="fields">
      <!-- type="email" includes validation -->
      <input id="email" type="email" name="email" placeholder="Your Email" required>
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="text" name="subject" placeholder="Subject" required>
      <textarea name="msg" placeholder="Message" required></textarea>
    </div>
    <input name="send" type="submit">
  </form>
  <br>
  <br>

  <!-- footer of the site -->
  <footer><?php include 'footer.php'; ?></footer>

</body>

</html>
