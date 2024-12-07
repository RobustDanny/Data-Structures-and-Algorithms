<?php

$array_length = 1000;

$min = 0;
$max = 10000;

$random_arr = array_map(function () use ($min, $max) {

    return rand($min, $max);
}, range(1, $array_length));

?>