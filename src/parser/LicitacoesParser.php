<?php
/**
 * Created by PhpStorm.
 * User: cristian.coelho
 * Date: 21/01/19
 * Time: 10:05
 */

namespace Forseti\Bot\Sesc\parser;


class LicitacoesParser extends AbstractParser
{
    public function getHtmlTable()
    {
        return $this->crawler->filterXPath("//table[@id='tbMural']/tbody/tr[position()>1]");
    }

    public function getHtml()
    {
        return $this->crawler->html();
    }

    public function viewState()
    {
        return $this->crawler->filterXPath('//input[@id="__VIEWSTATE"]')->attr('value');
    }


    public function viewStateGenerator()
    {
        return $this->crawler->filterXPath('//input[@id="__VIEWSTATEGENERATOR"]')->attr('value');
    }

    public function eventValidation()
    {
        return $this->crawler->filterXPath('//input[@id="__EVENTVALIDATION"]')->attr('value');
    }


}