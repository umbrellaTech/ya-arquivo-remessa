<?php

namespace Umbrella\Ya\RemessaBoleto\Cnab\Cnab400\SICOOB;

class Trailler
{

    protected $identificacaoRegistro = 9;

    protected $complementoRegistro = ' ';

    protected $msgBeneficiario = ' ';

    protected $sequencialRegistro;

    public function getIdentificacaoRegistro()
    {
        return $this->identificacaoRegistro;
    }

    public function setIdentificacaoRegistro($identificacaoRegistro)
    {
        $this->identificacaoRegistro = $identificacaoRegistro;
    }

    public function getComplementoRegistro()
    {
        return $this->complementoRegistro;
    }

    public function setComplementoRegistro($complementoRegistro)
    {
        $this->complementoRegistro = $complementoRegistro;
    }

    public function getMsgBeneficiario()
    {
        return $this->msgBeneficiario;
    }

    public function setMsgBeneficiario($msgBeneficiario)
    {
        $this->msgBeneficiario = $msgBeneficiario;
    }

    public function getSequencialRegistro()
    {
        return $this->sequencialRegistro;
    }

    public function setSequencialRegistro($sequencialRegistro)
    {
        $this->sequencialRegistro = $sequencialRegistro;
    }

    public function getTraillerToString()
    {
        $stringTrailler = $this->getIdentificacaoRegistro()
            . str_pad('', 193, ' ', STR_PAD_LEFT)
            . str_pad('', 200, ' ', STR_PAD_LEFT)
            . str_pad($this->getSequencialRegistro(), 6, 0, STR_PAD_LEFT);

        if (mb_strlen($stringTrailler) != 400) {
            throw new \Exception(
                "Erro ao gerar trailler da remessa, tamanho da string invalida (length: "
                . mb_strlen($stringTrailler) . ")"
            );
        }

        return $stringTrailler;
    }
}
