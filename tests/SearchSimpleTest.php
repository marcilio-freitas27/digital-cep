<?php

use PHPUnit\Framework\TestCase;
use Marcilio\DigitalCep\Search;


/**
 * @covers Marcilio\DigitalCep\Search
 */
class SearchSimpleTest extends TestCase{

    public function testGetAddressFromZipcodeDefaultUsage(){
        $resultado = new Search;
        $resultado = $resultado->getAddressFromZipcode('59147070');

        $esperado = [  
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
         ];
 
        $this->assertEquals($esperado, $resultado);
    }

}