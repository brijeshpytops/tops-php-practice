<!-- 
Null Coalescing Operator: Used to provide a default value for a variable if it is null. 
Example: ??.
 -->

<?php
// Define a variable that may be null
$variable = null;

// Using the null coalescing operator to provide a default value
$result = $variable ?? "Default Value";

// Output the result
echo $result;

?>