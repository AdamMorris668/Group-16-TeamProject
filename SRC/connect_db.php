<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db = "techtopiadatabase";

session_start();

function getDatabase()
{
  // This connects to the Database using the hidden credentials
  global $db_host, $db, $db_user, $db_pass;
  $conn = new PDO("mysql:host=$db_host;dbname=$db", $db_user, $db_pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  return $conn;
}
?>