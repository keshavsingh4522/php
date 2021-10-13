<?php
$server_name='localhost';
$user_name='phpmyadmin';
$passwd='____________';

// Create connection
$conn = new mysqli($server_name, $user_name, $passwd);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE myDatabase";
if ($conn->query($sql) === TRUE) {
  echo "Database succsesfully created";
} else {
  echo "Error :" . $conn->error;
}

$sql = "SELECT id, firstname, lastname FROM tablename";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}

$conn->close();
?>
