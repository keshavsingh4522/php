<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
	echo $_POST['name'];
}
else
{
	echo "you entered in other browser";
}
?>