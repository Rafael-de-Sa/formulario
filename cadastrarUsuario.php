<?php

require_once("conexao.php");

if (isset($_POST['cadastrarUsuario'])) {

    //$idUsuario = $_POST['idUsuario'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    require_once("conexao.php");

    $sql = "insert into usuario(nome, email, senha) values('{$nome}','{$email}','{$senha}')";

    mysqli_query($conexao, $sql);

    //var_dump($sql);

    $mensagem = "Registro salvo com sucesso.";
    //header("location: cadastrarUsuario.php");
}

require_once("cabecalho.php") ?>

<html>

<div class="container mt-3">

    <form method="post">
        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
        </div>
        <div class="row">
            <div class="mb-3 col">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="E-mail">
            </div>
            <div class="mb-3 col">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
            </div>
            <button type="submit" class="btn bg-primary" name="cadastrarUsuario">Cadastrar</button>
        </div>
    </form>

</div>

</html>