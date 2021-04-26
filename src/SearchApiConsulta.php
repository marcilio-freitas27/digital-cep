<?php

/*nome do vendor*/
namespace Marcilio\DigitalCep;

use Marcilio\DigitalCep\Search;

class SearchApiConsulta extends Search
{
    private $url = "https://ws.apicep.com/cep/";
    public function getAddressFromZipcode(string $zipCode): array
    {
        //type; .json, .xml, .js... etc(nem todos funcionam)
        $get = file_get_contents($this->url . $zipCode . ".json");

        return (array) json_decode($get);
    }
}
