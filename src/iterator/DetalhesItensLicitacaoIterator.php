<?php
/**
 * Created by PhpStorm.
 * User: cristian.coelho
 * Date: 04/02/19
 * Time: 11:37
 */

namespace Forseti\Bot\Sesc\iterator;


class DetalhesItensLicitacaoIterator extends \ArrayIterator
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