<?php

// echo "welcome to the";
// $arr = array('this','that', 'where');
// echo $arr[1];
// echo $arr[2];
// echo $arr[3];

$favcol = array(
    'rahul'=>'red',
    'rajesh'=>'pink', 8 =>'blue');

// echo $favcol['rahul'];
// echo "<br>";
// echo $favcol[8];

foreach ($favcol as $key => $value){
   echo "<br> My favorite color of  $key is $value";
}

?>