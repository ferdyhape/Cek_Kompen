<?php

use PHPCrypter\Encryption\Encryption;

$nim = $_POST["nim"];
require 'vendor/autoload.php';
$pw = "bzPRFhrpKj/5Glzr/V5Rj7uCLIrJdVexOi1j04mHiUGzQWEt7Sy2sPK2FExZ+XneGfmI11hx/+2XiKQAi39z8w==";

$data = array(
    "username" => "2031710028",
    "password" => Encryption::decrypt($pw)
);

$ch = curl_init();
CURL_SETOPT($ch, CURLOPT_URL, "http://kompen.jti.polinema.ac.id/login/login_mahasiswa");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);

// curl_close($ch);


curl_setopt($ch, CURLOPT_URL, 'http://kompen.jti.polinema.ac.id/mahasiswa/cekKompen?nim=' . $nim); // set url for next request
$result = curl_exec($ch);

echo $result;
