<?php

$n = 1;

while($n <=  9){
	for($i = 1; $i <=9; $i++){
		for($j = 1; $j <=9; $j++){
			$num = $i * $j;
			echo "$i * $j = {$num} <br>";
			
		}
		//$j = 1;
		echo "<br>";
	}
	$n++;
}