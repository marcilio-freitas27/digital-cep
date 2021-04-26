<?php

session_start();

function mensagemSessao(string $mensagem): string {
    return $_SESSION['msg'] = $mensagem;
}

function mensagemErro(string $mensagem_erro): string {
    return $_SESSION['erro'] = $mensagem_erro;
}
