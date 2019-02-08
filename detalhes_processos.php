<?php

require_once "vendor/autoload.php";
use GuzzleHttp\Client;
use Forseti\Bot\Sesc\pageObject\DetalhesProcessosPageObject;


$guz = new Client(['cookies' => true, 'verify' => false]);

$poDetalhesItem = new DetalhesProcessosPageObject($guz);

$licitacoes = $poDetalhesItem->getDetailsItem()->getIterator();

foreach ($licitacoes as $licitacao) {
    $poDetalhes = $poDetalhesItem->getDetailsItem();

    print_r($poDetalhes->getIterator());
}

