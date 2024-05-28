<!-- 
The . operator concatenates two strings together.
You can concatenate strings with other strings, variables, or a combination of both.
In the example, "Hello", " ", and "World" are string literals, and $string1, $string2, and $name are variables holding string values.
Concatenation can also be done within echo statements or when assigning values to variables.

 -->

<?php
$string1 = "Hello";
$string2 = "World";

$result = $string1 . " " . $string2; // Concatenates two strings with a space in between
echo $result . "<br>"; // Outputs: "Hello World"

// Concatenation with variables
$name = "John";
$message = "Welcome back, " . $name . "!";
echo $message . "<br>"; // Outputs: "Welcome back, John!"

?>