<?php
if ($_SERVER['REQUEST_URI']=='/'){
    include '../src/auth.php';
}
elseif ($_SERVER['REQUEST_URI']=='/index.php'){
    include '../src/auth.php';
}
elseif ($_SERVER['REQUEST_URI']=='/auth.php'){
    include '../src/auth.php';
}
elseif ($_SERVER['REQUEST_URI']=='/serg.php'){
    include '../src/user.php';
}
elseif ($_SERVER['REQUEST_URI']=='/maks.php'){
    include '../src/user.php';
}
elseif ($_SERVER['REQUEST_URI']=='/greg.php'){
    include '../src/user.php';
}
elseif ($_SERVER['REQUEST_URI']=='/karo.php'){
    include '../src/user.php';
}
elseif ($_SERVER['REQUEST_URI']=='/logout.php'){
    include '../src/logout.php';
}
else{include '../src/error.php';}