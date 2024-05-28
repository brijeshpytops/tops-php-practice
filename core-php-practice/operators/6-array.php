<!-- 
Array Operators: Used to manipulate arrays. 
Example: + (union), ==, != (equality).
 -->

 <?php
// Define two arrays
$array1 = array("a" => "apple", "b" => "banana");
$array2 = array("b" => "banana", "c" => "cherry");

// Union operator (+)
$result_union = $array1 + $array2; // Combines the arrays, preserving the keys from the first array
print_r($result_union);
/*
Outputs:
Array
(
    [a] => apple
    [b] => banana
    [c] => cherry
)
*/

// Equality operator (==)
$result_equal = ($array1 == $array2); // Checks if both arrays have the same key/value pairs
echo $result_equal ? "Arrays are equal" : "Arrays are not equal"; // Outputs: "Arrays are not equal"

// Inequality operator (!=)
$result_inequal = ($array1 != $array2); // Checks if arrays are not equal
echo $result_inequal ? "Arrays are not equal" : "Arrays are equal"; // Outputs: "Arrays are not equal"

 ?>
