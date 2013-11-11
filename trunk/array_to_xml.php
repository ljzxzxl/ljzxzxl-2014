<?php

// xml编码
function xml_encode($data, $encoding='utf-8', $root="root") {
    $xml = '<?xml version="1.0" encoding="' . $encoding . '"?>';
    $xml.= '<' . $root . '>';
    $xml.= data_to_xml($data);
    $xml.= '</' . $root . '>';
    return $xml;
}

function data_to_xml($data) {
    if (is_object($data)) {
        $data = get_object_vars($data);
    }
    $xml = '';
    foreach ($data as $key => $val) {
        is_numeric($key) && $key = "item id=\"$key\"";
        $xml.="<$key>";
        $xml.= ( is_array($val) || is_object($val)) ? data_to_xml($val) : $val;
        list($key, ) = explode(' ', $key);
        $xml.="</$key>";
    }
    return $xml;
}

$doc_arr = array();
$doc_arr['BaseFileName'] = 'word.doc';
$doc_arr['OwnerId'] = 'admin';
$doc_arr['SHA256'] = '3A1ctxiPdnYvVLoiHgZ2dffwf6fJD5Bk06E+zlSE+2Q=';
$doc_arr['Size'] = '35840';
$doc_arr['Version'] = 'GIYDCMRNGEYC2MJREAZDCORQGA5DKNZOGIZTQMBQGAVTAMB2GAYA====';

echo xml_encode($doc_arr);
?>