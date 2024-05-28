<?php

// Built-in Functions:
// Example of strlen() built-in function
// $string = "Hello, World!";
// $length = strlen($string); // returns the length of the string
// echo "Length of string: $length"; // Output: Length of string: 13

// User-defined Function:
// Example of a user-defined function
function add($a, $b) {
    return $a + $b;
}

$result = add(5, 3); // Calling the user-defined function
// echo "Result: $result"; // Output: Result: 8

// Anonymous Function (Closure):
// Example of an anonymous function (closure)
$greet = function($name) {
    return "Hello, $name!";
};

// echo $greet("John"); // Output: Hello, John!

// Recursive Function:
// Example of a recursive function to calculate factorial
function factorial($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

// echo factorial(5); // Output: 120 (5 * 4 * 3 * 2 * 1)

// Callback Function:
// Example of using a callback function with array_map()
function square($x) {
    return $x * $x;
}

$numbers = [1, 2, 3, 4, 5];
$squared = array_map("square", $numbers); // Callback function
// print_r($squared); // Output: Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 [4] => 25 )

// Magic Function:
// Example of __toString magic method
// class MyClass {
//     public function __toString() {
//         return "This is an instance of MyClass.";
//     }
// }

// $obj = new MyClass();
// echo $obj; // Output: This is an instance of MyClass.

// Variable Function:
// Example of variable function
function greet() {
    echo "Hello, World!";
}

$functionName = "greet";
// $functionName(); // Calling the function dynamically

// Generator Function:
// Example of a generator function
function generateNumbers($start, $end) {
    for ($i = $start; $i <= $end; $i++) {
        yield $i;
    }
}

// foreach (generateNumbers(1, 5) as $number) {
//     echo $number . " "; // Output: 1 2 3 4 5
// }


// In PHP, you can create decorators using higher-order functions or closures. Here's an example of how you can create a simple decorator using functions:
// Decorator function
function my_decorator($func) {
    // Define and return the wrapper function
    return function() use ($func) {
        echo "Something is happening before the function is called.<br>";
        // Call the original function
        $result = $func();
        echo "Something is happening after the function is called.<br>";
        return $result;
    };
}

// Function to be decorated
function say_hello() {
    return "Hello!";
}

// Decorate the function
$say_hello_decorated = my_decorator('say_hello');

// Call the decorated function
// echo $say_hello_decorated();

?>