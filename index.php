<?php

$username = "Bro Code";
$phonenumber = 134-553-323;


$username = strtolower("Bro Code");
$username =trim($username);
$username = strtoupper("Bro Code");
$username = strrev($username);
$phonenumber = str_replace("_", "", $phonenumber);

echo $phonenumber. "<br>";
echo $username;


?>



