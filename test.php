<?php

/* read the PHP source code */
$source_code = file_get_contents("abc.php");

/* create the encrypted version */
$redistributable_key = blenc_encrypt($source_code, "abc_encoded.php");

/* read which is the key_file */
$key_file = ini_get('blenc.key_file');

/* save the redistributable key */
file_put_contents($key_file, $redistributable_key, FILE_APPEND);
?>