<?php
$colors = array('white', 'green', 'red') ;
foreach ($colors as $color){
    echo $color .'<br>';
}
echo '<br>';


$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels");
foreach ($cities as $city=>$capital){
    echo "The capital of " .$city.  'is ' . $capital .'<br>';
}
echo '<br>';

$color = array (4 => 'white', 6 => 'green', 11=> 'red');
echo reset($color);

echo '<br>';


$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach ($fruits as $key => $value) {
    echo "$key = $value <br>";
}
echo '<br>';

$my_array = array("abcd","abc","de","hjjj","g","wer");
$new_array = array_map('strlen', $my_array); 
echo "The shortest array length is " . min($new_array) .
". The longest array length is " . max($new_array).'.';

?>