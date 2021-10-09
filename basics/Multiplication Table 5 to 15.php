<html>
<head>
<title>Multiplication Table 5 to 15</title>
</head>
<body>
<h1>
<?php

echo "Multiplication table 5 to 15";
echo "<table border=\"1\" style='\border-collapse:collapse'>";
   
  for($r=5;$r<=15;$r++)
       {
             echo"<tr>\n";
             for($c=1;$c<=10;$c++)
              {
                 $p=$c*$r;
                   
                    echo "<td>$p</td>\n";
               }
       echo "</tr>";
    }

echo"</table>";

?>
</h1>
</body>
</html>