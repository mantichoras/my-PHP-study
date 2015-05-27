<?php

error_reporting(E_ALL);

$great = 'fantastic';

echo "This is {$great}";
echo "This is ${gteat}";


echo "This square is {$square->width}00 centimeters broad.";


echo "This works: {$arr['key']}";

echo "This works: {$arr[4][3]}";

echo "This is wrong {$arr[foo][3]}";

echo "This works: {arr['foo'][3]}";

echo "This works:" . $arr['foo'][3];

echo "This works too: {$obj->values[3]->name}";

echo "This is the value of the var nsmed by the return value of getName(): {${getName()}}";

echo "This is the value of the var named by the return value of \$object->getName(): {${$object->getName()}}";

echo "This is the return value of getName(): {getName()}";

