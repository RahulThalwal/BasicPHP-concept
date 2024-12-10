<?php

class User{
     

     function __invoke(){
        echo "my name is sky";
     }
}

$user=new User();
$user();
?>