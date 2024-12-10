<?php

class User{
    function __call($method,$args){
    echo "$method Method not found";
 

    
    }
}


$user= new User();
$user->getName();


?>