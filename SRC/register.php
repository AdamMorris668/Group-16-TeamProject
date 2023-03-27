<?php
include 'connect_db.php';

$conn = getDatabase();

if (isset($_POST["user_firstname"]) && isset($_POST["user_lastname"]) && isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["retypepassword"])) {
    require_once('connect_db.php');
    
    // Check if filled
    $success = true;
    if (strlen($_POST["user_firstname"]) == 0) {
      $success = false;
    }
    if (strlen($_POST["user_lastname"]) == 0) {
      $success = false;
    }
    if (strlen($_POST["user_address"]) == 0) {
      $success = false;
    }
    if (strlen($_POST["username"]) == 0) {
      $success = false;
    }
    if (strlen($_POST["email"]) == 0) {
      $success = false;
    }
    if (strlen($_POST["password"]) == 0) {
      $success = false;
    }
    if (!strlen($_POST["retypepassword"])) {
      $success = false;
    }
  
  
    if (!$success) {
      echo "<div class='alert alert-danger'><h1>Error</h1><p>All fields must be filled out</p></h1></div>";
    } else {
      // Pass check
      if ($_POST["password"] != $_POST["retypepassword"]) {
        echo "<script>alert('Passwords must match!')</script>";
      } else {
  
        $fname = $_POST['user_firstname'];
        $lname = $_POST['user_lastname'];
        $address = $_POST['user_address'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $date = (date('Y-m-d'));
  
        // Inserts the Registered User information to the database
        try {
          $stat = $conn->prepare("INSERT INTO user(user_firstname, user_lastname, user_address, username, email, password, join_date)
        VALUES(:user_firstname, :user_lastname,:user_address, :username, :email, :password, :date)");
          $stat->bindParam(':user_firstname', $fname, PDO::PARAM_STR, 20);
          $stat->bindParam(':user_lastname', $lname, PDO::PARAM_STR, 20);
          $stat->bindParam(':user_address', $address, PDO::PARAM_STR, 20);
          $stat->bindParam(':username', $username, PDO::PARAM_STR, 20);
          $stat->bindParam(':email', $email, PDO::PARAM_STR, 64);
          // Hashes Password before joining the database
          $hash = password_hash($password, PASSWORD_DEFAULT);
          $stat->bindParam(':password', $hash, PDO::PARAM_STR);
          $stat->bindParam(':date', $date, PDO::PARAM_STR);
          $stat->execute();
  
          echo "Congratulations! You are now registered.";
          header("Location: ./index.php");
        } catch (PDOexception $ex) {
          echo "Sorry, a database error occurred! <br>";
          echo "Error details: <em>" . $ex->getMessage() . "</em>";
        }
      }
    }
  }

?>

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

</head>
  <body>
    <!-- header goes here when header is ready -->
    <?php include 'header.php'; ?>
    
    <div class="container">
      <div class="card mx-auto mt-5 mb-4 w-50">
        <div class="card-header">
          Register
        </div>
        <div class="card-body d-flex flex-column align-items-center justify-content-center">
          <form action="register.php" method="post">
          <div class="form-group">
              <label for="user_firstname">First Name</label>
              <input type="user_firstname" class="form-control" name="user_firstname" placeholder="First Name" required>
            </div>
            <div class="form-group">
              <label for="user_lastname">Last Name</label>
              <input type="user_lastname" class="form-control" name="user_lastname" placeholder="Last Name" required>
            </div>
            <div class="form-group">
              <label for="user_address">Address</label>
              <input type="user_address" class="form-control" name="user_address" placeholder="Address" required>
            </div>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="username" class="form-control" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
              <label for="password">Retype Password</label>
              <input type="password" class="form-control" name="retypepassword" placeholder="Retype Password" required>
            </div>
            <button type="submit" name="submit" value="Register" class="btn btn-primary btn-block mt-2">Login</button>
            <div class="text-center mt-3">
              <p>Already registered? <a href="login.php">Click here</a> to Login</p>
            </div>
          </form>
        </div>
      </div>
    </div>




    <?php include 'footer.php'; ?>
    
  </body>
</html>
