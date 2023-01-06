<?php
session_start();

$nim = $_POST["nim"];
$data = array(
    "username" => "2031710028",
    "password" => "xxxxxxxxxx"
);

$ch = curl_init();
CURL_SETOPT($ch, CURLOPT_URL, "http://kompen.jti.polinema.ac.id/login/login_mahasiswa");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);

curl_setopt($ch, CURLOPT_URL, 'http://kompen.jti.polinema.ac.id/mahasiswa/cekKompen?nim=' . $nim); // set url for next request
$finalresult = curl_exec($ch);

$_SESSION['finalresult'] = $finalresult;

header('location: result.php');
