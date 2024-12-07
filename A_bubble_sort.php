<?php

require_once('random_array.php');

// Time Complexity is O(n^2) because 2 operations called for 1 array value

for ($i = 0; $i < count($random_arr) - 1;$i++){
    for($j=0;$j< count($random_arr)-$i-1; $j++){
        if($random_arr[$j]>$random_arr[$j+1]){
            $random_arr[$j] = $random_arr[$j+1];
            $random_arr[$j+1] = $random_arr[$j];
        }
    }
};

print_r($random_arr);

// Modified Bubble sort with stopping swapping if array required less iteractions to be sorted

for ($i = 0; $i < count($random_arr) - 1;$i++){
    $swapped = false;
    for($j=0;$j< count($random_arr)-$i-1; $j++){

        if($random_arr[$j]>$random_arr[$j+1]){
            $random_arr[$j] = $random_arr[$j+1];
            $random_arr[$j+1] = $random_arr[$j];
            $swapped = true;
            
        }
    }
        if (!$swapped){
            break;
        }
};

print_r($random_arr);

?>