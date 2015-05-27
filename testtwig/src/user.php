<?php
session_start();
include 'config.php';
$stm = $db->prepare('SELECT * FROM users WHERE login = :url');
$stm->execute(array(':url' => substr($_SERVER['REQUEST_URI'], 6, -4),));
$page = $stm->fetch();
if ($page){
    if(isset($_SESSION["login"])){
        $stmt = $db->prepare('SELECT * FROM users WHERE login = :login');
        $stmt->execute(array(':login' => $_SESSION["login"],));
        $user = $stmt->fetch();
        if($user["login"] == substr($_SERVER['REQUEST_URI'], 6, -4)){
            $homepage = file_get_contents('http://bash.im/');
            $homepage = iconv('windows-1251', 'utf-8', $homepage );
            echo $twig->render('user.html', array('URL' => $user["vk_url"], 'user' => $user["firstname"], 'image' =>$user["logo"], 'homepage' =>$homepage ));
            //echo "$homepage";
        }else{
            $stm = $db->prepare('SELECT * FROM users WHERE login = :url');
            $stm->execute(array(':url' => substr($_SERVER['REQUEST_URI'], 6, -4),));
            $page = $stm->fetch();
            echo $twig->render('difuser.html', array('URL' => $user["vk_url"], 'page' => $page['firstname'].' '.$page['lastname'], 'user' => $user["firstname"], 'USERVK' => $page["vk_url"]));
        }
    } else {
    header("HTTP/1.1 302 Moved permanently");
    header("Location: http://10.10.252.2:88/auth.php");
    }
}else{
    header("HTTP/1.1 302 Moved permanently");
    header("Location: http://10.10.252.2:88/index.php");
}
