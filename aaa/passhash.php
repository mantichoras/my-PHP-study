<?php
$password = "serg";
$pswhash = password_hash($password, PASSWORD_DEFAULT);
echo "<br /> Original password $password, hash $pswhash ";
$true = password_verify($password, $pswhash);
echo "<br /> check is done? $true";