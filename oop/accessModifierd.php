<?php

class Teachers{

     private function questionpapers(){
        return "important";
      }

     public function exam(){
     if($this->questionpapers()=="important"){
        echo "do something";
     }else{
        echo "do else";
     }
      }
 protected function studentsmarks(){
    echo "all students marks";
 }

}

class Management extends Teachers{
    function reviewExams(){
    $this-> studentsmarks();
    }
}


$m1  =new Management();
echo $m1-> reviewExams();


$t1= new Teachers();

$t1-> exam();


?>