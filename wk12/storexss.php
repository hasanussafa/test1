<?php
$myfile = fopen("storedxss.txt", "r") or die("sorry!");
echo fread($myfile,filesize("storedxss.txt"));
fclose($myfile);

?>