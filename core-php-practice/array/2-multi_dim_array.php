<?php
// Basic Multidimensional Array:
// Creating a multidimensional array
$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

// Accessing elements in the multidimensional array
echo $matrix[0][0]; // Output: 1
echo $matrix[1][2]; // Output: 6
echo $matrix[2][1]; // Output: 8

// Associative Multidimensional Array:
// Creating an associative multidimensional array
$students = array(
    array('name' => 'Alice', 'age' => 20),
    array('name' => 'Bob', 'age' => 22),
    array('name' => 'Charlie', 'age' => 21)
);

// Accessing elements in the associative multidimensional array
echo $students[0]['name']; // Output: Alice
echo $students[1]['age']; // Output: 22
echo $students[2]['name']; // Output: Charlie

// Adding Elements to a Multidimensional Array:
// Creating an empty multidimensional array
$people = array();

// Adding elements to the multidimensional array
$people[] = array('name' => 'David', 'age' => 25);
$people[] = array('name' => 'Emma', 'age' => 23);
$people[] = array('name' => 'Frank', 'age' => 24);

// Accessing elements in the multidimensional array
echo $people[0]['name']; // Output: David
echo $people[1]['age']; // Output: 23
echo $people[2]['name']; // Output: Frank

// Multidimensional Array with Different Data Types:
// Creating a multidimensional array with different data types
$data = array(
    array('apple', 'banana', 'cherry'),
    array(1, 2, 3),
    array(true, false, true)
);

// Accessing elements in the multidimensional array
echo $data[0][1]; // Output: banana
echo $data[1][2]; // Output: 3
echo $data[2][0]; // Output: 1 (true is converted to 1 in numeric context)


?>