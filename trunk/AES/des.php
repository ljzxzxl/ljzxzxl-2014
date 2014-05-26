<?php
class PhpDes {
 
    /**
     * 解密
     * @param string $key 密匙
     * @param string $encrypted 密文
     * @return string $decrypted 解密后密文
     */
    public static function decode($key, $encrypted) {
 
        $encrypted = base64_decode($encrypted);              //对使用 MIME base64 编码的数据进行解码
        $td = mcrypt_module_open(MCRYPT_DES, '', 'ecb', ''); //选择要使用的模式DES
        $iv_size = mcrypt_enc_get_iv_size($td);              //计算打开IV算法的大小
        $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);       //从随即源创建一个初始化向量（IV）
        mcrypt_generic_init($td, $key, $iv);                 //初始化加密所需要的缓冲区
        $decrypted = mdecrypt_generic($td, $encrypted);      //解密数据
        mcrypt_generic_deinit($td);                          //清空所有的缓冲区，但不关闭模块
        mcrypt_module_close($td);                            //关闭mcrypt模块
        return $decrypted;
    }
 
    /**
     * 加密
     * @param string $key 密匙
     * @param string $text 明文
     * @return string 加密后密文
     */
    public static function encode($key, $text) {
 
        $td = mcrypt_module_open(MCRYPT_DES, '', 'ecb', ''); //选择要使用的模式DES
        $iv_size = mcrypt_enc_get_iv_size($td);              //计算打开IV算法的大小
        $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);       //从随即源创建一个初始化向量（IV）
        mcrypt_generic_init($td, $key, $iv);                 //初始化加密所需要的缓冲区
        $encrypted = mcrypt_generic($td, $text);             //加密数据
        mcrypt_generic_deinit($td);                          //清空所有的缓冲区，但不关闭模块
        mcrypt_module_close($td);                            //关闭mcrypt模块
        return base64_encode($encrypted);                    //使用 MIME base64 对数据进行编码
    }
 
}
 
$key = 'Hero';
$text = 'admin';
echo $secorte = PhpDes::encode($key, $text);
echo '<br>';
echo PhpDes::decode($key, $secorte);
echo '<br>';
$string = PhpDes::encode($key, file_get_contents("test.jpg"));
echo file_put_contents("1.jpg",$string);
$string = PhpDes::decode($key, $string);
echo file_put_contents("2.jpg",$string);
?>