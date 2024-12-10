<?php

include ('config.php');
class Student{

 public $DBconn;
 function __construct($conn){
    $this->DBconn=$conn;

 }
 function getData(){
$getStudents=$this->DBconn->prepare("select * from students");
$getStudents->execute();
$result=$getStudents->fetchAll();
echo "<pre/>"; 
print_r($result);
 }
 
 function insertData(){
   $sqlQuery="insert into students (`id`,`name`,`course`,`batch`,`city`,`year`) values(null,'rockey','M.tech','night','chandigarh','3rd')";
 
   $student=$this->DBconn->prepare($sqlQuery);
   $result= $student->execute();
   if($result){
      echo "Data inserted";
   }else{
      echo "data is not inserted";
   }

 }

 function updatedata(){
  $sqlQuery="update students set
  name='Rajesh',
  course='digitalmarketing',
  batch='early moring',
  city='nyaagaon',
  year='final'
  where id = 9";

 $student=$this->DBconn->prepare($sqlQuery);
 $result=$student->execute();
 if($result){
   echo "data is update";
 }else{
   echo "data is not update";
 }

 }

 
 function deletedata(){
   $sqlQuery="delete from students where id = 8";

   $student=$this->DBconn->prepare($sqlQuery);
   $result=$student->execute();
   if($result){
      echo " Data is delete";
   }else{
      echo "Data is not delete";
   }

}


  function insertDataWithRequest($request){
   //print_r($request);

 $name=$request['name'];
 $course=$request['course'];
 $batch=$request['batch'];
 $city=$request['city'];
 $year=$request['year'];



$sqlQuery="insert into students (`id`,`name`,`course`,`batch`,`city`,`year`) values (null,'$name','$course','$batch','$city','$year')";
$student=$this->DBconn->prepare($sqlQuery);
$result=$student->execute();
if($result){
   echo "Data is inserted";
}else{
   echo "operation Failed";
}
 
   }
}
 
$student = new Student($conn);
//$student->getData();
//$student->insertData();
//$student->updatedata();
//$student->deletedata();



if(isset($_POST['name'])){
   $student->insertDataWithRequest($_POST);
}


?>  