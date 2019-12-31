<!DOCTYPE html>
<html>
<body>
<head>
    <meta charset="UTF-8"/>
</head>
<?php
function myTest()
{
    static $x=0;
    echo $x;
    $x++;
}
myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
?>
</body>
</html>
