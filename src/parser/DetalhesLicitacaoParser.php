<?php
/**
 * Created by PhpStorm.
 * User: cristian.coelho
 * Date: 01/02/19
 * Time: 10:14
 */

namespace Forseti\Bot\Sesc\parser;
use Forseti\Bot\Sesc\iterator\DetalhesLicitacaoIterator;


class DetalhesLicitacaoParser extends AbstractJsonParser
{
    public function getIterator()
    {
        return new DetalhesLicitacaoIterator($this->getJsonAsArray());
    }
}