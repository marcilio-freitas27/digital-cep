<?php

use Spatie\ArrayToXml\ArrayToXml;

function escolherExtensao($resultado, $resultado_api, $resultado_correios, string $ext): void {
    if ($ext == "json"){
        mensagemSessao("<pre class='col-lg-4'>ViaCep<br><br>" . json_encode($resultado,JSON_PRETTY_PRINT) . "</pre><pre class='col-lg-4'>Ws.apicep<br><br>" . json_encode($resultado_api,JSON_PRETTY_PRINT) . "</pre><pre class='col-lg-4'>Cepla-correios<br><br>" . json_encode($resultado_correios,JSON_PRETTY_PRINT)) . "</pre>";
    }
    else if ($ext == "xml"){
        $arrayToXml = ArrayToXml::convert($resultado);//convertendo o array em XML
        $arrayToXml_api = ArrayToXml::convert($resultado_api);
        $arrayToXml_correios = ArrayToXml::convert($resultado_correios);

        mensagemSessao("<p class='col-lg-4'>Viacep<br><br>" . htmlentities("\n" . $arrayToXml) . "</p><p class='col-lg-4' >Ws.apicep<br><br>" . htmlentities("\n" . $arrayToXml_api) . "</p><p class='col-lg-4' >Cepla-correios<br><br>" . htmlentities("\n" . $arrayToXml_correios)) ."</p>";

    } 
    else if ($ext == "array"){
        mensagemSessao("<pre class='col-lg-4'>ViaCep<br><br>" . print_r($resultado,true) . "</pre><pre class='col-lg-4'>Ws.apicep<br><br>" . print_r($resultado_api, true) . "</pre><pre class='col-lg-4'>Cepla-correios<br><br>" . print_r($resultado_correios, true)) . "</pre>";
        // <pre> = exibição vertical no navegador
    }
    else {
        mensagemErro("<p id='erro'>Escolha entre um dos 3 tipos de extensão.</p");
    }

}
