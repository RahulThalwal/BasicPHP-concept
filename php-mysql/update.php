<?php

include ("./config.php");
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $getStudent=$conn->prepare("select * from students where id='$id'");
    $getStudent->execute();
    $student = $getStudent->fetchAll();

     $name=$student[0]['name'];
     $course=$student[0]['course'];
     $batch= $student[0]['batch'];
     $city=$student[0]['city'];
     $year= $student[0]['year'];
}

?>

<form action="" method="post">

<input type ="text" value="<?php echo $name ?>" name="name"/>
<br/><br/>
<input type="text" value= "<?php echo $course ?>" name="course"/>
<br/><br/>
<input type="text" value ="<?php echo $batch ?>" name="batch"/>
<br/><br/>
<input type ="text" value ="<?php echo $city ?>" name="city"/>
<br/><br/>
<input type ="year" value ="<?php echo $year ?>" name="year"/>
<br/><br/>
<button value=" <?php echo $id; ?>" name="update">Update</button>
</form>

<?php
 if(isset($_POST['update']))
{
   echo $id= $_POST['update'];
 echo $name=$_POST['name'];
 echo $course=$_POST['course'];
 echo $batch=$_POST['batch'];
 echo $city=$_POST['city'];
echo $year=$_POST['year'];

   $updateStudents=$conn->prepare("update students set name='$name',
   course='$course',
   batch='$batch',
   city='$city',
   year='$year'
   where id='$id' ");

 if($updateStudents->execute()){
   header('location:delete.php');
 }else{
   echo "update failed";
 }

  
 }




// echo $updateStudents->execute();



?>