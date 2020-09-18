<?php
include('../verifica_login.php');
include_once('../conexao.php');

$consulta = "SELECT * FROM clientes ORDER by id DESC";
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

            <div class="card-body card-corpo">
                <h4 class="card-title titulo-card">Lista de Clientes</h4>
                <table class="table bg-light shadow-sm">
                    <thead class="bg-danger text-light">
                        <th>Nome do Cliente</th>
                        <th>Endereço</th>
                        <th>Telefone</th>
                        <th>E-mail</th>
                    </thead>
                    <tbody style="background: #E1F5C4;">
                        <?php while ($linhas = mysqli_fetch_assoc($resultado_consulta)) { ?>
                            <tr>
                                <td>
                                    <? echo $linhas['nome']; ?>
                                </td>
                                <td>
                                    <? echo $linhas['rua'] .' nº'.$linhas['numero'].', '.$linhas['bairro'].' - '.$linhas['cidade']; ?>
                                </td>
                                <td>
                                    <? echo $linhas['telefone'] ?>
                                </td>
                                <td>
                                    <? echo $linhas['email'] ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            <div class="card-body card-form">
                <h4 class="card-title titulo-card">Cadastrar novo cliente</h4>
                <form action="cadastrar-cliente.php" method="post">
                    <div class="form-group">
                        <label>Nome do cliente: </label>
                        <input type="text" name="nome" placeholder="Fulano de tal">
                    </div>
                    <div class="form-group">
                        <label>Rua: </label>
                        <input type="text" name="rua" placeholder="Rua, aveninda, travessa">
                    </div>
                    <div class="form-group">
                        <label>Número: </label>
                        <input type="number" name="numero" placeholder="nº 0">
                    </div>
                    <div class="form-group">
                        <label>Bairro: </label>
                        <input type="text" name="bairro" placeholder="Casa Amarela, Casa Forte, etc">
                    </div>
                    <div class="form-group">
                        <label>Cidade: </label>
                        <input type="text" name="cidade" placeholder="Recife, Olinda, Paulista, etc">
                    </div>
                    <div class="form-group">
                        <label>Telefone: </label>
                        <input type="text" name="telefone" placeholder="(00)00000-0000">
                    </div>
                    <div class="form-group">
                        <label>E-mail: </label>
                        <input type="email" name="email" placeholder="mail@mail.com">
                    </div>
                    <input type="submit" class="btn card-btn" value="Cadastrar">
                </form>
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