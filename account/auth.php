<?php
var_dump($_SERVER);
session_start();
if (isset($_SESSION["login"])) {
 //   $url = $_SESSION["login"];
    header("HTTP/1.1 302");
    header("Location: http://10.10.252.2/account/{$_SESSION['login']}.php");
// why don't work and what can i do with this   header("Location: http://10.10.252.2/account/$_SESSION["login"].php");
//redirect 301 is wrong in this case need rewrite to redirect 302.
}
else {
    if (isset($_POST['login'])){
        $users = [
            "maks" => ["first name" => "Maksim", "last name" => "Kotlyar", "password" => '$2y$10$QposK0prkfo6aM4c7WdSx.2IipCQppW6tlmLFI96yZLpgkEUjr/w6', "vk url" => "http://vk.com/maksim_ka2"],
            "greg" => ["first name" => "Grisha", "last name" => "Ilyasov", "password" => '$2y$10$3EwEMhMEDUuCeaFLLmT2EOxSxp0M0qZS6tnS0H/5ACfWMWHI3wZ2i', "vk url" => "http://vk.com/id9191390"],
            "karo" => ["first name" => "Karen", "last name" => "Mneyan", "password" => '$2y$10$dlR1HWHj.nF2E5FKUbThA.bSfxMgD2L3kZKrTKBhfyt4v3pb7Gun.', "vk url" => "http://vk.com/id8859043"],
            "serg" => ["first name" => "Sergey", "last name" => "Ivashchenko", "password" => '$2y$10$1O6yO0jZ9zzNzzE0v.rlPeEeSthC7E1KEAE2.AM83xUwutz/RYYXi', "vk url" => "http://vk.com/mantichoras"]
        ];

        $login = $_POST['login'];
        $password = $_POST['password'];
        if (array_key_exists($login, $users) && password_verify($password , $users[$login]['password'])) {
            //($passw == $user["password"]) {
                $_SESSION["login"] = $login;
                $_SESSION["user"] = $users[$login];
                header("HTTP/1.1 301 Moved permanently");
                header("Location: http://10.10.252.2/account/$login.php");
        } else {
            unset($_SESSION["login"]);
            header("HTTP/1.1 302 Moved permanently");
            header("Refresh: 10; URL = http://10.10.252.2/account/auth.php");
            echo "Wrong login or password";
            echo "<br /> Return to auth after 10 sec";
            echo "<br /> or click button";
            echo "<form method='post' action='http://10.10.252.2/account/auth.php'>
                <input type='submit' value='go to auth'></form>";
        }
    }
else {
        echo "<form method='post' >
    <h1>Authorization</h1>
    <p>Login<br /><input type='text' name='login'></p>
    <p>Password<br /><input type='password' name='password'></p>

    <p><input type='submit' name='submit' value='sign in'> <br></p></form>
";
    }
}