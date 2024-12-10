<?php

class User{
    private $name="anil";
    function __set($property,$value){
        echo "$property this property cannot set ";
    }


    function __getName(){
        echo $this->name;
    }
}




$user= new User();
echo $user->name="Sky bags";

?>