<?php

/**
 * 统计程序代码行数脚本
 */

set_time_limit(0);

//计算行数
function countLines($file) {
       return count(file($file));
}
//递归遍历文件夹
function traverseDir($dir) {
       $lines = 0;
       $dir .= '/';
       if ($dh = opendir($dir)) {
               while (($file = readdir($dh)) !== false) {
                    if ($file != '.' && $file != '..') {
                           if (is_dir($dir.$file.'/')) {
                                  $lines += traverseDir($dir.$file);
                           }
                           else {
                                  $lines += countLines($dir.$file);
                           }
                    }
        }
        closedir($dh);
       }
       return $lines;
}

$dirName = 'sha256';
echo traverseDir($dirName);
?>