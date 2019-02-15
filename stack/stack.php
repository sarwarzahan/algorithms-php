<?php

Class Stack {
    private $queue = [];
    private $arraySize;
    
    public function __construct() {
        $this->arraySize = 0;
    }
    
    public function push($item) {
        $this->queue[] = $item;
        $this->arraySize++;
    }
    
    public function pop() {
        if(!$this->isEmpty()) {
            $temp = $this->queue[$this->arraySize - 1];
            $this->arraySize--;
            
            return $temp;
        }
    }
    
    public function isEmpty() {
        if ($this->arraySize == 0) {
            return true;
        } else {
            return false;
        }
    }
}

$stack = new Stack();
$stack->push(10);
$stack->push(5);
$stack->push(20);
$item = $stack->pop();
print_r($item);
$item = $stack->pop();
print_r($item);
$item = $stack->pop();
print_r($item);
