<?php
session_start();
require_once "../vendor/autoload.php";
$loader = new Twig_Loader_Filesystem('../src');
$twig = new Twig_Environment($loader);
if(isset($_SESSION["user"])){
    if($_SESSION["user"]["first name"] == 'Maksim'){
        $hello = $_SESSION["user"]["first name"];
    }else{
        $hello = $_SESSION["user"]["first name"].' You are on the page of the user Sergey Ivashchenko';
    }
    echo $twig->render('user.html', array('URL' => $_SESSION["user"]["vk url"], 'hello' => $hello, 'user' => $_SESSION["user"]["first name"]));
} else {
   header("HTTP/1.1 302 Moved permanently");
    header("Location: http://10.10.252.2:88/auth.php");
}