<?php

class Honda{
    static public $city="Mohalli";
   static function CompanyName(){
        echo "Honda";
    }
}


// $honda= new Honda();
// $honda->CompanyName();


Honda :: CompanyName();
echo Honda :: $city; 
?>