
<?php
session_start();
$host = "localhost";
$user = "root";
$password ="magynevy@11055";
$database ="web_dev_simplified_introduction_to_vanilla_php";

$connect = new mysqli($host,$user,$password,$database);
$command = 'select * from users';
$result = $connect->query($command);
while($row = $result->fetch_assoc()){
    print_r($row);
    echo "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    This the home Page
    <a href="contact.php">This goes to contact page</a>
</body>
</html>