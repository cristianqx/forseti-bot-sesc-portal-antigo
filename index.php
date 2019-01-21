<?php

require_once 'vendor/autoload.php';
use Forseti\Bot\Sesc\pageObject\LicitacoesPageObject;
use GuzzleHttp\Client;

$po = new LicitacoesPageObject(new Client([
    'cookies' => true
]));


$parser = $po->postPage();

var_dump(iconv("UTF-8","ISO-8859-1//TRANSLIT",$parser->getHtml()));


