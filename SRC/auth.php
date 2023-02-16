<?php

require 'conmect_db.php';
    

    
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    $result = mysqli_query($conn, "SELECT * from user WHERE user_email = '$email'");
    $row = mysqli_fetch_assoc ($result);

    if(mysqli_num_rows($result) > 0) {
        if ($password == $row["user_password"]) {
            
            
            $_SESSION["user_id"] = $row["user_id"];

            header("Location: index.php?page=home");
            

        } else {
            echo "<script> alert(\"Wrong password\") </script>";
            header("Location: login.php?page=account");
        }

    }
    else {
        echo "<script> alert(\"User not registered\") </script>";
        header("Location: login.php?page=account");
    }
} else {

    header("Location: login.php?page=account");

}

?>