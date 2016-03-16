<?php 

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

foreach($arr as $key => $value){
	$row1 = $key;
	echo "$row1 <br>";
}
echo "<br>";
foreach($arr as $value){
	$row2 = $value;
	echo "$row2 <br>";
}