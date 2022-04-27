<?php
$x = 15;
$y = 27;
 

echo "before <br>";
echo "Number a =".$x." and b=".$y;
echo '<br>';

$swip = $x;
$x = $y;
$y = $swip;
 
echo "after <br>";
echo "Number a =".$x." and b=".$y."";
?>