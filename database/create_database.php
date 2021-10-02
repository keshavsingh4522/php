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
  echo "Error : " . $conn->error;
}

$conn->close();
?>