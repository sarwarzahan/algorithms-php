<?php

class TreeNode {
    public $data;
    public $descendants;
    
    public function __construct($data) {
        $this->data = $data;
        $this->descendants = [];
    }
    
    public function addDescendants ($descendants) {
        $this->descendants = $descendants;
    }
}

Class Tree {
    public function traverse($treeRoot) {
        if ($treeRoot == null) {
            return;
        } else {
            print $treeRoot->data . "\n";
            foreach($treeRoot->descendants as $descendant) {
                $this->traverse($descendant);
            }
        }
    }
}

$treeRoot = new TreeNode(0);
$child1 = new TreeNode(1);
$child2 = new TreeNode(2);
$child3 = new TreeNode(3);
$grandChild1 = new TreeNode(4);
$grandChild2 = new TreeNode(5);
$grandChild3 = new TreeNode(6);
$grandChild4 = new TreeNode(7);
$grandChild5 = new TreeNode(8);
$child1->addDescendants([$grandChild1, $grandChild2]);
$child2->addDescendants([$grandChild3]);
$child3->addDescendants([$grandChild4, $grandChild5]);
$treeRoot->addDescendants([$child1, $child2, $child3]);
$tree = new Tree();
$tree->traverse($treeRoot);

