<?php

class Teacher{
    public $city="Delhi";
    function nextExam(){
        echo "next exam is maths";
    }
    function age(){
        echo "my age is 40";
    }
}

class student extends Teacher {
   public $city="Nodia";
    function age(){
        echo "my age is 20";
    }
}


$s1= new student();
$s1-> age();
echo "<br/>";
echo $s1->city;

?>