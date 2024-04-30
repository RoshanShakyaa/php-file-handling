<?php 

$file = "wompwomp.txt";

if(file_exists($file)){
    rename("wompwomp.txt","wompwompboob.txt");
    echo "file renamed";
}
else{
    echo "File doesn't exist";
}

?>