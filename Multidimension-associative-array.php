<?php

$users=[
[1,"sam","sam@gmail.com"],
[2,"altman","ALtman@gmail.com"],
[3,"skybags","sky@gmail.com"],
[4,"safari","safatri@gmail.com"],
[5, "lenovo","lenovo@gmail.com"]

];

echo "<table border=1>";
echo "<tr>";
foreach($users as $user){
    echo "<tr>";
    foreach($user as $item){
echo "<td>";
        echo $item;
        echo "</td>";
       
    }
}
echo "</tr>";
echo "</table>";


?>