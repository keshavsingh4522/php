<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>signup</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
    <style type="text/css">
    	form
    	{
    		width: 400px;
    		height: auto;
    	}
    	div
    	{
    		margin:10px;
    		display: flex;
    		justify-content: space-between;
    	}
    	input[type='submit']
    	{
    		float: right;
    	}
    </style>
</head>
<body>
	<!-- register/sign up page -->
<form autocomplete="off" method="POST" action="register_03.php">
	<fieldset>
		<legend>Sign up</legend>
		<div>
			<span for="full_name">Full Name</span>
			<input type="text" name="full_name">
		</div>

		<div>
			<span for="Email">Email</span>
			<input type="text" name="Email">
		</div>
		<div>
			<span for="password">Password</span>
			<input type="password" name="password">
		</div>
		<input type="submit" value="Go-->">
		<br>
	</fieldset>
</form>
<!-- login page -->
<form action="login_03.php" method="post">
	<fieldset>
		<legend>Log in</legend>
	    <div>
		    <span for="username">Username</span>
	    	<input type="text" name="Email">
	    </div>
	    <div>
			<span for="password">Password</span>
			<input type="password" name="password">
		</div>
		<input type="submit" value="Login">
	</fieldset>
</form>
</body>
</html>
