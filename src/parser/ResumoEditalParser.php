<?php
/**
 * Created by PhpStorm.
 * User: cristian.coelho
 * Date: 05/02/19
 * Time: 09:17
 */

namespace Forseti\Bot\Sesc\parser;
use Forseti\Bot\Sesc\iterator\ResumoEditalIterator;


class ResumoEditalParser extends AbstractJsonParser
{
    public function getIterator()
    {
        return new ResumoEditalIterator($this->getJsonAsArray());
    }
}