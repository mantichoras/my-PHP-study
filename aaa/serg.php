<?php
session_start();
if(isset($_SESSION["user"])){
$FirstName = $_SESSION["user"]["first name"];
    $URL = $_SESSION["user"]["vk url"];
echo "Hello $FirstName!";
    echo "<br />";
    echo "<form method='post' action='$URL' >
        <input type='submit' value='go to vk' >
        </form>";
    echo "<form method='post' action='logout.php' >
        <input type='submit' value='Log out' >
        </form>";
}
else {
    header("HTTP/1.1 301 Moved permanently");
    header("Location: http://10.10.252.2/account/auth.php");
}