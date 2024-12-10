<?php



if(isset($_FILES['file'])){
$file=$_FILES['file']['tmp_name'];
$myfile= fopen($file,"r") or die("unable to resd the file");
echo fread($myfile,filesize($file));
fclose($myfile);
}

?>

<form action="" method ="post" enctype="multipart/form-data">
<br/>
<br/>

<input type="file" name ="file">
<br/>
<br/>

<button> Read file</button>
</form>