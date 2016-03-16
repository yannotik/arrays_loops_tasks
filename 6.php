<?php 
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

foreach($arr as $key => $value){
	$en = $key;
	echo "$en <br>";
}
echo "<br>";
foreach($arr as $value){
	$ru = $value;
	echo "$ru <br>";
}