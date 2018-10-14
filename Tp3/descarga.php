<?php  
header("Content-disposition: attachment; filename: fecha.txt");
header("Content-type: MIME");
readfile("fecha.txt");
?>