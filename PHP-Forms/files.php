<?php

 
if($_FILES ['fileupload']){
 $path = $_FILES['fileupload']['name'];
 $upload_path ="./uploads/".$path;
if( move_uploaded_file($_FILES['fileupload']['tmp_name'], $upload_path ) ){
    echo "file uploaded";
} else{
    die("No file found");  
}
} else{
    die("No file found");
}

?>