<?php
include '../src/config.php';

if ($_SERVER['REQUEST_URI']=='/'){
    include '../src/auth.php';
}
elseif ($_SERVER['REQUEST_URI']=='/index.php'){
    include '../src/auth.php';
}
elseif ($_SERVER['REQUEST_URI']=='/auth.php'){
    include '../src/auth.php';
}
elseif ($_SERVER['REQUEST_URI']=='/user/i.jpg'){
    $img = file_get_contents('../src/i.jpg');
    header("Content-Type: image/jpeg");
    echo "$img";
}
elseif ($_SERVER['REQUEST_URI']=='/logo.php'){
    include '../src/logo.php';
}
elseif ($_SERVER['REQUEST_URI']=='/registration.php'){
    include '../src/registration.php';
}
elseif ($_SERVER['REQUEST_URI']=='/logout.php'){
    include '../src/logout.php';
}elseif(0 === strpos($_SERVER['REQUEST_URI'], "/user"))
{
    include "../src/user.php";
}

else{include '../src/error.php';}