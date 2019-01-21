<?php

namespace Forseti\Logger;

use Monolog\Handler\LogglyHandler;

final class LogglyHandlerFactory
{
    public static function create()
    {
        if (!($dns = Env::get('FORSETI_LOGGLY_TOKEN'))) {
            return;
        }

        $level = Env::get('FORSETI_LOGGLY_LEVEL', Logger::WARNING);

        $handler = new LogglyHandler(Env::get('FORSETI_LOGGLY_TOKEN'), $level);

        return $handler;
    }
}