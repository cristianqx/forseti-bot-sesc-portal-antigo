<?php
/**
 * Created by PhpStorm.
 * User: cristiancoelho
 * Date: 07/02/19
 * Time: 11:51
 */

namespace Forseti\Bot\Sesc\iterator;


class DetalhesItemIterator extends \ArrayIterator
{
    public function current()
    {
        $current = $this->offsetGet($this->key());

        return [
            'codigo' => $current['nCdItem'],
            'modalidade' => $current['nCdModulo'],
        ];
    }
}