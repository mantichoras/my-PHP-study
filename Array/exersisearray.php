<?php
$MyArray = array("3firstName" => "Sergey", "1lastName" => "Ivashchenko", "0middleName" => "Nikolaevich");
print_r($MyArray);
echo "<br />";
$num = count($MyArray);
echo "Number of elements: $num";
echo "<br />";
ksort($MyArray);
var_dump($MyArray);
echo "<br />";
$slArray = array_slice($MyArray, 1, 2);
print_r($slArray);
echo "<br />";
$MySecondArray = [
    0,
    9,
    8,
    7,
    6,
    5,
    4,
    3,
    2,
    1,
    "Sergey"
];
$slArray = array_slice($MySecondArray, 2, 4);
echo "slice_array <br />";
print_r($slArray);
echo "<br />";
$exist = array_key_exists(5, $MySecondArray);
echo "$exist";
echo "<br />";
var_dump (isset($MySecondArray));
//
//echo "$exist";
echo "<br />";
$search = array_search("Sergey", $MyArray);
echo "$search";
echo "<br />";
$search = in_array("Sergey", $MyArray);
echo "in_array(\"Sergey\", \$MyArray) returne $search";
echo "<br />";
//bouth funktion check avalability the value, but array_searche return key,
// in_array return "true" or "false"
$shift = array_shift($MySecondArray);
print_r($shift);
echo "<br />";
var_dump($MySecondArray);
echo "<br />";

$pop = array_pop($MySecondArray);
echo "$pop";
echo "<br />";
print_r($MySecondArray);
echo "<br />";

$pad = array_pad($MySecondArray, 10, 3);
print_r($pad);
echo "<br />";
print_r($MySecondArray);

echo "<br />";

$pad = array_pad($MySecondArray, -10, -1);
echo "pad use";
print_r($pad);
echo "<br />";
print_r($MySecondArray);
echo "<br />";

$unshift = array_unshift($MySecondArray, 5, 3, "stop");
print_r($unshift);
echo "<br />";
print_r($MySecondArray);
echo "<br />";
$implode = implode( ", ", $MySecondArray);
echo "its implode $implode";
echo "<br />";
$MySecondArray[] = "Sergey";
$intersect = array_intersect($MySecondArray, $MyArray);
print_r($intersect);
echo "<br />";
$difference = array_diff($MySecondArray, $MyArray);
print_r($difference);
echo "<br />";
$val = $MyArray["1lastName"];
echo "$val";