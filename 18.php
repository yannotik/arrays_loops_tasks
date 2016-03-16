<?php

define('SATURDAY', 'Суббота');
define('SUNDAY', 'Воскресенье');
$days = [
	'Понедельник',
	'Вторник',
	'Среда',
	'Четверг',
	'Пятница',
	'Суббота',
	'Воскресенье'];

foreach($days as $value){
	if($value === SATURDAY || $value === SUNDAY){
		echo "<b>$value </b><br>";
		
	}else{
		echo "$value <br>";
	}
	
}