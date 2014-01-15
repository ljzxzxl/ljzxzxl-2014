<?php
if($_GET['format'] == 'pdf'){
	header("Content-type: application/pdf");
	echo readfile("view.pdf");
}elseif($_GET['format'] == 'json'){
	header("Content-type: text/javascript");
	echo "[]";
}
?>