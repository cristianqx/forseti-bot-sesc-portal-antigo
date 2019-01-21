<?php

namespace Forseti\Logger;

use Monolog\Formatter\LineFormatter;
use Monolog\Handler\RavenHandler;

final class SentryHandlerFactory
{
    public static function create()
    {
        if (!($dns = Env::get('FORSETI_SENTRY_DNS'))) {
            return;
        }

        $client = new \Raven_Client($dns, [
            'timeout' => Env::get('FORSETI_SENTRY_TIMEOUT', 10),
            'curl_method' => Env::get('FORSETI_SENTRY_CURL_METHOD', 'sync'),
        ]);

        $handler = new RavenHandler($client);
        $handler->setLevel(Env::get('FORSETI_SENTRY_LOGGER_LEVEL', Logger::WARNING));
        $handler->setFormatter(new LineFormatter("%message% %context% %extra%\n"));

        ErrorHandler::register($handler);
        return $handler;
    }
}