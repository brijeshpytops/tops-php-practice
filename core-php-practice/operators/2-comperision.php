<!-- 
Comparison Operators: Used to compare values and return true or false based on the comparison result. 
Example: ==, ===, !=, !==, <, >, <=, >=.

 -->

<?php
$num1 = 10;
$num2 = 20;
$num3 = 10;

$res = ($num1 == $num2);
echo $res . "<br>"; // Outputs: ""

$res = ($num1 === $num2);
echo $res . "<br>"; // Outputs: ""

$res = ($num1 != $num2);
echo $res . "<br>"; // Outputs: "1"

$res = ($num1 < $num3);
echo $res . "<br>"; // Outputs: ""

$res = ($num1 > $num3);
echo $res . "<br>"; // Outputs: ""

$res = ($num1 >= $num3);
echo $res . "<br>"; // Outputs: "1"

$res = ($num1 <= $num3);
echo $res . "<br>"; // Outputs: "1"


?>