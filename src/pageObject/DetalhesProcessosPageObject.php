<?php
/**
 * Created by PhpStorm.
 * User: cristian.coelho
 * Date: 04/02/19
 * Time: 11:24
 */

namespace Forseti\Bot\Sesc\pageObject;

use GuzzleHttp\Client;

use Forseti\Bot\Sesc\parser\DetalhesProcessoParser;

class DetalhesProcessosPageObject extends AbstractPageObject
{
    public function getDetailsItem()
    {

        $response = $this->client->request('POST','https://pregao.sescsp.org.br/portal/WebService/Servicos.asmx/PesquisarProcessoDetalheItemProduto',[
            'json' =>
                [
                    "dtoProcesso" => [
                        "nCdProcesso" => 2461,
                        "nCdModulo" => 18,
                        "nCdLote"=> 0,
                        "nCdSituacao" => 2,
                        "dtoIdioma" => ["nCdIdioma" => 1]]]

        ]);

        return new DetalhesProcessoParser($response->getBody()->getContents());
    }
}