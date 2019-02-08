<?php

require_once 'vendor/autoload.php';

use GuzzleHttp\Client;
use Forseti\Bot\Sesc\pageObject\DetalhesLicitacaoPageObject;


$guz = new Client(['cookies' => true, 'verify' => false]);

// $po = new SescLicitacaoPageObject($guz);
$po = new DetalhesLicitacaoPageObject($guz);

$parser = $po->getDetails(2442)->getIterator();

print_r($parser);