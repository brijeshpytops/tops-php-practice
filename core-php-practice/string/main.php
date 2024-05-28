<!-- 
In PHP, a string is a sequence of characters, which can include letters, numbers, symbols, and whitespace. Strings can be enclosed in single quotes (') or double quotes ("). Here are some examples of strings in PHP:

$str1 = 'Hello, World!'; // Enclosed in single quotes
$str2 = "This is a string."; // Enclosed in double quotes
$str3 = '12345'; // Numeric string
$str4 = 'Special characters: !@#$%^&*()'; // String with special characters
$str5 = 'This is a string with whitespace.'; // String with whitespace
$str6 = ''; // Empty string

Here are some basic string operations in PHP, including accessing strings, adding to strings, removing characters, and updating strings:

Accessing Strings:
You can access individual characters in a string by using square brackets [] with the index of the character you want to access. Remember that string indices in PHP are zero-based.

Adding to Strings:
You can concatenate strings using the . (dot) operator or the .= assignment operator to add new characters or strings to an existing string.

Removing Characters:
You can remove characters from a string using various functions like substr(), str_replace(), or by using string manipulation techniques.

Example using substr():

Updating Strings:
You can update specific characters or substrings within a string using string manipulation functions or by directly assigning new values.

Example using str_replace():
 -->
<?php

$code = "php programming";

# strlen(): Returns the length of a string.
// echo strlen($code);

# strpos(): Finds the position of the first occurrence of a substring in a string.
// echo strpos($code, 'pro');

// substr(): Returns a part of a string.
// echo substr($code, 5);

// str_replace(): Replaces all occurrences of a search string with a replacement string in a string.
// $str = "Hello, World!";
// echo str_replace("World", "PHP", $str); // Output: Hello, PHP!

$code = "   PYthoN";

// strrev(): Reverses a string.
// echo strrev($code);

// str_repeat(): Repeats a string a specified number of times.
// echo str_repeat($code, 2);

// str_pad(): Pads a string to a certain length with another string.
// echo str_pad($code, 15, "-"); 

// str_split(): Splits a string into an array of characters.
// print_r( str_split($code));

// strcasecmp(): Compares two strings case-insensitively.
// $str1 = "hello";
// $str2 = "HELLO";
// echo strcasecmp($str1, $str2); // Output: 0 (Strings are equal)

// str_word_count(): Counts the number of words in a string.
// $str = "Hello, World!";
// echo str_word_count($str); // Output: 2

// ucfirst(): Converts the first character of a string to uppercase.
// $str = "hello, world!";
// echo ucfirst($str); // Output: Hello, world!

// lcfirst(): Converts the first character of a string to lowercase.
// $str = "Hello, World!";
// echo lcfirst($str); // Output: hello, World!

// strtolower(): Converts a string to lowercase.
// echo strtolower($code)

// strtoupper(): Converts a string to uppercase.
// echo strtoupper($code)

// trim(): Removes whitespace or other predefined characters from both sides of a string.
// echo strtolower(trim($code));

// explode(): Splits a string into an array by a specified delimiter.
// $str = "apple,banana,orange";
// $arr = explode(",", $str);
// print_r($arr); // Output: Array ( [0] => apple [1] => banana [2] => orange )

// implode(): Joins array elements with a string delimiter to form a single string.
// $arr = array("apple", "banana", "orange");
// $str = implode(", ", $arr);
// echo $str; // Output: apple, banana, orange



# Accessing Strings:
// $str = "Hello, World!";
// echo $str[0]; // Output: H
// echo $str[7]; // Output: W

# Adding to Strings:
// $str = "Hello";
// $str .= " World"; // Using .= assignment operator
// echo $str; // Output: Hello World

// $str = "Hello";
// $str = $str . ", World"; // Using . (dot) operator
// echo $str; // Output: Hello, World

// Removing Characters:
// $str = "Hello, World!";
// $new_str = substr($str, 0, 5); // Remove characters starting from index 5
// echo $new_str; // Output: Hello


// Updating Strings:
// $str = "Hello, World!";
// $new_str = str_replace("World", "PHP", $str); // Replace "World" with "PHP"
// echo $new_str; // Output: Hello, PHP!


?>