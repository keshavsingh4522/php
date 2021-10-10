
<?php
    $first_name=$_POST['firstname'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $servername= "localhost";
    $database="myDatabase";
    $username="root";
    $password="";
    $conn = new PDO('mysql:host=localhost;dbname=myDatabase', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare('insert into person(firstname, email, address) values (?,?,?) ');
    $stmt->execute([$first_name, $email, $address]);
?>
