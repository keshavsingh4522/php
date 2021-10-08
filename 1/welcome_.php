<?php
    $email = $_GET['email'];
    $password = $_GET['password'];
    echo "Email = ".$email."; Password = ".$password;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>PHP Example</title>
</head>
<body>
	<form>
		<h4>Retrieve Email</h4>
		<input type="email" value="<?php echo $email ?>">
        
        <br>
        
		<h4>Retrieve Password</h4>
		<input type="password" value="<?php echo $_GET["password"] ?>" class="password">
	</form>

    <script>
        const x = document.querySelector('.password');
        const y = document.querySelector('input');
        
        y.style.borderColor='red';
        
        if (x.value === '') {
            x.type='text'
            x.value='password is empty'
            x.style.color='red'
        } else {
            x.style.color='green'
        }
    </script>
</body>
</html>