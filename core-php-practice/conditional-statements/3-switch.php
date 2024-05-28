<!-- 
switch Statement: Executes one block of code from multiple alternatives based on a given expression.
 -->

<?php
$day = "Monday";
switch ($day) {
    case "Monday":
        echo "It's Monday.";
        break;
    case "Tuesday":
        echo "It's Tuesday.";
        break;
    default:
        echo "It's another day.";
}

?>