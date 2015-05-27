<?php
require_once "../Twig/Autoloader.php";
Twig_Autoloader::register();


$loader = new Twig_Loader_Filesystem();
$twig = new Twig_Environment($loader);

$templ = $twig->loadTemplate('main');
echo $templ->render('login');