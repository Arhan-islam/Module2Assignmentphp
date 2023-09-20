<?php 
// Task 4: Fibonacci Series printing using a Function
// Write a PHP function to print the first 15 numbers in the Fibonacci series. You should take
// this 15 as an argument of a function and use a for loop to generate these numbers and print
// them by calling the function.
function fibonacchii($n){
$fib = array();
$fib [0]=0;
$fib[1]=1;
echo "Fibonacci Series (First 15 numbers): ";
if($n >= 1){
    echo $fib[0] ." ";
}
if($n >= 2){
    echo $fib[1] . " ";
}
for($i =2; $i < $n; $i++){
    $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    echo $fib[$i] . " ";
}
}
fibonacchii(15);
?>

