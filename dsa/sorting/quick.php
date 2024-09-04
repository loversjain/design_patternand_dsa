<?php

function quickSort($array) {
    $count = count($array);
    for ($i=0; $i<=$count; $i++) {
        for ($j=0; $j<=$count; $j++) {
            if($array[$j] > $array[$j+1]) {
                $temp = $array[$j + 1];
                $array[$j + 1] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
    return $array;
}

print_r(quickSort([2,7,4,8,1,3]));
?>