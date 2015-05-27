<?php
session_start();
var_dump($_SESSION['user']);
include 'config.php';
if(isset($_SESSION["user"])){
    $stmt = $db->prepare('SELECT * FROM users WHERE login = :login');
    $stmt->execute(array(':login' => $_SESSION["user"],));
    $user = $stmt->fetch();
    if($user["login"] == substr($_SERVER['REQUEST_URI'], 1, -4)){
        $hello = $user["firstname"];
    }else{
        $hello = $user["firstname"].' You are on the page of the user Sergey Ivashchenko';
    }
    echo $twig->render('user.html', array('URL' => $user["vk_url"], 'hello' => $hello, 'user' => $user["firstname"]));
} else {
    echo "$_SESSION[user]";
    header("HTTP/1.1 302 Moved permanently");
    header("Location: http://10.10.252.2:88/auth.php");
}