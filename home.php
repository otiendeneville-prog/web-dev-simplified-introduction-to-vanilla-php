<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    This is the Home page:
    <a href="index.php">This goes to Login Page:</a><br>
</body>
</html>

<?php

$_SESSION["username"] = "Neuville";
$_SESSION["password"] = "pizza123";

echo $_SESSION["username"]. "<br>";
echo $_SESSION["password"]. "<br>";

?>