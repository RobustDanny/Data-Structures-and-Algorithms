<?php
require_once('random_array.php');

for ($i = 1; $i < count($random_arr);   $i++){

    $index = $i;
    $value = array_splice($random_arr, $index, 1)[0];

    for($j=$i-1;    $j >= 0;    $j--){

        if($random_arr[$j]>$value)
        $index  =   $j; 

    }
    array_splice($random_arr, $index, 0, $value);


}

print_r($random_arr);

// Modified Insertion sort. Less shifting values to swaping value

for ($i = 1; $i < count($random_arr);   $i++){

    $index = $i;
    $value = $random_arr[$i];

    for($j=$i-1;    $j >= 0;    $j--){

        if ($random_arr[$j] > $value){

            $random_arr[$j + 1] = $random_arr[$j];
            $index  =   $j; 
        }

    }
    $random_arr[$index] = $value;


}

print_r($random_arr);

?>