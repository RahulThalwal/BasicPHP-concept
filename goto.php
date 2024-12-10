<?php
// $num=11;
// echo "before condition" ;
// echo "<hr/>";
// if($num==11){
//     goto jump;
// }

// $name= "infinity";
// echo $name;
// echo "<hr/>";
// jump:
// echo "statment is humped line on the num 15";



// for($i=0;$i<=10;$i++){
//     echo $i;
//     echo "<br>";
//     if ($i==5){
//         goto jump;
//     }
// }
// jump:
// echo "Here you are jumped";

// $i=0    ;
// while ($i<=10){
// echo "$i";
//   $i++;
// if ($i==5){
//     goto jump;
// }
// }

// jump:
// echo "here are we jumped";
// echo "<hr/>" ;

 $j=0;

do{
    echo $j;
    $j++;
    echo "<br>";

  if($j==8){
    goto jump;
  }

}while($j<=10);

jump:
echo "here are we jumped form in do while loop";


?>