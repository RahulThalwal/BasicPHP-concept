 <?php
 
 class Company {
    function getName(){
        echo "This is Honda.";
        return $this;  // use this return method to use chaining method. 
    }
    function getEmp(){
        echo "Honda  has 3000 employee.";
        return $this;
    }

    function totaloffice(){
        echo "Honda  has 2000 employee.";
        
    }
 }
 


$company = new Company();
$company-> getName()->getEmp()->totaloffice();
 
 ?>