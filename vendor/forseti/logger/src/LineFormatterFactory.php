<?php

namespace Forseti\Logger;

use Monolog\Formatter\LineFormatter;

final class LineFormatterFactory
{
    /**
     * @return LineFormatter
     */
    public static function create()
    {
        $lineFormatter = new LineFormatter(
            Env::get('FORSETI_LOGGER_FORMAT'),
            Env::get('FORSETI_LOGGER_DATEFORMAT', 'Y-m-d H:i:s.u'),
            false,
            true
        );

        return $lineFormatter;
    }
}