<!-- 
if...elseif...else Statement: Allows you to test multiple conditions.
 -->

<?php
$age = 16;
if ($age >= 18) {
    echo "You are an adult.";
} elseif ($age >= 13) {
    echo "You are a teenager.";
} else {
    echo "You are a child.";
}

?>