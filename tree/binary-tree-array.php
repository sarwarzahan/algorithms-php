<?php


Class BinaryTreeArray {
    public $treeItems = [];
    
    public function setRoot($value) {
        $this->treeItems[0] = $value;
    }
    
    public function setLeftChild($value, $parentIndexNo) {
        if (is_null($this->treeItems[$parentIndexNo])) {
            print 'parent not found';
            return;
        }
        $leftChildIndex =  $parentIndexNo * 2 + 1;
        $this->treeItems[$leftChildIndex] = $value;
    }
    
    public function setRightChild($value, $parentIndexNo) {
        if (is_null($this->treeItems[$parentIndexNo])) {
            print 'parent not found';
            return;
        }
        $rightChildIndex =  $parentIndexNo * 2 + 2;
        $this->treeItems[$rightChildIndex] = $value;
    }
    
    public function traverseBFS($rootIndex = 0) {
        $queue = [];
        while (isset($this->treeItems[$rootIndex])) {
            print $this->treeItems[$rootIndex] . "\n";
            if(isset($this->treeItems[2*$rootIndex + 1])) {
                array_push($queue, 2*$rootIndex + 1);
            }
            if(isset($this->treeItems[2*$rootIndex + 2])) {
                array_push($queue, 2*$rootIndex + 2);
            }
            $rootIndex = array_shift($queue);
        }
    }
}

$tree = new BinaryTreeArray();
$tree->setRoot(-1);
$tree->setLeftChild(1, 0);
$tree->setRightChild(2, 0);
$tree->setLeftChild(3, 1);
$tree->setRightChild(4, 1);
$tree->setRightChild(50, 4);
$tree->setLeftChild(5, 2);
$tree->setRightChild(6, 2);
$tree->setRightChild(7, 6);

print_r($tree);
$tree->traverseBFS();

