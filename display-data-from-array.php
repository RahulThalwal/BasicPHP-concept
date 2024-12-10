<?php

$users =[
    [1,"sky","sky@gmail.com"],
    [2,"bags","sky@gmail.com"],
    [3,"safari","Safari@gmail.com"]
];

echo "<table border=1>";
echo "<tr>";
for($i=0;$i<count($users);$i++){
    echo "<tr>";
    for($j=0;$j<count($users[$i]);$j++){
        echo "<td>";
        echo $users[$i][$j];
       echo "</td>";
    }
}
echo "</tr>";


echo "</table>"




?>