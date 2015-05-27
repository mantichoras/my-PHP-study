<?php
$juices = array("apple", "Orange", "Koolaid1" => "purple");

echo "He drank some $juices[0] juice. <br />";
echo "He drank some $juices[1] juice. <br />";
echo "He drank some $juices[Koolaid1] juice. <br />";

class people {
	public $john = "John Smith";
	public $jane = "Jane Smith";
	public $robert = "Robert Paulsen";

	public $smith = "Smith";

}

$people = new people();

echo "$people->john drank some $juices[0] juice. <br />";
echo "$people->john then said hello to $people->jane. <br />";
echo "$people->john's wife greeted $people->robert. <br />";
echo "$people->robert greeted the two $people->smith. <br />";
