<?php

require_once 'vendor/autoload.php';
use GuzzleHttp\Client;
use Forseti\Bot\Sesc\pageObject\ResumoEditalPageObject;


$guz = new Client(['cookies' => true, 'verify' => false]);

$po = new ResumoEditalPageObject($guz);

var_dump($po->getResumoEdital(2442)->getJsonAsArray());

/*$licitacoes = $po->getResumoEdital()->getIterator();

foreach ($licitacoes as $licitacao) {
    $licitacoes = $po->getResumoEdital();

    var_dump($licitacoes->getIterator());
}*/