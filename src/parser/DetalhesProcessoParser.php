<?php
/**
 * Created by PhpStorm.
 * User: cristian.coelho
 * Date: 04/02/19
 * Time: 11:36
 */

namespace Forseti\Bot\Sesc\parser;
use Forseti\Bot\Sesc\iterator\DetalhesProcessoIterator;


class DetalhesProcessoParser extends AbstractJsonParser
{
    public function getIterator()
    {
        return new DetalhesProcessoIterator($this->getJsonAsArray());
    }
}