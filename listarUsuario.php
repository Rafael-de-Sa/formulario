<?php
require_once("cabecalho.php");
require_once("conexao.php");

$mensagem = (isset($_GET['mensagem'])) ? $_GET['mensagem'] : "";

$sql = "select * from usuario";

$resultado = mysqli_query($conexao, $sql);

$totalRegistros = mysqli_num_rows($resultado);



?>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Senha</th>
        </tr>
    </thead>

    <tbody>

        <?php while ($linha = mysqli_fetch_array($resultado)) {
            $id = $linha['id']; ?>
            <tr>
                <th class="align-middle"><?= $id ?></th>
                <td class="align-middle"><?= $linha['nome'] ?></td>
                <td class="align-middle"><?= $linha['email'] ?></td>
                <td class="align-middle"><?= $linha['senha'] ?></td>

                <td class="d-flex">
                    <div>
                        <a href="alterarUsuario.php?id=<?= $linha['id'] ?>">
                            <button type="button" class="btn btn-primary btn-sm ms-5 me-2 my-5" ><i class="far fa-edit"></i></button>
                        </a>
                    </div>



                </td>

            </tr>
        <?php } ?>
    </tbody>

</table>