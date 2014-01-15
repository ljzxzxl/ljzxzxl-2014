<?php
include "./phpqrcode/phpqrcode.php";
$value=isset($_REQUEST['str'])?$_REQUEST['str']:'test';
$errorCorrectionLevel = "L";
$matrixPointSize = "5";
QRcode::png($value, false, $errorCorrectionLevel, $matrixPointSize, 1);
exit;
?>