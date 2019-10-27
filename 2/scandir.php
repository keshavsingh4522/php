<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$array=scandir('/home/keshav');
for($i=0;$i<sizeof($array);$i++)
{
	echo $array[$i].'<br>';
}
?>
</body>
</html>