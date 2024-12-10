<form method="post" action="">

<input type="text" name="search" placeholder="Enter name for search">
<br/>
<br/>
<button>Search</button>
</form> 
<?php

include ('./config.php');
if(isset($_POST['search'])){
 $search= $_POST['search'];

 $student=$conn->prepare("select * from students where name ='$search'");

// To use like operator 
// $student=conn->prepare("select * from students where name like %search%"); it search the character from every where


$student->execute();
$result= $student->fetchAll();
echo "<table border='1' >";
foreach($result as $student){

    echo "<tr>
 <td>"  .$student['name']."  </td>
 <td>" .$student['course']."</td>
 <td>" .$student['batch']."</td>
 <td>" .$student['city']."</td>
 <td>" .$student['year']."</td>

    </tr>";
}
echo "</table>";

}

?>