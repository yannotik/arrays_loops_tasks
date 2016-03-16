<?php

$number = 123; 
$array = array(); 
while ($number > 0) { 
    $array[] = $number % 10; 
    $number = intval($number / 10);  

} 

$array = array_reverse($array); 
//print_r($array); 

foreach($array as $val){
	$sum +=$val;
}
echo "$sum";