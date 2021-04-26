
<?php

function validaCep(string $cep): bool{
    if (empty($cep)){
        mensagemErro("<p id='erro'>Por favor insira o cep!!</p>");
        return false;
    }
    else if (strlen($cep) < 8){
        mensagemErro("<p id='erro'>Insira a quantidade correta de digitos(cep menor que 8).</p>");
        return false;
    }
    else if (strlen($cep) > 8){
        mensagemErro("<p id='erro'>Insira a quantidade correta de digitos(cep maior que 8).</p>");
        return false;
    }
    mensagemErro("<p id='sucesso'>Consulta feita com sucesso.</p>");
    return true;
}
