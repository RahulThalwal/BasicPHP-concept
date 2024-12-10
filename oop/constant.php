<?php

class ConstantDemo{
  const collegeName="SCVB college";
  function getcollegeName(){
   // echo self::collegeName;
  }  
 


}



echo ConstantDemo::collegeName;


$c1= new ConstantDemo();
//$c1->getcollegeName();
?>