<?php
/**
 * Created by PhpStorm.
 * User: cristian.coelho
 * Date: 05/02/19
 * Time: 09:09
 */

namespace Forseti\Bot\Sesc\pageObject;
use Forseti\Bot\Sesc\parser\ResumoEditalParser;

class ResumoEditalPageObject extends AbstractPageObject
{
    public function getResumoEdital($idPortal)
    {
       $response = $this->client->request('POST','https://pregao.sescsp.org.br/portal/WebService/Servicos.asmx/PesquisarResumoEdital',[
            'json' =>
            [
                "dtoProcesso" => [
                    "nCdProcesso" => $idPortal,
                    "nCdOrigem" => 2454,
                    "nCdModulo" => 18,
                    "dtoIdioma" => ["nCdIdioma" => 1 ],
                    "sGMT" => "-02:00"]
            ]
        ]);

        return new ResumoEditalParser($response->getBody()->getContents());
    }
}