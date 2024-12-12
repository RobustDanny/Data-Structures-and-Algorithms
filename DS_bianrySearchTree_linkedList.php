<?php

// Exeprions don't explain down there. There is simply way to see how BST works
// Private functions were maded to make recursions instead of true-while

class LinkedList{
    public $data;
    public $left;
    public $right;

    public function __construct($value){

        $this->data = $value;
        $this->left = null;
        $this->right = null;
    }

}
class BinerySearchTree {

    private $root;

    public function insert($value){
		
        if ($this->root === null) {
			$this->root = new LinkedList($value);
			return $this;
		}


		$node = $this->root;
		while (true) {
			if ($value <= $node->data) {
				if ($node->left === null) {
					$node->left = new LinkedList($value);
					return $this;
				}
				$node = $node->left;
			} else {
				if ($node->right === null) {
					$node->right = new LinkedList($value);
					return $this;
				}
				$node = $node->right;
			}
		}
	}

    public function search($target){
        return $this->_search($this->root, $target);
    }
    private function _search($root, $target){

        if ($root === null)
            return "Doesn't exist" . "\n";

        if ($root->data === $target){
            echo $root->data . " has been found!" . "\n";
            return  $root;
        }
            
        if ($target < $root->data)
            return $this->_search($root->left, $target);
        else
            return $this->_search($root->right, $target);
        
    }

    public function pre_order(){
        return $this->_pre_order($this->root);
    }

    private function _pre_order($root){
        if ($root === null)
            return $this;

        echo "{$root->data}" . " -> ";
        $this->_pre_order($root->left);
        $this->_pre_order($root->right);
    }

    public function in_order(){
        return $this->_in_order($this->root);
    }

    private function _in_order($root){
        if ($root === null)
            return $this;

        $this->_in_order($root->left);
        echo "{$root->data}" . " -> ";
        $this->_in_order($root->right);
    }

    public function post_order(){
        return $this->_post_order($this->root);
    }

    private function _post_order($root){
        if ($root === null)
            return $this;

        $this->_post_order($root->left);
        $this->_post_order($root->right);
        echo "{$root->data}" . " -> ";
    }

    public  function delete($value){
        return $this->_delete($this->root, $value);
    }
    private function _delete($node, $target){

        if ($node === null)
            return $this;
        
        if ($target < $node->data)
            $node->_delete($node->left, $target);
        elseif($target > $node->data)
            $node->_delete($node->right, $target);
        else{

            // Node with one child or no child
            if($node->left === null){
                $temp = $node->right;
                $node = $temp;
                return $node;
            }
            elseif($node->right === null){
                $temp = $node->left;
                $node = $temp;
                return $node;
            }

            // Node with two children, get the in_order successor
            $node->data = $node->_findLowest($node->right)->data;
            $node->right = $node->_delete($node->right, $node->data);

            }

        }

    public function findLowest(){
        return $this->_findLowest($this->root);
    }
    private function _findLowest($node){
        $current_node = $node;
        while($current_node->left)
            $current_node = $current_node->left;
        echo $current_node->data . " is lowest" . "\n";
        return $current_node;
    }
}

// Filling a tree

$root = new BinerySearchTree();
$root->insert(4)->insert(70)->insert(5)->insert(111);

// Traversal

$root->pre_order();
echo "\n";
$root->in_order();
echo "\n";
$root->post_order();
echo "\n";

// Operations

$root->findLowest();
$root->search(5);
$root->delete(4);

?>