<?php
function shape2($number){
    for($i=1;$i<=3;$i++){
        for($j=$i;$j>=1;$j--){
        echo $j;
        }
        echo " 
        ";
        }
}
$number = 3;
shape2($number);

?>