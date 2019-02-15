<?php

function minimumPostiveInteger($numbersArray) {
    $minimumNumber = -1;
    for ($i = 0; $i < count($numbersArray) - 1; $i++) {
        if ($numbersArray[$i] < $numbersArray[$i + 1]) {
            if (($numbersArray[$i + 1] - $numbersArray[$i]) > 1) {
                $checkNumer = $numbersArray[$i] + 1;
                if (!in_array($checkNumer, $numbersArray)) {
                    $minimumNumber = $checkNumer;
                }
            }
        } else {
            if (($numbersArray[$i] - $numbersArray[$i + 1]) > 1) {
                $checkNumer = $numbersArray[$i] + 1;
                if (!in_array($checkNumer, $numbersArray)) {
                    $minimumNumber = $checkNumer;
                }
            }
        }
    }
    
    return $minimumNumber;
}

/*function solution($A) {
    $smallestPostive = 1;
    for($i=0; $i<count($A)-1;$i++) {
        if ($A[$i] > 1) {
            if(($A[$i] - $A[$i+1]) > 1 && !in_array($A[$i]+1,$A)) {
                $smallestPostive = $A[$i]+1;
            }
            if(($A[$i] - $A[$i+1]) < 1 && !in_array($A[$i+1]+1,$A)) {
                $smallestPostive = $A[$i+1]+1;
            }
        }
    }
    
    return $smallestPostive;
}

$array = [-1, 3, 2, 8];
$minimumNumber = solution($array);//minimumPostiveInteger($array);
print_r($minimumNumber);*/

function solution($A, $B) {
    // write your code in PHP7.0
    $alecWins = 0;
    $strSymbolCard='AKQJT';
    $A = str_split($A);
    $B = str_split($B);
    for ($i=0;$i<count($A);$i++) {
        if(is_numeric($A[$i]) && is_numeric($B[$i])) {
            if ($A[$i] > $B[$i]) {
                $alecWins++;
            }
        }
        if(!is_numeric($A[$i]) && is_numeric($B[$i])) {
            $alecWins++;
        }
        if(!is_numeric($A[$i]) && !is_numeric($B[$i])) {
            $alecCardPosition = strpos($strSymbolCard, $A[$i]);
            $bobCardPosition =  strpos($strSymbolCard, $B[$i]);
            if ($alecCardPosition < $bobCardPosition) {
                $alecWins++;
            }
        }
    }
    
    return $alecWins;
}

$A ='A586QK';
$B = 'JJ653K';

$result = solution($A, $B);
print_r($result);
