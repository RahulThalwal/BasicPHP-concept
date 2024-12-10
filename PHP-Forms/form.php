<?php

print_r($_POST);

 if(isset($_POST['name'])){
    echo "<br/>";
    echo "User name is ". $_POST['name'];
    echo "<br/>";
    echo "User email is ", $_POST['email'];
    echo "<br/>";
 }

?>