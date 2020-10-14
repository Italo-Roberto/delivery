<?php

include('../conexao.php');

$prato = $_POST['prato'];
$quantidade = $_POST['quantidade'];
$cliente = $_POST['cliente'];
// $endereco = $_POST['endereco'];
$valor = $_POST['valor'];
$entrega = $_POST['entrega'];

$consulta = "INSERT INTO pedidos (prato, quantidade, cliente, valor, entrega) VALUES ( '$prato', '$quantidade', '$cliente', '$valor', '$entrega')";
$resultado_consulta = mysqli_query($conexao, $consulta);

if ($resultado_consulta) {
    echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/delivery/secoes/pedidos.php'>
            <script type=\"text/javascript\">
                alert(\"Cliente cadastrado com Sucesso.\");
            </script>
        ";
} else{
    echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/delivery/secoes/pedidos.php'>
            <script type=\"text/javascript\">
                alert(\"Cliente não cadastrado! Verifique se faltou algum campo.\");
            </script>
        ";
}


?>