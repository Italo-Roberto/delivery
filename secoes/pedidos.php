<?php
include('../verifica_login.php');
include('../conexao.php');

$consulta = "SELECT * FROM pedidos ORDER by id DESC";
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
    <title>Delivery Free - Pedidos</title>
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
            <div class="card card-corpo">
                <div class="card-body">
                    <h4 class="card-title titulo-card">Últimos Pedidos</h4>
                    <table class="table bg-light">
                        <thead class="bg-danger text-light">
                            <th>Cliente</th>
                            <th>Pratos</th>
                            <th>Endereço de Entrega</th>
                            <th>Valor</th>
                        </thead>
                        <tbody style="background: #E1F5C4;">
                            <?php while ($linhas = mysqli_fetch_array($resultado_consulta)) { ?>
                                <tr>
                                    <td><? echo $linhas['nome']; ?></td>
                                    <td><? echo $linhas['prato[], quantidade[]']; ?></td>
                                    <td><? echo $linhas['rua'] .' nº'.$linhas['numero'].', '.$linhas['bairro'].' - '.$linhas['cidade']; ?></td>
                                    <td><? echo $linhas['valor'] + $linhas['entrega']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card card-form">
                <form action="" id="formDados" class="d-flex flex-row p-3" method="post">
                    <article>
                        <h4 class="card-title titulo-card">Novo Pedido</h4>
                        <div id="formulario" class="form-group">
                            <label>Prato:
                                <input type="list" list="pratos" name="prato[]" placeholder="Hamburguer, pizza ...">
                                <datalist id="pratos">
                                    <?php $consulta_pratos = "SELECT prato FROM pratos ORDER by id DESC"; 
                                    $resultado_pratos = mysqli_query($conexao, $consulta_pratos);

                                    while($linha_pratos = mysqli_fetch_array($resultado_pratos)){ ?>
                                        <option value="<? echo $linha_pratos['prato'] ?>"></option>
                                    <?php } ?> 
                                </datalist>
                            </label> <button type="buttom" id="add" class="btn card-btn">+</button>
                            <label>Quantidade:
                                <input type="number" class="w-25" name="quantidade[]">
                            </label>
                        </div>
                        <div class="form-group">
                            <label>Cliente: </label>
                            <input type="list" list="clientes" name="cliente" placeholder="Fulano, cicrano ...">
                            <datalist id="clientes">
                                    <?php $consulta_clientes = "SELECT nome FROM clientes ORDER by id DESC"; 
                                    $resultado_clientes = mysqli_query($conexao, $consulta_clientes);

                                    while($linha_clientes = mysqli_fetch_array($resultado_clientes)){ ?>
                                        <option value="<? echo $linha_clientes['nome'] ?>"></option>
                                    <?php } ?>
                            </datalist>
                        </div>
                        <div class="form-group">
                            <label>Observações: </label><br>
                            <textarea name="obs" cols="30" rows="10" placeholder="Detalhes do pedido, ponto de referência do endereço, guardanapo extra, etc."></textarea>
                        </div>
                    </article>

                    <div>
                        <div class="form-group">
                            <label>Valor: </label>
                            <input type="text" class="w-50" name="valor" placeholder="R$0,00" value="<? $linhas['valor']?>">
                        </div>
                        <div class="form-group">
                            <label>Entrega: </label>
                            <input type="text" class="w-50" name="entrega" placeholder="R$0,00" value="5.00">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn card-btn" value="Fechar pedido">
                        </div>
                    </div>
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
    <script>
        $(document).ready(function() {
            /*desabilita o submit do form*/
            $("#formDados").submit(function() {
                return false;
            });
        });
        //https://api.jquery.com/click/
        $("#add").click(function() {
            //https://api.jquery.com/append/
            $("#formulario").append('<div class="form-group"><label>Prato: </label> <input type="text" name="prato[]" placeholder="Nome do prato"> <label>Quantidade:<input type="number" class="w-25" name="quantidade[]"></label></div>');
        });
    </script>
</body>

</html>