<?php

require_once 'vendor/autoload.php';

use GuzzleHttp\Client;
use Forseti\Bot\Sesc\pageObject\DetalhesItemPageObject;


$guz = new Client(['cookies' => true, 'verify' => false]);

$po = new DetalhesItemPageObject($guz);

$parser = $po->getDetailsItem(0000);

print_r($parser);

