<!-- 1.	Write a PHP script to check if the inserted number is a prime number 

Sample Input:  3
Expected Output: 3 is a prime number  -->


<?php
function IsPrime($num)
{
 for($x=2; $x<$num; $x++)
   {
      if($num %$x ==0)
	      {
		   return 0;
           
		  }
    }
  return 1;
   }

$a = IsPrime(8);
if ($a==0)
echo 'This is not a Prime Number'."<br>";
else
echo 'This is a Prime Number'."<br>";
?>