<?php
    include_once '../../../conexao.php';

    $codigo = $_POST["codigo"];
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $cpf = $_POST["cpf"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"];
    $numero = $_POST["numero"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $uf = $_POST["uf"];
    $dtnasc = $_POST["dtnasc"];

    $alterar = "
        update tbfuncionario set
        nome = '$nome',
        sobrenome = '$sobrenome',
        cpf = '$cpf',
        telefone = '$telefone',
        endereco = '$endereco',
        numero = '$numero',
        bairro = '$bairro',
        cidade = '$cidade',
        uf = '$uf',
        dtnasc = '$dtnasc'
        where 
        codigo = '$codigo';
    ";

    $executar = mysqli_query($conn,$alterar);
    if($alterar){
        echo "<script>
        alert('Dados alterados com sucesso!');
        window.location.href = 'listarfunc.php'
        </script>";
    }
    else{
        echo "<script>
        alert('Dados não alterados! Tente Novamente!');
        window.location.href = 'listarfunc.php'
        </script>";
    }
?>