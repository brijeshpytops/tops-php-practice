<!-- 
for Loop:

The for loop is initialized with three expressions: initialization, condition, and increment (or decrement).

The initialization expression is executed once at the beginning of the loop.

The condition is evaluated before each iteration. If it is true, the loop continues; otherwise, the loop terminates.

After each iteration, the increment/decrement expression is executed.

The loop continues to iterate until the condition becomes false.
 -->

<?php
for ($i = 0; $i < 5; $i++) {
    echo "Iteration: $i <br>";
}

?>