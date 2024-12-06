<?php
require_once('random_array.php');


for ($i = 0; $i < count($random_arr) - 1; $i++){
    $index_min = $i;
    for ($j = $i+1; $j < count($random_arr); $j++){

        if($random_arr[$j]<$random_arr[$index_min]){

            $index_min = $j;

       
        }

    }
    array_splice($random_arr, $i, 0, array_splice($random_arr, $index_min, 1)[0]);

}

print_r($random_arr);

// Modified Selection sort with swapping elements instead of removing. Tried with array_splice() but it doens't work

for ($i = 0; $i < count($random_arr) - 1; $i++){
    $index_min = $i;
    for ($j = $i+1; $j < count($random_arr); $j++){

        if($random_arr[$j]<$random_arr[$index_min]){

            $index_min = $j;

       
        }

    }
    $replacement = $random_arr[$i];
    $random_arr[$i] = $random_arr[$index_min];
    $random_arr[$index_min] = $replacement;
    
    // array_splice($random_arr, $i, 0, $random_arr[$index_min]);
    // array_splice($random_arr, $index_min, 0, $replacement);

}

print_r($random_arr);



?>