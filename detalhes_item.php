<?php

require_once "vendor/autoload.php";
use GuzzleHttp\Client;
use Forseti\Bot\Sesc\pageObject\DetalhesItensLicitacaoPageObject;


$guz = new Client(['cookies' => true, 'verify' => false]);

$poDetalhesItem = new DetalhesItensLicitacaoPageObject($guz);

$licitacoes = $poDetalhesItem->getDetailsItem()->getIterator();



foreach ($licitacoes as $licitacao) {
    $poDetalhes = $poDetalhesItem->getDetailsItem();

    print_r($poDetalhes->getIterator());
}