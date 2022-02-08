<?php
function shape1($star){
    for ($i = 0; $i < $star; $i++){
        for($j = 0; $j <= $i; $j++ ){
            echo "* ";
        }
        echo "\n";
    }
}
$star = 3;
shape1($star);
?>