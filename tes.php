<?php

$curl = curl_init('http://testing-ground.scraping.pro/blocks');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
$page = curl_exec($curl);
if (curl_errno($curl)) // check for execution errors
{
    echo 'Scraper error: ' . curl_error($curl);
    exit;
}
curl_close($curl);

$DOM = new DOMDocument;

libxml_use_internal_errors(true);

if (!$DOM->loadHTML($page)) {
    $errors = "";
    foreach (libxml_get_errors() as $error) {
        $errors .= $error->message . "<br/>";
    }
    libxml_clear_errors();
    print "libxml errors:<br>$errors";
    return;
}
$xpath = new DOMXPath($DOM);

$case1 = $xpath->query('//*[@id="case1"]')->item(0);
$query = 'div[not (@class="ads")]/span[1]';
$entries = $xpath->query($query, $case1);
foreach ($entries as $entry) {
    echo " {$entry->firstChild->nodeValue} <br /> ";
}
