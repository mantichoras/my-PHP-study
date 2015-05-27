<?php
session_start();
include 'config.php';
if (isset($_SESSION["login"])) {
    header("HTTP/1.1 302");
    header("Location: http://10.10.252.2:88/{$_SESSION['login']}.php");
}
else {
    if (isset($_POST['login'])){
        $stmt = $db->prepare('SELECT * FROM users WHERE login = :login');
        $stmt->execute(array(':login' => $_POST['login'],));
        $users = $stmt->fetch();
        if (($_POST['login'] == $users['login']) && password_verify($_POST['password'], $users['password'])) {
            $_SESSION["login"] = $users['login'];
            header("HTTP/1.1 301 Moved permanently");
            header("Location: http://10.10.252.2:88/$_POST[login].php");
        } else {
            unset($_SESSION["user"]);
            header("HTTP/1.1 302 Moved permanently");
            header("Refresh: 30; URL = http://10.10.252.2:88/auth.php");
            echo $twig->render('toauth.html', array());
        }
    }
    else {
        echo $twig->render('auth.html', array());
    }
}