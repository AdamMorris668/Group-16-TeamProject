<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <section id="header">

        <a href=""><img src="" class="" alt=""></a>
    </section>


    <div class="containerProduct">
    <div class="pForm">
        <form action="register.php" method="post">
        <h2>Register</h2>
    <div class="form-group3">
        <label for="fname">First Name</label>
            <input type="text" name="fname" id="fname" class="registerInput" required>
    </div>

    <div class="form-group3">
            <label for="lsurname">Surname</label>
                <input type="text" name="lname" id="lname" class="registerInput" required>
    </div>

    <div class="form-group3">
            <label for="email">Email Address</label>
                <input type="email" name="email" id="email" class="registerInput" required>
    </div>

    <div class="form-group3">
            <label for="address">Address</label>
                <input type="text" name="address" id="address" class="registerInput" required>
    </div>

    <div class="form-group3">
        <label for="password1">Password</label>
            <input type="password" name="password" id="password" class="registerInput" required>
        </div>

<div class="form-group3">
    <label for="confirmPassword">Confirm Password</label>
        <input type="password" name="confirmPassword" id="confirmPassword" class="registerInput" required>
</div>

<p>By creating an account you agree to our <a>Terms & Conditions</a></p>

<div>
<h4> Already a user? <a class="des" href="login.html">Log in</a>  </h4>
</div>

<button type="submit" class="buttonregister" name="Submit" value="Register"> Register </button>


</form>
    <script src="script.js"></script>
</body>