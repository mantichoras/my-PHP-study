<?php
session_start();
if (isset($_SESSION["login"])) {
    $url = $_SESSION["login"];
    header("HTTP/1.1 301 Moved permanently");
    header("Location: http://10.10.252.2/account/$url.php");
// why don't work and what can i do with this   header("Location: http://10.10.252.2/account/$_SESSION["login"].php");
}else{
    echo "<form method='post' >
    <h1>Registration</h1>
    <p>Login<br /><input type='text' name='login'></p>
    <p>Password<br /><input type='password' name='password'></p>
    <p>Retype Password<br /><input type='password' name='password retype'></p>
    <p>Firstname<br /><input type='text' name='firstname'></p>
    <p>Lastname<br /><input type='text' name='lastname'></p>
    <p>VK URL<br /><input type='text' name='vk url'></p>
    <p><input type='submit' name='submit' value='register'> <br></p></form>
";
}