<?php 
require "config.php";
if(isset($_SESSION["user_id"])) {
  header("Location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>My Account - Login</title>

  </head>
<section id="header">
          <?php 
            if(isset($_SESSION["user_id"])) {
                $id = $_SESSION["user_id"];
                //$name = $_SESSION["user_firstname"];
                $sql = "SELECT user_firstname FROM user WHERE user_id = '$id'";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_assoc($result);
                $name = $row['user_firstname'];
               
                echo "<li><a href='myAccount.php'>Account</a></li>";
                echo "<li><a href=\"myAccount.php\">$name</a></li>";
            echo "<li><a href=\"logout.php\">Logout</a></li>";
            } else {
              echo "<li><a href=\"register.php\">Sign Up</a></li>";
            }
          ?>
</section>
      
<body>
<div id="id01" class="modal">
  
  <form class="modal-content" method="post" action="auth.php" >
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
    <div class="container">
      <label for="uname"><b>Email Address</b></label>
      <input type="email" placeholder="Enter Email" name="email" required>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit" name="Submit">Login</button>
    </div>
    </form>
    <div class="container" style="background-color:#f1f1f1">
      <h4> Not Registered? <a href="register.html">Register here</a>  </h4>
    </div>
  
</div>
<body> 