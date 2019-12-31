<!DOCTYPE html>
<html>
<body>
<head>
    <meta charset="UTF-8"/>
</head>
<?php
$x=5;
$y=10;
 function myTest()
 {
     global $x,$y;
     $y=$x+$y;
 }

 myTest();
 echo $y;
?>
</body>
</html>
