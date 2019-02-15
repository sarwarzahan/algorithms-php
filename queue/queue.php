<?php

Class Queue {
    private $front = 0;
    private $queue = [];
    private $arraySize;
    
    public function __construct() {
        $this->arraySize = 0;
    }
    
    public function enqueue($item) {
        $this->queue[] = $item;
        $this->arraySize++;
    }
    
    public function dequeue() {
        if(!$this->isEmpty()) {
            $temp = $this->queue[$this->front];
            $this->front++;
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

$queue = new Queue();
$queue->enqueue(10);
$queue->enqueue(5);
$queue->enqueue(20);
$item = $queue->dequeue();
print_r($item);
$item = $queue->dequeue();
print_r($item);
$item = $queue->dequeue();
print_r($item);
