<?php
$file = fopen("info.txt","r");
$i = 1;
while(!feof($file))
{
	if($i > 3)break;
    echo fgets($file).'<br/>';
	$i++;
}
fclose($file);
?>