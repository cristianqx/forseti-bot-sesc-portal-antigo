<?php

namespace Forseti\Logger;

final class Env
{

    /**
     * @param string $key
     * @param null $default
     * @return null
     */
    public static function get($key, $default = null)
    {
        $value = getenv($key);
        $value = (trim(strtolower($value)) === 'true') ? true : $value;
        $value = (trim(strtolower($value)) === 'false') ? false : $value;
        return $value ?: $default;
    }
}