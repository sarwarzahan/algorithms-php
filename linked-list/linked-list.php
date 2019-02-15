<?php

class Node {
    public $data;
    public $nextNode;
    
    public function __construct($data) {
        $this->data = $data;
    }
}

Class LinkedList {
    private $currentNode = null;
    private $startNode = null;
    public function insert($data) {
        $node = new Node($data);
        if(is_null($this->startNode)) {
            $this->startNode = $node;
        } else {
            $this->currentNode->nextNode = $node;
        }
        $this->currentNode = $node;
    }
    
    public function getNthElement($elementNo) {
        $i = 0;
        $node = $this->startNode;
        while ($node != null) {
            $i++;
            if ($i == $elementNo) {
                return $node->data;
            }
            $node = $node->nextNode;
        }
    }
    
    public function insertOnNth($elementNo, $data) {
        $i = 0;
        $node = $this->startNode;
        while ($node != null) {
            $i++;
            if ($i == $elementNo -1) {
                $temp = $node->nextNode;
                $newNode = new Node($data);
                $newNode->nextNode = $temp;
                if ($node == $this->currentNode) {
                    $this->currentNode = $newNode;
                }
                $node->nextNode = $newNode;
                break;
            }
            $node = $node->nextNode;
        }
    }
}

$linkedList = new LinkedList();
$linkedList->insert(10);
$linkedList->insert(20);
$linkedList->insert(30);

$linkedList->insertOnNth(4, 25);
$linkedList->insert(40);

print_r($linkedList->getNthElement(3));
print_r($linkedList);