<?php

namespace Umbrella\Ya;

require("vendor/autoload.php");


use Umbrella\Ya\RemessaBoleto\Cnab\RemessaFactory;
use Umbrella\Ya\RemessaBoleto\Enum\BancoEnum;


echo "<a href='?banco=" . BancoEnum::BRADESCO ."'>Bradesco</a>";
echo "<br/>";
echo "<a href='?banco=" . BancoEnum::SICOOB . "'>SICOOB</a>";
echo "<hr>";

if (!$_GET['banco']) {return;}

$codigoBanco = $_GET['banco'];

$fileRemessa = (new RemessaFactory())->create(
    # PATH DE ONDE O ARQUIVO VAI SER SALVO
    "/tmp/",
    # ID BANCO
    // BancoEnum::SICOOB,
    $codigoBanco,
    # ARRAY DE DADOS REFERENTE AO ARQUIVO DE REMESSA
    array(
        'convenios' => [
            4928031 => [
                "convenioBancario" => 229,
                "orgao" => [
                    "orgao" => 1707,
                    "pessoa" => 1206,
                    "municipio" => 100113038,
                    "descricao" => "Instituto de Proteção Ambiental do Amazonas",
                    "codigo" => "",
                    "responsavel" => "Marcelo José de Lima Dutra",
                    "responsavelEmail" => "naoresponda@sigfacil.com.br",
                    "antigo" => null,
                    "numeroOrgao" => 30201,
                    "febraban" => null,
                    "endereco" => null,
                    "telefone" => null,
                    "exigencia" => null,
                    "orgaoSistemas" => null,
                    "orgaoSistema" => null,
                    "orgaoUsuarios" => null
                ],
                "convenio" => 4928031,
                "agencia" => 3739,
                "digitoAgencia" => 7,
                "conta" => 16065,
                "digitoConta" => 2,
                "carteira" => [
                    "carteira" => 23,
                    "banco" => 237,
                    "nome" => "09",
                    "arquivo" => "Bradesco (Com Registro)"
                ]
            ]
        ],
        'transacoes' => [
            4928031 => [
                'dam' => [
                    0 => [
                        "dam" => 1201076,
                        "tipoDocumento" => 2,
                        "tipoOrigem" => 2,
                        "taxa" => [
                                "taxa" => 273,
                                "convenioBancario" => [
                                        "convenioBancario" => 229,
                                        "orgao" => 1707,
                                        "carteira" => 23,
                                        "convenio" => 4928031,
                                        "agencia" => 3739,
                                        "digitoAgencia" => 7,
                                        "conta" => 16065,
                                        "digitoConta" => 2
                                ],
                                "valorFixo" => false,
                        ],
                        "isPago" => false,
                        "nossoNumero" => "00000000668",
                        "numeroDocumento" => 668,
                        "linhaDigitavel" => "23793739019000000006868001606505874730000020000",
                        "representacaoNumerica" => null,
                        "valor" => "200.00",
                        "desconto" => "0.00",
                        "multa" => null,
                        "juros" => null,
                        "correcaoMonetaria" => "0.00",
                        "dataEmissao" => "2018-02-22 00:00:00",
                        "dataVencimento" => "2018-03-24",
                        "baixa" => false,
                        "pessoa" => [
                            "pessoa" => 3723770,
                            "municipio" => 6001,
                            "nome" => "SERGIO HAELTON DE OLIVEIRA GIL",
                            "cpfCnpj" => "59314788768",
                            "identidade" => "038498234",
                            "orgaoEmissor" => "SSP",
                            "ufEmissor" => 100133,
                            "dtEmissao" => null,
                            "dtNascimento" => "1959-01-28",
                            "sexo" => "M",
                            "mae" => null,
                            "pai" => null,
                            "nacionalidade" => 105,
                            "endereco" => "AVENIDA DAS AMERICAS",
                            "numero" => "700",
                            "complemento" => "BLOCO 4",
                            "bairro" => "BARRA DA TIJUCA",
                            "distrito" => null,
                            "cep" => "22640100",
                            "email" => "WALENCAR@ASAP-DOCUMENTOS.COM.BR",
                            "dddTelefone" => "11",
                            "telefone" => "33051172",
                            "dddFax" => null,
                            "fax" => null,
                            "dtCadastro" => "2018-02-22 09:18:48",
                            "tipoLogradouro" => null,
                            "pais" => null,
                            "estadoCivil" => null,
                            "pessoaJunta" => null,
                            "municipioNaturalidade" => null,
                            "ufNaturalidade" => null,
                            "emancipado" => null,
                            "motivoEmancipacao" => null,
                            "caixaPostal" => null,
                            "ddiTelefone" => null,
                            "ddiFax" => null,
                            "nire" => null,
                            "registroCartorio" => null,
                            "anoRegistroCartorio" => null,
                            "cartorio" => null,
                            "nomeComarca" => null,
                            "tipoDocumento" => null,
                            "tipoPessoa" => null,
                            "passaporte" => null,
                        ]
                    ]
                ]
            ]
        ],
        'totalRemessas' => 41
    )
);


echo "<hr><pre>";

print_r(file_get_contents($fileRemessa));

exit('<hr>');