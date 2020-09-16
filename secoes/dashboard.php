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
    <title>Delivery Free</title>
</head>

<body>
    <header id="topo">
        <? include('../menu.php') ?>
    </header>
    <main id="principal-dash">
        <div class="usuario">
            <? echo 'Bem vindo: '. $_SESSION['usuario'];?>
        </div>
        <section class="conteudo-principal">
            <div class="card card-corpo">
                <img class="card-img-top card-imagem" src="../img/burger.jpg" alt="Hamburger">
                <div class="card-body">
                    <h4 class="card-title titulo-card">Últimos Pedidos</h4>
                    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                    <a href="pedidos.php" class="btn card-btn">Ver todos os pedidos</a>
                </div>
            </div>
            <div class="card card-corpo">
                <img class="card-img-top card-imagem" src="../img/pizza.jpg" alt="Pratos mais pedidos">
                <div class="card-body">
                    <h4 class="card-title titulo-card">Pratos Mais Pedidos</h4>
                    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                    <a href="pedidos.php" class="btn card-btn">Ver todos os pratos</a>
                </div>
            </div>
            <div class="card card-corpo">
                <img class="card-img-top card-imagem" src="../img/money.jpg" alt="Financeiro">
                <div class="card-body">
                    <h4 class="card-title titulo-card">Vendas do dia</h4>
                    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                    <a href="pedidos.php" class="btn card-btn">Ver todas as vendas</a>
                </div>
            </div>
        </section>
    </main>

    <footer id="rodape">
        <? setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('America/Recife');
        echo 'Recife - '. strftime('%d de %B de %Y', strtotime('today')), date(' H:i'); ?>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>