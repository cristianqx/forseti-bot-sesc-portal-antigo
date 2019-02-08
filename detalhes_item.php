<?php

<<<<<<< HEAD
require_once 'vendor/autoload.php';

use GuzzleHttp\Client;
use Forseti\Bot\Sesc\pageObject\DetalhesItemPageObject;
=======
require_once "vendor/autoload.php";
use GuzzleHttp\Client;
use Forseti\Bot\Sesc\pageObject\DetalhesItensLicitacaoPageObject;
>>>>>>> 8097debf25f4eff1c8a5709852c368eeae17ce32


$guz = new Client(['cookies' => true, 'verify' => false]);

<<<<<<< HEAD
$po = new DetalhesItemPageObject($guz);

$parser = $po->getDetailsItem(0000);

print_r($parser);

=======
$poDetalhesItem = new DetalhesItensLicitacaoPageObject($guz);

$licitacoes = $poDetalhesItem->getDetailsItem()->getIterator();



foreach ($licitacoes as $licitacao) {
    $poDetalhes = $poDetalhesItem->getDetailsItem();

    print_r($poDetalhes->getIterator());
}
>>>>>>> 8097debf25f4eff1c8a5709852c368eeae17ce32
