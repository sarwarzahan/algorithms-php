<?php

function seiveOfEratosthenes(int $n) {
    $prime = array_fill(0, $n + 1, true);
    
    for ($i = 2; $i * $i <= $n; $i++) {
        if ($prime[$i] == true) {
            for ($j = $i * 2; $j <= $n; $j += $i) {
                $prime[$j] = false;
            }
        }
    }
    
    for ($i = 2; $i<=$n; $i++) {
        if ($prime[$i]) {
            print $i . "\n";
        }
    }
}


seiveOfEratosthenes(50);