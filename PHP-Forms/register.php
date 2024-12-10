<?php

// print_r($_REQUEST);

$_REQUEST['dummy'] = "test";

if($_REQUEST){
     foreach($_REQUEST as  $key => $data){
        echo $key. " is ". $data;
        echo "<br/>";
    
    
    };
};




?>