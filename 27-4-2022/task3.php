<!-- 3.	 Write a PHP script to check if the all string characters are lower cases

Sample Input:  remove
Expected Output: Your String is Ok  -->

<?php
function lowercase($str)
   {
    for ($i = 0; $i < strlen($str); $i++) {
	      if (ord($str[$i]) >= ord('A') &&
          ord($str[$i]) <= ord('Z')) {
      return 'not ok';
         }
         }
      return 'ok';
       }
echo(lowercase('abc def ghi'));
?>