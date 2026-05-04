
<?php

setcookie("fav_food","pizza", time() + (86400 *2),"/");
setcookie("fav_drink", "coffe", time() + (86400 * 3), "/");
setcookie("fav_desert","ice cream",time() +(864600 * 4), "/");


foreach($_COOKIE as $key => $value){
    echo"{$key} = {$value} <br>";

}
?>


