<?php

interface ProductFeatures{
    function images();
    function ownerDetails();
    
}

class Products implements ProductFeatures{


     function images(){
        echo "product images";
     }

     function ownerDetails(){
        echo "product images";
     }
}

$product = new Products();
$product->images();

?>