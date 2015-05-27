<?php
session_start();
session_unset();
session_destroy();
header("HTTP/1.1 301 Moved permanently");
header("Location: http://10.10.252.2/account/auth.php");