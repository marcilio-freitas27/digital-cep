<?php


require "vendor/autoload.php";

use Marcilio\DigitalCep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('59147070');

print_r($resultado);