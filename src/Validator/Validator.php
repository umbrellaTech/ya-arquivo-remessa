<?php

namespace Umbrella\Ya\RemessaBoleto\Validator;

use Symfony\Component\Yaml\Yaml;
use Umbrella\Ya\RemessaBoleto\Enum\BancoEnum;

class Validator
{
    /**
     * arquivo que contem os dados da geracao do boleto
     */
    const CONFIG_FILE = "/../config/validator.yml";

    /**
     * @var array
     */
    private $dataValidator;


    /**
     * @var array
     */
    private $emptyFields = [];

    /**
     * @throws \Exception
     * @param int $bancoIdentificador
     */
    public function __construct(int $bancoIdentificador)
    {
        $fileValidator = dirname(__FILE__) . self::CONFIG_FILE;
        if (!file_exists($fileValidator )) {
            throw new \Exception("Arquivo de configuração nao localizado: " . $fileValidator);
        }

        $this->loadDataValidator($bancoIdentificador);
    }

    /**
     * Carrega os dados de acordo com banco passado no parametro.
     * @throws \Exception
     * @param  int    $bancoIdentificador
     * @return void
     */
    private function loadDataValidator(int $bancoIdentificador)
    {
        $fileValidator = dirname(__FILE__) . self::CONFIG_FILE;
        switch ($bancoIdentificador) {
            case BancoEnum::BRADESCO:
                $this->dataValidator = Yaml::parseFile($fileValidator)['bradesco'];
                break;

            case BancoEnum::SICOOB:
                $this->dataValidator = Yaml::parseFile($fileValidator)['sicoob'];
                break;

            case BancoEnum::CEF:
                $this->dataValidator = Yaml::parseFile($fileValidator)['cef'];
                break;

            case BancoEnum::BANCO_DO_BRASIL:
                $this->dataValidator = Yaml::parseFile($fileValidator)['bb'];
                break;
            default:
                throw new \Exception("Objeto de validação do banco não localizado " . $fileValidator);
                break;
        }
    }

    /**
     * compare validator
     * @throws \Exception
     * @param  array       dados do arquivo de remessa a ser criado
     */
    public function run($data)
    {
        $this->compareArray($this->dataValidator, $data);

        if (count($this->emptyFields)) {
            throw new \Exception("Faltando dados: " . print_r([$this->emptyFields, 'data' => $data], 1));
        }
    }

    /**
     * @param $dataValidator
     * @param $data
     * @param null $emptyFields
     */
    private function compareArray($dataValidator, $data, $emptyFields = null)
    {
        $emptyFields = $emptyFields ?? [];
        foreach (array_keys($dataValidator) as $value) {
            if (is_array($dataValidator[$value])) {
                $controller = ($value == "SEQ") ? key($data) : $value;
                $this->compareArray($dataValidator[$value], $data[$controller], $emptyFields);
                unset($data[$controller]);
                continue;
            }
            if (!isset($data[$value])) {
                $this->emptyFields[] = $value;
            }
        }
    }
}
