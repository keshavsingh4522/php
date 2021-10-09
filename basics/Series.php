
<html>
<body>
<h1>
<table border=1>
<?php
echo "Series displayed as:.<br>";
for($i=2;$i<=50;)
{
 ?>
<tr><td>
<?php
echo "$i"
?>
</td></tr>
<?php
$i=($i*2)+1;
?>
<?php
}
?>
</h1>
</body>
</html>  