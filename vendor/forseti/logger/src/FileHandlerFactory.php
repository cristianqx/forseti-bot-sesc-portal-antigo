<?php
/**
 * Created by PhpStorm.
 * User: diego-souza
 * Date: 08/08/18
 * Time: 14:53
 */

namespace Forseti\Logger;

use Monolog\Handler\StreamHandler;

final class FileHandlerFactory
{
    public static function create()
    {
        if($file = ENV::get('FORSETI_LOGGER_FILE')) {

            $stream = new StreamHandler(
                $file,
                Env::get('FORSETI_LOGGER_FILE_LEVEL', Logger::DEBUG)
            );

            $stream->setFormatter(LineFormatterFactory::create());
            return $stream;
        }
    }
}