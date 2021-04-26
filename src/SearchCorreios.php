<?php

/*nome do vendor*/
namespace Marcilio\DigitalCep;

use Marcilio\DigitalCep\Search;

class SearchCorreios extends Search{
    private $url = 'http://cep.la/';
    public function getAddressFromZipcode($zipCode): array{
        $opts = [
            "http" => [
                "method" => "GET",
                "header" => "Accept: application/json\r\n"
            ]
        ];
        
        $context = stream_context_create($opts);
        
        $get = file_get_contents($this->url . $zipCode, false, $context);

        return (array)json_decode($get);
    }
}

