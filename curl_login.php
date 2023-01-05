<?php

$nim = $_POST["nim"];

$dataUser = array(
    "username" => "2031710028",
    "password" => "sudoku3108"
);

$ch = curl_init();
CURL_SETOPT($ch, CURLOPT_URL, "http://kompen.jti.polinema.ac.id/login/login_mahasiswa");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $dataUser);
curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);

// curl_close($ch);


curl_setopt($ch, CURLOPT_URL, 'http://kompen.jti.polinema.ac.id/mahasiswa/cekKompen?nim=' . $nim); // set url for next request
$result = curl_exec($ch);

echo $result;
