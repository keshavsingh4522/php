<?php
$email=$_GET['email'];
$password=$_GET['password'];
echo "email = ".$email."; password = ".$password;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<h4>Retrive Email</h4>
		<input type="email" value="<?php echo $email ?>"><br>
		<h4>Retrive Password</h4>
		<input type="password" value="<?php echo $_GET["password"] ?>" class="password">
	</form>
<script>
	var x=document.querySelector('.password')
	var y=document.querySelector('input')
	y.style.borderColor='red'
	if(x.value=='')
	{
		x.type='text'
		x.value='password is empty'
		x.style.color='red'
	}
	else
	{
		x.style.color='green'
	}
</script>
</body>
</html>