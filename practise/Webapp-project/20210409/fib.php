<?php
function fib($n, $output = true){
    if($n == 0){
        if($output) echo '0 ';
        return 0;
    }
    if($n == 1){
        if($output){
            fib(0, true);
            echo '1 ';
        }
        return 1;
    }
    $a = fib($n-1, $output);
    $b = fib($n-2, false);
    $sum = $a + $b;
    if($output) echo $sum.' ';
    return $sum;
}
 
fib(9);
?>