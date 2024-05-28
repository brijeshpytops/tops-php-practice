<!-- 
Logical Operators: Used to perform logical operations on boolean values. Example: && (logical AND), || (logical OR), ! (logical NOT).

&& (logical AND) returns true only if both conditions are true.
|| (logical OR) returns true if at least one of the conditions is true.
! (logical NOT) negates the boolean value, flipping true to false and false to true.
 -->

<?php
$num1 = 10;
$num2 = 20;
$num3 = 10;
$num4 = 1;
$num5 = 0;
echo ($num1 < $num2) && $num4;
echo ($num1 > $num2 ) || $num5;
echo !($num5)

?>