<!-- 
A numeric array in PHP is an array where the keys are integers, and the values are associated with those integer keys. It's essentially a list of values indexed by numeric keys starting from 0.

syntax: 
$numeric_array = array(value1, value2, value3, ...);
 -->
<?php
$mix_array = array(10, 20, 'php', 40.3, array('a', 'b'));

// check type
// echo gettype($mix_array);

// check length
// echo count($mix_array);

// access element of array
// echo $mix_array; // Warning: Array to string conversion in C:\brijesh-php\php-concepts\array\numeric_array.php on line 17 Array

// To access the entire contents of an array in PHP, you can use the print_r() function or var_dump() function. These functions will display the entire array, including its keys and values.

// print_r($mix_array);
// var_dump($mix_array);

// indexing
// Access individual elements
// echo $mix_array[0] . "<br>"; // Output: 10
// echo $mix_array[2] . "<br>"; // Output: php

// // Access elements of the nested array
// echo $mix_array[4][0] . "<br>"; // Output: a
// echo $mix_array[4][1] . "<br>"; // Output: b

// foreach ($mix_array as $element) {
//     if (is_array($element)){
//         foreach($element as $ele){
//             echo "$ele"."<br>";
//         }
//     }else{
//         echo "$element"."<br>";
//     }
// }

// foreach ($mix_array as $key => $value) {
//     if (is_array($value)){
//         foreach($value as $key_ => $v){
//         echo "Key: [$key][$key_], Value: $v<br>";
//         }
//     }else{
//          echo "$value"."<br>";
//     }
//     echo "Key: $key, Value: $value<br>";
// }

$arr = array();
// echo count($arr);

// add element into the array

# Using square bracket notation to add elements:
// you can use square brackets to specify the key and assign a value to add elements to an array.

$arr[0] = "first";
$arr[1] = "second";

# Using array_push() function:
// This function appends one or more elements to the end of an array.

array_push($arr, "third", "fourth");

# Using array assignment shorthand: 
// You can directly assign values to the array without specifying keys. Keys will be assigned automatically starting from 0 and incrementing by 1 for each element.

$arr[] = "fifth";
$arr[] = "sixth";

# Using array_merge() function: 
// You can merge multiple arrays into one array.
$new_array = array("seventh", "eighth");
$arr = array_merge($arr, $new_array);


# Using array_combine() function: 
// You can create an array by using one array for keys and another for its values.
// $keys = array("one", "two", "three");
// $values = array(1, 2, 3);
// $arr_ = array_combine($keys, $values);
// print_r($arr_);


# update element into the array

// In PHP, there are several ways to update or modify elements within an array:

# Using square bracket notation: 
// You can directly update an element of an array by specifying its index within square brackets and assigning a new value to it.

$arr = array(10, 20, 30);
// $arr[1] = 25; // Update the second element to 25

# Using array_splice() function: 
// This function is used to add or remove elements from an array. It can also be used to update elements by specifying the start index and the number of elements to remove, and then inserting the new elements.

// array_splice($arr, 1, 1, 25);
// print_r($arr);

# Remove element from the array
// In PHP, there are several ways to remove elements from an array:

# Using unset() function:
// You can use the unset() function to remove a specific element from an array by specifying its index.
$array = array(1, 2, 3, 4, 5);
// unset($array[2]); // Removes the element at index 2

# Using array_splice() function:
// The array_splice() function can be used to remove a range of elements from an array and optionally replace them with new elements.
// array_splice($array, 2, 1); // Removes 1 element starting from index 2 


# Using array_pop() function:
// The array_pop() function removes the last element from an array and returns it.
// $lastElement = array_pop($array);

# Using array_shift() function:
// The array_shift() function removes the first element from an array and returns it.
// array_shift($array);

# Using array_filter() function:
// The array_filter() function can be used to remove elements from an array based on a specified condition.
$array = array_filter($array, function($value) {
    return $value != 3; // Removes element with value 3
});

print_r($array)
?>