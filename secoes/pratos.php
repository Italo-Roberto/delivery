<?php
include('../verifica_login.php');
include_once('../conexao.php');

$consulta = "SELECT * FROM pratos ORDER by id DESC";
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
    <title>Delivery Free</title>
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
            <div class="card-body card-corpo">
                <h4 class="card-title titulo-card">Todos os Pratos</h4>
                <table class="table bg-light shadow-sm">
                    <thead class="bg-danger text-light">
                        <th>Foto</th>
                        <th>Nome do Prato</th>
                        <th>Ingredientes</th>
                        <th>Valor</th>
                    </thead>
                    <tbody style="background: #E1F5C4;">
                        <?php while ($linhas = mysqli_fetch_assoc($resultado_consulta)) { ?>
                            <tr>
                                <td>
                                    <? echo '<img src="../img/pratos/'. $linhas['nome_imagem'] .'" style="width: 100px; margin: auto;">'; ?>
                                </td>
                                <td>
                                    <? echo $linhas['prato']; ?>
                                </td>
                                <td>
                                    <? echo $linhas['ingredientes']; ?>
                                </td>
                                <td>
                                    <? setlocale(LC_MONETARY, 'pt_BR'); echo 'R$ '. money_format('%.2n', $linhas['valor']) . " \n"; ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="card ">
                <div class="card-body card-form">
                    <h4 class="card-title titulo-card">Cadastrar novo prato</h4>
                    <form action="cadastrar-prato.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Foto do prato</label>
                            <input type="file" class="form-control" name="foto" title="Adicionar Arquivo">
                        </div>
                        <div class="form-group">
                            <label>Nome do prato: </label>
                            <input type="text" name="prato" placeholder="Filé com fritas, pizza, hamburguer, etc">
                        </div>
                        <div class="form-group">
                            <label>Ingredientes: </label>
                            <input type="text" name="ingredientes" placeholder="Carner, queijo, molho de tomate, etc">
                        </div>
                        <div class="form-group">
                            <label>Valor: </label>
                            <input type="number" name="valor" placeholder="R$0,00">
                        </div>
                        <input type="submit" class="btn card-btn" value="Cadastrar">
                    </form>
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