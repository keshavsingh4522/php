<?php
echo "123";
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>signup</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
<form>
	<fieldset>
		<legend>Sign up</legend>
		<div>
			<span for="full_name">Full Name</span>
			<input type="text" required="required" name="full_name">
		</div>

		<span id="message" style="float: left;"></span>
		<div>
			<span for="Email">Email</span>
			<input type="text" name="username" required="required" id="Email">
			<?php echo $_POST['full_name']; ?>
		</div>
		<div>
			<span for="password">Password</span>
			<input type="password" name="password" required="required">
		</div>
		<input type="submit" value="Go-->" disabled="disabled">
		<br>
	</fieldset>
</form>
<button>click here</button>
<script>
	$(document).ready(function(){
		$("#Email").on('change',function(){
			// alert(111111);
			$.ajax({type:'POST',url: "check_user_ajax.php", success: function(response){
				if(response.trim()=='user found')
				{
					$('input[type="submit"]').removeAttr('disabled');
					message="<i class='fa fa-check' style='color:blue;'></i>";
				}
				else
				{
					$('input[type="submit"]').attr('disabled','disabled');
					message="<i class='fa fa-times-circle' style='color:red;'></i>";
				}
				$("#message").html(message);
			}});
		});
	});
</script>
</body>
</html>