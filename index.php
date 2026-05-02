<?php
$capitals = array("USA"=>"Washington DC",
"Japan"=>"Kyoto",
"South Korea"=>"Seaul",
"India"=>"New Delhi");
$capitals = array_reverse($capitals);

foreach($capitals as $key =>$value){
    echo "{$key} ={$value} <br>";

}
?>


