<?php
include('../verifica_login.php');
include_once('../conexao.php');

$consulta = "SELECT * FROM financeiro ORDER by id DESC";
$resultado_consulta = mysqli_query($conexao, $consulta);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,400;0,700;1,300;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Delivery Free - Clientes</title>
</head>

<body>
    <header id="topo">
        <? include('../menu.php') ?>
    </header>
    <main id="principal-dash">
        <div class="container d-flex flex-row justify-content-start align-items-center">
            <div class="usuario">
                <? echo 'Bem vindo: '. $_SESSION['usuario'];?>
            </div>
            <img src="../img/logo_edit.png" class="w-25 mx-auto" alt="Logo">
        </div>
        <section class="conteudo-principal">

            <div class="container d-flex flex-row flex-wrap justify-content-center mb-5">
                <div class="d-flex flex-column p-3 mx-5 shadow-sm rounded" style="background: #F9D423;border: #EDE574 solid 1px;">
                    <img src="../img/despesas.svg" class="icone" alt="Despeas">
                    <h5>Despesas</h5>
                </div>
                <div class="d-flex flex-column p-3 mx-5 shadow-sm rounded" style="background: #F9D423;border: #EDE574 solid 1px;">
                    <img src="../img/areceber.svg" class="icone" alt="Despeas">
                    <h5>A receber</h5>
                </div>
                <div class="d-flex flex-column p-3 mx-5 shadow-sm rounded" style="background: #F9D423;border: #EDE574 solid 1px;">
                    <img src="../img/receitas.svg" class="icone" alt="Despeas">
                    <h5>Receitas</h5>
                </div>
            </div>

            <div class="card-corpo">
                <h4 class="titulo-card">Despesas do dia</h4>
            </div>
            <div class="card-corpo">
                <h4 class="titulo-card">A receber até agora</h4>
            </div>
            <div class="card-corpo">
                <h4 class="titulo-card">Receitas do dia</h4>
            </div>

        </section>
    </main>

    <footer id="rodape">
        <? setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('America/Recife');
        echo 'Recife - '. strftime('%d de %B de %Y', strtotime('today')), date(' H:i'); ?>
    </footer>

    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>