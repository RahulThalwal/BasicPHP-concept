<?php

// final class Honda {
// }

// class cars extends Honda {
// }

// $car = new cars();


class Honda{
  function companyName(){
    echo "Honda";
  }
}

class Cars extends Honda{
    function companyName(){
        echo "Honda city";
      }
}

$car = new cars();
$car->companyName();


?>