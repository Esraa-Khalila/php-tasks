<?php
$num=0;
for($i=0;$i<=30 ; $i++){
    $num =$num+$i;
  
}  echo $num . "<br>";
echo "<br>";


$var = 5;
$num = 1;
for($i=1;$i<=$var-1;$i++)
{
 $num*=($i+1); 
}
echo   $var = $num . '<br>';
echo "<br>";


$num = 0;  
$number1 = 0;  
$number2 = 1;   
echo $number1.' '.$number2.' ';  
while ($num < 7 )  
{  
    $number3 = $number2 + $number1;  
    echo $number3.' ';  
    $number1 = $number2; 
    $number2 = $number3;
    $num = $num + 1;  
   
} echo "<br>";
echo "<br>";




for($i = 1; $i <= 5 ;$i++){
    for($j = 1;$j <= 5;$j++){
        if($i == $j){
            echo $i;
        }else{
            echo 0;
        }
    }

    echo "<br>";
}
echo "<br>";



$num = 5; 
$count = 1;
for ($i = $num; $i > 0; $i--) 
{
  for ($j = $i; $j < $num + 1; $j++) 
   {
     echo( $count );
     $count++;
   } 
	echo "<br>";
   }



?>