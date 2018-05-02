<?php

namespace Umbrella\Ya\RemessaBoleto\Enum;

class BancoEnum
{

    const BANCO_DO_BRASIL   = 1;

    const BRADESCO          = 237;

    const SICOOB            = 756;


    public function getNomeBanco($codigoBanco)
    {
        switch ($codigoBanco) {
            case self::BANCO_DO_BRASIL:
                return "BANCO DO BRASIL S.A";
                break;
            case self::BRADESCO:
                return "BRADESCO";
                break;
            case self::SICOOB:
                return "SICOOB";
                break;

            default:
                throw new \Exception("Banco não suportado");
                break;
        }
    }

}
