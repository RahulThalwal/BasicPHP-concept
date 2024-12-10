<?php


$hostname="localhost";
$username="root";
$password=null;
$database="college";


$conn = new mysqli("$hostname","$username","$password","$database");

if($conn->connect_error){
    die("connection error".$conn->connect_error);
}


echo "connection sucess";

"<br/>";
"<br/>";


$result=$conn->query("show tables")->fetch_all();
print_r ($result);


// $result=$conn->query("show tables")->fetch_all();
// print_r ($result);


?>