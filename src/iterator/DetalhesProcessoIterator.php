<?php
/**
 * Created by PhpStorm.
 * User: cristian.coelho
 * Date: 04/02/19
 * Time: 11:37
 */

namespace Forseti\Bot\Sesc\iterator;


class DetalhesProcessoIterator extends \ArrayIterator
{
    public function current()
    {
        $current = $this->offsetGet($this->key());

        return [
            'codigo' => $current['nCdProcesso'],

        ];
    }
}