<?php
$count = 10;
for($i = 0; $i < $count; $i++){
    $array[$i] = rand(1, 100);
    print_r($array[$i].'<br>');
}
echo "<br><br>";


$min = $array[0];
$indMin = 0;
$max = $array[0];
$indMax = 0;

for($i = 0; $i <  count($array); $i++){
    if($array[$i] < $min ){
        $min = $array[$i];
        $indMin = $i;
    }
    if($array[$i] > $max ){
        $max = $array[$i];
        $indMax = $i;
    }
}
$array[$indMin] = $max;
$array[$indMax] = $min;
echo '<br>min = '.$min . '<br>max = '. $max;
echo "<pre>";
print_r($array);








