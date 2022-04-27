<?php
function palindrome($str) 
{
  if ($str == strrev($str))
      return 'Yes it is a palindrome ';
  else
	  return 'Not';
}
echo palindrome('rubber');
?>