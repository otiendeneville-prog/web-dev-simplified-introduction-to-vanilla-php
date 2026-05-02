
<?php

$date = date("l");
$date = "pizza";

switch ($date) {
    case "Monday":
        echo "I hate Monday";
        break;

    case "Tuesday":
        echo "It's tacco Tuesday";
        break;

    case "Wednesday":
        echo "Work week is halfway";
        break;

    case "Thursday":
        echo "The weekend is almost here";
        break;

    case "Friday":
        echo "Its almost the weekend";
        break;

    case "Saturday":
        echo "Its time to party";
        break;

    case "Sunday":
        echo "Time to relax <br>";

    default:
        echo "Not a valid day, enter a valid day";
        break;
}
?>