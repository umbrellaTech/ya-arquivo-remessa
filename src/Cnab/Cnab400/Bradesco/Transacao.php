<?php

namespace Umbrella\Ya\RemessaBoleto\Cnab\Cnab400\Bradesco;

class Transacao
{
    /**
     * @var int
     */
    protected $identificacaoRegistro = 1;

    /**
     * Código da Agência do Pagador Exclusivo para Débito em Conta.
     * @var int
     */
    protected $agenciaDebito;

    /**
     * @var int
     */
    protected $digitoAgenciaDebito;

    /**
     * Razão da Conta do Pagador.
     * @var string
     */
    protected $razaoContaCorrente;

    /**
     * Número da Conta do Pagador.
     * @var int
     */
    protected $contaCorrente;

    /**
     * @var int
     */
    protected $digitoContaCorrente;

    /**
     * Zero, Carteira, Agência e Conta Corrente
     * @var string
     */
    protected $identificacaoEmpresaBeneficiaria;

    /**
     * Uso da Empresa
     * @var string
     */
    protected $numeroControleParticipante;

    /**
     * Número do Banco
     * @var int
     */
    protected $codigoBancoDebitado = 237;

    /**
     * Se = 2 considerar percentual de multa. Se = 0, sem multa.
     * @var int
     */
    protected $multa;

    /**
     * Percentual de multa a ser considerado.
     * @var int
     */
    protected $percentualMulta;

    /**
     * Número Bancário para Cobrança Com e Sem Registro.
     * @var string
     */
    protected $identificacaoTituloBanco;

    /**
     * @var int
     */
    protected $digitoAutoConferencia;

    /**
     * Valor do desconto bonificação por dia.
     * @var string
     */
    protected $descontoBonificacao;

    /**
     * 1 = Banco emite e Processa o registro.
     * 2 = Cliente emite e o Banco somente processa o registro.
     * @var int
     */
    protected $condicaoEmissao;

    /**
     * "N" = Não registra na cobrança. Diferente de "N" registra e emite Boleto.
     * @var string
     */
    protected $emiteBoletoDebitoAutomatico;

    /**
     * Campo em branco com tamango 10
     */
    protected $operacaoBanco;

    /**
     * Somente deverá ser preenchido com a Letra “R”, se a Empresa contratou o
     * serviço de rateio de crédito, caso não, informar Branco.
     * @var string
     */
    protected $indicadorRateioCredito = '';

    /**
     * 1 = Emite aviso, e assume o endereço do Pagador constante do Arquivo Remessa
     * @var int
     */
    protected $avisoDebitoAutomatico;

    /**
     * @var string
     */
    protected $identificacaoOcorrencia;

    /**
     * @var string
     */
    protected $numeroDocumento;

    /**
     * @var string
     */
    protected $dataVencimentoTitulo;

    /**
     * @var string
     */
    protected $valorTitulo;

    /**
     * Preencher com zeros
     * @var string
     */
    protected $bancoCobrador = '000';

    /**
     * Preencher com zeros
     * @var string
     */
    protected $agenciaDepositaria = '00000';

    /**
     * @var string
     */
    protected $especieTitulo;

    /**
     * @var string
     */
    protected $identificacao = 'N';

    /**
     * @var string
     */
    protected $dataEmissaoTitulo;

    /**
     * Campo destinado para pré-determinar o protesto do Título ou a baixa por
     * decurso de prazo, quando do registro.
     * Não havendo interesse, preencher com Zeros.
     * @var string
     */
    protected $primeiraInstrucao;

    /**
     * @var string
     */
    protected $segundaInstrucao;

    /**
     * @var string
     */
    protected $valorPorDiaATrasado;

    /**
     * Data limite para concessão de desconto.
     * @var string
     */
    protected $dataLimiteDesconto;

    /**
     * @var string
     */
    protected $valorDesconto;

    /**
     * @var string
     */
    protected $valorIof;

    /**
     * Valor do Abatimento a ser concedido ou cancelado.
     * @var string
     */
    protected $valorAbatimento;

    /**
     * @var string
     */
    protected $tipoInscricaoPagador;

    /**
     * @var string
     */
    protected $numeroInscricaoPagador;

    /**
     * @var string
     */
    protected $nomePagador;

    /**
     * @var string
     */
    protected $enderecoPagador;

    /**
     * Campo livre para uso da Empresa.
     * @var string
     */
    protected $primeiraMensagem;

    /**
     * @var string
     */
    protected $cep;

