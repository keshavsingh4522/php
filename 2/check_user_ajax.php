<?php
$db=new mysqli('localhost','root','16189251','advance_test');
if($db->connect_error)
{
	echo "database not  connected";
}
else
{
	if($_SERVER["REQUEST_METHOD"]=='POST')
	{

		$email=$_POST['username'];
		$check_user=$db->query("SELECT email FROM users where email='$email'");
		if($check_user->num_rows!=0)
		{
			echo "user found";

		}
	    else
	    {
	    	echo "user does not exist !";
	    }

	}
}
?>