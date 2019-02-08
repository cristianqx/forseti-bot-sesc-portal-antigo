<?php
/**
 * Created by PhpStorm.
 * User: cristian.coelho
 * Date: 05/02/19
 * Time: 09:20
 */

namespace Forseti\Bot\Sesc\iterator;


class ResumoEditalIterator extends \ArrayIterator
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
