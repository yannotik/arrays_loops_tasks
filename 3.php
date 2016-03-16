<?php 

$arr = [26, 17, 136, 12, 79, 15];

foreach($arr as $value){
	$result += pow($value, 2);
}
echo "result: $result";