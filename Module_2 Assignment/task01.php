<?php
// Task 1: Looping with Increment using a Function
// Write a PHP function that uses a for loop to print all even numbers from 1 to 20, but with a
// step of 2. In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. The function
// should take the arguments like start as 1, end as 20 and step as 2. You must call the
// function to print.
// Also do the same using while loop and do-while loop also.
echo "Finding Even Number using For Loop : " . PHP_EOL;
function print_even_numbers($start, $end, $step) {
   $start = ($start % 2 !=0) ? ($start+1): ($start);
    for ($i = $start; $i <= $end; $i += $step) {
      if ($i % 2 == 0) {
        echo $i . PHP_EOL;
      }
    }
  }
  print_even_numbers(1, 20, 2);
  
  echo "Finding Even Number using  while:" . PHP_EOL;
function evenWhile($start, $end, $step) {
    // Make sure start is even
    if ($start % 2 != 0) {
        $start++;
    }
    
    $current = $start;
    
    while ($current <= $end) {
        echo $current . PHP_EOL ;
        $current += $step;
    }
    
}

evenWhile(1, 20, 2);

echo "Finding Even Number using Do while:" ." " ;
function dowhileeven($start, $end, $step) {
    // Make sure start is even
    if ($start % 2 != 0) {
        $start++;
    }
    
    $current = $start;
    
    do {
        echo $current . " ";
        $current += $step;
    } while ($current <= $end);
}

dowhileeven(1, 20, 2);

?>

