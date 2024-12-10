<?php

include("./config.php");

$getstudents= $conn->prepare("SELECT * FROM students");
$getstudents->execute();
$students= $getstudents->fetchAll();
echo "<pre>";
// print_r($students);



echo "<table border='1' >";
echo "<tr>
 <th>Name</th> 
 <th>Course</th>
 <th>Session</th>
 <th>City</th>
 <th>Year</th>
 </tr>";

foreach($students as $student){

    echo " 
 <td>"  .$student['name']."  </td>
 <td>" .$student['course']."</td>
<td>" .$student['batch']."</td>
<td>" .$student['city']."</td>
<td>" .$student['year']."</td>

    </tr>";
   
}
echo "</table>";

?>