<?php

namespace Umbrella\Ya\RemessaBoleto\Cnab\Cnab400\SICOOB;

class Header
{
    /**
     * @var int
     */
    protected $identificacaoRegistro = 0;

    /**
     * @var string
     */
    protected $tipoOperacao = "1";

    /**
     * @var string
     */
    protected $literalRemessa = 'REMESSA';

    /**
     * @var string
     */
    protected $codigoServico = '01';

    /**
     * @var string
     */
    protected $literalServico = 'COBRANÇA';

    /**
     * @var string
     */
    protected $complementoRegistro = '';

    /**
     * @var string
     */
    protected $prefixoCooperativa = "???????????";

    /**
     * @var string
     */
    protected $digitoVerificadorCooperativa = "?/?";

    /**
     * @var string
     */
    protected $codigoCliente = "???/";

    /**
     * @var string
     */
    protected $digitoVerificadorCodigo = "???";

    /**
     * @var string
     */
    protected $convenioLider = '';

    /**
     * @var string
     */
    protected $nomeBeneficiario = "????????";

    /**
     * @var string
     */
    protected $identificacaoBanco = "756BANCOOBCED";

    /**
     * @var string
     */
    protected $dataGeracao;

    /**
     * @var string
     */
    protected $sequencialRemessa;

    /**
     * @var string
     */
    protected $sequencialRegistro;

    /**
     * @return string
     */
    public function getPrefixoCooperativa()
    {
        return $this->prefixoCooperativa;
    }

    /**
     * @param string
     */
    public function setPrefixoCooperativa($prefixoCooperativa)
    {
        $this->prefixoCooperativa = substr(str_pad($prefixoCooperativa, 4, '0', STR_PAD_LEFT), 0, 4);
    }

    /**
     * @return string
     */
    public function getIdentificacaoRegistro()
    {
        return $this->identificacaoRegistro;
    }

    /**
     * @return string
     */
    public function getTipoOperacao()
    {
        return $this->tipoOperacao;
    }

    /**
     * @return string
     */
    public function getLiteralRemessa()
    {
        return $this->literalRemessa;
    }

    /**
     * @return string
     */
    public function getCodigoServico()
    {
        return $this->codigoServico;
    }

    /**
     * @return string
     */
    public function getLiteralServico()
    {
        return $this->literalServico;
    }

    /**
     * @return string
     */
    public function getComplementoRegistro()
    {
        return $this->complementoRegistro;
    }

    /**
     * @return string
     */
    public function getCodigoCliente()
    {
        return $this->codigoCliente;
    }

    /**
     * @return string
     */
    public function getDigitoVerificadorCodigo()
    {
        return $this->digitoVerificadorCodigo;
    }

    /**
     * @return string
     */
    public function getConvenioLider()
    {
        return $this->convenioLider;
    }

    /**
     * @return string
     */
    public function getNomeBeneficiario()
    {
        return $this->nomeBeneficiario;
    }

    /**
     * @return string
     */
    public function getIdentificacaoBanco()
    {
        return $this->identificacaoBanco;
    }

    /**
     * @return string
     */
    public function setIdentificacaoRegistro($identificacaoRegistro)
    {
        $this->identificacaoRegistro = $identificacaoRegistro;
    }

    /**
     * @return string
     */
    public function setTipoOperacao($tipoOperacao)
    {
        $this->tipoOperacao = $tipoOperacao;
    }

    /**
     * @return string
     */
    public function setLiteralRemessa($literalRemessa)
    {
        $this->literalRemessa = $literalRemessa;
    }

    /**
     * @return string
     */
    public function setCodigoServico($codigoServico)
    {
        $this->codigoServico = $codigoServico;
    }

    /**
     * @return string
     */
    public function setLiteralServico($literalServico)
    {
        $this->literalServico = $literalServico;
    }

    /**
     * @return string
     */
    public function setComplementoRegistro($complementoRegistro)
    {
        $this->complementoRegistro = $complementoRegistro;
    }

    /**
     * @return string
     */
    public function setCodigoCliente($codigoCliente)
    {
        $this->codigoCliente = substr(
            str_pad($codigoCliente, 8, '0', STR_PAD_LEFT),
            0,
            8
        );
    }

    /**
     * @return string
     */
    public function setDigitoVerificadorCodigo($digitoVerificadorCodigo)
    {
        $this->digitoVerificadorCodigo = substr(str_pad($digitoVerificadorCodigo, 1, '0', STR_PAD_LEFT), 0, 1);
    }

    /**
     * @return string
     */
    public function setConvenioLider($convenioLider)
    {
        $this->convenioLider = $convenioLider;
    }

    /**
     * @return string
     */
    public function setNomeBeneficiario($nomeBeneficiario)
    {
        $this->nomeBeneficiario = mb_strtoupper(str_pad($nomeBeneficiario, 30, ' ', STR_PAD_RIGHT));
    }

    /**
     * @return string
     */
    public function setIdentificacaoBanco($identificacaoBanco)
    {
        $this->identificacaoBanco = $identificacaoBanco;
    }


    public function setDataGeracao($dataGeracao)
    {
        $this->dataGeracao = $dataGeracao;
    }


    public function getDigitoVerificadorCooperativa()
    {
        return $this->digitoVerificadorCooperativa;
    }

    public function setDigitoVerificadorCooperativa($digitoVerificadorCooperativa)
    {
        $this->digitoVerificadorCooperativa = substr(
            str_pad($digitoVerificadorCooperativa, 1, '0', STR_PAD_LEFT),
            0,
            1
        );
    }

    public function setSequencialRegistro($sequencialRegistro)
    {
        $this->sequencialRegistro = $sequencialRegistro;
    }

    public function setSequencialRemessa($sequencialRemessa)
    {
        $this->sequencialRemessa = str_pad(
            substr($sequencialRemessa, 0, 7),
            7,
            0,
            STR_PAD_LEFT
        );
    }

    public function getHeaderToString()
    {
        $headerString = $this->getIdentificacaoRegistro()                            #1
            . $this->getTipoOperacao()                                               #1
            . $this->getLiteralRemessa()                                             #7
            . $this->getCodigoServico()                                              #2
            . $this->getLiteralServico()                                             #8
            . str_pad(substr($this->getComplementoRegistro(), 0, 7), 7, ' ', STR_PAD_LEFT)         #7
            . $this->getPrefixoCooperativa()                                         #4
            . $this->getDigitoVerificadorCooperativa()                               #1
            . $this->getCodigoCliente()                                              #8
            . $this->getDigitoVerificadorCodigo()                                    #1
            . str_pad(substr($this->getConvenioLider(), 0, 6), 6, 0, STR_PAD_LEFT)                 #6
            . $this->getNomeBeneficiario()                                           #30
            . str_pad($this->getIdentificacaoBanco(), 18, ' ', STR_PAD_RIGHT)        #18
            . $this->dataGeracao                                                     #6
            . $this->sequencialRemessa                  #7
            . str_pad($this->getComplementoRegistro(), 287, ' ', STR_PAD_RIGHT)      #287
            . str_pad($this->sequencialRegistro, 6, 0, STR_PAD_LEFT);                 #6

        if (mb_strlen($headerString) != 400) {
            throw new \Exception("Erro ao gerar header da remessa, tamanho da string invalida");
        }

        return $headerString;
    }
}
