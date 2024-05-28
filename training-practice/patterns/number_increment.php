<?php
$num = 5;
$init = 1;

// for($row = 1; $row<=$num; $row+=1){
//     for($col=1; $col<=$row; $col+=1){
//         echo " $init ";
//         $init += 1;
//     }
//     echo "\n";
// }

for($row = 1; $row<=$num; $row+=1){
    for($col=1; $col<=$row; $col+=1){
        echo sprintf(" %c ", $init + 96);
        $init += 1;
    }
    echo "\n";
}
?>