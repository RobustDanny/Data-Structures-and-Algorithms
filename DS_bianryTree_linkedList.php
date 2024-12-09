<?php

use function Laravel\Prompts\search;

class BinerySearchTree {
    public $data;
    public $left;
    public $right;

    public function __construct($value){

        $this->data = $value;
        $this->left = null;
        $this->right = null;
    }

    public function pre_order($node){

        if ($node === null)
            return;

        echo "{$node->data}" . " -> ";
        $node->pre_order($node->left);
        $node->pre_order($node->right);
    }

    public function in_order($node){

        if ($node === null)
            return;

        $node->in_order($node->left);
        echo "{$node->data}" . " -> ";
        $node->in_order($node->right);
    }

    public function post_order($node){

        if ($node === null)
            return;

        $node->post_order($node->left);
        $node->post_order($node->right);
        echo "{$node->data}" . " -> ";
    }
    public function search($node, $target){

        if ($node === null)
            return "Not in this BST" . "\n";

        if ($target === $node->data)
            return $node;
        
        if($target > $node->data)
            $node->search($node->right, $target);
        else
            $node->search($node->left, $target);
    }

    public function insert($node, $target){
// Check!
        if ($node === null){
            $target = new BinerySearchTree($target);
            $node = $target;
            echo "{$target->data}" . " added succesfully" . "\n" ;
            return $node;
        }

        if ($node->data === $target){
            echo "It exists already" . "\n";
            return $node;
        }


        if($target < $node->data)
            $node->insert($node->left, $target);
        else
            $node->insert($node->right, $target);
    }

    public function delete($node, $target){

        if ($node === null)
            return;
        
        if ($target < $node->data)
            $node->delete($node->left, $target);
        elseif($target > $node->data)
            $node->delete($node->right, $target);
        else{

            // Node with one child or no child
            if($node->left === null){
                $temp = $node->right;
                $node->data = $temp->data;
                // print_r($temp);
                return $temp;
            }
            elseif($node->right === null){
                $temp = $node->left;
                $node = null;
                return $temp;
            }

            // Node with two children, get the in_order successor
            $node->data = $node->findLowest($node->right)->data;
            $node->right = $node->delete($node->right, $node->data);

            }

        }
    public function findLowest($node){
        $current_node = $node;
        while($current_node->left)
            $current_node = $current_node->left;
        return $current_node;
    }
        
        
    }


$root = new BinerySearchTree(10);
$node1 = new BinerySearchTree(5);
$node2 = new BinerySearchTree(15);
$node3 = new BinerySearchTree(4);
$node4 = new BinerySearchTree(3);
$node5 = new BinerySearchTree(2);
$node6 = new BinerySearchTree(11);
$node7 = new BinerySearchTree(8);
$node8 = new BinerySearchTree(16);
$node9 = new BinerySearchTree(6);
$node10 = new BinerySearchTree(7);

$root->left = $node1;
$root->right = $node2;

$node1->left = $node3;
$node1->right = $node7;

$node2->left = $node6;
$node2->right = $node8;

$node3->left = $node4;

$node4->left = $node5;

$node7->left = $node9;

$node9->right = $node10;

// Traversal
// $root->pre_order($root);
// echo "\n";
$root->in_order($root);
echo "\n";
// $root->post_order($root);
// echo "\n";

// Search
// print_r($root->search($root, 8));

// Insert
// print_r($root->insert($root, 20));
// print_r($root->search($root, 1));
// $root->in_order($root);
// print_r($root->findLowest($root));

echo $root->delete($root, 5);
$root->in_order($root);
echo "\n";




?>