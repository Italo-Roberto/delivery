<?php

include('conexao.php');

$usuario = ($_POST['usuario']);
$senha = ($_POST['senha']);

$consulta = "INSERT INTO usuario (usuario, senha) VALUES ('$usuario', MD5('$senha'))";
$resultado_consulta = mysqli_query($conexao, $consulta);

if ($resultado_consulta) {
    header('Location: http://localhost/delivery/index.php');
}

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,400;0,700;1,300;1,700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Login PHP - Página de Cadastro</title>
  </head>

  <body>
    <main>
        <form action="" method="post" class="p-2">
            <label>Cadastre um nome de usuário:
                <input type="text" name="usuario" placeholder="Usuário">
            </label><br>
            <label>Crie uma senha:
                <input type="password" name="senha" placeholder="Senha">
            </label><br>
            <input type="submit" value="Cadastrar" class="btn btn-info">
        </form>
    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>

</html>