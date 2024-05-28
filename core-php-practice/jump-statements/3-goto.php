<!-- 
goto: Transfers control to a specified label within the same script.
 -->

<?php
goto my_label;
echo "This line will not be executed.";

my_label:
echo "This line will be executed.";

?>