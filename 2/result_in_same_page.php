<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" autocomplete="on">
	<input type="name" name="name">
	<input type="email" name="email">
	<input type="submit" value="login">
</form>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$name=$_POST['name'];
	$email=$_POST['email'];

	echo $name.'<br>';
	// echo 'page name --> : '.$_SERVER['PHP_SELF'].'<br>';
	if(!empty($name))
	{
		echo $email;
	}
	else
	{
		echo "empty";
		// page redirection
		// echo "<script>window.location='https://google.com'</script>";
		header('Location:https://google.com');
	}
	if(mkdir($name))
	{
		echo "folder created successfully";
	}
	else
	{
		echo "folder exists";
	}
}
?>