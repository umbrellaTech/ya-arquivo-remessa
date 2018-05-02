<?php

namespace Umbrella\Ya\RemessaBoleto\Cnab\Cnab400\SICOOB;

class Detalhe
{


    /**
     * @todo : validação do numero da carteira do convenio com orgao
     */

    private $identificacaoRegistro      = "1";
    private $numeroConvenioCobranca     = "000000";
    private $numeroParcela              = "01";
    private $grupoValor                 = "00";
    private $identificativoMsg          = " ";
    private $variacaoCarteira           = "000";
    private $contaCaucao                = "0";
    private $carteiraModalidade         = "01";
    private $comandoMovimento           = "01";
    private $numeroContratoGarantia     = "00000";
    private $digitoContratoGarantia     = "0";
    private $numeroBordero              = "000000";
    private $numeroBanco                = "756";
    private $especieTitulo              = "01";
    private $aceiteTitulo               = "0";
    private $instrucao                  = "00";
    private $segundaInstrucao           = "00";
    private $taxaDeMora                 = "000000";
    private $taxaDeMulta                = "000000";
    private $tipoDistribuicao           = "2";
    private $dataPrimeiroDesconto       = "000000";
    private $valorPrimeiroDesconto      = "0000000000000";
    private $codigoMoeda                = "9000000000000";
    private $valorAbatimento            = "0000000000000";
    // private $observacaoMensagem         = " ";
    private $protestoDias               = "00";

    private $dataVencimento;
    private $dataEmissao;
    private $sequencialRegistro;

    private $digitoVerificadorPrefixoCooperativa = "X";
    private $tipoInscricaoBeneficiario  = "02";
    private $cpfcnpjBeneficiario        = "12345678900000";
    private $prefixoCooperativa         = "XXXX";
    private $contaCorrente              = "1234";
    private $digitoVerificadorConta     = "1";
    private $nossoNumero                = "123123123";
    private $numeroBoleto               = "123123123";
    private $valorTitulo                = "100";
    private $tipoInscricaoPagador       = "01";
    private $clienteCpfCnpj             = "12312312387";
    private $clienteNome                = "teojasid";
    private $clienteEndereco            = "kopasdkopaksdopkaopsdoapksdop";
    private $clienteBairro              = "paksdokaosd";
    private $clienteCep                 = "58085300";

    private $clienteCidade              = "asdkopaskdoas"; #
    private $clienteUF                  = "UF"; #

    /**
     * @return mixed
     */
    public function getIdentificacaoRegistro()
    {
        return $this->identificacaoRegistro;
    }

    /**
     * @return mixed
     */
    public function getNumeroConvenioCobranca()
    {
        return $this->numeroConvenioCobranca;
    }

    /**
     * @return mixed
     */
    public function getNumeroParcela()
    {
        return $this->numeroParcela;
    }

    /**
     * @return mixed
     */
    public function getGrupoValor()
    {
        return $this->grupoValor;
    }

    /**
     * @return mixed
     */
    public function getIdentificativoMsg()
    {
        return $this->identificativoMsg;
    }

    /**
     * @return mixed
     */
    public function getVariacaoCarteira()
    {
        return $this->variacaoCarteira;
    }

    /**
     * @return mixed
     */
    public function getContaCaucao()
    {
        return $this->contaCaucao;
    }

    /**
     * @return mixed
     */
    public function getCarteiraModalidade()
    {
        return $this->carteiraModalidade;
    }

    /**
     * @return mixed
     */
    public function getComandoMovimento()
    {
        return $this->comandoMovimento;
    }

    /**
     * @return mixed
     */
    public function getNumeroContratoGarantia()
    {
        return $this->numeroContratoGarantia;
    }

    /**
     * @return mixed
     */
    public function getDigitoContratoGarantia()
    {
        return $this->digitoContratoGarantia;
    }

    /**
     * @return mixed
     */
    public function getNumeroBordero()
    {
        return $this->numeroBordero;
    }

    /**
     * @return mixed
     */
    public function getNumeroBanco()
    {
        return $this->numeroBanco;
    }

