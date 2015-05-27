<?php
session_start();
session_unset('login');
session_destroy();
header("HTTP/1.1 302 Moved permanently");
header("Location: http://10.10.252.2:88/index.php");