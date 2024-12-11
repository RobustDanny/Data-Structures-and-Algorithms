<?php

// Implement stack through array 

class StackThroughArray{
    public $stack;

    public function __construct(){

        $this->stack = [];
    }

    public function push($value){

        return array_push($this->stack, $value);
    } 

    public function pop(){

        return ($popped = array_pop($this->stack))? $popped . "\n": "Stask is empty" . "\n";
    }

    public function peek(){

        return (end($this->stack)) ? end($this->stack) . "\n" : "Stask is empty" . "\n";
    }

    public function isEmpty(){

        return (sizeof($this->stack))? "Has size: " . sizeof($this->stack) . "\n" : "Stack is empty" . "\n";
    }

}

$stack = new StackThroughArray();

$stack->push('a');
$stack->push('b');
$stack->push('c');

print_r($stack->pop());

print_r($stack->peek());

print_r($stack->isEmpty());



// Implement stack through linked list


class LinkedList{
    public $data;
    public $next_pointer;

    public function __construct($value){
        $this->data = $value;
        $this->next_pointer = null;
    }
}
class StackThroughLinkedList{

    public $head;
    public $size;

    public function __construct(){
        $this->head = null;
        $this->size = 0;
    }

    public function push($value){

        $new_node = new LinkedList($value);

        if ($this->head)
            $new_node->next_pointer = $this->head;

        $this->head = $new_node;
        $this->size += 1;

        return $this->head;
    }

    public function pop(){

        if (!end($this))
            return "Stack is empty" . "\n";

        $popped = $this->head;
        $this->head = $this->head->next_pointer;

        return $popped;
    }

    public function peek(){

        if (!$this->head)
            return "Stack is empty" . "\n";

        return $this->head;
    }

    public function size(){
        return $this->size . "\n";
    }

    public function isEmpty(){
        return ($this->size)? $this->size . "\n" : "Stack is empty" . "\n";
    }
}

$stack = new StackThroughLinkedList();

$stack->push(1);
$stack->push(2);
$stack->push(55);

echo $stack->isEmpty();
echo $stack->size();
print_r($stack->peek());

print_r($stack->pop());
$stack->push(100);
print_r($stack->peek());




?>