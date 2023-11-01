<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid">

        <a class="navbar-brand" href="index.php">Web 2</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav container-fluid">
                <li class="nav-item dropdown">

                    <!--Dropdown Usuário-->
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user"></i> Usuário </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="cadastrarUsuario.php"><i class="fa-solid fa-plus"></i> Cadastrar</a></li>
                        <li><a class="dropdown-item" href="listarUsuario.php"><i class="fa-solid fa-address-book"></i> Listar</a></li>
                    </ul>
                </li>

                <li class="nav-item ms-auto" id="liLogin">
                    <a class="nav-link" href="login.php"><i class="fa-solid fa-right-to-bracket"></i>Login</a>
                </li>

            </ul>

        </div>
    </div>
</nav>

<!--
    Ajustar - Collapse (li - Login) - Quando ativar o collapse alterar a margin (ms-auto) do li (está ficando alinhado a direita após o collapse)
        -> 

    Integrar Boostrap sem ser via CDN
        -> OK - Integrado
-->