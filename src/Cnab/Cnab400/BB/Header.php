<?php

namespace Umbrella\Ya\RemessaBoleto\Cnab\Cnab400\BB;

class Header
{

    private $idRegistroHeader;
    private $tipoOperacao;
    private $tipoOperacaoExtenso;
    private $tipoServico;
    private $tipoServicoExtenso;
    private $complementoRegistroBranco;
    private $prefixoAgencia;
    private $prefixoAgenciaDV;
    private $contaCorrente;
    private $contaCorrenteDV;
    private $complementoRegistro;
    private $nomeCedente;
    private $idBanco;
    private $dtGravacao;
    private $sequencialRemessa;
    private $complementoRegistroBranco2;
    private $numeroConvenioLider;
    private $complementoRegistroBranco3;
    private $sequencialRegistro;

    /**
     * @return mixed
     */
    public function getIdRegistroHeader()
    {
        return $this->idRegistroHeader;
    }

    /**
     * @param mixed $idRegistroHeader
     * @return Header
     */
    public function setIdRegistroHeader($idRegistroHeader)
    {
        $this->idRegistroHeader = $idRegistroHeader;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTipoOperacao()
    {
        return $this->tipoOperacao;
    }

    /**
     * @param mixed $tipoOperacao
     * @return Header
     */
    public function setTipoOperacao($tipoOperacao)
    {
        $this->tipoOperacao = $tipoOperacao;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTipoOperacaoExtenso()
    {
        return $this->tipoOperacaoExtenso;
    }

    /**
     * @param mixed $tipoOperacaoExtenso
     * @return Header
     */
    public function setTipoOperacaoExtenso($tipoOperacaoExtenso)
    {
        $this->tipoOperacaoExtenso = $tipoOperacaoExtenso;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTipoServico()
    {
        return $this->tipoServico;
    }

    /**
     * @param mixed $tipoServico
     * @return Header
     */
    public function setTipoServico($tipoServico)
    {
        $this->tipoServico = $tipoServico;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTipoServicoExtenso()
    {
        return $this->tipoServicoExtenso;
    }

    /**
     * @param mixed $tipoServicoExtenso
     * @return Header
     */
    public function setTipoServicoExtenso($tipoServicoExtenso)
    {
        $this->tipoServicoExtenso = $tipoServicoExtenso;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getComplementoRegistroBranco()
    {
        return $this->complementoRegistroBranco;
    }

    /**
     * @param mixed $complementoRegistroBranco
     * @return Header
     */
    public function setComplementoRegistroBranco($complementoRegistroBranco)
    {
        $this->complementoRegistroBranco = str_pad(
            mb_substr($complementoRegistroBranco, 0, 7),
            7,
            " ",
            STR_PAD_RIGHT
        );

        return $this;
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
     * @return Header
     */
    public function setPrefixoAgencia($prefixoAgencia)
    {
        $this->prefixoAgencia = str_pad(
            mb_substr($prefixoAgencia, 0, 4),
            4,
            '0',
            STR_PAD_LEFT
        );

        return $this;
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
     * @return Header
     */
    public function setPrefixoAgenciaDV($prefixoAgenciaDV)
    {
        $this->prefixoAgenciaDV = str_pad(
            mb_substr($prefixoAgenciaDV, 0, 1),
            1,
            '0',
            STR_PAD_LEFT
        );

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
     * @return Header
     */
    public function setContaCorrente($contaCorrente)
    {
        $this->contaCorrente = str_pad(
            mb_substr($contaCorrente, 0, 8),
            8,
            '0',
            STR_PAD_LEFT
        );

        return $this;
    }

    /**
     * @return mixed
     */
    public function getContaCorrenteDV()
    {
        return $this->contaCorrenteDV;
    }

    /**
     * @param mixed $contaCorrenteDV
     * @return Header
     */
    public function setContaCorrenteDV($contaCorrenteDV)
    {
        $this->contaCorrenteDV = str_pad(
            mb_substr($contaCorrenteDV, 0, 1),
            1,
            '0',
            STR_PAD_LEFT
        );

        return $this;
    }

    /**
     * @return mixed
     */
    public function getComplementoRegistro()
    {
        return $this->complementoRegistro;
    }

    /**
     * @param mixed $complementoRegistro
     * @return Header
     */
    public function setComplementoRegistro($complementoRegistro)
    {
        $this->complementoRegistro = str_pad(
            mb_substr($complementoRegistro, 0, 6),
            6,
            '0',
            STR_PAD_LEFT
        );

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNomeCedente()
    {
        return $this->nomeCedente;
    }

    /**
     * @param mixed $nomeCedente
     * @return Header
     */
    public function setNomeCedente($nomeCedente)
    {
        $this->nomeCedente = str_pad(
            mb_substr($nomeCedente, 0, 30),
            30,
            ' ',
            STR_PAD_RIGHT
        );
        return $this;
    }

    /**
     * @return string
     */
    public function getIdBanco(): string
    {
        return $this->idBanco;
    }

    /**
     * @param string $idBanco
     * @return Header
     */
    public function setIdBanco(string $idBanco): Header
    {
        $this->idBanco = str_pad(
            mb_substr($idBanco, 0, 18),
            18,
            ' ',
            STR_PAD_RIGHT
        );

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDtGravacao()
    {
        return $this->dtGravacao;
    }

    /**
     * @param mixed $dtGravacao
     * @return Header
     */
    public function setDtGravacao($dtGravacao)
    {
        $this->dtGravacao = str_pad(
            mb_substr($dtGravacao, 0, 6),
            6,
            '0',
            STR_PAD_LEFT
        );

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSequencialRemessa()
    {
        return $this->sequencialRemessa;
    }

    /**
     * @param mixed $sequencialRemessa
     * @return Header
     */
    public function setSequencialRemessa($sequencialRemessa)
    {
        $this->sequencialRemessa = str_pad(
            mb_substr($sequencialRemessa, 0, 7),
            7,
            '0',
            STR_PAD_LEFT
        );

        return $this;
    }

    /**
     * @return mixed
     */
    public function getComplementoRegistroBranco2()
    {
        return $this->complementoRegistroBranco2;
    }

    /**
     * @param mixed $complementoRegistroBranco2
     * @return Header
     */
    public function setComplementoRegistroBranco2($complementoRegistroBranco2)
    {
        $this->complementoRegistroBranco2 = str_pad(
            mb_substr($complementoRegistroBranco2, 0, 22),
            22,
            " ",
            STR_PAD_RIGHT
        );

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumeroConvenioLider()
    {
        return $this->numeroConvenioLider;
    }

    /**
     * @param mixed $numeroConvenioLider
     * @return Header
     */
    public function setNumeroConvenioLider($numeroConvenioLider)
    {
        $this->numeroConvenioLider = str_pad(
            substr($numeroConvenioLider, 0, 7),
            7,
            '0',
            STR_PAD_LEFT
        );

        return $this;
    }

    /**
     * @return mixed
     */
    public function getComplementoRegistroBranco3()
    {
        return $this->complementoRegistroBranco3;
    }

    /**
     * @param mixed $complementoRegistroBranco3
     * @return Header
     */
    public function setComplementoRegistroBranco3($complementoRegistroBranco3)
    {
        $this->complementoRegistroBranco3 = str_pad(
            mb_substr($complementoRegistroBranco3, 0, 258),
            258,
            " ",
            STR_PAD_RIGHT
        );

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
     * @return Header
     */
    public function setSequencialRegistro($sequencialRegistro)
    {
        $this->sequencialRegistro = str_pad(
            mb_substr($sequencialRegistro, 0, 6),
            6,
            '0',
            STR_PAD_LEFT
        );

        return $this;
    }

    /**
     * @return string
     */
    public function getHeaderToString()
    {
        return $this->getIdRegistroHeader()
            . $this->getTipoOperacao()
            . $this->getTipoOperacaoExtenso()
            . $this->getTipoServico()
            . $this->getTipoServicoExtenso()
            . $this->getComplementoRegistroBranco()
            . $this->getPrefixoAgencia()
            . $this->getPrefixoAgenciaDV()
            . $this->getContaCorrente()
            . $this->getContaCorrenteDV()
            . $this->getComplementoRegistro()
            . $this->getNomeCedente()
            . $this->getIdBanco()
            . $this->getDtGravacao()
            . $this->getSequencialRemessa()
            . $this->getComplementoRegistroBranco2()
            . $this->getNumeroConvenioLider()
            . $this->getComplementoRegistroBranco3()
            . $this->getSequencialRegistro()
            ;
    }
}
