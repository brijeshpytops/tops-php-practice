<!-- 
Ternary Operator (?:): Provides a shorthand way of writing if...else statements.

Null Coalescing Operator (??): Allows you to check if a variable is set and not null, providing a default value if it is null.
 -->

<?php
$age = 16;
$status = ($age >= 18) ? "adult" : "minor";
echo "You are a $status.";

$name = $_GET['name'] ?? 'Guest';
echo "Welcome, $name.";


?>
