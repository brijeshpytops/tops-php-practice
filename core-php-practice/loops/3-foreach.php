<!-- 
foreach Loop:

The foreach loop is used specifically for iterating over arrays and collections.

It iterates over each element in the array or collection and executes a block of code for each element.

The loop automatically moves to the next element until all elements have been processed.
 -->

<?php
$colors = array("red", "green", "blue");
foreach ($colors as $color) {
    echo "$color <br>";
}
?>