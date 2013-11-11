<?php
$xml = '<CheckFileInfo><BaseFileName>test2.docx</BaseFileName><OwnerId>admin</OwnerId><SHA256>nXOGnMuT5xeNYZNl9coJxiOjn2XqzPmG9SfrjiTxE9Q=</SHA256><Size>12964</Size><Version>+17lwXXN0TMwtVJVs4Ll+gDHEIO06l+hXK6zWTUiYms=</Version><hash>System.Byte[]</hash></CheckFileInfo>';

$array = json_decode(json_encode(simplexml_load_string($xml)),TRUE);
print_r($array);

?>