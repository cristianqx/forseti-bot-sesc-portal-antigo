<?php
/**
 * Created by PhpStorm.
 * User: cristian.coelho
 * Date: 30/01/19
 * Time: 12:58
 */

namespace Forseti\Bot\Sesc\iterator {


    class PesquisaLicitacaoIterator extends \ArrayIterator
    {
        public function current()
        {
            $current = $this->offsetGet($this->key()); // essa função pega o elemento atual do array

            return [
                'codigo' => $current['nCdProcesso'],
                'processo' => $current['sNrEdital'],
                'unidade_compradora' => $current['sNmEmpresa'],
                'unidade_compradora_fantasia' => $current['sNmApelido'],
                'objeto' => $current['sDsObjeto'],
                'data_inicial' => date_create()->setTimestamp($current['tDtInicial'] / 1000),
                'data_final' => date_create()->setTimestamp($current['tDtFinal'] / 1000),
                'modalidade' => $current['sNmModalidade'],
                'situacao' => $current['sDsSituacao'],
            ];
        }
    }
}