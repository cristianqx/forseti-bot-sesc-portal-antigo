<?php
/**
 * Created by PhpStorm.
 * User: cristian.coelho
 * Date: 21/01/19
 * Time: 09:40
 */

namespace Forseti\Bot\Sesc\pageObject;
use Forseti\Bot\Sesc\parser\PesquisaLicitacaoParser;

class PesquisaLicitacaoPageObject extends AbstractPageObject
{

    const MODALIDADE_TODAS = 0;
    const MODALIDADE_PREGAO_ELETRONICO = 18;

    const SITUACAO_TODAS = 0;

    const PREGAO_ELETRONICO_AGENDADO_PUBLICADO = 1;
    const PREGAO_ELETRONICO_EM_PROPOSTA = 2;
    const PREGAO_ELETRONICO_PRAZO_PROPOSTAS_PRORROGADO = 3;
    const PREGAO_ELETRONICO_SUSPENSO = 4;
    const PREGAO_ELETRONICO_CANCELADO = 6;
    const PREGAO_ELETRONICO_ANULADO = 7;
    const PREGAO_ELETRONICO_REVOGADO = 8;
    const PREGAO_ELETRONICO_ABERTURA_PROPOSTAS = 9;
    const PREGAO_ELETRONICO_CLASSIFICACAO_PROPOSTAS = 10;
    const PREGAO_ELETRONICO_DISPUTA_LANCES = 11;
    const PREGAO_ELETRONICO_NEGOCIACAO_HABILITACAO_ACEITABILIDADE = 14;
    const PREGAO_ELETRONICO_INTENCAO_RECURSOS = 15;
    const PREGAO_ELETRONICO_ENCERRAMENTO_SESSAO_PUBLICA = 16;
    const PREGAO_ELETRONICO_JULGAMENTO_INTENCOES = 17;
    const PREGAO_ELETRONICO_RECURSOS = 18;
    const PREGAO_ELETRONICO_CONTRARAZOES = 19;
    const PREGAO_ELETRONICO_JULGAMENTO_RECURSOS = 20;
    const PREGAO_ELETRONICO_AJUSTE_PRECOS = 21;
    const PREGAO_ELETRONICO_EM_ADJUDICACAO = 22;
    const PREGAO_ELETRONICO_AGUARDANDO_HOMOLOGACAO = 23;
    const PREGAO_ELETRONICO_HOMOLOGADO = 24;
    const PREGAO_ELETRONICO_RECURSOS_CONTRARAZOES = 25;
    const PREGAO_ELETRONICO_SESSAO_PUBLICA_ENCERRADA = 26;
    const PREGAO_ELETRONICO_DESERTO = 28;
    const PREGAO_ELETRONICO_FRACASSADO = 29;
    const PREGAO_ELETRONICO_AGUARDANDO_LIBERACAO_FINANC = 30;
    const PREGAO_ELETRONICO_FINANCEIRO_LIBERADO = 31;
    const PREGAO_ELETRONICO_HOMOLOGADO_PEDIDO = 33;
    const PREGAO_ELETRONICO_HOMOLOGADO_REGISTRO_PRECO = 34;
    const PREGAO_ELETRONICO_HOMOLOGACAO_PARCIAL = 35;
    const PREGAO_ELETRONICO_HOMOLOGADO_CONTRATO = 36;
    const PREGAO_ELETRONICO_EM_APROVACAO = 37;


    private $modalidade = self::MODALIDADE_TODAS;
    private $situacao = self::SITUACAO_TODAS;

    public function byModalidade($modalidade)
    {
        $this->modalidade = $modalidade;

        return $this;
    }

    public function bySituacao($situacao)
    {
        $this->situacao = $situacao;

        return $this;
    }


    public function post()
    {
        $response = $this->client->request('POST', 'https://pregao.sescsp.org.br/portal/WebService/Servicos.asmx/PesquisarProcessos', [
            'json' => [

                'dtoProcesso' => [
                    "nAnoFinalizacao" => 0,
                    "tmpTipoMuralProcesso" => 0,
                    "nCdModulo" => $this->modalidade,
                    "tmpTipoMuralVisao" => $this->situacao,
                    "nCdSituacao" => $this->situacao,
                    "nCdTipoProcesso" => 0,
                    "nCdEmpresa" => 0,
                    "sNrProcesso" => "",
                    "nCdProcesso" => 0,
                    "sDsObjeto" => "",
                    "sOrdenarPor" => "NCDPROCESSO",
                    "sOrdenarPorDirecao" => "DESC",
                    "dtoPaginacao" => ["nPaginaDe" => 1,"nPaginaAte" => 10000 ],
                    "dtoIdioma" => [ "nCdIdioma" => 1
        ]
    ]
]
            ]);
         return new PesquisaLicitacaoParser($response->getBody()->getContents());
    }

}



