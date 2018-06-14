<?php

namespace Umbrella\Ya\RemessaBoleto\Cnab\Cnab400\BB;

use Zend_Controller_Front;

class Detalhe
{
    private $identificacaoRegistro      = '7';
    private $numeroPrestacao            = '00';
    private $grupoValor                 = '00';
    private $numBanco                   = '001';
    private $prefixoAgenciaCobradora    = '0000';
    private $prefixoAgenciaDVCobranca   = ' ';
    private $complementoRegistroBranco1 = '   ';
    private $complementoRegistroBranco2 = '   ';
    private $complementoRegistroBranco3 = ' ';

    private $tipoInscricaoCedente;
    private $numeroCPFCNPJCedente;
    private $prefixoAgencia;
    private $prefixoAgenciaDV;
    private $contaCorrenteCedente;
    private $contaCorrenteDVCedente;
    private $convenioCobrancaCedente;
    private $codigoControleEmpresa;
    private $nossoNumero;
    private $msgSacadorAvalista;
    private $prefixoTitulo;
    private $variacaoCarteira;
    private $contaCaucao;
    private $numeroBordero;
    private $tipoCobranca;
    private $carteiraCobranca;
    private $comando;
    private $numTituloCedente;
    private $dtVencimento;
    private $vlTitulo;
    private $especieTitulo;
    private $aceiteTitulo;
    private $dtEmissaoTitulo;
    private $instrucaoCodificada1;
    private $instrucaoCodificada2;
    private $jurisMoraDia;
    private $dtLimiteConcessaoDesconto;
    private $vlDesconto;
    private $vlIOF;
    private $vlAbatimento;
    private $tipoOperacaoSacado;
    private $cpfCnpjSacado;
    private $nomeSacado;
    private $enderecoSacado;
    private $bairroSacado;
    private $cepSacado;
    private $cidadeSacado;
    private $ufCidadeSacado;
    private $obsMensagemSacadorAvalista;
    private $numDiasProtesto;
    private $sequencialRegistro;

    /**
     * @return string
     */
    public function getIdentificacaoRegistro()
    {
        return str_pad(
            substr($this->identificacaoRegistro, 0, 1),
            1,
            ' ',
            STR_PAD_LEFT
        );
    }

    /**
     * @param string $identificacaoRegistro
     */
    public function setIdentificacaoRegistro(string $identificacaoRegistro)
    {
        $this->identificacaoRegistro = str_pad(substr($identificacaoRegistro, 0, 1), 1, ' ', STR_PAD_LEFT);
    }

    /**
     * @return string
     */
    public function getNumeroPrestacao()
    {
        return $this->numeroPrestacao;
    }

    /**
     * @param string $numeroPrestacao
     */
    public function setNumeroPrestacao(string $numeroPrestacao)
    {
        $this->numeroPrestacao = str_pad(substr($numeroPrestacao, 0, 2), 2, '0', STR_PAD_LEFT);
    }

    /**
     * @return string
     */
    public function getGrupoValor()
    {
        return $this->grupoValor;
    }

    /**
     * @param string $grupoValor
     */
    public function setGrupoValor(string $grupoValor)
    {
        $this->grupoValor = str_pad(substr($grupoValor, 0, 2),  2, '0', STR_PAD_LEFT);
    }

    /**
     * @return string
     */
    public function getNumBanco()
    {
        return $this->numBanco;
    }

    /**
     * @param string $numBanco
     */
    public function setNumBanco(string $numBanco)
    {
        $this->numBanco = str_pad(substr($numBanco, 0, 3), 3, '0', STR_PAD_LEFT);
    }

    /**
     * @return string
     */
    public function getPrefixoAgenciaCobradora()
    {
        return $this->prefixoAgenciaCobradora;
    }

    /**
     * @param string $prefixoAgenciaCobradora
     */
    public function setPrefixoAgenciaCobradora(string $prefixoAgenciaCobradora)
    {
        $this->prefixoAgenciaCobradora = str_pad(substr($prefixoAgenciaCobradora, 0, 4), 4, ' ', STR_PAD_LEFT);
    }

