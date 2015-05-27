<?php
// Get the first character of a string
$str = 'This is a test.';
$first = $str[0];
echo "$first <br />";

// Get the third character of a string
$third = $str[2];
echo "$third <br />";

// Get the last character of a string.
$str = 'This is still a test.';
$last = $str[strlen($str)-1]; 
echo "$last <br />";

// Modify the last character of a string
$str = 'Look at the sea';
echo "$str <br />";

$str[strlen($str)-1] = 'e';
echo "$str <br />";

$subs = substr($str, 5 , 5);
echo "$subs <br />";

$subr = $str;

echo substr_replace($subr, 'My name' , 0, 0);
