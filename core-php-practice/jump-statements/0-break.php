<!--
Jump statements in PHP are used to control the flow of execution within a program by transferring control to a different part of the code. Here are the main jump statements in PHP:

break: Terminates the execution of the innermost loop or switch statement.
 -->
<?php
for ($i = 0; $i < 5; $i++) {
    if ($i == 3) {
        break; // terminates the loop when $i equals 3
    }
    echo $i . "<br>";
}

?>