    /**
     * @return string
     */
    public function getPrefixoAgenciaDVCobranca()
    {
        return $this->prefixoAgenciaDVCobranca;
    }

    /**
     * @param string $prefixoAgenciaDVCobranca
     */
    public function setPrefixoAgenciaDVCobranca(string $prefixoAgenciaDVCobranca)
    {
        $this->prefixoAgenciaDVCobranca = str_pad(substr($prefixoAgenciaDVCobranca, 0, 1), 1, ' ', STR_PAD_LEFT);
    }

    /**
     * @return string
     */
    public function getComplementoRegistroBranco1()
    {
        return $this->complementoRegistroBranco1;
    }

    /**
     * @param string $complementoRegistroBranco1
     */
    public function setComplementoRegistroBranco1(string $complementoRegistroBranco1)
    {
        $this->complementoRegistroBranco1 = str_pad(substr($complementoRegistroBranco1,0, 3), 3, ' ', STR_PAD_LEFT);
    }

    /**
     * @return string
     */
    public function getComplementoRegistroBranco2()
    {
        return $this->complementoRegistroBranco2;
    }

    /**
     * @param string $complementoRegistroBranco2
     */
    public function setComplementoRegistroBranco2(string $complementoRegistroBranco2)
    {
        $this->complementoRegistroBranco2 = str_pad(substr($complementoRegistroBranco2, 0, 3), 3, ' ', STR_PAD_LEFT);
    }

    /**
     * @return string
     */
    public function getComplementoRegistroBranco3()
    {
        return $this->complementoRegistroBranco3;
    }

    /**
     * @param string $complementoRegistroBranco3
     */
    public function setComplementoRegistroBranco3(string $complementoRegistroBranco3)
    {
        $this->complementoRegistroBranco3 = str_pad(substr($complementoRegistroBranco3, 0, 1), 1, ' ', STR_PAD_LEFT);
    }

    /**
     * @return mixed
     */
    public function getTipoInscricaoCedente()
    {
        return $this->tipoInscricaoCedente;
    }

    /**
     * @param mixed $tipoInscricaoCedente
     */
    public function setTipoInscricaoCedente($tipoInscricaoCedente)
    {
        $this->tipoInscricaoCedente = str_pad(substr($tipoInscricaoCedente, 0, 2), 2, '0', STR_PAD_LEFT);
    }

    /**
     * @return mixed
     */
    public function getNumeroCPFCNPJCedente()
    {
        return $this->numeroCPFCNPJCedente;
    }

    /**
     * @param mixed $numeroCPFCNPJCedente
     */
    public function setNumeroCPFCNPJCedente($numeroCPFCNPJCedente)
    {
        $this->numeroCPFCNPJCedente = str_pad($numeroCPFCNPJCedente, 14, '0', STR_PAD_LEFT);
    }

    /**
     * @return mixed
     */
    public function getPrefixoAgencia()
    {
        return $this->prefixoAgencia;
    }

    /**
     * @param mixed $prefixoAgencia
     */
    public function setPrefixoAgencia($prefixoAgencia)
    {
        $this->prefixoAgencia = str_pad(substr($prefixoAgencia, 0, 4), 4,  '0', STR_PAD_LEFT);
    }

    /**
     * @return mixed
     */
    public function getPrefixoAgenciaDV()
    {
        return $this->prefixoAgenciaDV;
    }

    /**
     * @param mixed $prefixoAgenciaDV
     */
    public function setPrefixoAgenciaDV($prefixoAgenciaDV)
    {
        $this->prefixoAgenciaDV = str_pad(substr($prefixoAgenciaDV, 0, 1), 1, '0', STR_PAD_LEFT);
    }

    /**
     * @return mixed
     */
    public function getContaCorrenteCedente()
    {
        return $this->contaCorrenteCedente;
    }

    /**
     * @param mixed $contaCorrenteCedente
     */
    public function setContaCorrenteCedente($contaCorrenteCedente)
    {
        $this->contaCorrenteCedente = str_pad(substr($contaCorrenteCedente, 0, 8), 8, '0', STR_PAD_LEFT);
    }

