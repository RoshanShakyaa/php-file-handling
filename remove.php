<?php 
$file = "wompwompboob.txt";

if(file_exists($file)){
    unlink("$file");
}

else{
    echo "file doesn't exist";
}


?>