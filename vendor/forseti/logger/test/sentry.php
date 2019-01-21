<?php

require_once __DIR__ . '/../vendor/autoload.php';

putenv('FORSETI_SENTRY_DNS=https://5e8b5929ee114897bc5fed17d54fbb34:2cda421e43384bed85c1db7b7aca17b7@sentry.io/175458');
putenv('FORSETI_SENTRY_LOGGER_LEVEL=' . Monolog\Logger::ERROR);
putenv('FORSETI_SENTRY_CURL_METHOD=exec');

for($i = 0; $i<=1000; $i++) {
    $logger = new \Forseti\Logger\Logger('teste1'.$i);
    $logger->info('info 1'.$i);

    $logger2 = new \Forseti\Logger\Logger('teste2'.$i);
    $logger2->info('info 2'.$i);

    $logger2 = new \Forseti\Logger\Logger('teste3'.$i);
    $logger2->info('info 3'.$i);
}

throw new Exception('sentry error ' . date('Y-m-d H:i:s'));