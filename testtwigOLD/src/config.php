<?php

//twig
require_once "../vendor/autoload.php";
$loader = new Twig_Loader_Filesystem('../src');
$twig = new Twig_Environment($loader);

//database connection
$dataSource = 'mysql:dbname=mystudysite;host=localhost';
$user = 'mystudysite';
$password = 'mystudysite';
$db = new PDO($dataSource, $user, $password);
