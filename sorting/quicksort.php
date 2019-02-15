<?php

function quickSort($array) {
    $length = count($array);
    if($length <= 1) {
        return $array;
    }
    $pivot = $array[0];
    $left = $right = [];
    for ($i=1; $i < $length; $i++) {
        if($pivot > $array[$i]) {
            $left[] = $array[$i];
        } else {
            $right[] = $array[$i];
        }
    }
    
    return array_merge(quickSort($left),[$pivot], quickSort($right));
}

$unsorted = [45,78,0,34,-23];
$sorted = quickSort($unsorted);
print_r($sorted);