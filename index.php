
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="index.php" method="post">
    <label>Enter the capital city:</label>
    <input type="text" name="country"><br>
    <input type="submit" value="Enter">
   </form> 
</body>
</html>



<?php
$capitals = array("USA"=>"Washington DC",
"Japan"=>"Kyoto",
"South Korea"=>"Seaul",
"India"=>"New Delhi",
"Kenya" =>"Nairobi",
);

$capital = $capitals[$_POST["country"]];

echo"The capital is {$capital}";

?>


