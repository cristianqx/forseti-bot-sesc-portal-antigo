<?php

require_once 'vendor/autoload.php';
use Forseti\Bot\Sesc\pageObject\LicitacoesPageObject;
use GuzzleHttp\Client;

$po = new LicitacoesPageObject(new Client([
    'cookies' => true
]));


$parser = $po->postPage()->getHtmlTable();


print_r($parser);



