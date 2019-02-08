<?php

require_once 'vendor/autoload.php';

use GuzzleHttp\Client;
use Forseti\Bot\Sesc\pageObject\DetalhesResumoPageObject;


    // Pega resumo da pagina de detalhes do Portal //

$guz = new Client(['cookies' => true, 'verify' => false]);

// $po = new PesquisaLicitacaoPageObject($guz);
$po = new DetalhesResumoPageObject($guz);

$parser = $po->getDetails(2461)->getIterator();

print_r($parser);