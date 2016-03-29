<?php
$row = 3;
$cols = 3;
$colors = array('red','yellow','blue','gray','maroon','brown','green');

echo "<table>";
for($i = 0; $i < $row; $i ++){
    echo "<tr>";
    for($j = 0; $j < $cols; $j++){
        $num = rand(100, 999);
        shuffle($colors);
        echo "<td style='padding: 10px; background-color: $colors[3]'>";
        echo $num;
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";