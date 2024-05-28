<!-- 
Type Operators: Used to check the type of a variable or instance. 
Example: instanceof.


The primary type operator in PHP is instanceof, which is used to check if an object is an instance of a particular class. 
 -->

<?php
// Define a class
class MyClass {
    public $prop;
}

// Create an instance of MyClass
$obj = new MyClass();

// Check if $obj is an instance of MyClass
$result = $obj instanceof MyClass;

// Output the result
echo $result ? "Yes, it's an instance of MyClass" : "No, it's not an instance of MyClass";

?>