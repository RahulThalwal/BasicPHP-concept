<?php

$users = [
    [1,"sky","chandigarh"],
    [2,"bag","Mohali"],
    [3,"safari","Panchukla"]
];

// foreach ($users as $x) {

// echo "<pre>";
// print_r($users);
// echo "<pre>;
// "


for($i=0;$i<count($users);$i++){
   
    for($j=0;$j<count($users[$i]);$j++){
        echo $users[$i][$j];
        echo "<br/>";
    }
}

?>