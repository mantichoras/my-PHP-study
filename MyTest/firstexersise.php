<?php

$MyString = 'Jhon Doe';
echo "Origin string: \"$MyString\" <br />";
$MyFirstName = 'Sergey';

$MyResult = substr_replace($MyString, $MyFirstName, 0, 4);
echo "String with my first nsme \"$MyResult\" <br />";
//str_replace


$MySubstring = substr($MyString, 2, 2);
echo "Substring from 2 to 4 symbol from origin string: \"$MySubstring\" <br />";

echo "Fifth symbol is \"$MyString[5]\"<br />";

$Hello = 'Hello';

$Conc = $Hello . ' ' . $MyString;

echo "Two string concatenate \"$Conc \"<br /> ";

$Explode = explode(" ", $Conc);
//inplode
echo "First array element \"$Explode[0]\" <br />";
echo "Second array element \"$Explode[1]\" <br />";
echo "Third array element \"$Explode[2]\" <br />"; 

$Count = strlen($Conc);
echo "Number on concatenate string \"$Count\" <br />";