    /**
     * @var string
     */
    protected $sufixoCep;

    /**
     * CNPJ/CPF  do Sacador Avalista
     * @var string
     */
    protected $sacador;

    /**
     * Utilizado com a finalidade de substituir o campo Sacador/Avalista, quando este não vir.
     *
     * Mensagem a ser impressa no Boleto, ou no Extrato de Aviso de Débito Automático ao Sacador.
     * @var string
     */
    protected $segundaMensagem;

    /**
     * @var string
     */
    protected $sequencialRegistro;

    /**
     * @return int
     */
    public function getIdentificacaoRegistro()
    {
        return $this->identificacaoRegistro;
    }

    /**
     * @return int
     */
    public function getAgenciaDebito()
    {
        return $this->agenciaDebito;
    }

    /**
     * @param int $agenciaDebito
     */
    public function setAgenciaDebito($agenciaDebito)
    {
        $this->agenciaDebito = str_pad($agenciaDebito, 5, 0, STR_PAD_LEFT);
    }

    /**
     * @return int
     */
    public function getDigitoAgenciaDebito()
    {
        return $this->digitoAgenciaDebito;
    }

    /**
     * @param int $digitoAgenciaDebito
     */
    public function setDigitoAgenciaDebito($digitoAgenciaDebito)
    {
        $this->digitoAgenciaDebito = $digitoAgenciaDebito;
    }

    /**
     * @return string
     */
    public function getRazaoContaCorrente()
    {
        return $this->razaoContaCorrente;
    }

    /**
     * @param string $razaoContaCorrente
     */
    public function setRazaoContaCorrente($razaoContaCorrente)
    {
        $this->razaoContaCorrente = str_pad($razaoContaCorrente, 5, 0, STR_PAD_LEFT);
    }

    /**
     * @return int
     */
    public function getContaCorrente()
    {
        return $this->contaCorrente;
    }

    /**
     * @param int $contaCorrente
     */
    public function setContaCorrente($contaCorrente)
    {
        $this->contaCorrente = str_pad($contaCorrente, 7, 0, STR_PAD_LEFT);
    }

    /**
     * @return int
     */
    public function getDigitoContaCorrente()
    {
        return $this->digitoContaCorrente;
    }

    /**
     * @param int $digitoContaCorrente
     */
    public function setDigitoContaCorrente($digitoContaCorrente)
    {
        $this->digitoContaCorrente = $digitoContaCorrente;
    }

    /**
     * @return string
     */
    public function getIdentificacaoEmpresaBeneficiaria()
    {
        return $this->identificacaoEmpresaBeneficiaria;
    }

    /**
     * @param string $identificacaoEmpresaBeneficiaria
     */
    public function setIdentificacaoEmpresaBeneficiaria($identificacaoEmpresaBeneficiaria)
    {
        $this->identificacaoEmpresaBeneficiaria = str_pad($identificacaoEmpresaBeneficiaria, 17, 0, STR_PAD_LEFT);
    }

    /**
     * @return string
     */
    public function getNumeroControleParticipante()
    {
        return $this->numeroControleParticipante;
    }

    /**
     * @param string $numeroControleParticipante
     */
    public function setNumeroControleParticipante($numeroControleParticipante)
    {
        $this->numeroControleParticipante = str_pad(mb_strtoupper($numeroControleParticipante), 25, ' ', STR_PAD_RIGHT);
    }

    /**
     * @return int
     */
    public function getCodigoBancoDebitado()
    {
        return $this->codigoBancoDebitado;
    }

    /**
     * @param int $codigoBancoDebitado
     */
    public function setCodigoBancoDebitado($codigoBancoDebitado)
    {
        $this->codigoBancoDebitado = str_pad($codigoBancoDebitado, 3, 0, STR_PAD_LEFT);
    }

    /**
     * @return int
     */
    public function getMulta()
    {
        return $this->multa;
    }

    /**
     * @param int $multa
     */
    public function setMulta($multa)
    {
        $this->multa = $multa;
    }

    /**
     * @return int
     */
    public function getPercentualMulta()
    {
        return $this->percentualMulta;
    }

    /**
     * @param int $percentualMulta
     */
    public function setPercentualMulta($percentualMulta)
    {
        $this->percentualMulta = str_pad($percentualMulta, 4, 0, STR_PAD_LEFT);
    }

    /**
     * @return string
     */
    public function getIdentificacaoTituloBanco()
    {
        return $this->identificacaoTituloBanco;
    }

