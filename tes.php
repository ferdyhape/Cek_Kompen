<?php

use PHPCrypter\Encryption\Encryption;
//You can define your key any where you want

//define("ENC_TOKEN_PATH", "your/dir/example");

require 'vendor/autoload.php';
// Encrypt the text "The only limit of a developer is his imagination"
$encrypt = Encryption::encrypt("sudoku3108");

//You store the encrypted data in a file or in a database, or any where you can reuse it
//After you want to use it again on your site
//Get your text: $encrypt and then decrypt it
$decrypt = Encryption::decrypt($encrypt);

echo $encrypt . "<br>";
echo $decrypt;

//All right !
