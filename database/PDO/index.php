<?php 
include('config.php');


$data=array(
    ':post_status' =>'active'
  );
  
  $query=" SELECT * FROM table_name WHERE post_status=:post_status";
  $statement = $connect->prepare($query);
  $statement->execute($data);
  $total_row = $statement->rowCount();
  if($total_row>0){
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    return $result;
  }
?>