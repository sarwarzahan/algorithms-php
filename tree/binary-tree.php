<?php

class TreeNode {
    public $data;
    public $leftChild;
    public $rightChild;
    
    public function __construct($data) {
        $this->data = $data;
    }
    
    public function addLeftChild (TreeNode $leftChild) {
        $this->leftChild = $leftChild;
    }
    
    public function addRightChild (TreeNode $rightChild) {
        $this->rightChild = $rightChild;
    }
}

Class BinaryTree {
    public function traverseDFSPreOrder($treeRoot) {
        if ($treeRoot == null) {
            return;
        } else {
            print $treeRoot->data . "\n";
            $this->traverseBFSPreOrder($treeRoot->leftChild);
            $this->traverseBFSPreOrder($treeRoot->rightChild);
        }
    }
    
    public function traverseDFSInOrder($treeRoot) {
        if ($treeRoot == null) {
            return;
        } else {
            $this->traverseBFSInOrder($treeRoot->leftChild);
            print $treeRoot->data . "\n";
            $this->traverseBFSInOrder($treeRoot->rightChild);
        }
    }
    
    public function traverseDFSPostOrder($treeRoot) {
        if ($treeRoot == null) {
            return;
        } else {
            $this->traverseBFSPostOrder($treeRoot->leftChild);
            $this->traverseBFSPostOrder($treeRoot->rightChild);
            print $treeRoot->data . "\n";
        }
    }
    
    public function traverseBFS($treeRoot) {
        $queue = [];
        while($treeRoot != null) {
            print $treeRoot->data . "\n";
            if ($treeRoot->leftChild) {
                array_push($queue, $treeRoot->leftChild);
            }
            if ($treeRoot->rightChild) {
                array_push($queue, $treeRoot->rightChild);
            }
            $treeRoot = array_shift($queue);
        }
    }
}

$treeRoot = new TreeNode(0);

$leftChild = new TreeNode(1);
$rightChild = new TreeNode(2);

$grandChild1 = new TreeNode(3);
$grandChild2 = new TreeNode(4);
$grandChild3 = new TreeNode(5);
$grandChild4 = new TreeNode(6);
$grandChild5 = new TreeNode(7);

$leftChild->addLeftChild($grandChild1);
$leftChild->addRightChild($grandChild2);

$rightChild->addLeftChild($grandChild3);
$rightChild->addRightChild($grandChild4);

$grandChild4->addLeftChild($grandChild5);

$treeRoot->addLeftChild($leftChild);
$treeRoot->addRightChild($rightChild);
$tree = new BinaryTree();

/*print "-----START-----\n";
$tree->traverseDFSPreOrder($treeRoot);
print "-----END-----\n";

print "-----START-----\n";
$tree->traverseDFSInOrder($treeRoot);
print "-----END-----\n";

print "-----START-----\n";
$tree->traverseDFSPostOrder($treeRoot);
print "-----END-----\n";*/

print "-----START-----\n";
$tree->traverseBFS($treeRoot);
print "-----END-----\n";