    /**
     * @return mixed
     */
    public function getContaCorrenteDVCedente()
    {
        return $this->contaCorrenteDVCedente;
    }

    /**
     * @param mixed $contaCorrenteDVCedente
     */
    public function setContaCorrenteDVCedente($contaCorrenteDVCedente)
    {
        $this->contaCorrenteDVCedente = str_pad(substr($contaCorrenteDVCedente, 0, 1), 1, '0', STR_PAD_LEFT);
    }

    /**
     * @return mixed
     */
    public function getConvenioCobrancaCedente()
    {
        return $this->convenioCobrancaCedente;
    }

    /**
     * @param mixed $convenioCobrancaCedente
     */
    public function setConvenioCobrancaCedente($convenioCobrancaCedente)
    {
        $this->convenioCobrancaCedente = str_pad(substr($convenioCobrancaCedente, 0, 7), 7, '0', STR_PAD_LEFT);
    }

    /**
     * @return mixed
     */
    public function getCodigoControleEmpresa()
    {
        return $this->codigoControleEmpresa;
    }

    /**
     * @param mixed $codigoControleEmpresa
     */
    public function setCodigoControleEmpresa($codigoControleEmpresa)
    {
        $this->codigoControleEmpresa = str_pad(substr($codigoControleEmpresa, 0, 25), 25, ' ', STR_PAD_RIGHT);
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
     */
    public function setNossoNumero($nossoNumero)
    {
        $this->nossoNumero = str_pad(substr($nossoNumero, 0, 17), 17, '0', STR_PAD_LEFT);
    }

    /**
     * @return mixed
     */
    public function getMsgSacadorAvalista()
    {
        return $this->msgSacadorAvalista;
    }

    /**
     * @param mixed $msgSacadorAvalista
     */
    public function setMsgSacadorAvalista($msgSacadorAvalista)
    {
        $this->msgSacadorAvalista = str_pad(substr($msgSacadorAvalista, 0,1), 1, ' ', STR_PAD_LEFT);
    }

    /**
     * @return mixed
     */
    public function getPrefixoTitulo()
    {
        return $this->prefixoTitulo;
    }

    /**
     * @param mixed $prefixoTitulo
     */
    public function setPrefixoTitulo($prefixoTitulo)
    {
        $this->prefixoTitulo = str_pad(substr($prefixoTitulo, 0, 3), 3, ' ', STR_PAD_LEFT);
    }

    /**
     * @return mixed
     */
    public function getVariacaoCarteira()
    {
        return $this->variacaoCarteira;
    }

    /**
     * @param mixed $variacaoCarteira
     */
    public function setVariacaoCarteira($variacaoCarteira)
    {
        $this->variacaoCarteira = str_pad(substr($variacaoCarteira, 0, 3), 3, '0', STR_PAD_LEFT);
    }

    /**
     * @return mixed
     */
    public function getContaCaucao()
    {
        return $this->contaCaucao;
    }

    /**
     * @param mixed $contaCaucao
     */
    public function setContaCaucao($contaCaucao)
    {
        $this->contaCaucao = str_pad(substr($contaCaucao, 0, 1), 1, '0', STR_PAD_LEFT);
    }

    /**
     * @return mixed
     */
    public function getNumeroBordero()
    {
        return $this->numeroBordero;
    }

    /**
     * @param mixed $numeroBordero
     */
    public function setNumeroBordero($numeroBordero)
    {
        $this->numeroBordero = str_pad(substr($numeroBordero, 0, 6), 6, '0', STR_PAD_LEFT);
    }

    /**
     * @return mixed
     */
    public function getTipoCobranca()
    {
        return $this->tipoCobranca;
    }

    /**
     * @param mixed $tipoCobranca
     */
    public function setTipoCobranca($tipoCobranca)
    {
        $this->tipoCobranca = str_pad(substr($tipoCobranca, 0, 5), 5, ' ', STR_PAD_LEFT);
    }

    /**
     * @return mixed
     */
    public function getCarteiraCobranca()
    {
        return $this->carteiraCobranca;
    }

    /**
     * @param mixed $carteiraCobranca
     */
    public function setCarteiraCobranca($carteiraCobranca)
    {
        $this->carteiraCobranca = str_pad(substr($carteiraCobranca, 0, 2), 2, '0', STR_PAD_LEFT);
    }

    /**
     * @return mixed
     */
    public function getComando()
    {
        return $this->comando;
    }

    /**
     * @param mixed $comando
     */
    public function setComando($comando)
    {
        $this->comando = str_pad(substr($comando, 0, 2), 2, '0', STR_PAD_LEFT);
    }

    /**
     * @return mixed
     */
    public function getNumTituloCedente()
    {
        return $this->numTituloCedente;
    }

    /**
     * @param mixed $numTituloCedente
     */
    public function setNumTituloCedente($numTituloCedente)
    {
        $this->numTituloCedente = str_pad(substr($numTituloCedente, 0, 10), 10, ' ', STR_PAD_LEFT);
    }

    /**
     * @return mixed
     */
    public function getDtVencimento()
    {
        return $this->dtVencimento;
    }

    /**
     * @param mixed $dtVencimento
     */
    public function setDtVencimento($dtVencimento)
    {
        $this->dtVencimento = str_pad(substr($dtVencimento, 0, 6), 6, '0', STR_PAD_LEFT);
    }

    /**
     * @return mixed
     */
    public function getVlTitulo()
    {
        return $this->vlTitulo;
    }

    /**
     * @param mixed $vlTitulo
     */
    public function setVlTitulo($vlTitulo)
    {
        $vlTitulo = str_replace($vlTitulo, '.', '');

        $this->vlTitulo = str_pad(substr($vlTitulo, 0, 13), 13, '0', STR_PAD_LEFT);
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
     */
    public function setEspecieTitulo($especieTitulo)
    {
        $this->especieTitulo = str_pad(substr($especieTitulo, 0, 2), 2, ' ', STR_PAD_LEFT);
    }

    /**
     * @return mixed
     */
    public function getAceiteTitulo()
    {
        return $this->aceiteTitulo;
    }

    /**
     * @param mixed $aceiteTitulo
     */
    public function setAceiteTitulo($aceiteTitulo)
    {
        $this->aceiteTitulo = str_pad(substr($aceiteTitulo, 0, 1), 1, ' ', STR_PAD_LEFT);
    }

    /**
     * @return mixed
     */
    public function getDtEmissaoTitulo()
    {
        return $this->dtEmissaoTitulo;
    }

    /**
     * @param mixed $dtEmissaoTitulo
     */
    public function setDtEmissaoTitulo($dtEmissaoTitulo)
    {
        $this->dtEmissaoTitulo = str_pad(substr($dtEmissaoTitulo, 0, 6), 6, ' ', STR_PAD_LEFT);
    }

    /**
     * @return mixed
     */
    public function getInstrucaoCodificada1()
    {
        return $this->instrucaoCodificada1;
    }

    /**
     * @param mixed $instrucaoCodificada1
     */
    public function setInstrucaoCodificada1($instrucaoCodificada1)
    {
        $this->instrucaoCodificada1 = str_pad(substr($instrucaoCodificada1, 0, 2), 2, ' ', STR_PAD_LEFT);
    }

    /**
     * @return mixed
     */
    public function getInstrucaoCodificada2()
    {
        return $this->instrucaoCodificada2;
    }

    /**
     * @param mixed $instrucaoCodificada2
     */
    public function setInstrucaoCodificada2($instrucaoCodificada2)
    {
        $this->instrucaoCodificada2 = str_pad(substr($instrucaoCodificada2, 0, 2), 2, ' ', STR_PAD_LEFT);
    }

    /**
     * @return mixed
     */
    public function getJurisMoraDia()
    {
        return $this->jurisMoraDia;
    }

    /**
     * @param mixed $jurisMoraDia
     */
    public function setJurisMoraDia($jurisMoraDia)
    {
        $this->jurisMoraDia = str_pad($jurisMoraDia, 13, ' ', STR_PAD_LEFT);
    }

    /**
     * @return mixed
     */
    public function getDtLimiteConcessaoDesconto()
    {
        return $this->dtLimiteConcessaoDesconto;
    }

    /**
     * @param mixed $dtLimiteConcessaoDesconto
     */
    public function setDtLimiteConcessaoDesconto($dtLimiteConcessaoDesconto)
    {
        $this->dtLimiteConcessaoDesconto = str_pad($dtLimiteConcessaoDesconto, 6, ' ', STR_PAD_LEFT);
    }

    /**
     * @return mixed
     */
    public function getVlDesconto()
    {
        return $this->vlDesconto;
    }

    /**
     * @param mixed $vlDesconto
     */
    public function setVlDesconto($vlDesconto)
    {
        $this->vlDesconto = str_pad($vlDesconto, 13, '0', STR_PAD_LEFT);
    }

    /**
     * @return mixed
     */
    public function getVlIOF()
    {
        return $this->vlIOF;
    }

    /**
     * @param mixed $vlIOF
     */
    public function setVlIOF($vlIOF)
    {
        $this->vlIOF = str_pad($vlIOF, 13, '0', STR_PAD_LEFT);
    }

    /**
     * @return mixed
     */
    public function getVlAbatimento()
    {
        return $this->vlAbatimento;
    }

    /**
     * @param mixed $vlAbatimento
     */
    public function setVlAbatimento($vlAbatimento)
    {
        $this->vlAbatimento = str_pad($vlAbatimento, 13, '0', STR_PAD_LEFT);
    }

    /**
     * @return mixed
     */
    public function getTipoOperacaoSacado()
    {
        return $this->tipoOperacaoSacado;
    }

    /**
     * @param mixed $tipoOperacaoSacado
     */
    public function setTipoOperacaoSacado($tipoOperacaoSacado)
    {
        $this->tipoOperacaoSacado = str_pad($tipoOperacaoSacado, 2, ' ', STR_PAD_LEFT);
    }

    /**
     * @return mixed
     */
    public function getCpfCnpjSacado()
    {
        return $this->cpfCnpjSacado;
    }

    /**
     * @param mixed $cpfCnpjSacado
     */
    public function setCpfCnpjSacado($cpfCnpjSacado)
    {
        $this->cpfCnpjSacado = str_pad($cpfCnpjSacado, 14, ' ', STR_PAD_LEFT);
    }

    /**
     * @return mixed
     */
    public function getNomeSacado()
    {
        return $this->nomeSacado;
    }

    /**
     * @param mixed $nomeSacado
     */
    public function setNomeSacado($nomeSacado)
    {
        $this->nomeSacado = str_pad(substr($nomeSacado, 0, 37), 37, ' ', STR_PAD_LEFT);
    }

    /**
     * @return mixed
     */
    public function getEnderecoSacado()
    {
        return $this->enderecoSacado;
    }

    /**
     * @param mixed $enderecoSacado
     */
    public function setEnderecoSacado($enderecoSacado)
    {
        $this->enderecoSacado = str_pad(substr($enderecoSacado, 0, 40), 40, ' ', STR_PAD_LEFT);
    }

    /**
     * @return mixed
     */
    public function getBairroSacado()
    {
        return $this->bairroSacado;
    }

    /**
     * @param mixed $bairroSacado
     */
    public function setBairroSacado($bairroSacado)
    {
        $this->bairroSacado = str_pad(substr($bairroSacado, 0, 12), 12, ' ', STR_PAD_LEFT);
    }

    /**
     * @return mixed
     */
    public function getCepSacado()
    {
        return $this->cepSacado;
    }

    /**
     * @param mixed $cepSacado
     */
    public function setCepSacado($cepSacado)
    {
        $this->cepSacado = str_pad(substr($cepSacado, 0, 8), 8, ' ', STR_PAD_LEFT);
    }

    /**
     * @return mixed
     */
    public function getCidadeSacado()
    {
        return $this->cidadeSacado;
    }

    /**
     * @param mixed $cidadeSacado
     */
    public function setCidadeSacado($cidadeSacado)
    {
        $this->cidadeSacado = str_pad(substr($cidadeSacado, 0, 15), 15, ' ', STR_PAD_LEFT);
    }

    /**
     * @return mixed
     */
    public function getUfCidadeSacado()
    {
        return $this->ufCidadeSacado;
    }

    /**
     * @param mixed $ufCidadeSacado
     */
    public function setUfCidadeSacado($ufCidadeSacado)
    {
        $this->ufCidadeSacado = str_pad(substr($ufCidadeSacado, 0, 2), 2, ' ', STR_PAD_LEFT);
    }

    /**
     * @return mixed
     */
    public function getObsMensagemSacadorAvalista()
    {
        return $this->obsMensagemSacadorAvalista;
    }

    /**
     * @param mixed $obsMensagemSacadorAvalista
     */
    public function setObsMensagemSacadorAvalista($obsMensagemSacadorAvalista)
    {
        $this->obsMensagemSacadorAvalista = str_pad(
            substr($obsMensagemSacadorAvalista, 0, 40),
            40,
            ' ',
            STR_PAD_LEFT
        );
    }

    /**
     * @return mixed
     */
    public function getNumDiasProtesto()
    {
        return $this->numDiasProtesto;
    }

    /**
     * @param mixed $numDiasProtesto
     */
    public function setNumDiasProtesto($numDiasProtesto)
    {
        $this->numDiasProtesto = str_pad($numDiasProtesto, 2, ' ', STR_PAD_LEFT);
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
     */
    public function setSequencialRegistro($sequencialRegistro)
    {
        $this->sequencialRegistro = str_pad(substr($sequencialRegistro, 0, 6), 6, '0', STR_PAD_LEFT);
    }

    /**
     * @return string
     * @throws \Exception
     */
    public function getDetalhesToString()
    {
        $string = $this->getIdentificacaoRegistro()
            . $this->getTipoInscricaoCedente()
            . $this->getNumeroCPFCNPJCedente()
            . $this->getPrefixoAgencia()
            . $this->getPrefixoAgenciaDV()
            . $this->getContaCorrenteCedente()
            . $this->getContaCorrenteDVCedente()
            . $this->getConvenioCobrancaCedente()
            . $this->getCodigoControleEmpresa()
            . $this->getNossoNumero()
            . $this->getNumeroPrestacao()
            . $this->getGrupoValor()
            . $this->getComplementoRegistroBranco1()
            . $this->getMsgSacadorAvalista()
            . $this->getPrefixoTitulo()
            . $this->getVariacaoCarteira()
            . $this->getContaCaucao()
            . $this->getNumeroBordero()
            . $this->getTipoCobranca()
            . $this->getCarteiraCobranca()
            . $this->getComando()
            . $this->getNumTituloCedente()
            . $this->getDtVencimento()
            . $this->getVlTitulo()
            . $this->getNumBanco()
            . $this->getPrefixoAgenciaCobradora()
            . $this->getPrefixoAgenciaDVCobranca()
            . $this->getEspecieTitulo()
            . $this->getAceiteTitulo()
            . $this->getDtEmissaoTitulo()
            . $this->getInstrucaoCodificada1()
            . $this->getInstrucaoCodificada2()
            . $this->getJurisMoraDia()
            . $this->getDtLimiteConcessaoDesconto()
            . $this->getVlDesconto()
            . $this->getVlIOF()
            . $this->getVlAbatimento()
            . $this->getTipoOperacaoSacado()
            . $this->getCpfCnpjSacado()
            . $this->getNomeSacado()
            . $this->getComplementoRegistroBranco2()
            . $this->getEnderecoSacado()
            . $this->getBairroSacado()
            . $this->getCepSacado()
            . $this->getCidadeSacado()
            . $this->getUfCidadeSacado()
            . $this->getObsMensagemSacadorAvalista()
            . $this->getNumDiasProtesto()
            . $this->getComplementoRegistroBranco3()
            . $this->getSequencialRegistro()
        ;
        echo "<!------------------------------------------------__>\n";
        if (mb_strlen($string) != 400) {
            throw new \Exception(
                "Erro ao gerar 'detalhes' da remessa, tamanho da string invalida (length: " . mb_strlen($string) . ")"
            );
        }

        return $string;
    }
}
