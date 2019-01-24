<?php
/**
 * Created by PhpStorm.
 * User: cristian.coelho
 * Date: 21/01/19
 * Time: 10:05
 */

namespace Forseti\Bot\Sesc\parser;



use Forseti\Bot\Sesc\iterator\Iterator;

class LicitacoesParser extends AbstractParser
{
    public function getHtml()
    {
        $this->crawler->html();
    }

    public function getHtmlTable()
    {
//        return new Iterator($this->getHtml(),'//div[@id="ctl00_pesquisaDataGrid_dtgPesquisa_divScroll"]/table/tr');
          return $this->crawler->filterXPath('//div[@id="ctl00_pesquisaDataGrid_dtgPesquisa_divScroll"]/table/tr[position()>1]');
    }

    public function getViewState()
    {
        return $this->crawler->filterXPath('//input[@id="__VIEWSTATE"]')->attr('value');
    }

    public function getViewStateGenerator()
    {
        return $this->crawler->filterXPath('//input[@id="__VIEWSTATEGENERATOR"]')->attr('value');
    }
    public function getEventValidation()
    {
        return $this->crawler->filterXPath('//input[@id="__EVENTVALIDATION"]')->attr('value');
    }
}