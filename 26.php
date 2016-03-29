<?php
$count = 10;
$sum = 0;
$newArray = array();
for($i = 0; $i < $count; $i++){
    $arr[$i] = rand(1, 10);
    if($arr[$i] > 0 && ($i % 2 == 0)){
        $sum += $arr[$i];
    }else
        array_push($newArray, $arr[$i]);

}
echo '<pre>';
print_r($arr);
echo '<br>';

echo '<pre>';
print_r($newArray);