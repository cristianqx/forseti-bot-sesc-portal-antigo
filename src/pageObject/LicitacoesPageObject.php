<?php
/**
 * Created by PhpStorm.
 * User: cristian.coelho
 * Date: 21/01/19
 * Time: 09:40
 */

namespace Forseti\Bot\Sesc\pageObject;
use Forseti\Bot\Sesc\parser\LicitacoesParser;
use GuzzleHttp\Client;

class LicitacoesPageObject extends AbstractPageObject
{


    public function getPage()
    {
        $response = $this->client->get("https://pregao.sescsp.org.br/WBCPublic/Publico//Mural/MuralPesquisa.aspx?");

        return new LicitacoesParser($response->getBody()->getContents());
    }

    public function postPage()
    {
        $parser = $this->getPage();

        $response = $this->client->request('POST', 'https://pregao.sescsp.org.br/WBCPublic/Publico//Mural/MuralPesquisa.aspx', [
            'form_params' => [
                '__VIEWSTATE' => $parser->viewState(),
                '__VIEWSTATEGENERATOR' => $parser->viewStateGenerator(),
                '__EVENTVALIDATION' => $parser->eventValidation(),
                'ctl00$ddlVisoes' => 18042,
                'ctl00$ddlTipo' => 18020,

            ]
        ]);

        return new LicitacoesParser($response->getBody()->getContents());
    }

}




