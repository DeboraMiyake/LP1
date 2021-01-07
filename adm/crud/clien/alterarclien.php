<?php
    include_once '../../../conexao.php';

    $codigo = $_POST["codigo"];
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $cpf = $_POST["cpf"];
    $telefone = $_POST["telefone"];
    $dtnasc = $_POST["dtnasc"];
    $sexo = $_POST["sexo"];
    $endereco = $_POST["endereco"];
    $numero = $_POST["numero"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $uf = $_POST["uf"];

    $alterar = "
        update tbcliente set
        nome = '$nome',
        sobrenome = '$sobrenome',
        cpf = '$cpf',
        telefone = '$telefone',
        dtnasc = '$dtnasc',
        sexo = '$sexo',
        endereco = '$endereco',
        numero = '$numero',
        bairro = '$bairro',
        cidade = '$cidade',
        uf = '$uf'
        where 
        codigo = '$codigo';
    ";

    $executar = mysqli_query($conn,$alterar);
    if($alterar){
        echo "<script>
        alert('Dados alterados com sucesso!');
        window.location.href = 'listarclien.php'
        </script>";
    }
    else{
        echo "<script>
        alert('Dados não alterados! Tente Novamente!');
        window.location.href = 'listaclien.php'
        </script>";
    }
?>