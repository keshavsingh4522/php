<?php
$hostname = "hostname";
$username = "username";
$password = "password";
$db="dbname";

try {
  $connect = new PDO("mysql:host=$hostname;dbname=".$db, $username, $password);
  // set the PDO error mode to exception
  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

?>
