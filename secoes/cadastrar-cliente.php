<?php

include('../conexao.php');

$nome = $_POST['nome'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

$consulta = "INSERT INTO clientes (nome, rua, numero, bairro, cidade, telefone, email) VALUES ( '$nome', '$rua', '$numero', '$bairro', '$cidade', '$telefone', '$email')";
$resultado_consulta = mysqli_query($conexao, $consulta);

if ($resultado_consulta) {
    echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/delivery/secoes/clientes.php'>
            <script type=\"text/javascript\">
                alert(\"Pedido cadastrado com Sucesso.\");
            </script>
        ";
} else{
    echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/delivery/secoes/clientes.php'>
            <script type=\"text/javascript\">
                alert(\"Pedido não cadastrado! Verifique se faltou algum campo.\");
            </script>
        ";
}


?>