<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$dbname = "myDatabase";

// Creating connection to mysql server
$conn = new mysqli($server_name, $user_name, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// creating table users
$sql = "CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
email VARCHAR(50),
phone VARCHAR(50)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table users created successfully";
} else {
    throw new Exception("Error Processing Request",  $conn->error);
}

$conn->close();
?>
