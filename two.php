<?php 
$file = "dsada.txt";
if(file_exists($file)){
    echo readfile("readme.txt");
}
else{
    echo "file does not exist";
}
?>