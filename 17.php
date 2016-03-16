<?php

$month = 'Март'; 

$listMounths = [
	'Январь',	'Февраль',	'Март',	'Апрель',	'Май',	'Июнь',	'Июль',	'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'
];


foreach($listMounths as $value){
	if($value === $month){
		echo "<b>$value </b><br>";
		
	}else{
		echo "$value <br>";
	}
}
