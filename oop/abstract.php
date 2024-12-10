<?php

abstract class ProductFeatures{

   abstract function productDetails();
   abstract function productImages();
    abstract function productOwnerDetails();

}

class UploadProduct  extends ProductFeatures{

     function productDetails(){
        echo "product details";
     }
     function productImages(){
        echo "product details";
     }
     function productOwnerDetails(){
        echo "product details";
     }




}

$upload = new UploadProduct();
$upload->productDetails();

?>