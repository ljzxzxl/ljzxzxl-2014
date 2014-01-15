<?php
if($_GET['format'] == 'pdf'){
	header("Content-type: application/pdf");
	echo readfile("test.pdf");
}elseif($_GET['format'] == 'json'){
	//echo 123;exit;
	header("Content-type: text/javascript");
	//echo json_encode(readfile("view.pdf"));
	//echo file_get_contents("http://devaldi.com/annotations/php/services/view.php?doc=UK_Investment_Fund.pdf&format=json&page=10");
	echo '[]';
}
?>