<?php

// Implemention queue through array

class QueueTroughArray{

    public $size;
    public $queue;

    public function __construct(){
        $this->size = 0;
        $this->queue = [];
    }

    public function size(){
        return $this->size;
    }

    public function isEmpty(){
        return ($this->size)? "Queue's size: " . $this->size : "Queue is empty";
    }

    public function peek(){
        return ($this->queue) ? "Next on queue: " . $this->queue[0] : "Queue is empty"; 
    }

    public function add($value){
        return array_push($this->queue, $value);
    }

    public function pop(){
        return array_shift($this->queue);
    }
}

$node1 = new QueueTroughArray();

$node1->size();
$node1->add(6);
$node1->peek();
$node1->pop();
$node1->peek();
// echo $node1->isEmpty();


// Implemention queue through linked list

class LinkedList{

    public $data;
    public $next_poiner;

    public function __construct($value){
    
        $this->data = $value;
        $this->next_poiner = null;
    }
}

class QueueThroughLinkedList{

    public $head;
    public $size;
    public $tail;

    public function __construct(){

        $this->head = null;
        $this->tail = null;
        $this->size = 0;
    }

    public function size(){
        return "Queue's size: ". $this->size . "\n";
    }

    public function isEmpty(){
        return ($this->size)? "Queue's size: " . $this->size . "\n" : "Queue is empty";
    }

    public function peek(){
        return ($this->head)? "Next queue's element: " . $this->head->data . "\n" : "Queue is empty";
    }

    public function shift(){
        $this->head = $this->head->next_poiner;
        $this->size--;

        if (!$this->head)
            $this->tail = null;
    }

    public function push($value){

        $newNode = new LinkedList($value);

        if(!$this->tail){

        $this->head = $this->tail = $newNode;
        $this->size++;
            return;
        }

        $this->tail->next_poiner = $newNode;
        $this->tail = $newNode;
        $this->size++;          
    }

    public function print(){

        $current_head_node = $this->head;
        while($current_head_node){

            echo $current_head_node->data . " -> ";
            $current_head_node = $current_head_node->next_poiner;
        }
        echo "\n";
    }

}

$node = new QueueThroughLinkedList();

$node->push(3);
$node->push(96);
$node->push(1000);
$node->print();
echo $node->size();
$node->shift();
echo $node->peek();
echo $node->size();
$node->print();
echo $node->isEmpty();
?>