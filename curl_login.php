<?php

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
// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

$result = curl_exec($ch);

curl_setopt($ch, CURLOPT_URL, 'http://kompen.jti.polinema.ac.id/mahasiswa/cekKompen?nim=' . $nim); // set url for next request

$finalresult = curl_exec($ch);

// echo $result;
$doc = new DOMDocument();
@$doc->loadHTML($finalresult);
$selector = new DOMXPath($doc);
$classname = "nav-item";
$nodes = $selector->query("//*[contains(@class, '$classname')]");

echo $nodes[15]->nodeValue . "<br>";
echo "===========================    <br>";
for ($i = 6; $i <= 30; $i++) {
    if ($i === 18 || $i === 27) {
        echo "===========================    <br>";
    };
    if ($i > 13 && $i < 19 || $i === 27) {
        continue;
    };

    echo $nodes[$i]->nodeValue . "<br>";
};