    /**
     * @return mixed
     */
    public function getEspecieTitulo()
    {
        return $this->especieTitulo;
    }

    /**
     * @param mixed $especieTitulo
     *
     * @return self
     */
    public function setEspecieTitulo($especieTitulo)
    {
        $this->especieTitulo = str_pad($especieTitulo, 2, '0', STR_PAD_LEFT);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAceiteTitulo()
    {
        return $this->aceiteTitulo;
    }

    /**
     * @return mixed
     */
    public function getInstrucao()
    {
        return $this->instrucao;
    }

    /**
     * @return mixed
     */
    public function getSegundaInstrucao()
    {
        return $this->segundaInstrucao;
    }

    /**
     * @return mixed
     */
    public function getTaxaDeMora()
    {
        return $this->taxaDeMora;
    }

    /**
     * @param mixed $taxaDeMora
     *
     * @return self
     */
    public function setTaxaDeMora($taxaDeMora)
    {
        $this->taxaDeMora = str_pad($taxaDeMora, 6, '0', STR_PAD_LEFT);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTaxaDeMulta()
    {
        return $this->taxaDeMulta;
    }

    /**
     * @param mixed $taxaDeMulta
     *
     * @return self
     */
    public function setTaxaDeMulta($taxaDeMulta)
    {
        $this->taxaDeMulta = str_pad($taxaDeMulta, 6, '0', STR_PAD_LEFT);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTipoDistribuicao()
    {
        return $this->tipoDistribuicao;
    }

    /**
     * @return mixed
     */
    public function getDataPrimeiroDesconto()
    {
        return $this->dataPrimeiroDesconto;
    }

    /**
     * @return mixed
     */
    public function getValorPrimeiroDesconto()
    {
        return $this->valorPrimeiroDesconto;
    }

    /**
     * @return mixed
     */
    public function getCodigoMoeda()
    {
        return $this->codigoMoeda;
    }

    /**
     * @return mixed
     */
    public function getValorAbatimento()
    {
        return $this->valorAbatimento;
    }

    /**
     * @return mixed
     */
    public function getProtestoDias()
    {
        return $this->protestoDias;
    }

    /**
     * @param mixed $protestoDias
     *
     * @return self
     */
    public function setProtestoDias($protestoDias)
    {
        $this->protestoDias = $protestoDias;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDataVencimento()
    {
        return $this->dataVencimento;
    }

    /**
     * @param mixed $dataVencimento
     *
     * @return self
     */
    public function setDataVencimento($dataVencimento)
    {
        $this->dataVencimento = str_pad(substr($dataVencimento,0,6), 6, '0', STR_PAD_LEFT);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDataEmissao()
    {
        return $this->dataEmissao;
    }

    /**
     * @param mixed $dataEmissao
     *
     * @return self
     */
    public function setDataEmissao($dataEmissao)
    {
        $this->dataEmissao = str_pad(substr($dataEmissao,0,6), 6, '0', STR_PAD_LEFT);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSequencialRegistro()
    {
        return $this->sequencialRegistro;
    }

    /**
     * @param mixed $sequencialRegistro
     *
     * @return self
     */
    public function setSequencialRegistro($sequencialRegistro)
    {
        $this->sequencialRegistro = str_pad(substr($sequencialRegistro,0,6), 6, '0', STR_PAD_LEFT);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDigitoVerificadorPrefixoCooperativa()
    {
        return $this->digitoVerificadorPrefixoCooperativa;
    }

    /**
     * @param mixed $digitoVerificadorPrefixoCooperativa
     *
     * @return self
     */
    public function setDigitoVerificadorPrefixoCooperativa($digitoVerificadorPrefixoCooperativa)
    {
        $this->digitoVerificadorPrefixoCooperativa = str_pad(substr($digitoVerificadorPrefixoCooperativa,0,1), 1, '0', STR_PAD_LEFT);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTipoInscricaoBeneficiario()
    {
        return $this->tipoInscricaoBeneficiario;
    }

    /**
     * @param mixed $tipoInscricaoBeneficiario
     *
     * @return self
     */
    public function setTipoInscricaoBeneficiario($tipoInscricaoBeneficiario)
    {
        $this->tipoInscricaoBeneficiario = str_pad(substr($tipoInscricaoBeneficiario,0,2), 2, '0', STR_PAD_LEFT);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCpfcnpjBeneficiario()
    {
        return $this->cpfcnpjBeneficiario;
    }

    /**
     * @param mixed $cpfcnpjBeneficiario
     *
     * @return self
     */
    public function setCpfcnpjBeneficiario($cpfcnpjBeneficiario)
    {
        $this->cpfcnpjBeneficiario = str_pad(substr($cpfcnpjBeneficiario,0,14), 14, '0', STR_PAD_LEFT);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrefixoCooperativa()
    {
        return $this->prefixoCooperativa;
    }

    /**
     * @param mixed $prefixoCooperativa
     *
     * @return self
     */
    public function setPrefixoCooperativa($prefixoCooperativa)
    {
        $this->prefixoCooperativa = str_pad(substr($prefixoCooperativa,0,4), 4, '0', STR_PAD_LEFT);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getContaCorrente()
    {
        return $this->contaCorrente;
    }

    /**
     * @param mixed $contaCorrente
     *
     * @return self
     */
    public function setContaCorrente($contaCorrente)
    {
        $this->contaCorrente = str_pad(substr($contaCorrente,0,8), 8, '0', STR_PAD_LEFT);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDigitoVerificadorConta()
    {
        return $this->digitoVerificadorConta;
    }

    /**
     * @param mixed $digitoVerificadorConta
     *
     * @return self
     */
    public function setDigitoVerificadorConta($digitoVerificadorConta)
    {
        $this->digitoVerificadorConta = str_pad(substr($digitoVerificadorConta,0,1), 1, '0', STR_PAD_LEFT);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNossoNumero()
    {
        return $this->nossoNumero;
    }

    /**
     * @param mixed $nossoNumero
     *
     * @return self
     */
    public function setNossoNumero($nossoNumero)
    {
        $this->nossoNumero = str_pad(substr($nossoNumero,0,12), 12, '0', STR_PAD_LEFT);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumeroBoleto()
    {
        return $this->numeroBoleto;
    }

    /**
     * @param mixed $numeroBoleto
     *
     * @return self
     */
    public function setNumeroBoleto($numeroBoleto)
    {
        $this->numeroBoleto = str_pad(substr($numeroBoleto,0,10), 10, '0', STR_PAD_LEFT);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getValorTitulo()
    {
        return $this->valorTitulo;
    }

    /**
     * @param mixed $valorTitulo
     *
     * @return self
     */
    public function setValorTitulo($valorTitulo)
    {
        $this->valorTitulo = str_pad(substr(number_format($valorTitulo, 2, '', ''),0,13), 13, '0', STR_PAD_LEFT);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTipoInscricaoPagador()
    {
        return $this->tipoInscricaoPagador;
    }

    /**
     * @param mixed $tipoInscricaoPagador
     *
     * @return self
     */
    public function setTipoInscricaoPagador($tipoInscricaoPagador)
    {
        $this->tipoInscricaoPagador = str_pad(substr($tipoInscricaoPagador,0,2), 2, '0', STR_PAD_LEFT);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getClienteCpfCnpj()
    {
        return $this->clienteCpfCnpj;
    }

    /**
     * @param mixed $clienteCpfCnpj
     *
     * @return self
     */
    public function setClienteCpfCnpj($clienteCpfCnpj)
    {
        $this->clienteCpfCnpj = str_pad(substr($clienteCpfCnpj,0,14), 14, '0', STR_PAD_LEFT);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getClienteNome()
    {
        return $this->clienteNome;
    }

    /**
     * @param mixed $clienteNome
     *
     * @return self
     */
    public function setClienteNome($clienteNome)
    {
        $this->clienteNome = str_pad(substr($clienteNome,0,40), 40, ' ', STR_PAD_RIGHT);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getClienteEndereco()
    {
        return $this->clienteEndereco;
    }

    /**
     * @param mixed $clienteEndereco
     *
     * @return self
     */
    public function setClienteEndereco($clienteEndereco)
    {
        $this->clienteEndereco = str_pad(substr($clienteEndereco,0,37), 37, ' ', STR_PAD_RIGHT);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getClienteBairro()
    {
        return $this->clienteBairro;
    }

    /**
     * @param mixed $clienteBairro
     *
     * @return self
     */
    public function setClienteBairro($clienteBairro)
    {
        $this->clienteBairro = str_pad(substr($clienteBairro,0,15), 15, ' ', STR_PAD_RIGHT);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getClienteCep()
    {
        return $this->clienteCep;
    }

    /**
     * @param mixed $clienteCep
     *
     * @return self
     */
    public function setClienteCep($clienteCep)
    {
        $this->clienteCep = str_pad(substr($clienteCep,0,8), 8, ' ', STR_PAD_LEFT);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getClienteCidade()
    {
        return $this->clienteCidade;
    }

    /**
     * @param mixed $clienteCidade
     *
     * @return self
     */
    public function setClienteCidade($clienteCidade)
    {
        $this->clienteCidade = str_pad(substr($clienteCidade,0,15), 15, ' ', STR_PAD_RIGHT);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getClienteUF()
    {
        return $this->clienteUF;
    }

    /**
     * @param mixed $clienteUF
     *
     * @return self
     */
    public function setClienteUF($clienteUF)
    {
        $this->clienteUF = str_pad(substr($clienteUF,0,2), 2, ' ', STR_PAD_RIGHT);

        return $this;
    }

    public function getDetalheToString()
    {
        return $this->getIdentificacaoRegistro()
            . $this->getTipoInscricaoBeneficiario()
            . $this->getCpfcnpjBeneficiario()
            . $this->getPrefixoCooperativa()
            . $this->getDigitoVerificadorPrefixoCooperativa()
            . $this->getContaCorrente()
            . $this->getDigitoVerificadorConta()
            . $this->getNumeroConvenioCobranca()
            . str_pad('', 25, '0', STR_PAD_LEFT)
            . $this->getNossoNumero()                   # line 10
            . $this->getNumeroParcela()
            . $this->getGrupoValor()
            . str_pad('', 3, ' ', STR_PAD_RIGHT)
            . $this->getIdentificativoMsg()
            . str_pad('', 3, ' ', STR_PAD_RIGHT)
            . $this->getVariacaoCarteira()
            . $this->getContaCaucao()
            . $this->getNumeroContratoGarantia()
            . $this->getDigitoContratoGarantia()
            . $this->getNumeroBordero()                  #line 20
            . str_pad('', 4, ' ', STR_PAD_RIGHT)
            . '2'                                        # 1 : cooperativa, 2 : cliente (tipo emissao)
            . $this->getCarteiraModalidade()
            . $this->getComandoMovimento()
            . $this->getNumeroBoleto()                  #25
            . $this->getDataVencimento()
            . $this->getValorTitulo()
            . $this->getNumeroBanco()                   #28
            . $this->getPrefixoCooperativa()            #29
            . $this->getDigitoVerificadorPrefixoCooperativa()   #30
            . $this->getEspecieTitulo()
            . $this->getAceiteTitulo()
            . $this->getDataEmissao()
            . $this->getInstrucao()
            . $this->getSegundaInstrucao()                  #35
            . $this->getTaxaDeMora()
            . $this->getTaxaDeMulta()
            . $this->getTipoDistribuicao()
            . $this->getDataPrimeiroDesconto()
            . $this->getValorPrimeiroDesconto()     #40
            . $this->getCodigoMoeda()
            . $this->getValorAbatimento()
            . $this->getTipoInscricaoPagador()
            . $this->getClienteCpfCnpj()
            . $this->getClienteNome()
            . $this->getClienteEndereco()
            . $this->getClienteBairro()
            . $this->getClienteCep()
            . $this->getClienteCidade()
            . $this->getClienteUF()                 #50
            . str_pad(' ', 40, ' ', STR_PAD_LEFT)
            . $this->getProtestoDias()
            . str_pad(' ', 1, ' ', STR_PAD_LEFT)
            . $this->getSequencialRegistro()
        ;
    }


}
