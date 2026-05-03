<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza">Pizza.<br>
        <input type="checkbox" name="orange" value="Orange"> Orange.<br>
        <input type="checkbox" name="neuville" value="Neuville"> Neuville.<br>
        <input type="checkbox" name="tessy" value="Tessy">Tessy. <br>
        <input type="submit" name="submit">
    </form>
</body>

</html>

<?php

if(isset($_POST["submit"])){
    if (isset($_POST["pizza"])) {
    echo  "You like pizza <br>";
}
if(isset($_POST["orange"])){
echo"You like Orange <br>";
}
if(isset($_POST["neuville"])){
    echo"You like Ell <br>";
}
if(isset($_POST["tessy"])){
echo"Are you Tessy? <br>";
}



};





?>