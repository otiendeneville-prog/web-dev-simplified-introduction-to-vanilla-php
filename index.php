<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <form action="index.php" method="post">
      Username:<br>
      <input type="text" name="username"><br>
      <input type="email" name="email"><br>
      <input type="text" name="age"><br>
      <input type="submit"name="login" value="login">
   </form>
</body>

</html>


<?php
if (isset($_POST["login"])) {

if(empty($age)){
   echo"That number is not valid";
}

   $username = filter_input(INPUT_POST,"username",
   FILTER_SANITIZE_SPECIAL_CHARS
   );
   $email = filter_input(INPUT_POST,"email",
   FILTER_SANITIZE_EMAIL
   );
   $age = filter_input(INPUT_POST,"age",
   FILTER_VALIDATE_INT
   );
}

echo "Hello {$username} <br>";

echo " Your email is {$email} <br>";

echo"You are {$age} years old ";

?>
