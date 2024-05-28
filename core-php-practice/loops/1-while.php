<!-- 
while Loop:

The while loop continues to execute a block of code as long as a specified condition evaluates to true.

The condition is evaluated before each iteration. If it is true, the loop continues; otherwise, the loop terminates.

It's crucial to ensure that the condition can eventually become false to prevent infinite loops.

 -->

<?php
$i = 0;
while ($i < 5) {
    echo "Iteration: $i <br>";
    $i++;
}

?>
