<!-- 
continue: Skips the current iteration of a loop and continues with the next iteration.
 -->
<?php
for ($i = 0; $i < 5; $i++) {
    if ($i == 2) {
        continue; // skips the iteration when $i equals 2
    }
    echo $i . "<br>";
}

?>