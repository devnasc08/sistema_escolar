<?php
require_once "php/conexao.php";

$conexao = Conexao::getConexao();

if ($conexao){
    echo "Conectado com Sucesso!"
}

?>