<?php

session_start();

//Se não existir sessão de usuário, voltar a index
if (!$_SESSION['usuario']) {
    header('Location: http://localhost/delivery/index.php');
    exit();
}

?>