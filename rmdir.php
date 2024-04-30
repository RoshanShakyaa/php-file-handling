<?php 

if(file_exists("text files")){
    rmdir("text files");
}
else{
    echo "folder doesn't exist";
}
?>