<?php require_once("conexao.php");
require_once("cabecalho.php"); ?>

<html>
<div class="container mt-3">
    <form method="post">
        <!--Usuário-->
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="E-mail">
        </div>

        <!--Senha-->
        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" placeholder="Senha">
        </div>

        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
</div>

</html>