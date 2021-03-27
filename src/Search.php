<?php

/*nome do vendor*/
namespace Marcilio\DigitalCep;

class Search{
    private $url = "https://viacep.com.br/ws/";

    public function getAddressFromZipcode(string $zipCode): array{
        //tudo que for número será removido
        $zipode = preg_replace('/[^0-9]/im', '', $zipCode);
        //requisição na url passando o cep em json
        $get = file_get_contents($this->url . $zipCode . "/json");

        //retorno de array(conversao);
        return (array)json_decode($get);
    }
}