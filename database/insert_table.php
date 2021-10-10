<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$dbname = "myDatabase";

// Create connection
$conn = new mysqli($server_name, $user_name, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE person (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
email VARCHAR(50),
address VARCHAR(50)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table person created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
