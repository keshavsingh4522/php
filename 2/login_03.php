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

		$email=$_POST['Email'];
		$password=md5($_POST['password']);
		$check_user=$db->query("SELECT email FROM users where email='$email'");
		$check_pass=$db->query("SELECT password from users where password='$password'");
		if($check_user->num_rows==1)
		{
			if($check_pass->num_rows==1)
			{
				echo "login success !";
			}
			else
			{
				echo "password is wrong !";
			}

		}
	    else
	    {
	    	echo "user does not exist !";
	    }

	}
}
?>