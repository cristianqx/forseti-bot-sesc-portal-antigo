<?php
/**
 * Created by PhpStorm.
 * User: cristian.coelho
 * Date: 01/02/19
 * Time: 08:58
 */

namespace Forseti\Bot\Sesc\pageObject;


use Forseti\Bot\Sesc\parser\DetalhesResumoParser;


class DetalhesResumoPageObject extends AbstractPageObject
{
    // Pega resumo da pagina de detalhes do Portal //

    public function getDetails($idPortal)
    {
        $response = $this->client->request('POST','https://pregao.sescsp.org.br/portal/WebService/Servicos.asmx/PesquisarProcessoDetalhes',[
            'json' =>
                [
                "dtoProcesso" => [
                    "nCdProcesso" => $idPortal,
                    "nCdModulo" => 18,
                    "nCdSituacao" => 2,
                    "tmpTipoMuralProcesso" => 0,
                    "dtoIdioma" => ["nCdIdioma" => 1]
                    ]
                ]
        ]);

<<<<<<< HEAD:src/pageObject/DetalhesResumoPageObject.php
        return new DetalhesResumoParser($response->getBody()->getContents());
=======
        return new DetalhesLicitacaoParser($response->getBody()->getContents());
>>>>>>> 8097debf25f4eff1c8a5709852c368eeae17ce32:src/pageObject/DetalhesLicitacaoPageObject.php
    }
}