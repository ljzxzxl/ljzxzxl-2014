<?php
$zip=new ZipArchive;
if($zip->open('test.zip',ZipArchive::OVERWRITE)===TRUE){
	$zip->addFile('test.jpg');//假设加入的文件名是1.txt，在当前路径下
	$zip->close();
}

if($zip->open('test.zip')===TRUE){
	$zip->extractTo('test');//假设解压缩到在当前路径下test文件夹内
	$zip->close();//关闭处理的zip文件
}
?>