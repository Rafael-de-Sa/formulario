<?php
require_once("cabecalho.php");
require_once("conexao.php");
/*$cont = 1*/
$mensagem = (isset($_GET['mensagem'])) ? $_GET['mensagem'] : "";

if (isset($_POST['excluir'])) {
    $sql = "delete from usuario where id = " . $_POST['idUsuario'];
    mysqli_query($conexao, $sql);
    $mensagem = "Registro excluído com sucesso.";
}
/* if (isset($_POST['PESQUISAR'])){
    $pesquisar = $_POST['PESQUISAR'];
$sql2 = "select * from usuario where
 (nome LIKE '%$pesquisar%') OR (email LIKE '%$PESQUISAR%') ORDER BY nome ASC";
 
 $resultado2 = mysqli_query($conexao, $sql2);

$totalRegistros = mysqli_num_rows($resultado2);
}*/
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
            <th scope="col">Ações</th>
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

                <td class="align-middle">
                    <div class="botaoTabela">
                        <a href="alterarUsuario.php?id=<?= $linha['id'] ?>">
                            <button type="button" class="btn btn-primary btn-sm"><i class="far fa-edit"></i></button>
                        </a>
                        <form action="listarUsuario.php" method="post" onsubmit="return confirm('Confirma exclusão?')">
                            <input type="hidden" name="idUsuario" value="<?= $id ?>">
                            <button name="excluir" type="submit" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </div>
                </td>

            </tr>
        <?php } ?>
    </tbody>

</table>