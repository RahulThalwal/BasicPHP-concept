

<?php

if(isset($_POST['user'])){
    class User{
     function getName($name){
            echo "User name is $name";
        }
    }

    $user = new user();
    $user->getName($_POST['user']);  // Here we have to always use  these value inside it. 

}else {
    ?>
  <form action="" method="post"> 

<input type="text" name="user" placeholder="Enter user name">
<br/>
<br/>
<button>Click Me! </button>

</form>
   <?php 
}
?>




