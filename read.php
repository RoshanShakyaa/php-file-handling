<?php 

$file = fopen("womp.txt","r");
echo fread($file, 10);
?>