    /**
     * @param string $identificacaoTituloBanco
     */
    public function setIdentificacaoTituloBanco($identificacaoTituloBanco)
    {
        $this->identificacaoTituloBanco = str_pad($identificacaoTituloBanco, 11, 0, STR_PAD_LEFT);
    }

    /**
     * @return int
     */
    public function getDigitoAutoConferencia()
    {
        return $this->digitoAutoConferencia;
    }

    /**
     * @param int $digitoAutoConferencia
     */
    public function setDigitoAutoConferencia($digitoAutoConferencia)
    {
        $this->digitoAutoConferencia = mb_strtoupper($digitoAutoConferencia);
    }

    /**
     * @return string
     */
    public function getDescontoBonificacao()
    {
        return $this->descontoBonificacao;
    }

    /**
     * @param string $descontoBonificacao
     */
    public function setDescontoBonificacao($descontoBonificacao)
    {
        $this->descontoBonificacao = str_pad($descontoBonificacao, 10, 0, STR_PAD_LEFT);
    }

    /**
     * @return int
     */
    public function getCondicaoEmissao()
    {
        return $this->condicaoEmissao;
    }

    /**
     * @param int $condicaoEmissao
     */
    public function setCondicaoEmissao($condicaoEmissao)
    {
        $this->condicaoEmissao = $condicaoEmissao;
    }

    /**
     * @return string
     */
    public function getEmiteBoletoDebitoAutomatico()
    {
        return $this->emiteBoletoDebitoAutomatico;
    }

    /**
     * @param string $emiteBoletoDebitoAutomatico
     */
    public function setEmiteBoletoDebitoAutomatico($emiteBoletoDebitoAutomatico)
    {
        $this->emiteBoletoDebitoAutomatico = mb_strtoupper($emiteBoletoDebitoAutomatico);
    }

    /**
     * @return mixed
     */
    public function getOperacaoBanco()
    {
        return str_pad('', 10, ' ', STR_PAD_LEFT);
    }

    /**
     * @param mixed $operacaoBanco
     */
    public function setOperacaoBanco($operacaoBanco)
    {
        $this->operacaoBanco = $operacaoBanco;
    }

    /**
     * @return string
     */
    public function getIndicadorRateioCredito()
    {
        return $this->indicadorRateioCredito;
    }

    /**
     * @param string $indicadorRateioCredito
     */
    public function setIndicadorRateioCredito($indicadorRateioCredito)
    {
        $this->indicadorRateioCredito = mb_strtoupper($indicadorRateioCredito);
    }

    /**
     * @return int
     */
    public function getAvisoDebitoAutomatico()
    {
        return $this->avisoDebitoAutomatico;
    }

    /**
     * @param int $avisoDebitoAutomatico
     */
    public function setAvisoDebitoAutomatico($avisoDebitoAutomatico)
    {
        $this->avisoDebitoAutomatico = $avisoDebitoAutomatico;
    }

    /**
     * @return string
     */
    public function getIdentificacaoOcorrencia()
    {
        return $this->identificacaoOcorrencia;
    }

    /**
     * @param string $identificacaoOcorrencia
     */
    public function setIdentificacaoOcorrencia($identificacaoOcorrencia)
    {
        $this->identificacaoOcorrencia = $identificacaoOcorrencia;
    }

    /**
     * @return string
     */
    public function getNumeroDocumento()
    {
        return $this->numeroDocumento;
    }

    /**
     * @param string $numeroDocumento
     */
    public function setNumeroDocumento($numeroDocumento)
    {
        $this->numeroDocumento = str_pad(mb_strtoupper($numeroDocumento), 10, ' ', STR_PAD_RIGHT);
    }

    /**
     * @return string
     */
    public function getDataVencimentoTitulo()
    {
        return $this->dataVencimentoTitulo;
    }

    /**
     * @param string $dataVencimentoTitulo
     */
    public function setDataVencimentoTitulo($dataVencimentoTitulo)
    {
        $this->dataVencimentoTitulo = $dataVencimentoTitulo;
    }

    /**
     * @return string
     */
    public function getValorTitulo()
    {
        return $this->valorTitulo;
    }

    /**
     * @param string $valorTitulo
     */
    public function setValorTitulo($valorTitulo)
    {
        $this->valorTitulo = str_pad($valorTitulo, 13, 0, STR_PAD_LEFT);
    }

    /**
     * @return string
     */
    public function getBancoCobrador()
    {
        return $this->bancoCobrador;
    }

