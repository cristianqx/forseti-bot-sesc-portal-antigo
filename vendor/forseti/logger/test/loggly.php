<?php

require_once __DIR__ . '/../vendor/autoload.php';

putenv('FORSETI_LOGGLY_TOKEN=');
putenv('FORSETI_LOGGLY_LEVEL=' . \Monolog\Logger::INFO);


$logger = new \Forseti\Logger\Logger('Teste Loggly');

$logger->debug('Mensagem de Debug');
$logger->info('Mensagem de Info');
$logger->notice('Mensagem de Notice');
$logger->warning('Mensagem de Warning');
$logger->error('Mensagem de Error');
$logger->critical('Mensagem de Critical');
$logger->alert('Mensagem de Alert');
$logger->emergency('Mensagem de Emergency');