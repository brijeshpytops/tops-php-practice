<!-- 
In PHP, a variable is a symbol or name that represents a value. Variables are used to store and manipulate data in a PHP script. PHP variables have the following characteristics:

Naming Convention: Variable names in PHP start with the dollar sign ($) followed by the name of the variable. Variable names must begin with a letter or underscore and can be followed by letters, numbers, or underscores.

Data Types: PHP variables are loosely typed, meaning you do not have to declare the data type when creating a variable. The data type of a variable is determined by the type of value assigned to it. PHP supports various data types such as integers, floats (decimal numbers), strings, booleans, arrays, objects, and more.

Dynamic Typing: PHP allows variables to change their data type dynamically. For example, you can assign an integer value to a variable and later assign a string value to the same variable without any explicit type declaration. 
 -->

<?php
// Declare and initialize variables
$name = "John"; // String variable
$age = 30;      // Integer variable
$height = 5.9;  // Float variable
$isStudent = true; // Boolean variable

// Output variable values
echo "Name: " . $name . "<br>";
echo "Age: " . $age . "<br>";
echo "Height: " . $height . "<br>";
echo "Is student? " . ($isStudent ? "Yes" : "No") . "<br>";
?>
