<?php  
 function vatCalculation($price,$vat){
    $priceWithOutVat = $price*$vat;
    $totalPrice = $price+$priceWithOutVat;
    echo "Vat on product :".$priceWithOutVat."tk"."\n";
    echo "Price with vat: ".$totalPrice."tk";
 }

 vatCalculation(100,0.15);
?>  