<!-- 
do...while Loop:

The do...while loop is similar to the while loop, but it executes the block of code at least once before checking the condition.

After the block of code is executed, the condition is evaluated. If it is true, the loop continues; otherwise, the loop terminates.
 -->

<?php
$i = 0;
do {
    echo "Iteration: $i <br>";
    $i++;
} while ($i < 5);
?>
