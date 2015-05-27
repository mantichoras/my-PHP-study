<?php
$MyFirstArray = [
    "0",
    "1",
    "2",
    "3",
    "4",
    "5",
    9 => "9",
    "7",
    "8",
    6 => "6"
];
echo "First easy array in short form";
var_dump($MyFirstArray);

$MySecondArray = array(
    "key1" => "first",
    "key2" => "second",
    "key3" => "third",
    "key4" => "forth",
    "key5" => "fifth"

);
echo "Second array with key";
var_dump($MySecondArray);

//-------------------------------------------------------------------------
function getArray(){
    return array(1, 2, 3);
}

$secondElement = getArray()[1];

echo $secondElement[1];
//--------------------------------------------------------------------------

$MyFirstArray[7] = "7";
$MyFirstArray[8] = "8";
$MyFirstArray[10] = "10";
$MyFirstArray[11] = "11";

var_dump($MyFirstArray);

unset($MyFirstArray[2]);
unset($MyFirstArray[11]);
print_r($MyFirstArray);

$MyFirstArray[] = "12";

var_dump($MyFirstArray);

//unset($MyFirstArray);

//var_dump($MyFirstArray);

$number = count($MyFirstArray);
echo "Number of elements in MyFirstArray:: $number";

sort($MyFirstArray);
echo "Array after sort";
print_r($MyFirstArray);

