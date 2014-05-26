<?php
$string = "8aeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeer8aaaaaaaaaaaaaaaaaaaaaaadasd456asd456asd456asd456asd456asd456asd456asd456asd456asd456asd456asd456fasdf456456456456456456456456456456456456456456456456456456456456456456456456456456456456456456a56fs4s4s4s4s4s4s4s4s4s4s4s4s4s4dsdga133333333333333333333w8etw7q9999999999999999999a23s1dffffffffffffffffffffffffa456ssssssssssssdv2sdddddddddddddddddddf";
echo "字符串长度：";
echo strlen($string);
echo "<br/>gzcompress压缩后长度：";
echo strlen(gzcompress($string,9));
echo "<br/>gzencode压缩后长度：";
echo strlen(gzencode($string,9));
echo "<br/>gzdeflate压缩后长度：";
echo strlen(gzdeflate($string,9));
echo "<br/>gzinflate解压缩后长度：";
echo strlen(gzinflate(gzdeflate($string,9)));
echo "<br/>".gzinflate(gzdeflate($string,9));
?>