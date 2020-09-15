<?php
include('../verifica_login.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,400;0,700;1,300;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Delivery Free - Login</title>
</head>

<body>
    <header id="topo">
        <? include('../menu.php') ?>
    </header>
    <main id="principal-dash">
        <div class="usuario">
            <? echo 'Bem vindo: '. $_SESSION['usuario']; ?>
        </div>
        <section>
            <ul class="nav menu-bg">
                <li class="nav-item menu-body">
                    <a class="nav-link" href="pedidos.php">Fazer Pedido</a>
                </li>
                <li class="nav-item menu-body">
                    <a class="nav-link" href="clientes.php">Cadastrar clientes</a>
                </li>
                <li class="nav-item menu-body">
                    <a class="nav-link" href="financeiro.php">Lucro do dia</a>
                </li>
            </ul>
        </section>
        <section class="conteudo">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Título do card</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Subtitulo do card</h6>
                    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                    <a href="#" class="card-link">Link do card</a>
                    <a href="#" class="card-link">Outro link</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Título do card</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Subtitulo do card</h6>
                    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                    <a href="#" class="card-link">Link do card</a>
                    <a href="#" class="card-link">Outro link</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Título do card</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Subtitulo do card</h6>
                    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                    <a href="#" class="card-link">Link do card</a>
                    <a href="#" class="card-link">Outro link</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Título do card</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Subtitulo do card</h6>
                    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                    <a href="#" class="card-link">Link do card</a>
                    <a href="#" class="card-link">Outro link</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Título do card</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Subtitulo do card</h6>
                    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                    <a href="#" class="card-link">Link do card</a>
                    <a href="#" class="card-link">Outro link</a>
                </div>
            </div>
        </section>
    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>