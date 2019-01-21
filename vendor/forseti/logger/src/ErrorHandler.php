<?php

namespace Forseti\Logger;

use Monolog\Handler\RavenHandler;

final class ErrorHandler
{
    private static $hasRegister = false;
    const ERROR_HANDLER_LOG_NAME = 'error.handler';

    public static function register(RavenHandler $ravenHandler)
    {
        if (self::$hasRegister === true) {
            return ;
        }

        $stream = StreamHandlerFactory::create();
        $stream->setFormatter(LineFormatterFactory::create());

        $errorHandlerLogger = new \Monolog\Logger(self::ERROR_HANDLER_LOG_NAME);
        $errorHandlerLogger->pushHandler($stream);
        $errorHandlerLogger->pushHandler($ravenHandler);

        \Monolog\ErrorHandler::register($errorHandlerLogger);
        self::$hasRegister = true;
    }
}