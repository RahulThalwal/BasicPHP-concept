<?php

function autoloader($class){
include($class.'.php');
}

spl_autoload_register('autoloader');


$t1 = new teacher();

$s1 = new student();
$m1 = new managment()

?>