<?php
/**
 * Created by PhpStorm.
 * User: cristian.coelho
 * Date: 01/02/19
 * Time: 11:39
 */

require_once 'vendor/autoload.php';

use GuzzleHttp\Client;
use Forseti\Bot\Sesc\pageObject\DetalhesLicitacaoPageObject;


$guz = new Client(['cookies' => true, 'verify' => false]);

// $po = new SescLicitacaoPageObject($guz);
$po = new DetalhesLicitacaoPageObject($guz);

$parser = $po->getDetails(2444)->getIterator();

print_r($parser);