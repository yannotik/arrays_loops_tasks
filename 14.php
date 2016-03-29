<?php
$array = array(4, 2, 5, 19, 13, 0, 10);
foreach($array as $val){
    if($val == 2 || $val == 3 || $val ==4){
        echo "Есть!"; die();
    }else{
        echo "Нет!";
    }
}