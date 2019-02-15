<?php

function mergesort($array) {
    $length = count($array);
    if($length <= 1) {
        return $array;
    }
    $middle = $length / 2;
    $left = array_slice($array, 0, $middle);
    $right = array_slice($array, $middle);
    
    $left = mergesort($left);
    $right = mergesort($right);
    
    return merge($left, $right);
}

function merge($left, $right) {
    $result = array();
    $leftIndex = $rightIndex = 0;
    
    // Compare both sides and merge
    while($leftIndex < count($left) && $rightIndex < count($right)) {
        if ($left[$leftIndex] < $right[$rightIndex]) {
            $result[] = $left[$leftIndex];
            $leftIndex ++;
        } else {
            $result[] = $right[$rightIndex];
            $rightIndex ++;
        }
    }
    // Copy remaining left elements
    while($leftIndex < count($left)) {
        $result[] = $left[$leftIndex];
        $leftIndex ++;
    }
    // Copy remaining right elemnts
    while($rightIndex < count($right)) {
        $result[] = $right[$rightIndex];
        $rightIndex ++;
    }
    
    return $result;
}

$unsorted = [45,78,0,34,-23];
$sorted = mergesort($unsorted);
print_r($sorted);