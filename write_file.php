<?php

if(isset($_POST['filename'])){
    $fileName="files/".$_POST['filename'];
    $content=$_POST['content'];
    $file = fopen($fileName,"w") or die("unable to create the file");
    fwrite($file,$content);
    fclose($file);
    echo "file created";

}

?>
<form action="" method="POST">

 <input type="text" placeholder="Enter you file name" name="filename">
 <br/>
 <br/>
 <textarea name="content" placeholder="Enter file content"></textarea>
 <br/>
<br/>
<button>Create File </button>

</form>
