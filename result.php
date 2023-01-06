<?php

session_start();
$finalresult = $_SESSION['finalresult'];

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
