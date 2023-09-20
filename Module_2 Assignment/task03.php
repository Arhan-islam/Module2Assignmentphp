<?php 
// Task 3: Break on Condition
// Write a PHP program that calculates and prints the first 10 Fibonacci numbers. But, if a
// Fibonacci number is greater than 100, break out of the loop using the break statement.
function fibonacchii($n){
$fib = array();
$fib [0]=0;
$fib[1]=1;
echo "Fibonacci Series (up to 10 numbers): ";
if($n >= 1){
    echo $fib[0] ." ";
}
if($n >= 2){
    echo $fib[1] . " ";
}
for($i =2; $i < $n; $i++){
    $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    if ($fib[$i]>100){
        break;
    }else{
        echo $fib[$i] . " ";
    }
}
}
fibonacchii(15);
?>

