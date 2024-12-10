<?php

class MathOperations{

function sum($a,$b){
    echo $a+$b;
}

function Multi($a,$b){
    echo $a*$b;
}


}



$math= new MathOperations();

$math->sum(56,89);
echo "<br/>";
$math->Multi(56,2);

?>