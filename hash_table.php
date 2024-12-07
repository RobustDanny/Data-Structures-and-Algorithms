<?php
// require_once('random_array.php');
class HashTable{
    public $size;
    public $buckets;
    public function __construct($size){

        $buckets = [];

        for ($i = 0; $i < $size; $i++)
            array_push($buckets, []);
        
        $this->buckets = $buckets;
        $this->size = $size;

    }

    public function hash_function($value){
        
        $sum = 0;
        for ($i = 0; $i < strlen($value); $i++){

            $sum += ord(substr($value, $i));
            
        }
        return $sum % 10;

    }

    public function add($value){

        $hash_code = $this->hash_function($value);
        array_push($this->buckets[$hash_code],$value);
        
        echo "\n" . "The value " . $value . " has been added to the hash table's bucket number " . $hash_code;

        return $this->buckets;

    }

    public function remove($value){

        $index = $this->hash_function($value);
        $indexInBucket = array_search($value, $this->buckets[$index]);
        array_splice($this->buckets[$index], $indexInBucket, 1);

        echo "\n" . "The value " . $value . " has been removed from the hash table's bucket number " . $index;
        
        return $this->buckets[$index];
    }

    public function find($value){

        $index = $this->hash_function($value);
        $indexInBucket = array_search($value, $this->buckets[$index]);

        if ($indexInBucket === false){
           echo "\n" . $value . " doesn't exist in this hash table" . "\n";
        }
 
        
        else{
            echo "\n" . "This value contains into bucket " . $index . "." . "\n" .
            "Index in the bucket: " . $indexInBucket .
            "\n". "Here is all values from this bucket: " . "\n" .
            "\n". "Bucket " . $index  .":". "\n";
            print_r($this->buckets[$index]);
        }


        return $this->buckets[$index];

    }
    public function print(){

        echo "\n" . "Hash table contents:" . "\n";

        foreach ($this->buckets as $index => $bucket){
            echo "\n" . "Bucket " . $index . ": " . "\n";
            print_r($bucket) . "\n";
        }

    }

}

$hash_table = new HashTable(10);

$hash_table->add(11);
$hash_table->add(12);
$hash_table->add(110);
$hash_table->print();

$hash_table->remove(12);
$hash_table->print();

$hash_table->find(11);
$hash_table->find(350);
?>