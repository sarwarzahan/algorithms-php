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

Class BinarySearchTree {
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
    
    public function insertNode($treeRoot, $data) {
        // For empty tree
        if (!$treeRoot) {
            return new TreeNode($data);
        }
        if ($data < $treeRoot->data) {
            $treeRoot->leftChild = $this->insertNode($treeRoot->leftChild, $data);
        } else if (($data > $treeRoot->data)){
            $treeRoot->rightChild = $this->insertNode($treeRoot->rightChild, $data);
        }
        
        return $treeRoot;
    }
    
    public function search($treeRoot, $data) {
        // For empty tree
        if (!$treeRoot || $data == $treeRoot->data) {
            return $treeRoot;
        }
        if ($data < $treeRoot->data) {
            return $this->search($treeRoot->leftChild, $data);
        } else if (($data > $treeRoot->data)){
            return $this->search($treeRoot->rightChild, $data);
        }
    }
    
    public function searchIterative($treeRoot, $data) {
        // For empty tree
        if (!$treeRoot || $data == $treeRoot->data) {
            return $treeRoot;
        }
        
        while ($treeRoot) {
            if ($data < $treeRoot->data) {
                $treeRoot = $treeRoot->leftChild;
            } else if ($data > $treeRoot->data) {
                $treeRoot = $treeRoot->rightChild;
            } else {
                break;
            }
        }
        
        return $treeRoot;
    }
}

$tree = new BinarySearchTree();
$root = $tree->insertNode(null, 50);
$tree->insertNode($root, 40);
$tree->insertNode($root, 100);
$tree->insertNode($root, 30);
$tree->insertNode($root, 110);
print_r($root);

$searchResult = $tree->searchIterative($root,110);
var_dump($searchResult);

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
$tree->traverseBFS($root);
print "-----END-----\n";

