<?php
session_start();
if(isset($_SESSION["user"])){
    $FirstName = $_SESSION["user"]["first name"];
    $URL = $_SESSION["user"]["vk url"];
    if($_SESSION["user"]["first name"] == 'Maksim'){
        echo "Hello $FirstName!";
    }else{
        echo "Hello $FirstName! You are on the page of the user Maksim Kotlyar";
    }
    echo "<br />";
    echo "<form method='post' action='$URL' >
        <input type='submit' value='go to vk' >
        </form>";
    echo "<form method='post' action='logout.php' >
        <input type='submit' value='Log out' >
        </form>";
}
else {
    header("HTTP/1.1 302 Moved permanently");
    header("Location: http://10.10.252.2/index.php");
}