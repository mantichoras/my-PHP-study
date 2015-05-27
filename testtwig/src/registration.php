<?php
session_start();
include 'config.php';
if (isset($_SESSION["login"])) {
    header("HTTP/1.1 302");
    header("Location: http://10.10.252.2:88/{$_SESSION['login']}.php");
}
else {
    if (isset($_POST['login'])){
        $stmt = $db->prepare('SELECT login FROM users WHERE login=:login' );
        $stmt->execute(array(':login' => $_POST['login'],));
        $line = $stmt->fetch();
        if(!$line){
            if(preg_match("/^[\da-zA-Z_]+/", trim($_POST['password']))){
                if ((isset($_POST['password'])) && (isset($_POST['confirmpassword'])) && ($_POST['password'] == $_POST['confirmpassword'])) {
                    if ((isset($_POST['firstname'])) && (isset($_POST['lastname'])) && (isset($_POST['vk_url']))) {
                        $pshash = password_hash($_POST['password'], PASSWORD_DEFAULT);
                        $stmt = $db->prepare('INSERT INTO users (login, password, firstname, lastname, vk_url) VALUES (:login, :password, :firstname, :lastname, :vk_url)');
                        $stmt->execute(array(':login' => $_POST['login'], ':password' => $pshash, ':firstname' => $_POST['firstname'], ':lastname' => $_POST['lastname'], ':vk_url' => $_POST['vk_url']));
                        echo $twig->render('registration.html', array('ERROR' => 'Registration done'));
                        header("HTTP/1.1 302 Moved permanently");
                        header("Refresh: 10; URL = http://10.10.252.2:88/auth.php");
                    } else {
                        echo $twig->render('registration.html', array('ERROR' => 'All fields marked * are required'));
                    }
                } else {
                    echo $twig->render('registration.html', array('PASS' => 'Passwors are not equal'));
                }
            }else{
                echo $twig->render('registration.html', array('PASS' => 'bad password'));
            }
        }else{
            echo $twig->render('registration.html', array('DONE' => 'login exist'));
        }
    }else{
        echo $twig->render('registration.html', array());
    }
}