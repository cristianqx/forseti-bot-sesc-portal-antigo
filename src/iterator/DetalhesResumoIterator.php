<?php
/**
 * Created by PhpStorm.
 * User: cristian.coelho
 * Date: 01/02/19
 * Time: 10:05
 */

namespace Forseti\Bot\Sesc\iterator;

<<<<<<< HEAD:src/iterator/DetalhesResumoIterator.php
class DetalhesResumoIterator extends \ArrayIterator
=======
class DetalhesLicitacaoIterator extends \ArrayIterator
>>>>>>> 8097debf25f4eff1c8a5709852c368eeae17ce32:src/iterator/DetalhesLicitacaoIterator.php
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
