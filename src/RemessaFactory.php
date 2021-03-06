<?php


namespace Umbrella\Ya\RemessaBoleto;

use Umbrella\Ya\RemessaBoleto\Enum\BancoEnum;
use Umbrella\Ya\RemessaBoleto\Builder\BradescoCnab400Builder;
use Umbrella\Ya\RemessaBoleto\Builder\SicoobCnab400Builder;
use Umbrella\Ya\RemessaBoleto\Builder\BBCnab400Builder;
use Umbrella\Ya\RemessaBoleto\Builder\CEFCnab400Builder;
use Umbrella\Ya\RemessaBoleto\Validator\Validator;

class RemessaFactory
{

    /**
     * Caminho da pasta onde salva o arquivo
     * @var string
     */
    private $path;

    /**
     * caminho absoluto do arquivo de remessa
     * @var string
     */
    private $remessaFile;

    /**
     * builder do arquivo cnab de remessa
     */
    private $cnabBuilder;

    /**
     * cria o arquivo de remesssa
     * @return string
     */
    public function create(string $path, int $bancoIdentificador, array $dadosArrecadacao)
    {
        try {

            return $this
                ->validarDadosBoleto($bancoIdentificador, $dadosArrecadacao)
                ->path($path)
                ->configure($bancoIdentificador, $dadosArrecadacao)
                ->build()
                ->createFile()
                ->remessaFile
            ;

        } catch (\Exception $e) {
            var_dump($e);
            exit;
        } catch (\TypeError $typeError) {
            var_dump($typeError);
            exit;
        }
    }

    /**
     * Define o path
     * @param  string $path
     * @return RemessaFactory
     * @throws \Exception
     */
    private function path(string $path)
    {
        if (!is_dir($path) || !is_writable($path)) {
            throw new \Exception("Local especificado para gravar o arquivo é invalido ou não é permitido gravar o arquivo na pasta {$path}");
        }
        $this->path = rtrim($path, "/");
        return $this;
    }

    /**
     * define a classe que gera o arquivo
     * @throws \Exception
     * @param  int    $bancoIdentificador
     * @param  array  $dadosArrecadacao
     * @return RemessaFactory
     */
    private function configure(int $bancoIdentificador, array $dadosArrecadacao)
    {
        /** @description: define o builder de acordo com o identificador do banco */
        switch ($bancoIdentificador) {
            case BancoEnum::BRADESCO:
                $this->cnabBuilder = new BradescoCnab400Builder($dadosArrecadacao);
                break;
            case BancoEnum::SICOOB:
                $this->cnabBuilder = new SicoobCnab400Builder($dadosArrecadacao);
                break;
            case BancoEnum::CEF:
                $this->cnabBuilder = new CEFCnab400Builder($dadosArrecadacao);
                break;
            case BancoEnum::BANCO_DO_BRASIL:
                $this->cnabBuilder = new BBCnab400Builder($dadosArrecadacao);
                break;
            default:
                throw new \Exception(
                    "Banco não suportado: "
                    . (new BancoEnum())->getNomeBanco($bancoIdentificador)
                    . " ({$bancoIdentificador})"
                );
                break;
        }
        return $this;
    }

    /**
     * chama a classe para atribuir os dados do arquivo de remessa
     * @throws \Exception
     * @return RemessaFactory
     */
    private function build()
    {
        if (empty($this->cnabBuilder)) throw new \Exception("Builder nao configurado!");
        $this->cnabBuilder->build($this->path);
        return $this;
    }

    /**
     * [createFile description]
     * @return RemessaFactory
     */
    private function createFile()
    {
        $this->remessaFile = $this->cnabBuilder->montarArquivo($this->path);
        return $this;
    }

    /**
     * Validar dados do boleto
     * @return RemessaFactory
     */
    private function validarDadosBoleto($identificadorBanco, $dadosArrecadacao)
    {
        $validator = new Validator($identificadorBanco);

        $validator->run($dadosArrecadacao);

        return $this;
    }
}
