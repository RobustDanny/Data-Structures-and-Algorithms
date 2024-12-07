<?php

echo "Implementation using Loop" . "\n";

$num1 = 0;
$num2 = 1;

for ($i = 0; $i <= 18; $i++){
    $sum = $num1 + $num2;
    $num1 = $num2;
    $num2 = $sum;
    echo $sum . "\n";
}

echo "Implementation Using Recursion" . "\n";

$count = 2;

function recursion($num1,$num2){

    global $count;

    if($count < 18){
    $sum = $num1 + $num2;
    $num1 = $num2;
    $num2 = $sum;
    echo $sum . "\n";
    $count++;
    recursion($num1, $num2);
}
return;

} 
recursion(0, 1);

echo "Finding The Nth Fibonacci Number Using Recursion" . "\n";

function Nth($n){

    if ($n <= 1)
        return $n;
    else
        return Nth($n - 1) + Nth($n - 2);

}

echo Nth(7) . "\n";

?>