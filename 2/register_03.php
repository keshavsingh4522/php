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

		$full_name=$_POST['full_name'];
		$email=$_POST['Email'];
		$password=md5($_POST['password']);
		$check_user="SELECT email FROM users where email='$email'";
		$response=$db->query($check_user);
		if($response->num_rows==0)
		{
			$sql="INSERT into users(full_name,email,password) values('$full_name','$email','$password')";
			if($db->query($sql))
			{
				echo "sign up success !";
			}
			else
			{
				echo "sign up failed !";
			}
		}
		else
		{
			echo "user already exists";
		}
	}
}
?>