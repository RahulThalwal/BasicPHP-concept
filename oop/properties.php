<?php

class Properties{

//public,private,protected
public $name="Sky";

function getName(){
    echo $this->name; 
}


}


$p1= new Properties();
echo $p1->name;
?>