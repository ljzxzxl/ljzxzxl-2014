<?php
var_dump($hashstr = hash("sha256", fopen("test2.docx"), true));
echo '<br/>';
echo base64_encode($hashstr);
?>