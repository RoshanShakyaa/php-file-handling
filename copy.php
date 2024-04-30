<?php 

$file = "womp.txt";

if(file_exists($file)){
    echo readfile("womp.txt");
    copy($file, "newwomp.txt");
}
else{
    echo "file doesn't exist";
}

?>