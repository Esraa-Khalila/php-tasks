<?php
$units=120;
   if($units<=50) 
   echo  $units*2.50;
   else if($units>250) 
       echo  $units*7.50 ;
   else if($units>200) 
    echo $units*6.20 ;
    else if($units>100) 
        echo  $units*5 ;
    else 
        echo "Please enter value!";