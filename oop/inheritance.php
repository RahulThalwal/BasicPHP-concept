<?php

class UserAuth{


function login($userType){
 echo "$userType logged  in";
}
}

class Students extends UserAuth{

}

class Teachers extends UserAuth{

}

$s1= new Students();
$s1-> login("students");

echo "<br/>";
$s1->login("Teacher");


?>