<?php
/**
 * Created by PhpStorm.
 * User: cristian.coelho
 * Date: 04/02/19
 * Time: 11:36
 */

namespace Forseti\Bot\Sesc\parser;
use Forseti\Bot\Sesc\iterator\DetalhesItensLicitacaoIterator;


class DetalhesItensLicitacaoParser extends AbstractJsonParser
{
    public function getIterator()
    {
        return new DetalhesItensLicitacaoIterator($this->getJsonAsArray());
    }
}