
<html>

<meta charset="UTF-8">
<pre>

<?php

require_once 'vendor/autoload.php';
use GuzzleHttp\Client;
use Forseti\Bot\Sesc\pageObject\SescLicitacaoPageObject;
use Forseti\Bot\Sesc\pageObject\DetalhesLicitacaoPageObject;

$guz = new Client(['cookies' => true, 'verify' => false]);

 $po = new SescLicitacaoPageObject($guz);


 $parser = $po->byModalidade(SescLicitacaoPageObject::MODALIDADE_PREGAO_ELETRONICO)->bySituacao(SescLicitacaoPageObject::PREGAO_ELETRONICO_EM_PROPOSTA);


$licitacoes = $po->post()->getIterator();

$poDetalhes = new DetalhesLicitacaoPageObject($guz);


foreach ($licitacoes as $licitacao) {

    $parserDetalhes = $poDetalhes->getDetails($licitacao['codigo']);
    var_dump($parserDetalhes->getIterator());

}

/*foreach ($parser->getIterator() as $item)
{
    var_dump('<br/>');
    var_dump($item);
}

?><

</pre>
</html>
-->