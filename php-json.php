<?php
// $user=["name"=>"sky","age"=>25,"email"=>"abc@gamil.com"];
// $userJson= json_encode($user);
// // print_r ($user);

// echo $userJson;

$data = '{"name":"sky","age":30,"email":"sky@abc.com"}';
$dataArray = json_decode($data,true);
print_r($dataArray);

?>