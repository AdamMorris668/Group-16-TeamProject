<?php
    session_start();

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "ecomm";

    $conn = new mysqli($server, $user, $pass, $db);
?>