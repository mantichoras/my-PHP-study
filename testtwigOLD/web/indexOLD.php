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
    include '../src/serg.php';
}
elseif ($_SERVER['REQUEST_URI']=='/maks.php'){
    include '../src/maks.php';
}
elseif ($_SERVER['REQUEST_URI']=='/greg.php'){
    include '../src/greg.php';
}
elseif ($_SERVER['REQUEST_URI']=='/karo.php'){
    include '../src/karo.php';
}
elseif ($_SERVER['REQUEST_URI']=='/logout.php'){
    include '../src/logout.php';
}
else{include '../src/error.php';}