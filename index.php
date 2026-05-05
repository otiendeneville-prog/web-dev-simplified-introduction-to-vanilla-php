<?php


$password = "Neuville@11055";
$harsh = password_hash($password, PASSWORD_DEFAULT);

echo $harsh."<br>";

if(password_verify( "Neuville@11055", $harsh)){
echo"You are loged in";
}
else{
    echo"Incorrect password!";
}
?>








