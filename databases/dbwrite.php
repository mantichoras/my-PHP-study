<?php

$dataSource = 'mysql:dbname=mystudysite;host=localhost';
$user = 'mystudysite';
$password = 'mystudysite';
$db = new PDO($dataSource, $user, $password);

//$db->exec("INSERT INTO users (login, firstname, lastname, password, vk_url ) VALUES ('serg', 'Sergey', 'Ivashchenko', '$2y$10$1O6yO0jZ9zzNzzE0v.rlPeEeSthC7E1KEAE2.AM83xUwutz/RYYXi', 'http://vk.com/mantichoras')");

$dblogin = 'serg';

$stmt = $db->prepare('SELECT login FROM users WHERE login=:login' );
$stmt->execute(array(':login' => $dblogin,));

//$result = $db->query("SELECT * FROM users WHERE login=$dblogin");
$row = $stmt->fetch();

var_dump($row);


$users = $db->query('SELECT login FROM users' );
while ($ro = $users->fetch())
{
//    var_dump($ro);
}

/*
echo "$row[login] </br>";
echo "$row[firstname]</br>";
echo "$row[vk_url]</br>";
*/
