<?php

function matrixStartEnd($matrixArray) {
    $startFound = false;
    foreach($matrixArray as $rowNo => $rowArray) {
        foreach($rowArray as $columnNo => $element) {
            if($element == 0 && !$startFound) {
                $startRow = $rowNo;
                $startColumn = $columnNo;
                $endRow = $rowNo;
                $endColumn = $columnNo;
                $startFound = true;
            }
            if($element == 0) {
                $endRow = $rowNo;
                $endColumn = $columnNo;
            }
        }
    }
    
    return [$startRow, $startColumn, $endRow, $endColumn];
}

$matrixArray = [
    [1, 1, 1, 1, 1, 1],
    [1, 1, 0, 0, 0, 1],
    [1, 1, 0, 0, 0, 1],
    [1, 1, 1, 1, 1, 1]
];

$startEndRowColumn = matrixStartEnd($matrixArray);
print_r($startEndRowColumn);