<?php
function armstrongNum($num) {
  $str = strlen($num);
  $sum = 0;
  $num = (string)$num;
  for ($i = 0; $i < $str; $i++) {
    $sum = $sum + pow((string)$num{$i},$str);
  }
  if ((string)$sum == (string)$num) {
    return "is Armstrong";
  } else {
    return "Not";
  }
}
echo armstrongNum(407);

?>