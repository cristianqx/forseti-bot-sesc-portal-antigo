<?php
/**
 * Created by PhpStorm.
 * User: cristian.coelho
 * Date: 01/02/19
 * Time: 10:05
 */

namespace Forseti\Bot\Sesc\iterator;

class DetalhesResumoIterator extends \ArrayIterator
{
    public function current()
    {
        $current = $this->offsetGet($this->key());

        return [
            'codigo' => $current['nCdProcesso'],
            'modalidade' => $current['sNmModalidade'],
            'situacao' => $current['sDsSituacao'],

        ];


    }

}
