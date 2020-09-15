<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,400;0,700;1,300;1,700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Delivery Free - Login</title>
  </head>

  <body>
    <main id="principal">
        <form action="login.php" method="post" class="container login shadow-sm">
          <img src="img/logo.png" class="logo" alt="Delivery Free">
          <div class="form-group">
            <label>Login: </label>
            <input type="text" name="usuario" placeholder="Usuário">
          </div>
          <div class="form-group">
            <label>Senha: </label>
            <input type="password" name="senha" placeholder="Senha">
          </div>
            
            <a href="cadastro.php">Ainda não tem cadastro? Cadastre-se aqui!</a><br>
            <input type="submit" value="Entrar" class="btn btn-danger">
        </form>
    </main>
    <footer id="rodape">
      <? echo 'Todos o direitos reservados &copy ' . date('Y') . ' - Desenvolvido por <a href="https://sitesaqui.com.br" target="_blank">Sites Aqui</a>'?>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>

</html>