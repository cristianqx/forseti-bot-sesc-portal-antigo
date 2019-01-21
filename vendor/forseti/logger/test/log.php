<?php

require_once __DIR__ . '/../vendor/autoload.php';

$logger = new \Forseti\Logger\Logger('teste');
$logger->info('mostrar na tela');