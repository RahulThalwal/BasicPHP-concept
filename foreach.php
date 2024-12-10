<?php

$users=["ram","shsyam","peter","tony"];

foreach($users as $i){

   

echo "<h1 style=color:yellow>" . $i . "</h1>";
echo "<br>";
if($i=="peter"){
    continue;
}
}


?>