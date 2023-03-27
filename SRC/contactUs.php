<?php
include "connect_db.php";
$conn = getDatabase();

// Checking if the user is logged in, otherwise take him to the login page
if(!isset($_SESSION['id'])) {
  header("Location: login.php");
  exit(); 
}

$id = (int)$_SESSION["id"];

if(isset($_POST['send'])){
    $user_id = $_SESSION['id'];
    $user_firstname = $_POST['name'];
    $user_subject = $_POST['subject'];
    $user_message = $_POST['msg'];
    $date_submitted = date("Y-m-d");
    
    $stmt = $conn->prepare("INSERT INTO contactus (user_id, user_firstname, user_subject, user_message, message_date) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$user_id, $user_firstname, $user_subject, $user_message, $date_submitted]);
    
    // Display success message
    echo "Thank you for contacting us, We'll get back to you as so as possible!";
}
?>

<!DOCTYPE html>
<html lang="en">
<title>Contact Us | Here you can contact Us</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="/Images/Logo.ico">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/contactUs.css">
<link rel="stylesheet" href="css/style.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  
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
