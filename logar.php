<?php
require_once('conexao.php');

/*Melhorar anti injection SQL*/
$email = addslashes($_POST["email"]);
$senha = addslashes($_POST['senha']);

$sql = "SELECT * FROM usuario WHERE email='$email'";
$resultado = mysqli_query($conexao, $sql);
$totalDeRegistros = mysqli_num_rows($resultado);
$usuario = mysqli_fetch_array(($resultado));

if (($totalDeRegistros == 1) && password_verify($senha, $usuario['senha'])) {
    if (!isset($_SESSION)) {
        session_start();
        $_SESSION['id'] = $usuario['id'];
        header('Location: ./adm.php');
        die();
    } else {
        $mensagem = "Usuário/Senha Inválidos";
        header('Location: ./login.php');
        die();
    }
} else {
    $mensagem = "Usuário/Senha Inválidos";
    header("location: login.php?mensagem={$mensagem}");
    die();
}


/*
if (mysqli_num_rows($resultado) > 0) {
    header('Location: ./adm.php');
    die();
} else {
    header('Location: ./login.php');
    die();
}
*/