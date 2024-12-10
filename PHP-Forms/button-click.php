<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Button-click function</title>
</head>
<body>
<h1>Here we are working on click function</h1>    

<form action="" method="get">
<button name="btn" value="btn1"> Click Me!! </button>
</form>

</body>
</html>
<?php
if(isset($_GET['btn'])){
 test();
}
function test(){
    echo "you click perfectly";
} 


?>