    /**
     * @return string
     */
    public function getAgenciaDepositaria()
    {
        return $this->agenciaDepositaria;
    }

    /**
     * @return string
     */
    public function getEspecieTitulo()
    {
        return $this->especieTitulo;
    }

    /**
     * @param string $especieTitulo
     */
    public function setEspecieTitulo($especieTitulo)
    {
        $this->especieTitulo = $especieTitulo;
    }

    /**
     * @return string
     */
    public function getIdentificacao()
    {
        return $this->identificacao;
    }

    /**
     * @return string
     */
    public function getDataEmissaoTitulo()
    {
        return $this->dataEmissaoTitulo;
    }

    /**
     * @param string $dataEmissaoTitulo
     */
    public function setDataEmissaoTitulo($dataEmissaoTitulo)
    {
        $this->dataEmissaoTitulo = $dataEmissaoTitulo;
    }

    /**
     * @return string
     */
    public function getPrimeiraInstrucao()
    {
        return $this->primeiraInstrucao;
    }

    /**
     * @param string $primeiraInstrucao
     */
    public function setPrimeiraInstrucao($primeiraInstrucao)
    {
        $this->primeiraInstrucao = $primeiraInstrucao;
    }

    /**
     * @return string
     */
    public function getSegundaInstrucao()
    {
        return $this->segundaInstrucao;
    }

    /**
     * @param string $segundaInstrucao
     */
    public function setSegundaInstrucao($segundaInstrucao)
    {
        $this->segundaInstrucao = $segundaInstrucao;
    }

    /**
     * @return string
     */
    public function getValorPorDiaATrasado()
    {
        return $this->valorPorDiaATrasado;
    }

    /**
     * @param string $valorPorDiaATrasado
     */
    public function setValorPorDiaATrasado($valorPorDiaATrasado)
    {
        $this->valorPorDiaATrasado = str_pad($valorPorDiaATrasado, 13, 0, STR_PAD_LEFT);
    }

    /**
     * @return string
     */
    public function getDataLimiteDesconto()
    {
        return $this->dataLimiteDesconto;
    }

    /**
     * @param string $dataLimiteDesconto
     */
    public function setDataLimiteDesconto($dataLimiteDesconto)
    {
        $this->dataLimiteDesconto = $dataLimiteDesconto;
    }

    /**
     * @return string
     */
    public function getValorDesconto()
    {
        return $this->valorDesconto;
    }

    /**
     * @param string $valorDesconto
     */
    public function setValorDesconto($valorDesconto)
    {
        $this->valorDesconto = str_pad($valorDesconto, 13, 0, STR_PAD_LEFT);
    }

    /**
     * @return string
     */
    public function getValorIof()
    {
        return $this->valorIof;
    }

    /**
     * @param string $valorIof
     */
    public function setValorIof($valorIof)
    {
        $this->valorIof = str_pad($valorIof, 13, 0, STR_PAD_LEFT);
    }

    /**
     * @return string
     */
    public function getValorAbatimento()
    {
        return $this->valorAbatimento;
    }

    /**
     * @param string $valorAbatimento
     */
    public function setValorAbatimento($valorAbatimento)
    {
        $this->valorAbatimento = str_pad($valorAbatimento, 13, 0, STR_PAD_LEFT);
    }

    /**
     * @return string
     */
    public function getTipoInscricaoPagador()
    {
        return $this->tipoInscricaoPagador;
    }

    /**
     * @param string $tipoInscricaoPagador
     */
    public function setTipoInscricaoPagador($tipoInscricaoPagador)
    {
        $this->tipoInscricaoPagador = $tipoInscricaoPagador;
    }

    /**
     * @return string
     */
    public function getNumeroInscricaoPagador()
    {
        return $this->numeroInscricaoPagador;
    }

    /**
     * @param string $numeroInscricaoPagador
     */
    public function setNumeroInscricaoPagador($numeroInscricaoPagador)
    {
        $this->numeroInscricaoPagador = str_pad($numeroInscricaoPagador, 14, 0, STR_PAD_LEFT);
    }

    /**
     * @return string
     */
    public function getNomePagador()
    {
        return $this->nomePagador;
    }

    /**
     * @param string $nomePagador
     */
    public function setNomePagador($nomePagador)
    {
        $this->nomePagador = str_pad(mb_strtoupper($nomePagador), 40, ' ', STR_PAD_RIGHT);
    }

