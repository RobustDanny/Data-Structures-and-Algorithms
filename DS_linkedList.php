<?php

// Liked list can be different kind:
// 1. Singly linked list
// 2. Doubly linked list
// 3. Circular singly linked list
// 4. Circular doubly linked list
class LinkedList{

    public $data;
    public $next_pointer;

    public function __construct($data){

        $this->data = $data;
        $this->next_pointer = null;

    }

    public function traverse($head){

        $current_node = $head;

        while($current_node){

        echo $current_node->data . " -> ";

            if($current_node->next_pointer === null)
                echo "null " . "\n";
    
            $current_node = $current_node->next_pointer;

        }

    }

    public function insertNode($head, $newNode, $position){

        if ($position === 0){
            $newNode->next_pointer = $head;
            return $newNode;
        }


        $current_node = $head;

        for($i = 0  ;   $i <= $position-2; $i++){
            if ($current_node === null)
                break;

            $current_node = $current_node->next_pointer;
        }
        
        $newNode->next_pointer = $current_node->next_pointer;
        $current_node->next_pointer = $newNode;
    
        return $head;
    }

    public function removeNode($head, $node){

        if($node === $head)
            return $node->next_pointer;

        $current_node = $head;

        while ($current_node->next_pointer && $current_node->next_pointer !== $node)
            $current_node = $current_node->next_pointer;

        if ($current_node->next_pointer === null)
            return $head;

        $current_node->next_pointer = $current_node->next_pointer->next_pointer;
        
        return $head;
    }
}

$node1 = new LinkedList(12);
$node2 = new LinkedList(36);
$node3 = new LinkedList(99);

$node1->next_pointer = $node2;
$node2->next_pointer = $node3;

$newNode = new LinkedList(93);

$newNode->traverse($node1);

$newNode->insertNode($node1, $newNode, 1);
$newNode->traverse($node1);

$newNode->removeNode($node1, $node2);
$newNode->traverse($node1);









?>