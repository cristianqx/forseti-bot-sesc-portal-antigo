<?php
/**
 * Created by PhpStorm.
 * User: cristiancoelho
 * Date: 07/02/19
 * Time: 11:49
 */

namespace Forseti\Bot\Sesc\parser;
use Forseti\Bot\Sesc\iterator\DetalhesItemIterator;

class DetalhesItemParser extends AbstractJsonParser
{
    public function getIterator()
    {
        return new DetalhesItemIterator($this->getJsonAsArray());
    }
}