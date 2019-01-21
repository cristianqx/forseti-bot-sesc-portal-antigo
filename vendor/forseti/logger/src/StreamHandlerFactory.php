<?php

namespace Forseti\Logger;

use Monolog\Handler\StreamHandler;

final class StreamHandlerFactory
{

    /**
     * @return StreamHandler
     */
    public static function create()
    {
        $stream = new StreamHandler(
            Env::get('FORSETI_LOGGER_STREAM', 'php://stdout'),
            Env::get('FORSETI_LOGGER_LEVEL', Logger::INFO)
        );
        return $stream;
    }
}