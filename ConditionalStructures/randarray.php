<?php
$array = range(0, rand(10, 20));
foreach($array as &$val) {
    $val = rand(100, 200);
}
var_dump($array);
///*
$i = 0;
foreach($array as $var){
    if($i == 5){
        break;
    }
        echo "$var <br />";
    $i++;
}

echo "<br />";
echo "<br />";
echo count($array);
echo "<br />";
echo "<br />";
//*/

$j = 1;
foreach($array as $key => $va){
    if($j < (count($array)) - 3){
        $j++;
        continue;
    }
    echo "Key: $key, value: $va <br />";
}

$accu_val = -1;
$accu_key = -1;
foreach($array as $key => $value){
    if($accu_val < $value){
        $accu_val = $value;
        $accu_key = $key;
    }
}

echo "<br />";
echo "<br /> Max value and it key <br />";
echo "Key: $accu_key value: $accu_val <br />";

foreach($array as $key => $valu){
    if(($valu%3) == 0){
       echo "<br /> Elements that divide at 3 key: $key, val: $valu";
    }
}
echo "<br />";

foreach($array as $key => $values){
    if($values > 170){
        echo "<br /> Elements that more then 170 key: $key, val: $values";
        break;
    }
}
echo "<br />";
