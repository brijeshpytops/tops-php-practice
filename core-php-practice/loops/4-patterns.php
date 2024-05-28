<?php
    $num = 7;
    for($row = 1; $row<=$num; $row++){
        for($col = 1; $col<=$row; $col++){
            if($row % 2 != 0){
                echo "* ";
            }else{
                if($col == 1){
                    echo "* ";
                }else{
                    echo "  ";
                }
                
            }
            
        }
        for($col = $num-$row; $col>=1; $col-=1){
            if($col % 2 == 0){
                if($row == 1){
                    echo "* ";
                }else{
                    echo "  ";
                }
                
            }else{
                echo "* ";
            }
            
        }
        echo "\n";
    }
?>