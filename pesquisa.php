
<html>

<meta charset="UTF-8">
<pre>

<?php

require_once 'vendor/autoload.php';
use GuzzleHttp\Client;
use Forseti\Bot\Sesc\pageObject\PesquisaLicitacaoPageObject;
use Forseti\Bot\Sesc\pageObject\DetalhesResumoPageObject;

$guz = new Client(['cookies' => true, 'verify' => false]);

 $po = new PesquisaLicitacaoPageObject($guz);


 $parser = $po->byModalidade(PesquisaLicitacaoPageObject::MODALIDADE_PREGAO_ELETRONICO)->bySituacao(PesquisaLicitacaoPageObject::PREGAO_ELETRONICO_EM_PROPOSTA);


$licitacoes = $po->post()->getIterator();

$poDetalhes = new DetalhesResumoPageObject($guz);


foreach ($licitacoes as $licitacao) {

    $parserDetalhes = $poDetalhes->getDetails($licitacao['codigo']);
    var_dump($parserDetalhes->getIterator());

}
