<?php
error_reporting(E_ERROR | E_PARSE);
$file = 'count.txt';
$count = strval(file_get_contents($file))+1;
file_put_contents($file, $count);
echo("You are visitor number:".$count);
?>