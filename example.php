
<?php

# imports
require "vendor/autoload.php";
require "functions/mensagemSessao.php";
require "functions/escolherExtensao.php";
require "functions/validaCep.php";

# packages
use Marcilio\DigitalCep\Search;
use Marcilio\DigitalCep\SearchApiConsulta;
use Marcilio\DigitalCep\SearchCorreios;

# http posts
$busca_cep = $_POST['cep'];
$extensao = $_POST['ext'];

# instances
$search = new Search;
$search_api = new SearchApiConsulta;
$search_correios = new SearchCorreios;
$resultado = $search->getAddressFromZipcode($busca_cep);
$resultado_api = $search_api->getAddressFromZipcode($busca_cep);
$resultado_correios = $search_correios->getAddressFromZipcode($busca_cep);

# functions
if (validaCep($busca_cep)){
    escolherExtensao($resultado, $resultado_api,$resultado_correios,$extensao);
}

header('location: index.php');

