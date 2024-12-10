<?php


setcookie("fruit","apple",time()+(86440));

if(isset($_COOKIE['fruit'])){

print_r($_COOKIE);
}else{
    echo "No cokoie found";
}
?>