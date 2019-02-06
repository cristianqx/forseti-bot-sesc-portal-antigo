<?php
/**
 * Created by PhpStorm.
 * User: cristian.coelho
 * Date: 04/02/19
 * Time: 11:24
 */

namespace Forseti\Bot\Sesc\pageObject;

use GuzzleHttp\Client;

use Forseti\Bot\Sesc\parser\DetalhesItensLicitacaoParser;

class DetalhesItensLicitacaoPageObject extends AbstractPageObject
{
    public function getDetailsItem()
    {


        $response = $this->client->request('POST','https://pregao.sescsp.org.br/portal/WebService/Servicos.asmx/PesquisarProcessoDetalhesItem',[
            'json' =>
                [
                    "dtoProcesso" => [
                        "nCdItem" => 9529,
                        "nCdModulo" => 18,
                        "dtoIdioma" => ["nCdIdioma" => 1]]]

        ]);
        return new DetalhesItensLicitacaoParser($response->getBody()->getContents());
    }
}