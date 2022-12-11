<?php
function findMissnum(array $set) :string {
    //sort the numbers inside the array
    $set[] = sort($set);
    for ($i = 0 ;$i <= count($set); $i++){
        if ($i >= 1){
            if (($set[$i]-($set[$i-1])) !=1){
                return "The first missing number is ".$set[$i-1]+1;
                }
        }
    }
    }
    echo findMissnum(array(1,2,3,4,7));
//output should be 3