<?php

trait ParentCompany1{
        function getEmp(){
            echo 200;
        }
    }



    trait ParentCompany1{
        function getEmp(){
            echo 300;
        }
    }



class Company{
   use ParentCompany1;
   use ParentCompany2{
     ParentCompany1:: getEmp insteadOf ParentCompany2;
     ParentCompany2:: getEmp as getEmpCompany2;
   }
    }



$c1 = new Company();
$c1-> getEmp();
echo "<br/>";
$c1->getEmpCompany2();


?>