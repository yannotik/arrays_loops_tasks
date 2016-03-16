<?php

$days = [
	'Понедельник',
	'Вторник',
	'Среда',
	'Четверг',
	'Пятница',
	'Суббота',
	'Воскресенье'];
$day = 'Вторник';
foreach($days as $value){
	if($value === $day){
		echo "<i>$value </i><br>";
		
	}else{
		echo "$value <br>";
	}
	
}