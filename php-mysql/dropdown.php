<?php

include ("./config.php");


$getstudent= $conn->prepare("SELECT id,name FROM students");
$getstudent->execute();
$studentData=$getstudent->fetchAll();



echo "<select>";
echo "<option>Select</option>";
foreach($studentData as $student){
    echo "<option value=$student[id]>$student[name]</option>";
}




echo "</select>";

?>