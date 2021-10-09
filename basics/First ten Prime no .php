
<html>
<head>
<title>First ten Prime no </title>
<body>
<h1>
<?php

echo "First Ten Prime no are:.<br>";
echo "<br>";

for($i=0;$i<=30;$i++)
{
   $count=0;
    for($j=1;$j<=30;$j++)
      {
           if($i%$j==0)
             {
                 $count++;
             }
  
}
 if($count==2)
      {
       echo $i." ";
      }
   
}

?>
</h1>
</body>
</html>

