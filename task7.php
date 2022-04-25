<?php
$numOne=1;
$numTwo=5;
$numThree=9;

if($numOne>$numTwo&&$numOne>$numThree) {
    echo "largest number:"." ". $numOne;
} else
 if($numTwo>$numOne&&$numTwo>$numThree) {
    echo "largest number:" ." ". $numTwo;
} 
else {
    echo "largest number:" ." ". $numThree;
}