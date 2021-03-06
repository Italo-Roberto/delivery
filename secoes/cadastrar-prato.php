<?php

include('../conexao.php');

$foto = ($_FILES['foto']);
$prato = $_POST['prato'];
$ingredientes = $_POST['ingredientes'];
$valor = $_POST['valor'];

//Pasta onde o arquivo vai ser salvo
$_UP['pasta'] = '../img/pratos/';

//Tamanho máximo do arquivo em Bytes
$_UP['tamanho'] = 1024*1024*100; //5mb

//Array com a extensões permitidas
$_UP['extensoes'] = array('png', 'jpg', 'jpeg', 'gif', 'svg');

//Renomeiar
$_UP['renomeia'] = false;

//Array com os tipos de erros de upload do PHP
$_UP['erros'][0] = 'Não houve erro';
$_UP['erros'][1] = 'O arquivo no upload é maior que o limite do Banco de Dados';
$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especificado no HTML';
$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
$_UP['erros'][4] = 'Não foi feito o upload do arquivo';

//Verifica se houve algum erro com o upload. Sem sim, exibe a mensagem do erro
if($_FILES['foto']['error'] != 0){
    die("Não foi possivel fazer o upload, erro: <br />". $_UP['erros'][$_FILES['foto']['error']]);
    exit; //Para a execução do script
}

//Faz a verificação da extensao do arquivo
$extensao = strtolower(end(explode('.', $_FILES['foto']['name'])));
if(array_search($extensao, $_UP['extensoes'])=== false){
    echo "
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/delivery/secoes/pratos.php'>
        <script type=\"text/javascript\">
            alert(\"A imagem não foi cadastrada extesão inválida.\");
        </script>
    ";
}

//Faz a verificação do tamanho do arquivo
else if ($_UP['tamanho'] < $_FILES['foto']['size']){
    echo "
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/delivery/secoes/pratos.php'>
        <script type=\"text/javascript\">
            alert(\"Arquivo muito grande.\");
        </script>
    ";
}

//O arquivo passou em todas as verificações, hora de tentar move-lo para a pasta foto
else{
    //Primeiro verifica se deve trocar o nome do arquivo
    if($_UP['renomeia'] == true){
        //Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
        $nome_final = time().'.jpg';
    }else{
        //mantem o nome original do arquivo
        $nome_final = $_FILES['foto']['name'];
    }
    //Verificar se é possivel mover o arquivo para a pasta escolhida
    if(move_uploaded_file($_FILES['foto']['tmp_name'], $_UP['pasta']. $nome_final)){
        //Upload efetuado com sucesso, exibe a mensagem
        $query = mysqli_query($conexao, "INSERT INTO pratos (nome_imagem, prato, ingredientes, valor) VALUES ('$nome_final', '$prato', '$ingredientes', '$valor')");
        echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/delivery/secoes/pratos.php'>
            <script type=\"text/javascript\">
                alert(\"Informações cadastradas com Sucesso.\");
            </script>
        ";
    }else{
        //Upload não efetuado com sucesso, exibe a mensagem
        echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/delivery/secoes/pratos.php'>
            <script type=\"text/javascript\">
                alert(\"Imagem não foi cadastrada com Sucesso.\");
            </script>
        ";
    }
}

?>