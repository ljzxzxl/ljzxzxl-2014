<?php
$cfile=$_GET["f"];

//提交修改
if(isset($_POST['submit'])) {
	$copy = $_POST['copy'];
	$cfilehandle=fopen($cfile,"wb");
	flock($cfilehandle, 2);
	fputs($cfilehandle,stripslashes(str_replace("\x0d\x0a", "\x0a", $copy)));
	fclose($cfilehandle);
}

//修改界面
$cfilehandle=fopen($cfile,"r");
$editfile=fread($cfilehandle,filesize($cfile));
fclose($cfilehandle);
header("Content-Type: text/html; charset=".chkCode($editfile));
echo "<form method='post' action='txt_online.php?f=test.txt'>";
echo "<textarea cols='100' rows='30' name='copy' id='code'>";
echo $editfile;
echo "</textarea>";
echo "<p><input type='submit' value='Submit' name='submit' /><input type='reset' value='Reset'></form>";

//判断字符编码
function chkCode($string){
 $code = array('UTF-8','GBK','GB18030','GB2312');
 foreach($code as $c){
  if( $string === iconv('UTF-8', $c, iconv($c, 'UTF-8', $string))){
   return $c;
  }
 }
 return false;
}

//$file1 = 'test1.txt';
//$str1 = file_get_contents($file1);
//echo chkCode("$str1");
?>