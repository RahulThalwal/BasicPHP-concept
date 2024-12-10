<?php
class User{
   public $name="Sky Bags";

   function __get($property){
    echo "$property property is not exist";
   }
}
$user= new User();
echo $user-> name;

?>