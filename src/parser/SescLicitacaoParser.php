<?php
/**
 * Created by PhpStorm.
 * User: cristian.coelho
 * Date: 30/01/19
 * Time: 12:54
 */

namespace Forseti\Bot\Sesc\parser;
use Forseti\Bot\Sesc\iterator\SescLicitacaoIterator;


class SescLicitacaoParser extends AbstractJsonParser
{
    public function getIterator()
    {
        return new SescLicitacaoIterator($this->getJsonAsArray());
    }
}