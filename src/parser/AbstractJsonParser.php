<?php
/**
 * Created by PhpStorm.
 * User: cristian.coelho
 * Date: 30/01/19
 * Time: 12:48
 */

namespace Forseti\Bot\Sesc\parser;


abstract class AbstractJsonParser
{
    private $json;

    public function __construct($json)
    {
        $this->json = $json;
    }

    public function getJsonAsArray()
    {
        return json_decode($this->json, true) ['d'];
    }

}



