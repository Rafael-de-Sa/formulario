<?php


$servidor = "localhost";
$usuario = "root";
$senha = "";
$basededados = "web2";
$conexao = mysqli_connect($servidor, $usuario, $senha, $basededados);
/*
if ($conexao->connect_error) {
    die("Conexão Falhou: " . $conexao->connect_error);
}*/
?>