    /**
     * @return string
     */
    public function getEnderecoPagador()
    {
        return $this->enderecoPagador;
    }

    /**
     * @param string $enderecoPagador
     */
    public function setEnderecoPagador($enderecoPagador)
    {
        $this->enderecoPagador = str_pad(mb_strtoupper($enderecoPagador), 40, ' ', STR_PAD_RIGHT);
    }

    /**
     * @return string
     */
    public function getPrimeiraMensagem()
    {
        return $this->primeiraMensagem;
    }

    /**
     * @param string $primeiraMensagem
     */
    public function setPrimeiraMensagem($primeiraMensagem)
    {
        $this->primeiraMensagem = str_pad(mb_strtoupper($primeiraMensagem), 12, ' ', STR_PAD_RIGHT);
    }

    /**
     * @return string
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @param string $cep
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
    }

    /**
     * @return string
     */
    public function getSufixoCep()
    {
        return $this->sufixoCep;
    }

    /**
     * @param string $sufixoCep
     */
    public function setSufixoCep($sufixoCep)
    {
        $this->sufixoCep = $sufixoCep;
    }

    /**
     * @return string
     */
    public function getSacador()
    {
        return $this->sacador;
    }

    /**
     * @param string $sacador
     */
    public function setSacador($sacador)
    {
        $this->sacador = str_pad(mb_strtoupper($sacador), 60, ' ', STR_PAD_RIGHT);
    }

    /**
     * @return string
     */
    public function getSegundaMensagem()
    {
        return $this->segundaMensagem;
    }

    /**
     * @param string $segundaMensagem
     */
    public function setSegundaMensagem($segundaMensagem)
    {
        $this->segundaMensagem = str_pad(mb_strtoupper($segundaMensagem), 60, ' ', STR_PAD_RIGHT);
    }

    /**
     * @return string
     */
    public function getSequencialRegistro()
    {
        return $this->sequencialRegistro;
    }

    /**
     * @param string $sequencialRegistro
     */
    public function setSequencialRegistro($sequencialRegistro)
    {
        $this->sequencialRegistro = str_pad($sequencialRegistro, 6, 0, STR_PAD_LEFT);
    }

    public function getTransacaoToString()
    {
        $stringTransacao = $this->getIdentificacaoRegistro()
            . $this->getAgenciaDebito()
            . $this->getDigitoAgenciaDebito()
            . $this->getRazaoContaCorrente()
            . $this->getContaCorrente()
            . $this->getDigitoContaCorrente()
            . $this->getIdentificacaoEmpresaBeneficiaria()
            . $this->getNumeroControleParticipante()
            . $this->getCodigoBancoDebitado()
            . $this->getMulta()
            . $this->getPercentualMulta()
            . $this->getIdentificacaoTituloBanco()
            . $this->getDigitoAutoConferencia()
            . $this->getDescontoBonificacao()
            . $this->getCondicaoEmissao()
            . $this->getEmiteBoletoDebitoAutomatico()
            . $this->getOperacaoBanco()
            . $this->getIndicadorRateioCredito()
            . $this->getAvisoDebitoAutomatico()
            . str_pad('', 2, ' ', STR_PAD_RIGHT)
            . $this->getIdentificacaoOcorrencia()
            . $this->getNumeroDocumento()
            . $this->getDataVencimentoTitulo()
            . $this->getValorTitulo()
            . $this->getBancoCobrador()
            . $this->getAgenciaDepositaria()
            . $this->getEspecieTitulo()
            . $this->getIdentificacao()
            . $this->getDataEmissaoTitulo()
            . $this->getPrimeiraInstrucao()
            . $this->getSegundaInstrucao()
            . $this->getValorPorDiaATrasado()
            . $this->getDataLimiteDesconto()
            . $this->getValorDesconto()
            . $this->getValorIof()
            . $this->getValorAbatimento()
            . $this->getTipoInscricaoPagador()
            . $this->getNumeroInscricaoPagador()
            . $this->getNomePagador()
            . $this->getEnderecoPagador()
            . $this->getPrimeiraMensagem()
            . $this->getCep()
            . $this->getSufixoCep()
            . ($this->getSacador() ? : $this->getSegundaMensagem())
            . $this->getSequencialRegistro()
        ;

        if (mb_strlen($stringTransacao) != 400) {
            throw new \Exception("Erro ao gerar transacoes da remessa, tamanho da string invalida (length: " . mb_strlen($stringTransacao) . ")");
        }

        return $stringTransacao;
    }
}
