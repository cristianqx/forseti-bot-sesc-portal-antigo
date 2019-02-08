<?php

namespace Forseti\Logger;

class Logger extends \Monolog\Logger
{

    /**
     * Logger constructor.
     * @param string $class
     */
    public function __construct($class)
    {
        parent::__construct($class);
        $stream = StreamHandlerFactory::create();
        $stream->setFormatter(LineFormatterFactory::create());

        $this->pushHandler($stream);
        $this->useSentry();
        $this->useLoggly();
        $this->logToFile();
    }

    private function useSentry()
    {
        if ($handler = SentryHandlerFactory::create()) {
            $this->pushHandler($handler);
        }
    }

    private function useLoggly()
    {
        if ($handler = LogglyHandlerFactory::create()) {
            $this->pushHandler($handler);
        }
    }

    private function logToFile()
    {
        if ($handler = FileHandlerFactory::create()) {
            $this->pushHandler($handler);
        }
    }
}