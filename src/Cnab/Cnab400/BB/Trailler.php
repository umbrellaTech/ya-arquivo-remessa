<?php

namespace Umbrella\Ya\RemessaBoleto\Cnab\Cnab400\BB;

class Trailler
{

    private $identificacaoRegistro  = '9';
    private $sequencialRegistro     = '0';

    /**
     * @return string
     */
    public function getSequencialRegistro(): string
    {
        return $this->sequencialRegistro;
    }

    /**
     * @param mixed $sequencialRegistro
     */
    public function setSequencialRegistro($sequencialRegistro)
    {
        $this->sequencialRegistro = $sequencialRegistro;
    }

    /**
     * @return string
     * @throws \Exception
     */
    public function getTraillerToString()
    {
        $stringTrailler =
            $this->identificacaoRegistro .
            str_pad('', 393, ' ', STR_PAD_LEFT) .
            str_pad($this->getSequencialRegistro(), 6, '0', STR_PAD_LEFT);

        if (mb_strlen($stringTrailler) != 400) {
            throw new \Exception(
                "Erro ao gerar trailler da remessa, tamanho da string invalida (length: "
                . mb_strlen($stringTrailler) . ")"
            );
        }

        return $stringTrailler;
    }
}
