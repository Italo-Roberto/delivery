<?php
session_start();
include('conexao.php');

if (empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: http://localhost/delivery/');
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$consulta = "SELECT usuario_id, usuario FROM usuario WHERE usuario = '$usuario' and senha = md5('$senha') ";
$resultado_consulta = mysqli_query($conexao, $consulta);

//Verificando existência de usuário e senha de acordo com o digitado nos campos
$linha = mysqli_num_rows($resultado_consulta);

//Criando sessão e redirecionando para página de acesso
if ($linha == 1) {
    $_SESSION['usuario'] = $usuario;
    header('Location: http://localhost/delivery/secoes/dashboard.php');
    exit();
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: http://localhost/delivery/index.php');
    exit();
}

?>