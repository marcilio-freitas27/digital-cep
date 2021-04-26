<?php

namespace Marcilio\DigitalCep;

use Marcilio\DigitalCep\ws\ViaCep;

class Search
{
    private $url = "https://viacep.com.br/ws/";

    public function getAddressFromZipcode(string $zipCode): array
    {
        $zipCode = preg_replace('/[^0-9]/im', '', $zipCode);

        return $this->getFromServer($zipCode);
    }

    private function getFromServer(string $zipCode): array
    {
        $get = new ViaCep();

        return $get->get($zipCode);
    }
}
