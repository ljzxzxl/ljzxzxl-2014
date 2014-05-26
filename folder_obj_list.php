<?php
//http://hi.baidu.com/02jesson/item/768ce8159304183ee3f986cf

function get_allfiles($path,&$files) {
    if(is_dir($path)){
        $dp = dir($path);
        while ($file = $dp ->read()){
            if($file !="." && $file !=".."){
                get_allfiles($path."/".$file, $files);
            }
        }
        $dp ->close();
    }
    if(is_file($path)){
        $files[] =  $path;
    }
}
   
function get_filenamesbydir($dir){
    $files =  array();
    get_allfiles($dir,$files);
    return $files;
}
   
$filenames = get_filenamesbydir("html5");
//打印所有文件名，包括路径
foreach ($filenames as $value) {
    echo $value."<br />";
}
?>