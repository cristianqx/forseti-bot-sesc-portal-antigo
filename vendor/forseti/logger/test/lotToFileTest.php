<?php

require_once __DIR__ . '/../vendor/autoload.php';

putenv('FORSETI_LOGGER_FILE='. __DIR__ . '/resources/log_de_test.log');
putenv('FORSETI_LOGGER_FILE_LEVEL=' . \Monolog\Logger::INFO);
putenv('FORSETI_LOGGER_DATEFORMAT=' . 'Y-m-d H:i:s');
putenv('FORSETI_LOGGER_FORMAT=' . "[%datetime%] %channel%.%level_name%: %message% %context% %extra%\n");



$logger = new \Forseti\Logger\Logger('TesteNoArquivo');

$logger->debug('DEBUG');
$logger->info('INFO');
$logger->notice('NOTICE');
$logger->warning('WARNING');
$logger->error('ERROR');
$logger->critical('CRITICAL');
$logger->alert('ALERT');
$logger->emergency('EMERGENCY');
