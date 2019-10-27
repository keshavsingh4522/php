<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
	<input type="text" name="folder_name" placeholder="enter folder name to create">
	<input type="submit">
</form>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$name=$_POST['folder_name'];
	if(mkdir($name,0755))
	{
		echo "folder created successfully";
	}
	else
	{
		echo "folder exists";
		fopen('/home/keshav/keshav.txt', 'w');
	}
}
?>