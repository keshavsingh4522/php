<?php
$db=new mysqli('localhost','root','16189251','test');
if($db->connect_error)
{
	echo "connection aborted";
}
else
{
	echo "1.connection established successsfully<br>";
	$sql="CREATE TABLE users (id INT(11) NOT NULL AUTO_INCREMENT,full_name varchar(50),email varchar(50),password varchar(50),primary key(id))";
	if($sql)
	{
		echo "2.table created successsfully<br>";
		$db->query($sql);
	}
	else
	{
		echo "database is not created";
	}
}
?>