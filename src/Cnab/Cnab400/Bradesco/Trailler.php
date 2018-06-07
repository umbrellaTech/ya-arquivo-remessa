<?php

namespace Umbrella\Ya\RemessaBoleto\Cnab\Cnab400\Bradesco;

class Trailler
{

    /**
     * @var int
     */
    protected $identificacaoRegistro = 9;

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
        $this->sequencialRegistro = str_pad($sequencialRegistro, 6, 0, STR_PAD_LEFT);
    }

    /**
     * @return string
     */
    public function getTraillerToString()
    {
        $stringTrailler = $this->getIdentificacaoRegistro()
            . str_pad('', 193, ' ', STR_PAD_LEFT)
            . str_pad('', 40, ' ', STR_PAD_LEFT)
            . str_pad('', 40, ' ', STR_PAD_LEFT)
            . str_pad('', 40, ' ', STR_PAD_LEFT)
            . str_pad('', 40, ' ', STR_PAD_LEFT)
            . str_pad('', 40, ' ', STR_PAD_LEFT)
            . str_pad($this->getSequencialRegistro(), 6, 0, STR_PAD_LEFT)
        ;

        if (mb_strlen($stringTrailler) != 400) {
            throw new \Exception(
                "Erro ao gerar trailler da remessa, tamanho da string invalida (length: "
                . mb_strlen($stringTrailler) . ")"
            );
        }

        return $stringTrailler;
    }
}
