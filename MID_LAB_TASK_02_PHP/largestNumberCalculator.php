<?php  

 function largestNumberCalculation($number1,$number2,$number3){
    $max = $number1;

    if ($number1>=$number2 && $number1>= $number3) {
        $max = $number1;
    }
    if ($number2>=$number1 && $number2>= $number3) {
        $max = $number2;
    }
    if ($number3>=$number1 && $number3>= $number2) {
        $max = $number3;
    }

    echo "Largest between those three is:".$max;
 }

 largestNumberCalculation(21,2,3);
?>  