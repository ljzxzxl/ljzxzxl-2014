<?php
$a='application/vnd.ms-excel';
$b='app';
$c=explode($b,$a);
if(count($c)>1){
	echo "true";
}else{
	echo "false";
}
?>