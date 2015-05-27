<?php
session_start();
include 'config.php';
//var_dump($_FILES['name']);
if(isset($_SESSION["login"])) {
    if (isset($_FILES['userfile'])) {
        $uploaddir = '/var/www/html/testtwig/upload/';
        $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
        if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
            $stmt = $db->prepare('UPDATE users SET logo= :logo WHERE login= :login');
            $stmt->execute(array(':logo' => $_FILES['userfile']['name'], ':login' => $_SESSION["login"]));
            echo $twig->render('logo.html', array('message' => 'File is valid, and was  successfully uploaded.'));
        } else {
            echo $twig->render('logo.html', array('message' => 'Possible file upload attack!'));
        }
    } else {
        echo $twig->render('logo.html', array('message' => 'Send file!'));
    }
}
else {
    header("HTTP/1.1 302 Moved permanently");
    header("Location: http://10.10.252.2:88/auth.php");
}
