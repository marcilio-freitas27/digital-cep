<?php

use PHPUnit\Framework\TestCase;
use Marcilio\DigitalCep\Search;


/**
 * @covers Marcilio\DigitalCep\Search
 */
class SearchTest extends TestCase{

    /**
     * @dataProvider dadosTeste
     */
    public function testGetAddressFromZipcodeDefaultUsage(string $input, array $esperado){
        $resultado = new Search;
        $resultado = $resultado->getAddressFromZipcode($input);

        $this->assertEquals($esperado, $resultado);
    }
    //teste com vários dados
    public function dadosTeste(){
        return [
            "Endereço Nova Conquista"=> [
                "59147070",
                [
                    "cep" => "59147-070",
                    "logradouro"=> "Rua Nova Conquista",
                    "complemento" => "",
                    "bairro" => "Vida Nova",
                    "localidade" => "Parnamirim",
                    "uf" => "RN",
                    "ibge" => "2403251",
                    "gia" => "",
                    "ddd" => "84",
                    "siafi" => "1779"
                ]
            ],
            "Endereço Qualquer"=> [
                "01001000",
                [
                    "cep"=> "01001-000",
                    "logradouro"=> "Praça da Sé",
                    "complemento"=> "lado ímpar",
                    "bairro"=> "Sé",
                    "localidade"=> "São Paulo",
                    "uf"=> "SP",
                    "ibge"=> "3550308",
                    "gia"=> "1004",
                    "ddd"=> "11",
                    "siafi"=> "7107"
                ]
            ]
        ];
    }
}