<?php

namespace Umbrella\Ya\RemessaBoleto\Builder;

use Locale;
use Symfony\Component\Yaml\Yaml;
use Umbrella\Ya\RemessaBoleto\Enum\BancoEnum;

class Builder
{
    /**
     * arquivo que contem os dados da geracao do boleto
     */
    const CONFIG_FILE = "/../config/params.yml";

    /**
     * Builder constructor.
     * @param int $bancoIdentificador
     * @throws \Exception
     */
    public function __construct(int $bancoIdentificador)
    {
        $fileValidator = dirname(__FILE__) . self::CONFIG_FILE;
        if (!file_exists($fileValidator)) {
            throw new \Exception("Arquivo de configuração nao localizado: {$fileValidator}");
        }

        $this->carregarDadosBoletoBanco($bancoIdentificador);
    }

    /**
     * @param int $bancoIdentificador
     * @throws \Exception
     */
    private function carregarDadosBoletoBanco(int $bancoIdentificador)
    {
        $fileValidator = dirname(__FILE__) . self::CONFIG_FILE;
        switch ($bancoIdentificador) {
            case BancoEnum::BRADESCO:
                $this->dadosBoleto = Yaml::parseFile($fileValidator)['cnab400']['bradesco'];
                break;

            case BancoEnum::SICOOB:
                $this->dadosBoleto = Yaml::parseFile($fileValidator)['cnab400']['sicoob'];
                break;

            case BancoEnum::BANCO_DO_BRASIL:
                $this->dadosBoleto = Yaml::parseFile($fileValidator)['cnab400']['bb'];
                break;

            case BancoEnum::CEF:
                $this->dadosBoleto = Yaml::parseFile($fileValidator)['cnab400']['cef'];
                break;

            default:
                throw new \Exception("Dados de boleto do banco não localizado {$fileValidator}");
                break;
        }
    }

    /**
     * @return string
     */
    protected function concatenarDados()
    {
        $args   = func_get_args();
        $output = '';

        foreach ($args as $dado) {
            $output .= "{$dado}";
        }

        return isset($output) ? $output : "";
    }

    /**
     * @param $string
     * @return int
     */
    protected function parseInteger($string)
    {
        $retorno = preg_replace("/[^0-9]/", '', trim($string));
        return (int) $retorno;
    }

    /**
     * @param $string
     * @return null|string|string[]
     */
    protected function removerAcentos($string)
    {
        // pega a locale default como backup.
        $locale = Locale::getDefault();
        // muda pra locale que trabalha os acentos
        setlocale(LC_CTYPE, 'pt_BR.utf-8');
        // retira os acentos.
        $acentosRemovidos = preg_replace(
            '#[`^~\'´"]#',
            null,
            iconv(mb_detect_encoding($string), 'ASCII//TRANSLIT', $string)
        );
        // retorna a locale para a que era anterior a manipulação da string.
        setlocale(LC_CTYPE, $locale);
        return strtoupper($acentosRemovidos);
    }

    /**
     * @param $arrConvenio
     * @return int|string
     */
    protected function getSeqConvenio($arrConvenio)
    {
        foreach ($arrConvenio as $key => $value) {
            return $key;
        };
    }


}
