<?php

function fibonacci(int $n) {
    $i = 2;
    $firstNumber = 0;
    $secondNumber = 1;
    if ($n <= 1) {
        return $n;
    }
    while ($i <= $n) {
       $fiboNacci = $firstNumber + $secondNumber;
       $firstNumber = $secondNumber;
       $secondNumber = $fiboNacci;
        $i++;
    }
    
    return $fiboNacci;
}

function fib ($n) {
    if ($n <=1) {
        return $n;
    } else {
        return fib($n-1) + fib($n-2);
    }
}

$test = fibonacci(7);
echo $test;
$test2 = fibonacci(7);
print "\n" . $test2;