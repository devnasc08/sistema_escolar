<?php
// Mensagem de erro
 ini_set('display_errors',1);
 ini_set('display_startup_erros',1);
 error_reporting(E_ALL);


//Config com o banco
$host = "192.168.15.92";
$usuario = "root";
$senha = "P@ssw0rd";
$banco = "escola";

try{
    $pdo = new PDO("mysql:host=$host;dbname=$banco;charset=utf8",$usuario,$senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // echo "Sucess";
    // var_dump($pdo);
}catch(PDOException $e){
    // var_dump($e->getMessage());
    die("Erro na conexão: ".$e->getMessage());
}

// Criando a Conexão
$conn = new mysqli($host, $usuario, $senha, $banco);

// Erro
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

$conn->set_charset("utf8");


?>