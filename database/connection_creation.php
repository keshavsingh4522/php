<?php
$server_name='localhost';
$user_name='phpmyadmin';
$passwd='____________';
$db_name='information_schema';
$conn=mysqli_connect($server_name,$user_name,$passwd,$db_name);
if($conn)
{
    echo 'connection created';
}
else
{
    echo 'connection failed';
}
?>
