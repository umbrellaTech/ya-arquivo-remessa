<?php

namespace Umbrella\Ya\RemessaBoleto\Builder;

use Umbrella\Ya\RemessaBoleto\Cnab\Cnab400\CEF\Detalhe;
use Umbrella\Ya\RemessaBoleto\Enum\BancoEnum;
use Umbrella\Ya\RemessaBoleto\Cnab\Cnab400\Bradesco\Header;
use Umbrella\Ya\RemessaBoleto\Cnab\Cnab400\Bradesco\File;
use Umbrella\Ya\RemessaBoleto\Cnab\Cnab400\Bradesco\Trailler;

/**
 * Class CEFCnab400Builder
 * @package Umbrella\Ya\RemessaBoleto\Builder
 */
class CEFCnab400Builder extends Builder
{
    /**
     * Dados configurados no arquivo "src/config/params.yml"
     * @var array
     */
    protected $dadosBoleto;

    /**
     * Dados recebidos por parametro contendo dados referente a geracao dinamica do boleto
     * @var array
     */
    protected $detalhesBoleto;

    /**
     * CEFCnab400Builder constructor.
     * @param array $detalhesDoBoleto
     * @throws \Exception
     */
    public function __construct(array $detalhesDoBoleto)
    {
        parent::__construct(BancoEnum::CEF);
        $this->detalhesBoleto = $detalhesDoBoleto;
    }

    /**
     * @return mixed
     */
    public function build()
    {
        return $this
            ->transacao()
            ->header()
            ->trailler()
        ;
    }

    /**
     * @return $this
     */
    protected function transacao()
    {
        $seqConvenio            = $this->getSeqConvenio($this->detalhesBoleto['convenios']);
        $documentosArrecadacao  = $this->detalhesBoleto['transacoes'][$seqConvenio];
        $arrTransacoes = [];

        foreach ($documentosArrecadacao['dam'] as $key => $documento) {
            $arrTransacoes[] = new Detalhe();
        }

        $this->transacoes = $arrTransacoes;

        return $this;
    }

    /**
     * @return $this
     */
    protected function header()
    {
        $this->header = new Header();

        return $this;
    }

    /**
     * @return $this
     */
    protected function trailler()
    {
        $trailler = new Trailler();
        $trailler->setSequencialRegistro(1);
        $this->trailler = $trailler;
        return $this;
    }

    /**
     * @param string $path
     * @return string
     * @throws \Exception
     */
    public function montarArquivo(string $path)
    {
        $fileName = (new File())->buildName();
        $fullpath = $path . '/' . $fileName;
        $file = fopen($fullpath, 'w');

        if (!file_exists($fullpath)) {
            throw new \Exception("Não foi possivel abrir o arquivo para criar a remessa {$fullpath}");
        }

        $header     = $this->header;
        $transacoes = $this->transacoes;
        $trailler   = $this->trailler;
        $stringHeader = $header->getHeaderToString();
        fwrite($file, $stringHeader . "\n");
        $sequencialRegistro = 2;

        foreach ($transacoes as $transacao) {
            $transacao->setSequencialRegistro($sequencialRegistro);
            $stringTransacao = $transacao->getTransacaoToString();
            $sequencialRegistro++;
            fwrite($file, $stringTransacao . "\n");
        }

        $trailler->setSequencialRegistro($sequencialRegistro);
        $stringTrailler = $trailler->getTraillerToString();
        fwrite($file, $stringTrailler);
        fclose($file);

        return $fullpath;
    }
}
