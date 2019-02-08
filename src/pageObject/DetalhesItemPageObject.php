<?php
/**
 * Created by PhpStorm.
 * User: cristiancoelho
 * Date: 07/02/19
 * Time: 11:37
 */

namespace Forseti\Bot\Sesc\pageObject;
use Forseti\Bot\Sesc\parser\DetalhesItemParser;


class DetalhesItemPageObject extends AbstractPageObject
{
    public function getDetailsItem($idLote)
    {
      $response = $this->client->request('POST','https://pregao.sescsp.org.br/portal/WebService/Servicos.asmx/PesquisarProcessoDetalhesItem', [
          'json' => [
              "dtoProcesso" => [
                  "nCdItem" => $idLote,
                  "nCdModulo" => '18',
                  "dtoIdioma" => [
                      "nCdIdioma" => '1'
                  ]
              ]
          ]
        ]);

        return $response->getBody()->getContents();
        //return new DetalhesItemParser($response->getBody()->getContents());
    }

    public function teste()
    {
        $response = $this->client->request('POST','https://pregao.sescsp.org.br/portal/WebService/Servicos.asmx/CarregarControle', [
            "objParametros" => [
                "nCdItem" => '9689',
                "nCdModulo" => '18',
                "divDetalheItem" => 'divDetalheItem',
                "sNomeUserControl" => [
                    "nCdIdioma" => '1'
                ]
            ]
        ]);

    }
    //{objParametros:'{"nCdItem":9689,"nCdModulo":18,"divDetalheItem":"divDetalheItem"}', sNomeUserControl:'MuralDetalheItem'}
}