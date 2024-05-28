<!--
In PHP, the equivalent of an associative array is simply an array where keys are associated with values. 

The syntax to create an associative array in PHP is as follows:

// Creating an associative array
$my_array = array(
    'key1' => 'value1',
    'key2' => 'value2',
    'key3' => 'value3',
    // Add more key-value pairs as needed
);

array(): Constructs an array.

'key1', 'key2', 'key3', ...: These are the keys of the associative array, which can be of any data type except objects.

'value1', 'value2', 'value3', ...: These are the corresponding values associated with each key.

Alternatively, you can use square brackets [] to define an associative array in PHP starting from PHP 5.4:

// Alternative syntax to create an associative array (starting from PHP 5.4)
$my_array = [
    'key1' => 'value1',
    'key2' => 'value2',
    'key3' => 'value3',
    // Add more key-value pairs as needed
];

 -->

<?php
// Basic Associative Array:
// Creating an associative array
$person = array(
    'name' => 'John',
    'age' => 30,
    'city' => 'New York'
);

// Accessing elements in the associative array
echo $person['name']; // Output: John
echo $person['age']; // Output: 30
echo $person['city']; // Output: New York

// Adding Elements to an Associative Array:
$person['education'] = 'BE(IT)';


// Associative Array with Nested Arrays:
$person['education'] = array(
    'stream' => "Informationa and technology",
    'degree' => "BE(IT)",
    'completed_year' => 2019
);
print_r($person);
print_r($person['education']['stream']);
?>