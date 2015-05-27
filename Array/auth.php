<?php
$users = [
    "maks" => ["first name" => "Maksim", "last name" => "Kotlyar", "password" => "maks"],
    "greg" => ["first name" => "Grisha", "last name" => "Ilyasov", "password" => "grag"],
    "karo" => ["first name" => "Karen", "last name" => "Mneyan", "password" => "karo"],
    "serg" => ["first name" => "Sergey", "last name" => "Ivashchenko", "password" => "serg"]
];

//var_dump($users);

$login = $_POST['login'];
$passw = $_POST['password'];

//echo $login;
//echo "<br />";
//echo $passw;
echo "<br />";

if(array_key_exists($login, $users)){
        $user = $users[$login];
    if($passw == $user["password"]){
    $firstname = $user["first name"];
    echo "Welcme $firstname";
   }
    else{
        echo "Wrong login or password";
    }
}
else{
    echo "Wrong login or password";
}
